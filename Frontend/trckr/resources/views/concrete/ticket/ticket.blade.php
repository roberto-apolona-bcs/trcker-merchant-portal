@extends('concrete.layouts.main')

@section('breadcrumbs_pull_right')
    <!--<a class="btn btn-outline-primary" href="{{ url('/ticket/export_csv') }}"><span class="fa-cloud-download"></span><span class="pl-2">Download Report</span></a>-->

@endsection

@section('tableFilters')
    <div class="row">
        <div class="col-sm-2">
            <input class="form-control" id="name" type="text" value="{{ $filter['name'] }}" placeholder="Respondent">
        </div>
        <!--<div class="col-sm-2">
            <select class="form-control" name="campaign_id" id="campaign_id" style="">
                <option>--Campaign--</option>
            </select>
        </div>-->
        <div class="col-sm-3">
            <select class="form-control" id="status">
                <option value="">--Status--</option>
                <option {{ ($filter['status']=="PENDING")? 'selected' : '' }} value="PENDING">PENDING</option>
                <option {{ ($filter['status']=="APPROVED")? 'selected' : '' }} value="APPROVED">APPROVED</option>
                <option {{ ($filter['status']=="REJECTED")? 'selected' : '' }} value="REJECTED">REJECTED</option>
                <option {{ ($filter['status']=="RESUBMISSION")? 'selected' : '' }} value="RESUBMISSION">RESUBMISSION</option>
            </select>
        </div>
        <div class="col-sm-3">
            <div class="input-group form-group">
                <div class="input-group-prepend"><span class="input-group-text"><span class="fa-calendar"></span></span></div>
                <input class="form-control" id="daterange" type="text" value="{{ $filter['daterange'] }}" placeholder="Date Range">
                <input type="text" name="daterange" style="display: none">
            </div>
        </div>
        <div class="col-sm-2">
            <button type="button" id="searchBtn" class="btn btn-primary"><span class="fa-search"></span></button>
            <button type="button" id="downloadBtn" class="btn btn-primary"><span class="fa-cloud-download"></span></button>
        </div>
    </div>
@endsection

@section('content')
    <form method="post" action="{{ url('ticket/bulk-action') }}" id="tableList">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="panel">
            <div class="panel-header">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel-title"><span class="panel-icon fa-ticket"></span> <span>Tickets</span></div>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" value="reject" class="btn btn-danger btn-sm pull-right approve-reject"><span class="fa-ban"></span><span class="pl-2">Reject</span></button>
                        <button type="button" value="approve" class="btn btn-light btn-sm pull-right approve-reject"><span class="fa-check"></span><span class="pl-2">Approve</span></button>
                        <input id="ticket-status" name="status" type="hidden" />
                    </div>
                </div>
            </div>
            <div class="panel-menu">
                @include('concrete.layouts.filters')  
            </div>
            <div class="panel-body p-0">
                <div class="table-responsive scroller scroller-horizontal py-3">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="no-sort">
                                <div class="custom-control custom-checkbox custom-checkbox-light">
                                    <input class="custom-control-input" type="checkbox" id="selectAll">
                                    <label class="custom-control-label" for="selectAll"></label>
                                </div>
                            </th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Device ID</th>
                            <th>Campaign Name</th>
                            <th>Task Name</th>
                            <th>Date Submitted</th>
                            <th>Status</th>
                            <th>Rewards</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tickets as $t)
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox custom-checkbox-light">
                                        <input class="custom-control-input" type="checkbox" name="tickets[]" id="{{ $t->task_ticket_id }}" value="{{ $t->task_ticket_id }}">
                                        <label class="custom-control-label" for="{{ $t->task_ticket_id }}"></label>
                                    </div>
                                </td>
                                <td>{{ $t->user_detail->first_name . " " . $t->user_detail->last_name }}</td>
                                <td>{{ $t->user_detail->email }}</td>
                                <td>{{ $t->device_id}}</td>
                                <td>{{ $t->campaign->campaign_name }}</td>
                                <td>{{ $t->task_name }}</td>
                                <td>{{ date('Y-m-d', strtotime($t->createdAt)) }}</td>
                                <td>
                                    <div class="text-{{ config('concreteadmin')['ticket_status'][$t->approval_status] }}">
                                        {!! ($t->awarded)? '<div class="badge badge-secondary">AWARDED</div>' : $t->approval_status !!}
                                    </div>
                                    @if($t->approval_status=="REJECTED")
                                    <div>{{ $t->rejection_reason }}</div>
                                    @endif
                                    
                                </td>
                                <td>
                                    {{ $t->reward_amount }}
                                </td>

                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('ticket/view/' . $t->campaign_id . "/" . $t->task_ticket_id ) }}"><button class="btn btn-light" type="button"><span class="fa-eye"></span></button></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @if(count($tickets) < 1)
                        <tr><td colspan="9"><center><strong>No available ticket!</strong></center></td></tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel-footer"> 
                @include('concrete.layouts.pagination')
            </div>
        </div>
    </form>
@stop

@section('js')
    <script type="text/javascript">
        $(document).ready(function (e) {

setTimeout(function () {
  $('input[id="daterange"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[id="daterange"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[id="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });
}, 2000);

            $('select.pagination_current_page').click(function(e){
                let url = "{{ url('ticket/view') }}?";
                let params = { 
                    daterange : $('#daterange').val(),
                    status : $('#status').val(),
                    campaign_id : $('#campaign_id').val(),
                    name : $('#name').val(),
                    page : $(this).val()
                };
                let str = jQuery.param( params );
                window.location = url + str;
            });


            $('#searchBtn').click(function(e){
                let url = "{{ url('ticket/view') }}?";
                let params = { 
                    daterange : $('#daterange').val(),
                    status : $('#status').val(),
                    campaign_id : $('#campaign_id').val(),
                    name : $('#name').val(),
                };
                let str = jQuery.param( params );
                window.location = url + str;
            });

            $('#downloadBtn').click(function(e){
                let url = "{{ url('/ticket/export_csv') }}?";
                let params = { 
                    daterange : $('#daterange').val(),
                    status : $('#status').val(),
                    campaign_id : $('#campaign_id').val(),
                    name : $('#name').val(),
                };
                let str = jQuery.param( params );
                window.location = url + str;
            });


            $('#selectAll').click(function(e){
                let table= $(e.target).closest('table');
                $('td input:checkbox',table).prop('checked',this.checked);
            });

            $('.approve-reject').click(function(e){
                let val = $(this).attr('value');
                $('#ticket-status').val(val);

                if (confirm('Are you sure you want to ' + val + ' these items ?')) {
                    $('#tableList').submit();
                }
            });

            $("#export").click(function(){
                window.location.href = "{{url('/ticket/export_csv')}}";
            });

            $('#myModal').on('hidden.bs.modal', function (e) {
                window.location.href = "{{url('/ticket/view')}}";
            });

            $('.view').click(function(){
                var ticket_id = $(this).siblings('.view_id').val();

                window.location.href = "{{url('/ticket/view_ticket?ticket_id=')}}" + ticket_id;
            });

            $("#approve").click(function(){
                $("#action").val('approve');
            });

            $("#reject").click(function(){
                $("#action").val('reject');
            });

        });
    </script>
@stop
