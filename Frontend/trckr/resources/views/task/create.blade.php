@extends('adminlte::page')

@section('title', 'Trckr | Create New Task')

@section('content_header')`
    <h1>Create New Task</h1>
@stop

@section('content')
@section('plugins.JqueryUI', true)
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header" style="display:auto;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <p>Create Task</p>

    <div class="card">
        <form class="form-vertical" id="create_task" enctype="multipart/form-data">
            <div class="card-body">           
                <input type="hidden" name="_token" value="{{ csrf_token() }}">                
                
                <div class="form-group row">
                    <label for="company_name" class="col-sm-2 col-form-label">Task Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input_task_name" name="task_name" value="" placeholder="Enter Task Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="company_name" class="col-sm-2 col-form-label">Task Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input_task_description" name="task_description" value="" placeholder="Enter Task Description">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="company_name" class="col-sm-2 col-form-label">Subject Level</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input_subject_level" name="subject_level" value="" placeholder="Enter Subject Level">
                    </div>
                </div>
                <!--
                <div class="form-group row">
                    <label for="company_name" class="col-sm-2 col-form-label">Data Source / Data Type</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="data_source" style="width: 100%;">
                            <option value="">Select One</option>
                            @foreach ($task_config as $t)
                            <option value="{{$t['data_source']}}-{{$t['data_type']}}">{{$t['data_source']}} - {{$t['data_type']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                -->
                <div class="form-group row">
                    <label for="company_name" class="col-sm-2 col-form-label">Task Classification</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="task_classification_id" style="width: 100%;">
                            <option value="">Select One</option>
                            @foreach ($task_classification as $ta)
                            <option value="{{$ta->task_classification_id}}">{{$ta->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="company_name" class="col-sm-2 col-form-label">Banner Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="banner_image" accept="image/*" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>

                <div class="build-wrap"></div>
                
            </div>
            <div class="card-footer">
                <div class="btn-group float-lg-right" role="group" aria-label="Basic example">
                    <button type="submit" class="btn btn-block btn-primary btn-lg pull-right" id="submit">Save Details</button>  
                    <button type="button" class="btn btn-danger btn-lg pull-right" id="back">Back</button>
                </div>
            </div>
        </form>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script type="text/javascript" src="/vendor/form-builder/form-builder.min.js"></script>
    <script type="text/javascript" src="/vendor/form-builder/form-render.min.js"></script>
    <script type="text/javascript">
        
        $(document).ready(function (e) { 

            let options = {
                fields:[{
                    label: 'True or False',
                    className: 'true_or_false',
                    placeholder: 'True or False',
                    type: 'radio-group',
                    subType: 'true-or-false',
                    values: [{
                        label: 'True',
                        value: 'tof-' + Math.floor((Math.random() * 9999) + 1),
                        }, {
                        label: 'False',
                        value: 'tof-' + Math.floor((Math.random() * 9999) + 1),
                    }],
                    icon: '🌟',
                },{
                    label: 'Take a Photo',
                    className: 'PHOTO',
                    placeholder: 'Take a Photo',
                    type: 'file',
                    icon: '🌟',
                },{
                    label: 'Integer',
                    className: 'INTEGER',
                    placeholder: 'Integer',
                    type: 'number',
                    icon: '🌟',
                },{
                    label: 'Checkbox',
                    className: 'CHECKBOX',
                    placeholder: 'Checkbox',
                    type: 'checkbox-group',
                    icon: '🌟',
                },{
                    label: 'Single Select Dropdown',
                    className: 'SINGLE SELECT DROPDOWN',
                    placeholder: 'Single Select Dropdown',
                    type: 'select',
                    icon: '🌟',
                },{
                    label: 'Calculated Value',
                    className: 'CALCULATED VALUE',
                    placeholder: 'Calculated Value',
                    type: 'number',
                    icon: '🌟',
                },{
                    label: 'Amount',
                    className: 'CURRENCY',
                    placeholder: 'Amount',
                    type: 'number',
                    icon: '🌟',
                },{
                    label: 'Text',
                    className: 'TEXT',
                    placeholder: 'Text',
                    type: 'textarea',
                    icon: '🌟',
                },{
                    label: 'Date',
                    className: 'DATEFIELD',
                    placeholder: 'date',
                    type: 'date',
                    icon: '🌟',
                },{
                    label: 'Float',
                    className: 'FLOAT',
                    placeholder: 'float',
                    type: 'number',
                    icon: '🌟',
                }
                ],
                //todo: remove view on non-essential control items
                controlOrder: [
                    'radio-group'
                ]
            };

            //$('.build-wrap').formBuilder(options);
            var formBuilder = $('.build-wrap').formBuilder(options);

            $('#create_task').submit(function(e) {
                e.preventDefault();
                var myFormBuilder = formBuilder.actions.getData('json', true);
                

                var formData = new FormData(this);

                //formData.append('data_type', "custom");
                formData.append('form_builder', myFormBuilder);

                $.ajax({
                    type:'POST',
                    url: "/task/create",
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $(".modal-title").text("Task Creation Successful!");
                        $(".modal-body").html("<p>" + data.message + "</p>");
                        $("#myModal").modal('show');
                    },
                    error: function(data){
                        $(".modal-title").text("Task Creation Failed!");
                        //$(".modal-body").html("<p>" + data.responseText + "</p>");
                        $(".modal-body").html("<p>" + data.responseJSON.message + "</p>");
                        $("#myModal").modal('show');
                    }
                });
            });

            $("#back").click(function(){
                window.location.href = "/task/view";
            });
        });
    </script>
@stop