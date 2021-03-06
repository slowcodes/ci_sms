<!doctype html>
<html lang="en">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
        <meta name="author" content="Bdtask">
        <title> SLMS - Government Secoundary School, Kuje</title>
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
            <?php
                include($_SERVER['DOCUMENT_ROOT'].'/application/views/menu/getmenu.php'); 
                loadmenu($user_type, $first_name, $last_name, $username);
            ?>
            <!-- Page Content  -->
            <div class="content-wrapper">
                <div class="main-content">
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/application/views/topbar.php'); ?>
                    <!--/.navbar-->
                    <!--Content Header (Page header)-->
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="/index.php/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/index.php/settings">Settings</a></li>
                                <li class="breadcrumb-item active">School Setting</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <!-- <div class="header-icon text-success mr-3"><i class="typcn typcn-puzzle-outline"></i></div> -->
                                <div class="media-body">
                                    <h1 class="font-weight-bold">School Settings</h1>
                                    <small>Provide basic information about your school</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)--> 
                    <div class="body-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <!-- <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Basic setting</h6>
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
                                    </div> -->
                                    <div class="card-body">
                                        
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">School Name</th>
                                                        <td>Government Secoundary School, Kuje</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">RC Number</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Motto</th>
                                                        <td></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">School Type</th>
                                                        <td>Secoundary School</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Date of Establishment</th>
                                                        <td></td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Owned By</th>
                                                        <td>Government</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">State</th>
                                                        <td>Federal Capital Territory</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">City</th>
                                                        <td>Kuje</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Location Timezone</th>
                                                        <td>Lagos/West African Time</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Phone Number</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Email Address</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Facebook ID</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Website</th>
                                                        <td>htts://gsskuje.com.ng</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Twitter Handle</th>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <!-- <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Basic example</h6>
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
                                    </div> -->
                                    <div class="card-body">
                                        
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                
                                                <tbody>
                                                    <tr>
                                    
                                                        <th scope="row">School Logo</th>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td><img src="/assets/dist/img/logo.png" /></td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <th scope="row">School Vision</th>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td>Add your broad vision</td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <th scope="row">School Mission</th>
                                                    </tr>

                                                    <tr>
                                                        
                                                        <td>Add your mission statement</td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <th scope="row">About School</th>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <th scope="row">Account Number</th>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> 
                    </div><!--/.body content-->
                </div><!--/.main content-->
                <?php include($_SERVER['DOCUMENT_ROOT'].'/application/views/footer.php'); ?>
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
        <script src="/assets/plugins/sparkline/sparkline.min.js"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="/assets/dist/js/pages/bootstrap-table.active.js"></script>
        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>
    </body>

</html>