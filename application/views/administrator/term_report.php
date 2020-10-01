<!doctype html>
<html lang="en">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
        <meta name="author" content="Bdtask">
        <title>GSS Kuje - Government Secoundary School, Kuje</title>
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="assets/dist/img/favicon.png"> -->
        <!--Global Styles(used by all pages)-->
        <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="/assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
        <link href="/assets/plugins/typicons/src/typicons.min.css" rel="stylesheet">
        <link href="/assets/plugins/themify-icons/themify-icons.min.css" rel="stylesheet">
        <!--Third party Styles(used by this page)--> 
        <link href="/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                   <?php
                        include($_SERVER['DOCUMENT_ROOT'].'/application/views/topbar.php')
                    ?>
                   <!--/.navbar-->
                    <!--Content Header (Page header)-->
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="/index.php/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Reports</a></li>
                                <li class="breadcrumb-item active">Broadsheet</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <!-- <div class="header-icon text-success mr-3"><i class="typcn typcn-puzzle-outline"></i></div> -->
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Term Report</h1>
                                    <small>Generate termly reports </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)--> 
                    <div class="body-content">
                        <!--HTML (DOM) sourced data-->
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">


                                    <div>
                                        
                                    </div>
                                    <!-- <div class="text-right">
                                        <div class="actions">
                                            <a href="/index.php/schedules/add_exam">
                                                <button type="button" class="btn btn-labeled btn-success mb-2 mr-1">
                                                    <span class="btn-label"><i class="fas fa-plus"></i></span>Add New
                                                </button>
                                            </a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <div class="form-group">
                                                <!-- <label for="first_name" class="font-weight-600">Academic Session</label> -->
                                                <select class="form-control" id="session">
                                                    <option>Select Session</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <div class="form-group">
                                                <!-- <label for="last_name" class="font-weight-600">Academic Term</label> -->
                                                <select class="form-control" id="session">
                                                    <option>Select Term</option>
                                                </select>                                                    </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <div class="form-group form-check">
                                                <!-- <label class="font-weight-600"  for="middle_name">Class level</label> -->
                                                <select class="form-control" id="class_levels">
                                                    <option>Select level</option>
                                                </select>                                                    
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <div class="form-group form-check">
                                                <!-- <label class="font-weight-600"  for="middle_name">Classroom</label> -->
                                                <select class="form-control" id="classrooms">
                                                    <option>Select Classroom</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <div class="form-group form-check">
                                            <!-- <label class="font-weight-600"  for="middle_name"> &nbsp; </label> -->
                                                <button type="button" class="btn btn-labeled btn-success mb-2 mr-1">
                                                    <span class="btn-label"><i class="fas fa-redo-alt"></i></span>Generate 
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
        <script src="/assets/plugins/datatables/dataTables.min.js"></script>
        <script src="/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="/assets/plugins/datatables/data-sources.active.js"></script>
        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>
    </body>

</html>