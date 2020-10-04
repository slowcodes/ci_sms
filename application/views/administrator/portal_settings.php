<!doctype html>
<html lang="en">
    
<!-- Mirrored from bhulua.thememinister.com/user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 15:24:53 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
        <meta name="author" content="Bdtask">
        <title>SLMS - Government Secoundary School, Kuje</title>
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/dist/img/favicon.png">
        <!--Global Styles(used by all pages)-->
        <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="/assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
        <link href="/assets/plugins/typicons/src/typicons.min.css" rel="stylesheet">
        <link href="/assets/plugins/themify-icons/themify-icons.min.css" rel="stylesheet">
        <!--Third party Styles(used by this page)--> 

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
            <nav class="sidebar sidebar-bunker">
                <div class="sidebar-header">
                    <!--<a href="index.html" class="logo"><span>bd</span>task</a>-->
                    <a href="index-2.html" class="logo"><img src="/assets/dist/img/logo.png" alt=""></a>
                </div><!--/.sidebar header-->
                <div class="profile-element d-flex align-items-center flex-shrink-0">
                    <div class="avatar online">
                        <img src="/assets/dist/img/avatar-1.jpg" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="profile-text">
                        <h6 class="m-0">Naeem Khan</h6>
                        <span><a href="/cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="2d48554c405d41486d4a404c4441034e4240">[email&#160;protected]</a></span>
                    </div>
                </div><!--/.profile element-->
                <form class="search sidebar-form" action="#" method="get" >
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search...">
                        <i class="typcn typcn-zoom-outline search__helper" data-sa-action="search-close"></i>
                    </div>
                </form><!--/.search-->
                <div class="sidebar-body">
                <?php
                    include($_SERVER['DOCUMENT_ROOT'].'/application/views/menu/getmenu.php'); 
                    loadmenu($user_type, $first_name, $last_name, $username);
                ?>
                </div><!-- sidebar-body -->
            </nav>
            <!-- Page Content  -->
            <div class="content-wrapper">
                <div class="main-content">
                     
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/application/views/topbar.php'); ?>
                    <!--/.navbar-->
                    <div class="body-content">
                        <div class="row">
                            <div class="col-sm-12 col-xl-8">
                                <div class="media d-flex m-1 ">
                                    <div class="align-left p-1">
                                        <a href="#" class="profile-image">
                                            <img src="/assets/dist/img/avatar-1.jpg" class="avatar avatar-xl rounded-circle img-border height-100" alt="Card image">
                                        </a>
                                    </div>
                                    <div class="media-body text-left ml-3 mt-1">
                                        <h3 class="font-large-1 white">Mozammel Hoque
                                            <span class="font-medium-1 white">(Project manager)</span>
                                        </h3>
                                        <p class="white">
                                            <i class="fas fa-map-marker-alt"></i> New York, USA </p>
                                        <p class="white text-bold-300 d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed odio risus. Integer sit amet dolor elit. Suspendisse
                                            ac neque in lacus venenatis convallis. Sed eu lacus odio</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item pr-1 line-height-1">
                                                <a href="#" class="fs-26 ">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item pr-1 line-height-1">
                                                <a href="#" class="fs-26 ">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item line-height-1">
                                                <a href="#" class="fs-26 ">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-600">Birthday</h6>
                                            </div>
                                            <div class="col-auto">
                                                <time class="fs-13 font-weight-600 text-muted" datetime="1988-10-24">10/24/88</time>
                                            </div>
                                        </div> 
                                        <hr>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-600">Joined</h6>
                                            </div>
                                            <div class="col-auto">
                                                <time class="fs-13 font-weight-600 text-muted" datetime="2018-10-28">10/24/18</time>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-600">Location</h6>
                                            </div>
                                            <div class="col-auto">
                                                <span class="fs-13 font-weight-600 text-muted">Los Angeles, CA</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-600">Website</h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="fs-13 font-weight-600">themes.getbootstrap.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Work Progress</h6>
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
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Edit Profile</h6>
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
                                        <form>
                                            <div class="row">
                                                <div class="col-md-5 pr-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Company (disabled)</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 px-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Username</label>
                                                        <input type="text" class="form-control" placeholder="Username" value="michael23">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pl-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Email address</label>
                                                        <input type="email" class="form-control" placeholder="mike@email.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 pr-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">First Name</label>
                                                        <input type="text" class="form-control" placeholder="Company" value="Mike">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pl-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Last Name</label>
                                                        <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Address</label>
                                                        <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">City</label>
                                                        <input type="text" class="form-control" placeholder="City" value="Mike">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 px-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Country</label>
                                                        <input type="text" class="form-control" placeholder="Country" value="Andrew">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pl-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Postal Code</label>
                                                        <input type="number" class="form-control" placeholder="ZIP Code">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">About Me</label>
                                                        <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-fill btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.body content-->
                </div><!--/.main content-->
                <?php

                    include($_SERVER['DOCUMENT_ROOT'].'/application/views/footer.php');
                ?>
                <!--/.footer content-->
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

        <!--Page Active Scripts(used by this page)-->

        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>
    </body>

<!-- Mirrored from bhulua.thememinister.com/user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 15:24:53 GMT -->
</html>