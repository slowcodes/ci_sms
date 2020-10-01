<!doctype html>
<html lang="en">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
        <meta name="author" content="Bdtask">
        <title>Bhulua SLMS - Government Secoundary School, Kuje</title>
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/dist/img/favicon.png">
        <!--Global Styles(used by all pages)-->
        <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="/assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
        <link href="/assets/plugins/typicons/src/typicons.min.css" rel="stylesheet">
        <link href="/assets/plugins/themify-icons/themify-icons.min.css" rel="stylesheet">

        <!--Third party Styles(used by this page)--> 
        <link href="/assets/plugins/modals/component.css" rel="stylesheet">
        <!--Global Styles(used by all pages)-->

        <!--Start Your Custom Style Now-->
        <link href="/assets/dist/css/style.css" rel="stylesheet">


    </head>
    <body class="fixed">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <div class="wrapper">
            <!-- Sidebar  -->
            <?php 
                
                include($_SERVER['DOCUMENT_ROOT'].'/application/views/menu/getmenu.php'); 
                loadmenu($user_type, $first_name, $last_name, $username);
            ?>
            <!-- Page Content  -->
            <div class="content-wrapper">
                <div class="main-content">
                    <nav class="navbar-custom-menu navbar navbar-expand-lg m-0">
                        <div class="sidebar-toggle-icon" id="sidebarCollapse">
                            sidebar toggle<span></span>
                        </div><!--/.sidebar toggle icon-->
                        <div class="d-flex flex-grow-1">
                            <ul class="navbar-nav flex-row align-items-center ml-auto">
                                <li class="nav-item dropdown quick-actions">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                        <i class="typcn typcn-th-large-outline"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" >
                                        <div class="nav-grid-row row">
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-cog-outline d-block"></i>
                                                <span>Settings</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-group-outline d-block"></i>
                                                <span>Users</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-puzzle-outline d-block"></i>
                                                <span>Components</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-chart-bar-outline d-block"></i>
                                                <span>Profits</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-time d-block"></i>
                                                <span>New Event</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-edit d-block"></i>
                                                <span>Tasks</span>
                                            </a>
                                        </div>
                                    </div>
                                </li><!--/.dropdown-->
                                <li class="nav-item">
                                    <a class="nav-link" href="chat.html"><i class="typcn typcn-messages"></i></a>
                                </li>
                                <li class="nav-item dropdown notification">
                                    <a class="nav-link dropdown-toggle badge-dot" href="#" data-toggle="dropdown">
                                        <i class="typcn typcn-bell"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <h6 class="notification-title">Notifications</h6>
                                        <p class="notification-text">You have 2 unread notification</p>
                                        <div class="notification-list">
                                            <div class="media new">
                                                <div class="img-user"><img src="/assets/dist/img/avatar.png" alt=""></div>
                                                <div class="media-body">
                                                    <h6>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</h6>
                                                    <span>Mar 15 12:32pm</span>
                                                </div>
                                            </div><!--/.media -->
                                            <div class="media new">
                                                <div class="img-user online"><img src="/assets/dist/img/avatar2.png" alt=""></div>
                                                <div class="media-body">
                                                    <h6><strong>Joyce Chua</strong> just created a new blog post</h6>
                                                    <span>Mar 13 04:16am</span>
                                                </div>
                                            </div><!--/.media -->
                                            <div class="media">
                                                <div class="img-user"><img src="/assets/dist/img/avatar3.png" alt=""></div>
                                                <div class="media-body">
                                                    <h6><strong>Althea Cabardo</strong> just created a new blog post</h6>
                                                    <span>Mar 13 02:56am</span>
                                                </div>
                                            </div><!--/.media -->
                                            <div class="media">
                                                <div class="img-user"><img src="/assets/dist/img/avatar4.png" alt=""></div>
                                                <div class="media-body">
                                                    <h6><strong>Adrian Monino</strong> added new comment on your photo</h6>
                                                    <span>Mar 12 10:40pm</span>
                                                </div>
                                            </div><!--/.media -->
                                        </div><!--/.notification -->
                                        <div class="dropdown-footer"><a href="#">View All Notifications</a></div>
                                    </div><!--/.dropdown-menu -->
                                </li><!--/.dropdown-->
                                <li class="nav-item dropdown user-menu">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                        <!--<img src="assets/dist/img/user2-160x160.png" alt="">-->
                                        <i class="typcn typcn-user-add-outline"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" >
                                        <div class="dropdown-header d-sm-none">
                                            <a href="#" class="header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                                        </div>
                                        <div class="user-header">
                                            <div class="img-user">
                                                <img src="/assets/dist/img/avatar-1.jpg" alt="">
                                            </div><!-- img-user -->
                                            <h6>Naeem Khan</h6>
                                            <span><a href="/cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="92f7eaf3ffe2fef7d2f5fff3fbfebcf1fdff">[email&#160;protected]</a></span>
                                        </div><!-- user-header -->
                                        <a href="#" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                                        <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                                        <a href="#" class="dropdown-item"><i class="typcn typcn-arrow-shuffle"></i> Activity Logs</a>
                                        <a href="#" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#warningModal"><i class="typcn typcn-key-outline"></i> Sign Out</a>
                                        <button type="button" class="btn btn-warning mb-3 mr-1" data-toggle="modal" data-target="#warningModal">
                                            Warning
                                        </button>
                                    </div><!--/.dropdown-menu -->
                                </li>
                            </ul><!--/.navbar nav-->
                            <div class="nav-clock">
                                <div class="time">
                                    <span class="time-hours"></span>
                                    <span class="time-min"></span>
                                    <span class="time-sec"></span>
                                </div>
                            </div><!-- nav-clock -->
                        </div>
                    </nav><!--/.navbar-->
                    <!--Content Header (Page header)-->
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Widgets</a></li>
                                <li class="breadcrumb-item active">Widgets</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <div class="header-icon text-success mr-3"><i class="typcn typcn-puzzle-outline"></i></div>
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Dashboard</h1>
                                    <small>Present your events in timeline style.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)--> 
                    <div class="body-content">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <!--Outage warning--> 
                                <div class="p-2 bg-warning text-black rounded mb-3 p-3 shadow-sm text-center position-relative overflow-hidden">
                                    <div class="header-pretitle fs-11 font-weight-bold text-uppercase mb-2">Warning</div>
                                    <i class="decorative-icon fas fa fa-exclamation-circle opacity-25 fa-5x animated infinite pulse slower"></i>
                                    <pre class="bg-dark text-white rounded p-2 mb-0"><code>Expected outage<br> in US-EAST-1</code></pre>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <!--Active users indicator--> 
                                <div class="p-2 bg-primary text-white rounded mb-3 p-3 shadow-sm text-center">
                                    <div class="opacity-50 header-pretitle fs-11 font-weight-bold text-uppercase">Right now</div>
                                    <div class="fs-32 text-monospace">90</div>
                                    <small>active users on site</small>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <!--Weekly users indicator--> 
                                <div class="d-flex flex-column p-3 mb-3 bg-white shadow-sm rounded">
                                    <div class="header-pretitle text-muted fs-11 font-weight-bold text-uppercase mb-2">Weekly Users</div>

                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <span class="text-size-2 text-monospace">321</span>k
                                        </div>
                                        <div class="text-success pl-3 pt-1">
                                            <i class="fas fa fa-long-arrow-alt-up"></i>
                                            <span class="text-monospace">11%</span>
                                            <div class="small text-muted">vs last week</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <!--Bounce rate indicator--> 
                                <div class="d-flex flex-column p-3 mb-3 bg-white shadow-sm rounded">
                                    <div class="header-pretitle text-muted fs-11 font-weight-bold text-uppercase mb-2">Bounce rate</div>

                                    <div class="d-flex align-items-center text-size-3">
                                        <i class="fas fa fa-door-open opacity-25 mr-2"></i>
                                        <div class="text-monospace">
                                            <span class="text-size-2 ">43</span>%
                                        </div>
                                        <i class="fas fa fa-arrow-up text-danger ml-2"></i>
                                    </div>
                                </div>
                            </div>
                            <!--                            <div class="col-3">
                                                            Health Status indicator 
                                                            <div class="d-flex flex-column p-3 mb-3 bg-white shadow-sm rounded">
                                                                <div class="header-pretitle text-muted fs-11 font-weight-bold text-uppercase mb-2">Health status</div>
                            
                                                                <div class="d-flex justify-content-between align-items-center mb-2">
                            
                                                                    <div>
                                                                        <i class="fas fa-database"></i> Database
                                                                    </div>
                                                                    <i class="fas fa-circle fa-xs text-danger"></i>
                                                                </div>
                            
                                                                <div class="d-flex justify-content-between align-items-center">
                            
                                                                    <div>
                                                                        <i class="fas fa-server"></i> API
                                                                    </div>
                                                                    <i class="fas fa-circle fa-xs text-warning animated infinite flash slower"></i>
                                                                </div>
                                                            </div>
                                                        </div>-->
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <div class="card mb-4">
                                    <img src="/assets/dist/img/profile-cover.jpg" alt="..." class="card-img-top">
                                    <div class="card-body text-center">
                                        <a href="profile-posts.html" class="avatar avatar-xl card-avatar card-avatar-top mb-4">
                                            <img src="/assets/dist/img/avatar-1.jpg" class="avatar-img rounded-circle border-card" alt="...">
                                        </a>
                                        <h5 class="card-title font-weight-600 mb-2">
                                            <a href="profile-posts.html">Mozammel Hoque</a>
                                        </h5>
                                        <p class="card-text text-muted mb-2">Working on the latest API integration.</p>
                                        <p class="card-text">
                                            <span class="badge badge-pill badge-secondary">
                                                UX Team
                                            </span>
                                            <span class="badge badge-pill badge-secondary">
                                                Research Team
                                            </span>
                                        </p>
                                        <hr>
                                        <div class="row align-items-center justify-content-between">
                                            <div class="col-auto">
                                                <span class="text-success">●</span> Online
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="btn btn-sm btn-primary">
                                                    Subscribe
                                                </a>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="profile-posts.html" class="avatar avatar-lg">
                                                    <img src="/assets/dist/img/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                            </div>
                                            <div class="col ml-n2">
                                                <h6 class="card-title font-weight-600 mb-2">
                                                    <a href="profile-posts.html">Mozammel Hoque</a>
                                                </h6>
                                                <p class="card-text text-muted mb-1">
                                                    Working on the latest API integration.
                                                </p>
                                                <p class="card-text">
                                                    <span class="text-success">●</span> Online
                                                </p>
                                                <a href="#!" class="btn btn-sm btn-primary d-none d-md-inline-block">
                                                    Subscribe
                                                </a>
                                            </div>
                                            <!--                                            <div class="col-auto">
                                                                                            <a href="#!" class="btn btn-sm btn-primary d-none d-md-inline-block">
                                                                                                Subscribe
                                                                                            </a>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Project status</h6>
                                            </div>
                                            <div class="text-right">
                                                <div class="actions">
                                                    <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                                    <div class="dropdown action-item" data-toggle="dropdown">
                                                        <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">Refresh</a>
                                                            <a href="#" class="dropdown-item">Manage Widgets</a>
                                                            <a href="#" class="dropdown-item">Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-9">
                                                <div class="progress-wrapper">
                                                    <span class="progress-label text-muted">Pendings Tasks</span>
                                                    <div class="progress mt-1 mb-2" style="height: 5px;">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3 align-self-end text-right">
                                                <span class="h6 mb-0">40%</span>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-9">
                                                <div class="progress-wrapper">
                                                    <span class="progress-label text-muted">Completed Tasks</span>
                                                    <div class="progress mt-1 mb-2" style="height: 5px;">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3 align-self-end text-right">
                                                <span class="h6 mb-0">67%</span>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-9">
                                                <div class="progress-wrapper">
                                                    <span class="progress-label text-muted">Tasks In Progress</span>
                                                    <div class="progress mt-1 mb-2" style="height: 5px;">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3 align-self-end text-right">
                                                <span class="h6 mb-0">89%</span>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-9">
                                                <div class="progress-wrapper">
                                                    <span class="progress-label text-muted">All Tasks</span>
                                                    <div class="progress mt-1 mb-2" style="height: 5px;">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3 align-self-end text-right">
                                                <span class="h6 mb-0">55%</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="progress-wrapper">
                                                    <span class="progress-label text-muted">Reports</span>
                                                    <div class="progress mt-1 mb-2" style="height: 5px;">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3 align-self-end text-right">
                                                <span class="h6 mb-0">99%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Todo list</h6>
                                            </div>
                                            <div class="text-right">
                                                <div class="actions">
                                                    <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                                    <div class="dropdown action-item" data-toggle="dropdown">
                                                        <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">Refresh</a>
                                                            <a href="#" class="dropdown-item">Manage Widgets</a>
                                                            <a href="#" class="dropdown-item">Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="todo-list">
                                            <li>
                                                <div class="checkbox checkbox-success">
                                                    <input id="todo1" type="checkbox">
                                                    <label for="todo1">Lorem ipsum dolor sit amet.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-success">
                                                    <input id="todo2" type="checkbox">
                                                    <label for="todo2">Aenean sit amet tellus ornare eros.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-success">
                                                    <input id="todo3" type="checkbox">
                                                    <label for="todo3">Donec vestibulum quam vel euismod tempus.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-success">
                                                    <input id="todo4" type="checkbox">
                                                    <label for="todo4">Nullam ornare est et sem semper.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-success">
                                                    <input id="todo5" type="checkbox">
                                                    <label for="todo5">Fusce volutpat justo id nulla malesuada.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-success">
                                                    <input id="todo6" type="checkbox">
                                                    <label for="todo6">Phasellus non arcu at massa viverra varius.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-success">
                                                    <input id="todo7" type="checkbox">
                                                    <label for="todo7">Vestibulum a elit id nisi venenatis lobortis.</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Tasks timeline</h6>
                                            </div>
                                            <div class="text-right">
                                                <div class="actions">
                                                    <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                                    <div class="dropdown action-item" data-toggle="dropdown">
                                                        <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">Refresh</a>
                                                            <a href="#" class="dropdown-item">Manage Widgets</a>
                                                            <a href="#" class="dropdown-item">Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="activity-list list-unstyled">
                                            <li class=activity-purple>
                                                <span class="text-muted text-sm">Task added</span>
                                                <h5><a href="#" class="d-block fs-15 font-weight-600 text-sm mb-0">It is a long established fact that a reader will be distracted </a></h5>
                                                <small class=text-muted><i class="far fa-clock mr-1"></i>9 minutes ago</small>
                                            </li>
                                            <li class=activity-danger>
                                                <span class="text-muted text-sm">Task added</span>
                                                <h5><a href="#" class="d-block fs-15 font-weight-600 text-sm mb-0">There are many variations of passages of Lorem</a></h5>
                                                <small class=text-muted><i class="far fa-clock mr-1"></i>15 minutes ago</small>
                                            </li>
                                            <li class=activity-warning>
                                                <span class="text-muted text-sm">Task added</span>
                                                <h5><a href="#" class="d-block fs-15 font-weight-600 text-sm mb-0">It was <span class=text-danger>popularised</span> in the 1960s with the release of Letraset sheets</a></h5>
                                                <small class=text-muted><i class="far fa-clock mr-1"></i>22 minutes ago</small>
                                            </li>
                                            <li class=activity-primary>
                                                <span class="text-muted text-sm">Task added</span>
                                                <h5><a href="#" class="d-block fs-15 font-weight-600 text-sm mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined</a></h5>
                                                <small class=text-muted><i class="far fa-clock mr-1"></i>30 minutes ago</small>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer py-2 text-center">
                                        <a href="#" class="text-sm text-muted font-weight-bold">See all notifications</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Latest comments</h6>
                                            </div>
                                            <div class="text-right">
                                                <div class="actions">
                                                    <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                                    <div class="dropdown action-item" data-toggle="dropdown">
                                                        <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">Refresh</a>
                                                            <a href="#" class="dropdown-item">Manage Widgets</a>
                                                            <a href="#" class="dropdown-item">Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="2 hrs ago" data-original-title="" title="">
                                                <div>
                                                    <span class="avatar bg-success text-white rounded-circle">NA</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <h6 class="fs-15 font-weight-600 mb-0">Naeem Khan <small class="float-right text-muted">2 hrs ago</small></h6>
                                                    <p class="mb-0">Proin rhoncus ante sed consectetur imperdiet.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="3 hrs ago" data-original-title="" title="">
                                                <div>
                                                    <span class="avatar bg-warning text-white rounded-circle">TA</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <h6 class="fs-15 font-weight-600 mb-0">Tanjil Ahmed <small class="float-right text-muted">3 hrs ago</small></h6>
                                                    <p class="mb-0">
                                                        This theme is awesome!
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="5 hrs ago" data-original-title="" title="">
                                                <div>
                                                    <span class="avatar bg-info text-white rounded-circle">TU</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <h6 class="fs-15 font-weight-600 mb-0">Tuhin Sarker <small class="float-right text-muted">5 hrs ago</small></h6>
                                                    <p class="mb-0">
                                                        Nice to meet you
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="2 hrs ago" data-original-title="" title="">
                                                <div>
                                                    <span class="avatar bg-dark text-white rounded-circle">SA</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <h6 class="fs-15 font-weight-600 mb-0">Saiful Islam <small class="float-right text-muted">2 hrs ago</small></h6>
                                                    <p class="mb-0">
                                                        Hey! there I'm available...
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-footer py-2 text-center">
                                        <a href="#" class="text-muted font-weight-bold">See all notifications</a>
                                    </div>
                                </div>
                                <!-- Weather widget -->
                                <div class="weather-widget">
                                    <div class="weather-city">
                                        <div class="city-name">
                                            San Francisco, CA
                                        </div>
                                        <div class="time">16:08 GMT</div>
                                    </div>
                                    <div class="temp">
                                        <span class="icon rainy-2"></span>
                                        <span class="value">62</span>
                                        <span class="wind" style="transform: rotate(170deg)"><img src="/assets/dist/img/weather/weather_sagittarius.svg" alt=""></span>
                                    </div>
                                    <div class="meta">
                                        <span class="sunrise">Sunrise 09:33</span>
                                        <span class="icon">
                                            <img src="/assets/dist/img/sunrise.html" alt="">
                                        </span>
                                        <span class="sunset">Sunset 24:46</span>
                                    </div>
                                    <div class="weather-week">
                                        <div class="weather-days">
                                            <div class="day-0">Sun</div>
                                            <div class="day-icon">
                                                <img src="/assets/dist/img/weather/cloudy.svg" alt="">
                                                <!--<i class="wi wi-day-sunny"></i>-->
                                            </div>
                                            <div class="day-degrees">
                                                <span class="degrees-0">45</span>
                                                <span class="td-circle">°</span>
                                            </div>
                                        </div>
                                        <div class="weather-days">
                                            <div class="day-1">Mon</div>
                                            <div class="day-icon">
                                                <img src="/assets/dist/img/weather/cloudy-day-1.svg" alt="">
                                                <!--<i class="wi wi-day-cloudy-high"></i>-->
                                            </div>
                                            <div class="day-degrees">
                                                <span class="degrees-1">21</span>
                                                <span class="circle">°</span>
                                            </div>
                                        </div>
                                        <div class="weather-days">
                                            <div class="day-2">Tue</div>
                                            <div class="day-icon">
                                                <img src="/assets/dist/img/weather/thunder.svg" alt="">
                                                <!--<i class="wi wi-day-sleet"></i>-->
                                            </div>
                                            <div class="day-degrees">
                                                <span class="degrees-2">29</span>
                                                <span class="circle">°</span>
                                            </div>
                                        </div>
                                        <div class="weather-days">
                                            <div class="day-3">Wed</div>
                                            <div class="day-icon">
                                                <img src="/assets/dist/img/weather/night.svg" alt="">
                                                <!--<i class="wi wi-day-lightning"></i>-->
                                            </div>
                                            <div class="day-degrees">
                                                <span class="degrees-3">19</span>
                                                <span class="circle">°</span>
                                            </div>
                                        </div>
                                        <div class="weather-days">
                                            <div class="day-4">Thu</div>
                                            <div class="day-icon">
                                                <img src="/assets/dist/img/weather/cloudy-night-1.svg" alt="">
                                                <!--<i class="wi wi-sleet"></i>-->
                                            </div>
                                            <div class="day-degrees">
                                                <span class="degrees-4">54</span>
                                                <span class="circle">°</span>
                                            </div>
                                        </div>
                                        <div class="weather-days">
                                            <div class="day-4">Fri</div>
                                            <div class="day-icon">
                                                <img src="/assets/dist/img/weather/snowy-6.svg" alt="">
                                                <!--<i class="wi wi-smog"></i>-->
                                            </div>
                                            <div class="day-degrees">
                                                <span class="degrees-5">68</span>
                                                <span class="circle">°</span>
                                            </div>
                                        </div>
                                        <div class="weather-days">
                                            <div class="day-4">Sat</div>
                                            <div class="day-icon">
                                                <img src="/assets/dist/img/weather/rainy-3.svg" alt="">
                                                <!--<i class="wi wi-lightning"></i>-->
                                            </div>
                                            <div class="day-degrees">
                                                <span class="degrees-6">28</span>
                                                <span class="circle">°</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Attachments</h6>
                                            </div>
                                            <div class="text-right">
                                                <div class="actions">
                                                    <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                                    <div class="dropdown action-item" data-toggle="dropdown">
                                                        <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">Refresh</a>
                                                            <a href="#" class="dropdown-item">Manage Widgets</a>
                                                            <a href="#" class="dropdown-item">Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card mb-3 border shadow-none">
                                            <div class="px-3 py-3">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <img alt="Image placeholder" src="/assets/dist/img/pdf.png" class="img-fluid" style="width: 40px;">
                                                    </div>
                                                    <div class="col ml-n2">
                                                        <h6 class="mb-0">
                                                            <a href="#!">design-principles.pdf</a>
                                                        </h6>
                                                        <p class="card-text small text-muted">
                                                            189 KB
                                                        </p>
                                                    </div>
                                                    <div class="col-auto actions">
                                                        <div class="dropdown" data-toggle="dropdown">
                                                            <a href="#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="far fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item">Refresh</a>
                                                                <a href="#" class="dropdown-item">Manage Widgets</a>
                                                                <a href="#" class="dropdown-item">Settings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3 border shadow-none">
                                            <div class="px-3 py-3">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <img alt="Image placeholder" src="/assets/dist/img/psd.png" class="img-fluid" style="width: 40px;">
                                                    </div>
                                                    <div class="col ml-n2">
                                                        <h6 class="mb-0">
                                                            <a href="#!">website-wireframe.psd</a>
                                                        </h6>
                                                        <p class="card-text small text-muted">
                                                            45.9 MB
                                                        </p>
                                                    </div>
                                                    <div class="col-auto actions">
                                                        <div class="dropdown" data-toggle="dropdown">
                                                            <a href="#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="far fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item">Refresh</a>
                                                                <a href="#" class="dropdown-item">Manage Widgets</a>
                                                                <a href="#" class="dropdown-item">Settings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3 border shadow-none">
                                            <div class="px-3 py-3">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <img alt="Image placeholder" src="/assets/dist/img/doc.png" class="img-fluid" style="width: 40px;">
                                                    </div>
                                                    <div class="col ml-n2">
                                                        <h6 class="mb-0">
                                                            <a href="#!">product-guidelines.doc</a>
                                                        </h6>
                                                        <p class="card-text small text-muted">
                                                            87 KB
                                                        </p>
                                                    </div>
                                                    <div class="col-auto actions">
                                                        <div class="dropdown" data-toggle="dropdown">
                                                            <a href="#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="far fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item">Refresh</a>
                                                                <a href="#" class="dropdown-item">Manage Widgets</a>
                                                                <a href="#" class="dropdown-item">Settings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3 border shadow-none">
                                            <div class="px-3 py-3">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <img alt="Image placeholder" src="/assets/dist/img/avi.png" class="img-fluid" style="width: 40px;">
                                                    </div>
                                                    <div class="col ml-n2">
                                                        <h6 class="mb-0">
                                                            <a href="#!">banner-video.avi</a>
                                                        </h6>
                                                        <p class="card-text small text-muted">
                                                            23 MB
                                                        </p>
                                                    </div>
                                                    <div class="col-auto actions">
                                                        <div class="dropdown" data-toggle="dropdown">
                                                            <a href="#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="far fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item">Refresh</a>
                                                                <a href="#" class="dropdown-item">Manage Widgets</a>
                                                                <a href="#" class="dropdown-item">Settings</a>
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
                    </div><!--/.body content-->
                </div><!--/.main content-->
                <?php include($_SERVER['DOCUMENT_ROOT'].'/application/views/footer.php'); ?>
                <div class="overlay"></div>
            </div><!--/.wrapper-->
        </div>
        <!--Global script(used by all pages)-->
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/assets/plugins/jQuery/jquery-3.4.1.min.js"></script>
        <script src="/assets/dist/js/popper.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/plugins/metisMenu/metisMenu.min.js"></script>
        <script src="/assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <!-- Third Party Scripts(used by this page)-->
        
        <script src="/assets/plugins/modals/classie.js"></script>
        <script src="/assets/plugins/modals/modalEffects.js"></script>
        <!--Page Active Scripts(used by this page)-->

        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>  

    </body>

</html>