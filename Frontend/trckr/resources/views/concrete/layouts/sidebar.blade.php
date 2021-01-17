<div class="rd-navbar-sidebar scroller scroller-vertical">
    <div class="rd-navbar-sidebar-panel">
        <div>
            <div class="group-15">
                <div class="rd-navbar-brand"><a href="{{ url('dashboard') }}"><img src="{{ asset('images/hustle_logo_white.png') }}" alt="" class="white_logo" /></a></div>
                <div class="rd-navbar-sidebar-search">
                    <input class="form-control" type="text" placeholder="Search"/>
                </div>
            </div>
        </div>
        <button class="btn btn-navbar-panel rd-navbar-sidebar-toggle" data-navigation-switch="data-navigation-switch"><span class="fa-bars"></span></button>
    </div>
    <ul class="rd-navbar-nav">
        <li class="rd-navbar-nav-item">
            <div class="rd-navbar-title"><span class="rd-navbar-title-icon"><span class="fa-ellipsis-h"></span></span><span class="rd-navbar-title-text">Menu</span></div>
        </li>
        <li class="rd-navbar-nav-item {{ Request::is('dashboard')? 'active' : '' }}">
            <a class="rd-navbar-link" href="{{ url('dashboard') }}">
                <span class="rd-navbar-icon fa-home"></span><span class="rd-navbar-link-text">Dashboard</span>
            </a>
        </li>
        <li class="rd-navbar-nav-item {{ Request::is('respondent/*')? 'active' : '' }}">
            <a class="rd-navbar-link" href="{{ url('respondent') }}">
                <span class="rd-navbar-icon mdi-account-star"></span><span class="rd-navbar-link-text">Respondents</span>
            </a>
        </li>
        <li class="rd-navbar-nav-item {{ Request::is('payout/*')? 'active' : '' }}">
            <a class="rd-navbar-link" href="{{ url('payout') }}">
                <span class="rd-navbar-icon mdi-coin"></span><span class="rd-navbar-link-text">Payouts</span>
            </a>
        </li>
        <li class="rd-navbar-nav-item {{ Request::is('m/branches') || Request::is('m/branch/*')? 'active' : '' }}">
            <a class="rd-navbar-link" href="{{ url('m/branches') }}">
                <span class="rd-navbar-icon mdi-sitemap"></span><span class="rd-navbar-link-text">Branches</span>
            </a>
        </li>
        <li class="rd-navbar-nav-item {{ Request::is('task/*')? 'active' : '' }}">
            <a class="rd-navbar-link" href="{{ url('task/view') }}">
                <span class="rd-navbar-icon fa-columns"></span><span class="rd-navbar-link-text">Tasks</span>
            </a>
        </li>
        <li class="rd-navbar-nav-item {{ Request::is('campaign/*')? 'active' : '' }}">
            <a class="rd-navbar-link" href="{{ url('campaign/view') }}">
                <span class="rd-navbar-icon fa-star"></span><span class="rd-navbar-link-text">Campaigns</span>
            </a>
        </li>
        <li class="rd-navbar-nav-item {{ Request::is('ticket/*')? 'active' : '' }}">
            <a class="rd-navbar-link" href="{{ url('ticket/view') }}"><span class="rd-navbar-icon fa-server"></span>Ticket Management</a>
        </li>
    </ul>
</div>