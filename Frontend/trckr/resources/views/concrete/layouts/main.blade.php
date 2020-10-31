<!DOCTYPE html>
<html class="rd-navbar-sidebar-active page-small-footer" lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="components/base/base.css">
    <script src="components/base/script.js"></script>
</head>
<body>
<div class="page">
    <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar">
                <div class="rd-navbar-panel">
                    <div class="rd-navbar-panel-cell">
                        <button class="btn btn-navbar-panel rd-navbar-sidebar-toggle" data-navigation-switch="data-navigation-switch"><span class="fa-bars"></span></button>
                    </div>
                    <div class="rd-navbar-panel-cell rd-navbar-panel-cell-fullscreen">
                        <button class="btn btn-navbar-panel" data-fullscreen="html"><span class="fa-arrows-alt"></span></button>
                    </div>
                    <div class="rd-navbar-panel-cell rd-navbar-panel-cell-search">
                        <div class="rd-navbar-sidebar-search">
                            <input class="form-control" type="text" placeholder="Search"/>
                        </div>
                    </div>
                    <div class="rd-navbar-panel-center"></div>
                    <div class="rd-navbar-panel-cell">
                        <button class="btn btn-navbar-panel" data-multi-switch='{"targets":"#subpanel-chat","scope":"#subpanel-chat","isolate":"[data-multi-switch]"}'><span class="fa-comments"></span><span class="badge badge-danger">...</span></button>
                        <div class="rd-navbar-subpanel" id="subpanel-chat">
                            <div class="panel">
                                <div class="panel-header">
                                    <div class="panel-title"><span class="panel-icon fa-pencil"></span> <span>Chat widget</span>
                                    </div>
                                </div>
                                <div class="panel-body scroller scroller-vertical">
                                    <div class="media media-cloud group-10">
                                        <div class="media-item"><img src="images/users/user-02-50x50.jpg" width="50" height="50" alt=""/></div>
                                        <div class="media-body">
                                            <h4 class="media-heading offline">Sara Marshall <small>- 12:30am</small>
                                            </h4>
                                            <div class="media-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>
                                        </div>
                                    </div>
                                    <div class="media media-cloud flex-row-reverse group-10">
                                        <div class="media-item"><img src="images/users/user-03-50x50.jpg" width="50" height="50" alt=""/></div>
                                        <div class="media-body media-body-right-caret">
                                            <h4 class="media-heading online">Tom Jorgensen <small>- 12:30am</small>
                                            </h4>
                                            <div class="media-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                                        </div>
                                    </div>
                                    <div class="media media-cloud group-10">
                                        <div class="media-item"><img src="images/users/user-02-50x50.jpg" width="50" height="50" alt=""/></div>
                                        <div class="media-body">
                                            <h4 class="media-heading offline">Sara Marshall <small>- 12:30am</small>
                                            </h4>
                                            <div class="media-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>
                                        </div>
                                    </div>
                                    <div class="media media-cloud flex-row-reverse group-10">
                                        <div class="media-item"><img src="images/users/user-03-50x50.jpg" width="50" height="50" alt=""/></div>
                                        <div class="media-body media-body-right-caret">
                                            <h4 class="media-heading online">Tom Jorgensen <small>- 12:30am</small>
                                            </h4>
                                            <div class="media-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="input-group form-group">
                                        <input class="form-control" type="text" placeholder="Enter your message here"/>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary">Send </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-panel-cell">
                        <button class="btn btn-navbar-panel" data-multi-switch='{"targets":"#subpanel-notifications","scope":"#subpanel-notifications","isolate":"[data-multi-switch]"}'><span class="fa-bell"></span><span class="badge badge-warning">2</span></button>
                        <div class="rd-navbar-subpanel" id="subpanel-notifications">
                            <div class="panel">
                                <div class="panel-header">
                                    <div class="panel-title"><span class="panel-icon fa-bell"></span><span>Notifications</span></div>
                                </div>
                                <div class="panel-body p-2 scroller scroller-vertical">
                                    <div class="group-5">
                                        <div class="alert alert-dismissible alert-primary alert-sm" role="alert"><span class="alert-icon fa-telegram"></span><span>Message</span>
                                            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                                        </div>
                                        <div class="alert alert-dismissible alert-warning alert-sm" role="alert"><span class="alert-icon fa-warning"></span><span>Warning</span>
                                            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                                        </div>
                                        <div class="alert alert-dismissible alert-danger alert-sm" role="alert"><span class="alert-icon fa-remove"></span><span>Error</span>
                                            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                                        </div>
                                        <div class="alert alert-dismissible alert-success alert-sm" role="alert"><span class="alert-icon fa-thumbs-up"></span><span>Success</span>
                                            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer p-2"><a class="btn btn-primary btn-sm" href="alerts.html">See more</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-panel-cell">
                        <button class="btn btn-navbar-panel dropdown-toggle" data-toggle="dropdown"><span class="fa-flag"></span></button>
                        <div class="dropdown-menu"><a class="dropdown-item d-flex align-items-center" href="#"><img class="pr-1" src="images/image-07-14x11.jpg" width="14" height="11" alt=""/><span>France</span></a><a class="dropdown-item d-flex align-items-center" href="#"><img class="pr-1" src="images/image-08-14x11.jpg" width="14" height="11" alt=""/><span>Germany</span></a><a class="dropdown-item d-flex align-items-center" href="#"><img class="pr-1" src="images/image-10-14x11.jpg" width="14" height="11" alt=""/><span>Turkey</span></a><a class="dropdown-item d-flex align-items-center" href="#"><img class="pr-1" src="images/image-11-14x11.jpg" width="14" height="11" alt=""/><span>USA</span></a></div>
                    </div>
                    <div class="rd-navbar-panel-cell rd-navbar-panel-cell-user">
                        <div class="btn btn-navbar-panel" data-multi-switch='{"targets":"#subpanel-user","scope":"#subpanel-user","isolate":"[data-multi-switch]"}'>
                            <div class="media align-items-center"><img class="rounded-circle" src="images/users/user-03-50x50.jpg" width="30" height="30" alt=""/>
                                <div class="media-body ml-2">
                                    <p>John Doe</p>
                                </div>
                            </div>
                        </div>
                        <div class="rd-navbar-subpanel" id="subpanel-user">
                            <div class="panel">
                                <div class="panel-header">
                                    <div class="group-5 d-flex flex-wrap align-items-center"><img class="rounded mr-2" src="images/users/user-03-50x50.jpg" width="50" height="50" alt=""/>
                                        <div class="panel-title">John Doe</div>
                                    </div>
                                </div>
                                <div class="panel-body p-0 scroller scroller-vertical">
                                    <div class="list-group"><a class="list-group-item rounded-0" href="#">
                                            <div class="media align-items-center">
                                                <div class="pr-2"><span class="fa-user"></span></div>
                                                <div class="media-body">
                                                    <h5>My Profile</h5>
                                                </div>
                                            </div></a><a class="list-group-item rounded-0" href="#">
                                            <div class="media align-items-center">
                                                <div class="pr-2"><span class="fa-envelope-o"></span></div>
                                                <div class="media-body">
                                                    <h5>My Messages</h5>
                                                </div>
                                                <div class="badge badge-warning">12</div>
                                            </div></a><a class="list-group-item rounded-0" href="#">
                                            <div class="media align-items-center">
                                                <div class="pr-2"><span class="fa-rocket"></span></div>
                                                <div class="media-body">
                                                    <h5>My Activities</h5>
                                                </div>
                                            </div></a><a class="list-group-item rounded-0" href="#">
                                            <div class="media align-items-center">
                                                <div class="pr-2"><span class="fa-desktop"></span></div>
                                                <div class="media-body">
                                                    <h5>My Tasks</h5>
                                                </div>
                                                <div class="badge badge-success">05</div>
                                            </div></a><a class="list-group-item rounded-0" href="#">
                                            <div class="media align-items-center">
                                                <div class="pr-2"><span class="fa-line-chart"></span></div>
                                                <div class="media-body">
                                                    <h5>Billing</h5>
                                                </div>
                                            </div></a></div>
                                </div>
                                <div class="panel-footer p-2">
                                    <div class="d-flex align-items-center justify-content-between"><a class="btn btn-danger btn-sm" href="#">Sing Out</a><a class="btn btn-sm btn-light" href="#">Upgrade Plan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-panel-cell">
                        <button class="btn btn-navbar-panel" data-multi-switch='{"targets":".sidebar","scope":".sidebar","isolate":"[data-multi-switch]"}'><span class="fa-sliders"></span></button>
                    </div>
                </div>
                <div class="rd-navbar-sidebar scroller scroller-vertical">
                    <div class="rd-navbar-sidebar-panel">
                        <div>
                            <div class="group-15">
                                <div class="rd-navbar-brand"><a href="index.html"><img src="images/logo-1-white-230x35.png" alt=""/></a></div>
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
                        <li class="rd-navbar-nav-item active"><a class="rd-navbar-link" href="index.html"><span class="rd-navbar-icon fa-home"></span><span class="rd-navbar-link-text">Dashboard</span></a>
                        </li>
                        <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="calendar.html"><span class="rd-navbar-icon fa-calendar"></span><span class="rd-navbar-link-text">Calendar</span></a>
                        </li>
                        <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="documentation.html"><span class="rd-navbar-icon fa-book"></span><span class="rd-navbar-link-text">Documentation</span></a>
                            <ul class="rd-navbar-dropdown">
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#bootstrap-components">Bootstrap Components</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#button">Button</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#badge">Badge</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#code">Code</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#media">Media Object</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#card">Card</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#table">Table</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#progress">Progress</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#close">Close</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#pagination">Pagination</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#alert">Alert</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#dropdown">Dropdown</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#nav">Nav</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#tooltip">Tooltip</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#modal">Modal</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#jumbotron">Jumbotron</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#input">Input</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#plugins">Plugins</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#Nprogress">Nprogress</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#highlight">Highlight.js</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#dual-listbox">Dual Listbox</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#maxlength">Bootstrap Maxlength</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#typeahead">Typeahead.js</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#select2">Select2</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#spinner">jQuery UI Spinner</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#time-spinner">Time Spinner</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#daterangepiker">Date Range Picker</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#datetimepicker">Bootstrap Date/Timepicker</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#tag-manager">Tags Manager</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#colorpicker">Bootstrap Colorpicker</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#maskedinput">jQuery Masked Input</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#ckeditor">CKeditor</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#summernote">Summernote</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#markdown">Markdown.js</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#nestable">Nestable jQuery Plugin</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#jstree">jsTree</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#cropper">Cropper.js</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#fileupload">Tower File Input</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#easyzoom">EasyZoom</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#xzoom">xZoom</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#slick">Slick Slider</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#dropzone">DropzoneJS</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#pnotify">PNotify</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#driver">Driver.js</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#countdown">αCountdown</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#progress-circle">αCounter &amp; αProgressCircle</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#particles">Particles.js</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#lightgallery">Lightgallery</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#jvectormap">jVectorMap</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#flotchart">Flot</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#rd-navbar">RD Navbar</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#highcharts">Highcharts</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="documentation.html#multiswitch">MultiSwitch</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="rd-navbar-nav-item">
                            <div class="rd-navbar-title"><span class="rd-navbar-title-icon"><span class="fa-ellipsis-h"></span></span><span class="rd-navbar-title-text">Theme tools</span></div>
                        </li>
                        <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-fire"></span><span class="rd-navbar-link-text">Admin plugins</span></a>
                            <ul class="rd-navbar-dropdown">
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="admin-panels.html"><span class="rd-navbar-icon fa-book"></span>Admin panels</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="admin-modals.html"><span class="rd-navbar-icon fa-window-maximize"></span>Admin modals</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="admin-dock.html"><span class="rd-navbar-icon fa-wpforms"></span>Admin Dock</a>
                                </li>
                            </ul>
                        </li>
                        <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-columns"></span><span class="rd-navbar-link-text">Admin layouts</span></a>
                            <ul class="rd-navbar-dropdown">
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="navbar.html"><span class="rd-navbar-icon mdi-file-presentation-box"></span>Navbar</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon mdi-file-presentation-box"></span>Topbar</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="breadcrumbs.html">Breadcrumbs</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="topbar-menu.html">Topbar Menu</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon mdi-file-presentation-box"></span>Content Body</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="blank-starter.html">Blank Starter</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="jumbotron.html">Jumbotron</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="content-tabs.html">Content Tabs</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="rd-navbar-nav-item">
                            <div class="rd-navbar-title"><span class="rd-navbar-title-icon"><span class="fa-ellipsis-h"></span></span><span class="rd-navbar-title-text">Systems</span></div>
                        </li>
                        <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-diamond"></span><span class="rd-navbar-link-text">Information Panels</span></a>
                            <ul class="rd-navbar-dropdown">
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="tile-widgets.html"><span class="rd-navbar-icon fa-cube"></span>Tile Widgets</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="panel-widgets.html"><span class="rd-navbar-icon fa-desktop"></span>Panel Widgets</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="admin-widgets.html"><span class="rd-navbar-icon fa-dot-circle-o"></span>Admin Widgets</a>
                                </li>
                            </ul>
                        </li>
                        <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-shopping-cart"></span><span class="rd-navbar-link-text">Ecommerce</span></a>
                            <ul class="rd-navbar-dropdown">
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="ecommerce-dashboard.html"><span class="rd-navbar-icon fa-shopping-cart"></span>Ecommerce dashboard</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="products.html"><span class="rd-navbar-icon fa-tags"></span>Products</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="orders.html"><span class="rd-navbar-icon fa-money"></span>Orders</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="customers.html"><span class="rd-navbar-icon fa-users"></span>Customers</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="store-settings.html"><span class="rd-navbar-icon fa-cogs"></span>Store Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="rd-navbar-nav-item">
                            <div class="rd-navbar-title"><span class="rd-navbar-title-icon"><span class="fa-ellipsis-h"></span></span><span class="rd-navbar-title-text">Elements</span></div>
                        </li>
                        <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-bell"></span><span class="rd-navbar-link-text">UI Elements</span></a>
                            <ul class="rd-navbar-dropdown">
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="alerts.html"><span class="rd-navbar-icon fa-exclamation-triangle"></span>Alerts</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="animations.html"><span class="rd-navbar-icon fa-spinner"></span>Animations</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="buttons.html"><span class="rd-navbar-icon fa-square-o"></span>Buttons</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="typography.html"><span class="rd-navbar-icon fa-text-width"></span>Typography</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="panel.html"><span class="rd-navbar-icon fa-archive"></span>Panel</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="progress-bars.html"><span class="rd-navbar-icon fa-archive"></span>Progress Bars</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="tabs.html"><span class="rd-navbar-icon fa-toggle-off"></span>Tabs</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="icons.html"><span class="rd-navbar-icon fa-puzzle-piece"></span>Icons</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="grid.html"><span class="rd-navbar-icon fa-th-large"></span>Grid</a>
                                </li>
                            </ul>
                        </li>
                        <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-hdd-o"></span><span class="rd-navbar-link-text">Form Elements</span></a>
                            <ul class="rd-navbar-dropdown">
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="basic-inputs.html"><span class="rd-navbar-icon fa-magic"></span>Basic Inputs</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="plugin-inputs.html"><span class="rd-navbar-icon fa-bell-o"></span>Plugin Inputs</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="editors.html"><span class="rd-navbar-icon fa-clipboard"></span>Editors</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="treeview.html"><span class="rd-navbar-icon fa-tree"></span>Treeview</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="nestable.html"><span class="rd-navbar-icon fa-tasks"></span>Nestable</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="image-tools.html"><span class="rd-navbar-icon fa-image"></span>Image tools</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="uploaders.html"><span class="rd-navbar-icon fa-cloud-upload"></span>Uploaders</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="notifications.html"><span class="rd-navbar-icon fa-bell-o"></span>Notifications</a>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="content-sliders.html"><span class="rd-navbar-icon fa-exchange"></span>Content Sliders</a>
                                </li>
                            </ul>
                        </li>
                        <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-code"></span><span class="rd-navbar-link-text">Plugins</span></a>
                            <ul class="rd-navbar-dropdown">
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-globe"></span>Maps</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="google-maps.html">Google Maps</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="jvector-map.html">jVector Map</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-area-chart"></span>Charts</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="highcharts.html">Highcharts</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="flotcharts.html">Flotcharts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-table"></span>Tables</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="basic-tables.html">Basic Tables</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="data-tables.html">Data Tables</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="pricing-tables.html">Pricing Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-flask"></span>Misc</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="site-tour.html">Site Tour</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="session-timeout.html">Session Timeout</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="page-progress-loader.html">Page Progress Loader</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-file-o"></span><span class="rd-navbar-link-text">Pages</span></a>
                            <ul class="rd-navbar-dropdown">
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-cogs"></span>Utility</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="confirmation.html">Confirmation</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="login.html">Login</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="register.html">Register</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="screenlock.html">Screenlock</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="password-reset.html">Password Reset</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="coming-soon.html">Coming Soon</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="404.html">404</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="500.html">500</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="#"><span class="rd-navbar-icon fa-desktop"></span>Basic</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="search-results.html">Search Results</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="profile.html">Profile</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="timeline.html">Timeline</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="faq.html">FAQ</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="calendar.html">Calendar</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="messages.html">Messages</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="messages-compose.html">Messages Compose</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="gallery.html">Gallery</a>
                                        </li>
                                        <li class="rd-navbar-dropdown-item"><a class="rd-navbar-link" href="printable-invoice.html">Printable Invoice</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section class="topbar">
        <!-- Breadcrumbs-->
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item"><a class="breadcrumbs-link" href="index.html"><span class="breadcrumbs-icon fa-home"></span><span>Dashboard</span></a></li>
        </ul>
    </section>
    <section class="section-sm">
        <div class="container-fluid">
            <div class="row row-30">
                <div class="col-sm-6 col-md-4">
                    <div class="panel bg-info text-white">
                        <div class="panel-body">
                            <h1 class="mt-2">3,253</h1>
                            <h2 class="mt-1 text-uppercase">NEW ORDERS</h2>
                            <div class="highcharts-container" data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#fff&quot;],&quot;chart&quot;:{&quot;backgroundColor&quot;:&quot;transparent&quot;,&quot;marginTop&quot;:30,&quot;marginBottom&quot;:0,&quot;type&quot;:&quot;column&quot;,&quot;spacingLeft&quot;:0,&quot;spacingRight&quot;:0},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;title&quot;:{&quot;text&quot;:null},&quot;xAxis&quot;:{&quot;lineWidth&quot;:0,&quot;tickLength&quot;:0,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false}},&quot;yAxis&quot;:{&quot;max&quot;:200,&quot;lineWidth&quot;:0,&quot;gridLineWidth&quot;:0,&quot;lineColor&quot;:&quot;#EEE&quot;,&quot;gridLineColor&quot;:&quot;#EEE&quot;,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false,&quot;style&quot;:{&quot;fontWeight&quot;:&quot;400&quot;}}},&quot;tooltip&quot;:{&quot;headerFormat&quot;:&quot;&lt;table&gt;&quot;,&quot;pointFormat&quot;:&quot;&lt;tr&gt;&lt;td style=\&quot;padding:0\&quot;&gt;&lt;b&gt;{point.y}&lt;/b&gt;&lt;/td&gt;&lt;/tr&gt;&quot;,&quot;footerFormat&quot;:&quot;&lt;/table&gt;&quot;,&quot;shared&quot;:true,&quot;useHTML&quot;:true},&quot;plotOptions&quot;:{&quot;column&quot;:{&quot;colorByPoint&quot;:true},&quot;series&quot;:{&quot;groupPadding&quot;:0,&quot;pointPadding&quot;:0.2}},&quot;series&quot;:[{&quot;data&quot;:[120,140,130,170,180,100,60,110,200,180,160,100,110,160,180,170,160,150,130]}]}" style="height:240px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="panel bg-warning text-white">
                        <div class="panel-body">
                            <h1 class="mt-2">23,712</h1>
                            <h2 class="mt-1 text-uppercase">Total Gross Sales</h2>
                            <div class="highcharts-container" data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#fff&quot;],&quot;chart&quot;:{&quot;backgroundColor&quot;:&quot;transparent&quot;,&quot;marginTop&quot;:30,&quot;marginBottom&quot;:0,&quot;type&quot;:&quot;column&quot;,&quot;spacingLeft&quot;:0,&quot;spacingRight&quot;:0},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;title&quot;:{&quot;text&quot;:null},&quot;xAxis&quot;:{&quot;lineWidth&quot;:0,&quot;tickLength&quot;:0,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false}},&quot;yAxis&quot;:{&quot;max&quot;:200,&quot;lineWidth&quot;:0,&quot;gridLineWidth&quot;:0,&quot;lineColor&quot;:&quot;#EEE&quot;,&quot;gridLineColor&quot;:&quot;#EEE&quot;,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false,&quot;style&quot;:{&quot;fontWeight&quot;:&quot;400&quot;}}},&quot;tooltip&quot;:{&quot;headerFormat&quot;:&quot;&lt;table&gt;&quot;,&quot;pointFormat&quot;:&quot;&lt;tr&gt;&lt;td style=\&quot;padding:0\&quot;&gt;&lt;b&gt;{point.y}&lt;/b&gt;&lt;/td&gt;&lt;/tr&gt;&quot;,&quot;footerFormat&quot;:&quot;&lt;/table&gt;&quot;,&quot;shared&quot;:true,&quot;useHTML&quot;:true},&quot;plotOptions&quot;:{&quot;column&quot;:{&quot;colorByPoint&quot;:true},&quot;series&quot;:{&quot;groupPadding&quot;:0,&quot;pointPadding&quot;:0.2}},&quot;series&quot;:[{&quot;data&quot;:[110,200,180,160,100,110,160,180,170,160,150,130,120,140,130,170,180,100,60]}]}" style="height:240px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="panel bg-danger text-white">
                        <div class="panel-body">
                            <h1 class="mt-2">527</h1>
                            <h2 class="mt-1 text-uppercase">Pending shipments</h2>
                            <div class="highcharts-container" data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#fff&quot;],&quot;chart&quot;:{&quot;backgroundColor&quot;:&quot;transparent&quot;,&quot;marginTop&quot;:30,&quot;marginBottom&quot;:0,&quot;type&quot;:&quot;column&quot;,&quot;spacingLeft&quot;:0,&quot;spacingRight&quot;:0},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;title&quot;:{&quot;text&quot;:null},&quot;xAxis&quot;:{&quot;lineWidth&quot;:0,&quot;tickLength&quot;:0,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false}},&quot;yAxis&quot;:{&quot;max&quot;:100,&quot;lineWidth&quot;:0,&quot;gridLineWidth&quot;:0,&quot;lineColor&quot;:&quot;#EEE&quot;,&quot;gridLineColor&quot;:&quot;#EEE&quot;,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false,&quot;style&quot;:{&quot;fontWeight&quot;:&quot;400&quot;}}},&quot;tooltip&quot;:{&quot;headerFormat&quot;:&quot;&lt;table&gt;&quot;,&quot;pointFormat&quot;:&quot;&lt;tr&gt;&lt;td style=\&quot;padding:0\&quot;&gt;&lt;b&gt;{point.y}&lt;/b&gt;&lt;/td&gt;&lt;/tr&gt;&quot;,&quot;footerFormat&quot;:&quot;&lt;/table&gt;&quot;,&quot;shared&quot;:true,&quot;useHTML&quot;:true},&quot;plotOptions&quot;:{&quot;column&quot;:{&quot;colorByPoint&quot;:true},&quot;series&quot;:{&quot;groupPadding&quot;:0,&quot;pointPadding&quot;:0.2}},&quot;series&quot;:[{&quot;data&quot;:[20,40,30,70,80,30,20,10,30,80,60,40,50,60,80,70,60,50,30]}]}" style="height:240px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="panel admin-panel admin-panel panel-nav p-0" data-admin-panel='{"panelMenuClass":"px-3"}'>
                        <div class="panel-header d-flex align-items-center justify-content-between pr-3">
                            <ul class="nav nav-tabs scroller scroller-horizontal" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboardGraph1" role="tab" aria-controls="dashboardGraph1" aria-selected="true">User activity</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#dashboardGraph2" role="tab" aria-controls="dashboardGraph2" aria-selected="false">Popular items</a></li>
                            </ul>
                            <div class="admin-panel-buttons py-2 px-3">
                                <button class="admin-panel-button fa" title="color" data-panel="color"></button>
                                <button class="admin-panel-button fa" title="collapse" data-panel="collapse"></button>
                                <button class="admin-panel-button fa" title="fullscreen" data-panel="fullscreen"></button>
                                <button class="admin-panel-button fa" title="remove" data-panel="remove"></button>
                            </div>
                            <div class="admin-panel-switch fa-bars"></div>
                        </div>
                        <div class="panel-body p-0">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="dashboardGraph1" role="tabpanel">
                                    <div class="row no-gutters">
                                        <div class="col-md-8 col-lg-9">
                                            <div class="highcharts-container highcharts-container-lg" data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#afc1d9&quot;,&quot;#6e93ba&quot;,&quot;#36506D&quot;,&quot;#6e93ba&quot;],&quot;chart&quot;:{&quot;backgroundColor&quot;:&quot;transparent&quot;,&quot;type&quot;:&quot;areaspline&quot;,&quot;zoomType&quot;:&quot;x&quot;,&quot;panning&quot;:true,&quot;panKey&quot;:&quot;shift&quot;,&quot;marginTop&quot;:45,&quot;marginRight&quot;:0,&quot;spacingBottom&quot;:0,&quot;spacingTop&quot;:20,&quot;spacingLeft&quot;:0,&quot;spacingRight&quot;:0},&quot;title&quot;:{&quot;text&quot;:null},&quot;xAxis&quot;:{&quot;min&quot;:0,&quot;max&quot;:11,&quot;labels&quot;:{&quot;enabled&quot;:false},&quot;gridLineWidth&quot;:0,&quot;lineWidth&quot;:0,&quot;tickWidth&quot;:0,&quot;tickLength&quot;:0},&quot;yAxis&quot;:{&quot;labels&quot;:{&quot;enabled&quot;:false},&quot;gridLineWidth&quot;:0,&quot;lineWidth&quot;:0,&quot;tickWidth&quot;:0,&quot;tickLength&quot;:0,&quot;title&quot;:{&quot;text&quot;:null}},&quot;tooltip&quot;:{&quot;pointFormat&quot;:&quot;{series.name} produced &lt;b&gt;{point.y:,.0f}&lt;/b&gt;&lt;br/&gt;warheads in {point.x}&quot;},&quot;plotOptions&quot;:{&quot;area&quot;:{&quot;pointStart&quot;:1940,&quot;marker&quot;:{&quot;enabled&quot;:false,&quot;symbol&quot;:&quot;circle&quot;,&quot;radius&quot;:2,&quot;states&quot;:{&quot;hover&quot;:{&quot;enabled&quot;:true}}}},&quot;series&quot;:{&quot;marker&quot;:{&quot;enabled&quot;:false}}},&quot;legend&quot;:{&quot;enabled&quot;:true,&quot;floating&quot;:false,&quot;align&quot;:&quot;right&quot;,&quot;verticalAlign&quot;:&quot;top&quot;,&quot;x&quot;:-35,&quot;symbolHeight&quot;:14,&quot;symbolWidth&quot;:14,&quot;symbolRadius&quot;:7,&quot;itemStyle&quot;:{&quot;fontWeight&quot;:400,&quot;fontSize&quot;:&quot;15px&quot;}},&quot;series&quot;:[{&quot;name&quot;:&quot;Desktops&quot;,&quot;data&quot;:[15,19,22.7,29.3,22,17,23.8,19.1,22.1,14.1,11.6,7.5],&quot;lineWidth&quot;:0},{&quot;name&quot;:&quot;Notebooks&quot;,&quot;data&quot;:[2.9,3.2,4.7,5.5,8.9,12.2,17,16.6,14.2,10.3,6.6,4.8],&quot;lineWidth&quot;:0},{&quot;name&quot;:&quot;Tablets&quot;,&quot;data&quot;:[0.9,1.9,2.1,3.5,4.5,3.2,1,6.6,9.2,8.1,4.2,1.8],&quot;lineWidth&quot;:0}]}" style="height: 324px"></div>
                                        </div>
                                        <div class="col-md-4 col-lg-3 py-4 px-3 border-md-left">
                                            <div class="list-block-container list-block-lg">
                                                <div class="list-block-title d-flex justify-content-between align-items-baseline">Top Referrals</div>
                                                <div class="list-block">
                                                    <div class="list-block-item d-flex justify-content-between"><a href="#">google.com</a>
                                                        <div>1,926</div>
                                                    </div>
                                                    <div class="list-block-item d-flex justify-content-between"><a href="#">yahoo.com</a>
                                                        <div>1,254</div>
                                                    </div>
                                                    <div class="list-block-item d-flex justify-content-between"><a href="#">twitter.com</a>
                                                        <div>783</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-block-container list-block-lg">
                                                <div class="list-block-title d-flex justify-content-between align-items-baseline">Top Search Terms</div>
                                                <div class="list-block">
                                                    <div class="list-block-item d-flex justify-content-between"><a href="#">Admin theme</a>
                                                        <div>998</div>
                                                    </div>
                                                    <div class="list-block-item d-flex justify-content-between"><a href="#">Admin dashboard</a>
                                                        <div>612</div>
                                                    </div>
                                                    <div class="list-block-item d-flex justify-content-between"><a href="#">Admin template</a>
                                                        <div>468</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="dashboardGraph2" role="tabpanel">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-9 pt-4">
                                                <div class="highcharts-container highcharts-container-lg" data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#6d92b9&quot;,&quot;#f8c450&quot;,&quot;#6cd1e1&quot;,&quot;#17a2b8&quot;],&quot;chart&quot;:{&quot;type&quot;:&quot;column&quot;,&quot;marginTop&quot;:50},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;enabled&quot;:true,&quot;floating&quot;:true,&quot;align&quot;:&quot;right&quot;,&quot;verticalAlign&quot;:&quot;top&quot;,&quot;x&quot;:-20},&quot;xAxis&quot;:{&quot;categories&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;,&quot;Sep&quot;,&quot;Oct&quot;,&quot;Nov&quot;,&quot;Dec&quot;],&quot;crosshair&quot;:true},&quot;yAxis&quot;:{&quot;min&quot;:0,&quot;title&quot;:{&quot;text&quot;:&quot;&quot;}},&quot;tooltip&quot;:{&quot;headerFormat&quot;:&quot;&lt;span style=\&quot;font-size:10px\&quot;&gt;{point.key}&lt;/span&gt;&lt;table&gt;&quot;,&quot;pointFormat&quot;:&quot;&lt;tr&gt;&lt;td style=\&quot;color:{series.color};padding:0\&quot;&gt;{series.name}: &lt;/td&gt;&lt;td style=\&quot;padding:0\&quot;&gt;&lt;b&gt;{point.y:.1f}&lt;/b&gt;&lt;/td&gt;&lt;/tr&gt;&quot;,&quot;footerFormat&quot;:&quot;&lt;/table&gt;&quot;,&quot;shared&quot;:true,&quot;useHTML&quot;:true},&quot;plotOptions&quot;:{&quot;column&quot;:{&quot;pointPadding&quot;:0.2,&quot;borderWidth&quot;:0}},&quot;series&quot;:[{&quot;name&quot;:&quot;Phones&quot;,&quot;data&quot;:[5.6,7.8,16.5,22.4,20,14.5,10,5.3,9.2,11.5,20.6,25.3]},{&quot;name&quot;:&quot;Desktop&quot;,&quot;data&quot;:[15.4,13.2,25.5,28.7,24.6,21.5,25.4,20.4,22.6,16.1,11.8,10.1]},{&quot;name&quot;:&quot;Notebooks&quot;,&quot;data&quot;:[4.9,5.5,10.4,7.2,9,13,17.6,16.5,12.4,8.1,7.6,6.4]},{&quot;name&quot;:&quot;Music Players&quot;,&quot;data&quot;:[11.9,5.8,4.3,15.4,18,23.3,29,22.6,15.4,16.2,14.3,7.2]}]}" style="height: 300px"></div>
                                            </div>
                                            <div class="col-md-4 col-lg-3 py-4 px-3 border-md-left">
                                                <div class="list-block-container list-block-lg">
                                                    <div class="list-block-title d-flex justify-content-between align-items-baseline">Top Referrals</div>
                                                    <div class="list-block">
                                                        <div class="list-block-item d-flex justify-content-between"><a href="#">yahoo.com</a>
                                                            <div>1,254</div>
                                                        </div>
                                                        <div class="list-block-item d-flex justify-content-between"><a href="#">templatemonster.com</a>
                                                            <div>783</div>
                                                        </div>
                                                        <div class="list-block-item d-flex justify-content-between"><a href="#">twitter.com</a>
                                                            <div>1,926</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-block-container list-block-lg">
                                                    <div class="list-block-title d-flex justify-content-between align-items-baseline">Top Search Terms</div>
                                                    <div class="list-block">
                                                        <div class="list-block-item d-flex justify-content-between"><a href="#">Admin dashboard</a>
                                                            <div>612</div>
                                                        </div>
                                                        <div class="list-block-item d-flex justify-content-between"><a href="#">Admin template</a>
                                                            <div>256</div>
                                                        </div>
                                                        <div class="list-block-item d-flex justify-content-between"><a href="#">Admin theme</a>
                                                            <div>998</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel admin-panel">
                        <div class="panel-header d-flex align-items-center">
                            <div class="panel-title flex-grow-1">Calendar widget</div>
                            <div class="admin-panel-buttons">
                                <button class="admin-panel-button fa" title="title" data-panel="title"></button>
                                <button class="admin-panel-button fa" title="color" data-panel="color"></button>
                                <button class="admin-panel-button fa" title="collapse" data-panel="collapse"></button>
                                <button class="admin-panel-button fa" title="fullscreen" data-panel="fullscreen"></button>
                                <button class="admin-panel-button fa" title="remove" data-panel="remove"></button>
                            </div>
                            <div class="admin-panel-switch fa-bars"></div>
                        </div>
                        <div class="panel-body pt-3">
                            <div class="fullcalendar calendar-widget" data-fullcalendar-header='{"left":"title","center":"","right":"today prev,next"}' data-fullcalendar-event='[{"title":"Sony Meeting","start":"2019-05-06","className":"fc-event-success"},{"title":"Conference","start":"2019-05-14","end":"2019-05-16","className":"fc-event-warning"},{"title":"System Testing","start":"2019-05-26","end":"2019-05-28","className":"fc-event-primary"}]'></div>
                        </div>
                    </div>
                    <div class="panel admin-panel">
                        <div class="panel-header d-flex align-items-center">
                            <div class="panel-title flex-grow-1">Task List Widget</div>
                            <div class="admin-panel-buttons">
                                <button class="admin-panel-button fa" title="title" data-panel="title"></button>
                                <button class="admin-panel-button fa" title="color" data-panel="color"></button>
                                <button class="admin-panel-button fa" title="collapse" data-panel="collapse"></button>
                                <button class="admin-panel-button fa" title="fullscreen" data-panel="fullscreen"></button>
                                <button class="admin-panel-button fa" title="remove" data-panel="remove"></button>
                            </div>
                            <div class="admin-panel-switch fa-bars"></div>
                        </div>
                        <div class="panel-body">
                            <h3 class="list-sortable-title">Current Tasks</h3>
                            <ul class="list-sortable sortable sortable-current" data-connect-group=".sortable-completed">
                                <li class="list-sortable-item-primary">
                                    <div class="custom-control custom-checkbox custom-check custom-checkbox-primary">
                                        <input class="custom-control-input" type="checkbox" id="taskCheck1"/>
                                        <label class="custom-control-label" for="taskCheck1">Add new servers to design board
                                        </label>
                                    </div>
                                    <div class="sortable-drag"></div>
                                </li>
                                <li class="list-sortable-item-secondary">
                                    <div class="custom-control custom-checkbox custom-check custom-checkbox-primary">
                                        <input class="custom-control-input" type="checkbox" id="taskCheck2"/>
                                        <label class="custom-control-label" for="taskCheck2">Finish building prototype for Sony
                                        </label>
                                    </div>
                                    <div class="sortable-drag"></div>
                                </li>
                                <li class="list-sortable-item-success">
                                    <div class="custom-control custom-checkbox custom-check custom-checkbox-primary">
                                        <input class="custom-control-input" type="checkbox" id="taskCheck3"/>
                                        <label class="custom-control-label" for="taskCheck3">Order new building supplies for Microsoft
                                        </label>
                                    </div>
                                    <div class="sortable-drag"></div>
                                </li>
                            </ul>
                            <h3 class="list-sortable-title">Completed Tasks</h3>
                            <ul class="list-sortable sortable sortable-completed" data-connect-group=".sortable-current">
                                <li class="list-sortable-item-warning">
                                    <div class="custom-control custom-checkbox custom-check custom-checkbox-primary">
                                        <input class="custom-control-input" type="checkbox" id="taskCheck4" checked=""/>
                                        <label class="custom-control-label" for="taskCheck4">Finish building prototype for Sony
                                        </label>
                                    </div>
                                    <div class="sortable-drag"></div>
                                </li>
                                <li class="list-sortable-item-info">
                                    <div class="custom-control custom-checkbox custom-check custom-checkbox-primary">
                                        <input class="custom-control-input" type="checkbox" id="taskCheck5" checked=""/>
                                        <label class="custom-control-label" for="taskCheck5">Create documentation for launch
                                        </label>
                                    </div>
                                    <div class="sortable-drag"></div>
                                </li>
                                <li class="list-sortable-item-danger">
                                    <div class="custom-control custom-checkbox custom-check custom-checkbox-primary">
                                        <input class="custom-control-input" type="checkbox" id="taskCheck6" checked=""/>
                                        <label class="custom-control-label" for="taskCheck6">Order new building supplies for Microsoft
                                        </label>
                                    </div>
                                    <div class="sortable-drag"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel admin-panel">
                        <div class="panel-header d-flex align-items-center">
                            <div class="panel-title flex-grow-1">Country list</div>
                            <div class="admin-panel-buttons">
                                <button class="admin-panel-button fa" title="title" data-panel="title"></button>
                                <button class="admin-panel-button fa" title="color" data-panel="color"></button>
                                <button class="admin-panel-button fa" title="collapse" data-panel="collapse"></button>
                                <button class="admin-panel-button fa" title="fullscreen" data-panel="fullscreen"></button>
                                <button class="admin-panel-button fa" title="remove" data-panel="remove"></button>
                            </div>
                            <div class="admin-panel-switch fa-bars"></div>
                        </div>
                        <div class="panel-body p-0">
                            <div class="highcharts-container" data-highcharts-options="{&quot;colors&quot;:[&quot;#6cd1e1&quot;,&quot;#f8c450&quot;,&quot;#ee6161&quot;,&quot;#6d92b9&quot;],&quot;chart&quot;:{&quot;type&quot;:&quot;bar&quot;},&quot;title&quot;:{&quot;text&quot;:null},&quot;xAxis&quot;:{&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#9575cd&quot;}},&quot;tickColor&quot;:&quot;rgba(255, 255, 255, 0)&quot;},&quot;yAxis&quot;:{&quot;min&quot;:0,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#9575cd&quot;}},&quot;minTickInterval&quot;:20,&quot;lineWidth&quot;:1},&quot;tooltip&quot;:{&quot;headerFormat&quot;:&quot;&lt;table&gt;&quot;,&quot;pointFormat&quot;:&quot;&lt;tr&gt;&lt;td style=\&quot;padding:0\&quot;&gt;{series.name}: &lt;b&gt;{point.y}&lt;/b&gt;&lt;/td&gt;&lt;/tr&gt;&quot;,&quot;footerFormat&quot;:&quot;&lt;/table&gt;&quot;},&quot;plotOptions&quot;:{&quot;series&quot;:{&quot;groupPadding&quot;:0.03,&quot;borderRadius&quot;:18}},&quot;legend&quot;:{&quot;itemStyle&quot;:{&quot;fontWeight&quot;:400,&quot;fontSize&quot;:&quot;14px&quot;,&quot;color&quot;:&quot;#797b7c&quot;}},&quot;credits&quot;:{&quot;enabled&quot;:false},&quot;series&quot;:[{&quot;name&quot;:&quot;France&quot;,&quot;data&quot;:[61]},{&quot;name&quot;:&quot;Spain&quot;,&quot;data&quot;:[55]},{&quot;name&quot;:&quot;USA&quot;,&quot;data&quot;:[77]},{&quot;name&quot;:&quot;England&quot;,&quot;data&quot;:[43]}]}" style="height: 300px"></div>
                        </div>
                    </div>
                    <div class="panel admin-panel">
                        <div class="panel-header d-flex align-items-center">
                            <div class="panel-title flex-grow-1">Crawler list</div>
                            <div class="admin-panel-buttons">
                                <button class="admin-panel-button fa" title="title" data-panel="title"></button>
                                <button class="admin-panel-button fa" title="color" data-panel="color"></button>
                                <button class="admin-panel-button fa" title="collapse" data-panel="collapse"></button>
                                <button class="admin-panel-button fa" title="fullscreen" data-panel="fullscreen"></button>
                                <button class="admin-panel-button fa" title="remove" data-panel="remove"></button>
                            </div>
                            <div class="admin-panel-switch fa-bars"></div>
                        </div>
                        <div class="panel-body p-0">
                            <div class="highcharts-container" data-highcharts-options="{&quot;colors&quot;:[&quot;#6cd1e1&quot;,&quot;#f8c450&quot;,&quot;#ee6161&quot;,&quot;#6d92b9&quot;],&quot;chart&quot;:{&quot;type&quot;:&quot;bar&quot;},&quot;title&quot;:{&quot;text&quot;:null},&quot;xAxis&quot;:{&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#9575cd&quot;}},&quot;tickColor&quot;:&quot;rgba(255, 255, 255, 0)&quot;},&quot;yAxis&quot;:{&quot;min&quot;:0,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#9575cd&quot;}},&quot;minTickInterval&quot;:20,&quot;lineWidth&quot;:1},&quot;tooltip&quot;:{&quot;headerFormat&quot;:&quot;&lt;table&gt;&quot;,&quot;pointFormat&quot;:&quot;&lt;tr&gt;&lt;td style=\&quot;padding:0\&quot;&gt;{series.name}: &lt;b&gt;{point.y}&lt;/b&gt;&lt;/td&gt;&lt;/tr&gt;&quot;,&quot;footerFormat&quot;:&quot;&lt;/table&gt;&quot;},&quot;plotOptions&quot;:{&quot;series&quot;:{&quot;groupPadding&quot;:0.03,&quot;borderRadius&quot;:18}},&quot;legend&quot;:{&quot;itemStyle&quot;:{&quot;fontWeight&quot;:400,&quot;fontSize&quot;:&quot;14px&quot;,&quot;color&quot;:&quot;#797b7c&quot;}},&quot;credits&quot;:{&quot;enabled&quot;:false},&quot;series&quot;:[{&quot;name&quot;:&quot;Safari&quot;,&quot;data&quot;:[67]},{&quot;name&quot;:&quot;Internet Explorer&quot;,&quot;data&quot;:[33]},{&quot;name&quot;:&quot;Firefox&quot;,&quot;data&quot;:[57]},{&quot;name&quot;:&quot;Chrome&quot;,&quot;data&quot;:[52]}]}" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel admin-panel">
                        <div class="panel-header d-flex align-items-center">
                            <div class="panel-title flex-grow-1">Visitor Geography</div>
                            <div class="admin-panel-buttons">
                                <button class="admin-panel-button fa" title="title" data-panel="title"></button>
                                <button class="admin-panel-button fa" title="color" data-panel="color"></button>
                                <button class="admin-panel-button fa" title="collapse" data-panel="collapse"></button>
                                <button class="admin-panel-button fa" title="fullscreen" data-panel="fullscreen"></button>
                                <button class="admin-panel-button fa" title="remove" data-panel="remove"></button>
                            </div>
                            <div class="admin-panel-switch fa-bars"></div>
                        </div>
                        <div class="panel-body p-0">
                            <div class="jvector-map-wrap" data-jvector-map="{&quot;map&quot;:&quot;us_aea&quot;,&quot;backgroundColor&quot;:&quot;transparent&quot;,&quot;zoomAnimate&quot;:true,&quot;regionStyle&quot;:{&quot;initial&quot;:{&quot;fill&quot;:&quot;#e8e8e8&quot;},&quot;hover&quot;:{&quot;fill&quot;:&quot;#f9f9f9&quot;}},&quot;series&quot;:{&quot;regions&quot;:[{&quot;scale&quot;:{&quot;primary&quot;:&quot;#6e93ba&quot;,&quot;info&quot;:&quot;#6dd1e2&quot;,&quot;warning&quot;:&quot;#f9c450&quot;,&quot;danger&quot;:&quot;#ef6262&quot;},&quot;attribute&quot;:&quot;fill&quot;,&quot;values&quot;:{&quot;US-CA&quot;:&quot;primary&quot;,&quot;US-TX&quot;:&quot;info&quot;,&quot;US-MO&quot;:&quot;warning&quot;,&quot;US-NY&quot;:&quot;danger&quot;}}]}}">
                                <div class="jvector-map-body"></div>
                            </div>
                            <ul class="list-unstyled list-divided">
                                <li class="d-flex justify-content-between px-3 py-2">
                                    <div><span class="lead align-middle fa-map-marker pr-2 text-primary"></span><span class="align-middle">California</span></div><strong>24%</strong>
                                </li>
                                <li class="d-flex justify-content-between px-3 py-2">
                                    <div><span class="lead align-middle fa-map-marker pr-2 text-info"></span><span class="align-middle">Texas</span></div><strong>7%</strong>
                                </li>
                                <li class="d-flex justify-content-between px-3 py-2">
                                    <div><span class="lead align-middle fa-map-marker pr-2 text-warning"></span><span class="align-middle">Missouri</span></div><strong>14%</strong>
                                </li>
                                <li class="d-flex justify-content-between px-3 py-2">
                                    <div><span class="lead align-middle fa-map-marker pr-2 text-danger"></span><span class="align-middle">New York</span></div><strong>7%</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel admin-panel">
                        <div class="panel-header d-flex align-items-center">
                            <div class="panel-title flex-grow-1">Round Graph</div>
                            <div class="admin-panel-buttons">
                                <button class="admin-panel-button fa" title="title" data-panel="title"></button>
                                <button class="admin-panel-button fa" title="color" data-panel="color"></button>
                                <button class="admin-panel-button fa" title="collapse" data-panel="collapse"></button>
                                <button class="admin-panel-button fa" title="fullscreen" data-panel="fullscreen"></button>
                                <button class="admin-panel-button fa" title="remove" data-panel="remove"></button>
                            </div>
                            <div class="admin-panel-switch fa-bars"></div>
                        </div>
                        <div class="panel-body p-0">
                            <div class="row no-gutters">
                                <div class="col-sm-5">
                                    <div class="highcharts-container highcharts-container-md" data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#6d92b9&quot;,&quot;#ee6161&quot;,&quot;#f8c450&quot;,&quot;#6cd1e1&quot;],&quot;chart&quot;:{&quot;type&quot;:&quot;pie&quot;},&quot;plotOptions&quot;:{&quot;pie&quot;:{&quot;innerSize&quot;:&quot;70%&quot;,&quot;dataLabels&quot;:{&quot;enabled&quot;:false},&quot;borderWidth&quot;:3}},&quot;title&quot;:{&quot;text&quot;:null},&quot;series&quot;:[{&quot;data&quot;:[[&quot;Behance&quot;,40],[&quot;Twitter&quot;,27],[&quot;Facebook&quot;,20],[&quot;Dribble&quot;,13]]}]}"></div>
                                </div>
                                <div class="col-sm-7 border-sm-left d-flex flex-column justify-content-center pb-3 pb-sm-0">
                                    <ul class="list-unstyled list-divided">
                                        <li class="d-flex justify-content-between px-3">
                                            <div><span class="fa-circle pr-2 text-primary"></span><span>Behance</span></div><strong>24%</strong>
                                        </li>
                                        <li class="d-flex justify-content-between px-3">
                                            <div><span class="fa-circle pr-2 text-warning"></span><span>Twitter</span></div><strong>7%</strong>
                                        </li>
                                        <li class="d-flex justify-content-between px-3">
                                            <div><span class="fa-circle pr-2 text-success"></span><span>Facebook</span></div><strong>14%</strong>
                                        </li>
                                        <li class="d-flex justify-content-between px-3">
                                            <div><span class="fa-circle pr-2 text-info"></span><span>Dribble</span></div><strong>21%</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel admin-panel">
                        <div class="panel-header d-flex align-items-center">
                            <div class="panel-title flex-grow-1">Area Graph</div>
                            <div class="admin-panel-buttons">
                                <button class="admin-panel-button fa" title="title" data-panel="title"></button>
                                <button class="admin-panel-button fa" title="color" data-panel="color"></button>
                                <button class="admin-panel-button fa" title="collapse" data-panel="collapse"></button>
                                <button class="admin-panel-button fa" title="fullscreen" data-panel="fullscreen"></button>
                                <button class="admin-panel-button fa" title="remove" data-panel="remove"></button>
                            </div>
                            <div class="admin-panel-switch fa-bars"></div>
                        </div>
                        <div class="panel-menu p-0">
                            <ul class="list-unstyled list-divided">
                                <li class="d-flex justify-content-between px-3 py-2">
                                    <div><span class="fa-male pr-2 text-danger"></span><span>Male</span></div><strong>24%</strong>
                                </li>
                                <li class="d-flex justify-content-between px-3 py-2">
                                    <div><span class="fa-female pr-2 text-info"></span><span>Female</span></div><strong>7%</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body pb-0">
                            <div class="highcharts-container" data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#ee6161&quot;,&quot;#6cd1e1&quot;],&quot;chart&quot;:{&quot;type&quot;:&quot;line&quot;},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{},&quot;xAxis&quot;:{&quot;lineColor&quot;:&quot;#eeeeee&quot;,&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#aaa9a9&quot;}},&quot;categories&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;,&quot;Sep&quot;,&quot;Oct&quot;,&quot;Nov&quot;,&quot;Dec&quot;]},&quot;yAxis&quot;:{&quot;min&quot;:0,&quot;tickInterval&quot;:5,&quot;gridLineColor&quot;:&quot;#eeeeee&quot;,&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#aaa9a9&quot;}},&quot;title&quot;:{&quot;text&quot;:null}},&quot;plotOptions&quot;:{&quot;spline&quot;:{&quot;lineWidth&quot;:3,&quot;marker&quot;:{&quot;symbol&quot;:&quot;circle&quot;}},&quot;area&quot;:{&quot;fillOpacity&quot;:0.2},&quot;line&quot;:{&quot;marker&quot;:{&quot;fillColor&quot;:&quot;#ffffff&quot;,&quot;symbol&quot;:&quot;circle&quot;,&quot;lineWidth&quot;:2,&quot;lineColor&quot;:null}}},&quot;series&quot;:[{&quot;name&quot;:&quot;Yahoo&quot;,&quot;data&quot;:[7,6,9,14,18,21.5,25.2,26.5,23.3,18.3,13.9,9.6]},{&quot;name&quot;:&quot;CNN&quot;,&quot;data&quot;:[3.9,4.2,5.7,8.5,11.9,15.2,17,16.6,14.2,10.3,6.6,4.8]}]}" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer footer-small">
        <div class="d-flex justify-content-between align-items-center group-10">
            <div>© ConcreteAdmin</div>
            <div><span>60GB of 350GB Free</span>
                <button class="to-top btn btn-sm btn-primary"><span class="fa-chevron-up"></span></button>
            </div>
        </div>
    </footer>
    <div class="sidebar scroller">
        <div class="panel">
            <div class="panel-header">
                <div class="panel-title"><span class="panel-icon fa-trophy"></span><span>Right Sidebar Content</span></div>
            </div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat ac tortor eu viverra. Etiam ipsum neque, fermentum quis sagittis nec, hendrerit id diam. Mauris a tincidunt odio. Sed porttitor ex pulvinar, tristique sapien sed, malesuada nunc.</p>
            </div>
        </div>
    </div>
    <div class="template-panel">
        <div class="template-panel-heading">Template Panel
            <button class="template-panel-switch fa-cog" data-multi-switch='{"targets":".template-panel","scope":".template-panel","isolate":"[data-multi-switch]"}'></button>
        </div>
        <div class="template-panel-body">
            <div class="template-panel-group">
                <button class="theme-switch fa-check active" title="Navbar Theme" style="border-color: #b5b5b5 #b5b5b5 #4b4a4a #4b4a4a; color: white;" data-theme-switch="concrete-navbar-default" data-theme='{"navbar-color":"#fff","navbar-bg":"#3d3c3c","navbar-hover-color":"#fff","navbar-hover-bg":"#fff","navbar-title-color":"#adb5bd","navbar-panel-bg":"#b5b5b5","navbar-brand-invert":"0%"}'></button>
                <button class="theme-switch fa-check" title="Navbar Theme" style="border-color: #29d999 #29d999 #1a1f21 #1a1f21; color: white;" data-theme-switch="concrete-navbar-success" data-theme='{"navbar-color":"#fff","navbar-bg":"#1a1f21","navbar-hover-color":"#fff","navbar-hover-bg":"#ededed","navbar-title-color":"#adb5bd","navbar-panel-bg":"#29d999","navbar-brand-invert":"0%"}'></button>
                <button class="theme-switch fa-check" title="Navbar Theme" style="border-color: #3e84d7 #3e84d7 #1a1f21 #1a1f21; color: white;" data-theme-switch="concrete-navbar-primary" data-theme='{"navbar-color":"#fff","navbar-bg":"#1a1f21","navbar-hover-color":"#fff","navbar-hover-bg":"#ededed","navbar-title-color":"#adb5bd","navbar-panel-bg":"#3e84d7","navbar-brand-invert":"0%"}'></button>
                <button class="theme-switch fa-check" title="Navbar Theme" style="border-color: #fff #fff #666 #666; color: black;" data-theme-switch="concrete-navbar-light" data-theme='{"navbar-color":"#666","navbar-bg":"#efefef","navbar-hover-color":"#333","navbar-hover-bg":"#333","navbar-title-color":"#333","navbar-panel-bg":"#eee","navbar-brand-invert":"100%"}'></button>
            </div>
            <ul class="template-panel-list">
                <ul class="template-panel-item"><a class="template-panel-link" href="../admindex/index.html">Admindex<span class="template-panel-popup"><img class="template-panel-preview" src="images/templates/template-01-400x174.png"></span></a></ul>
                <ul class="template-panel-item"><a class="template-panel-link" href="../adminifix/index.html">Adminifix<span class="template-panel-popup"><img class="template-panel-preview" src="images/templates/template-02-400x174.png"></span></a></ul>
                <ul class="template-panel-item"><a class="template-panel-link" href="../emerald/index.html">Emerald<span class="template-panel-popup"><img class="template-panel-preview" src="images/templates/template-03-400x174.png"></span></a></ul>
                <ul class="template-panel-item"><a class="template-panel-link" href="../iodashboard/index.html">IoDashboard<span class="template-panel-popup"><img class="template-panel-preview" src="images/templates/template-04-400x174.png"></span></a></ul>
                <ul class="template-panel-item"><a class="template-panel-link active" href="../concrete/index.html">Concrete<span class="template-panel-popup"><img class="template-panel-preview" src="images/templates/template-05-400x174.png"></span></a></ul>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
