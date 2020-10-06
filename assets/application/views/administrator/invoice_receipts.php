<!doctype html>
<html lang="en">
    
<!-- Mirrored from bhulua.thememinister.com/ui_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 15:22:17 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
        <meta name="author" content="Bdtask">
        <title>SLMS - Government Secoundary School, Kuje</title>
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="/assets/dist/img/favicon.png"> -->
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
                        include($_SERVER['DOCUMENT_ROOT'].'/application/views/topbar.php'); 
                    ?><!--/.navbar-->
                    <!--Content Header (Page header)-->
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Finance</a></li>
                                <li class="breadcrumb-item active">Invoices &amp; Recipts</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <!-- <div class="header-icon text-success mr-3"><i class="typcn typcn-puzzle-outline"></i></div> -->
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Recipts & Invoices</h1>
                                    <small>Manage and create invoices &amp; reciepts </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)--> 
                    <div class="body-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--Basic Tabs-->
                                <div class="card mb-4">
                                    
                                    <div class="card-body">
                                        <div class="alert alert-info">Info! In rating student's behaviours & skills, select either 5 or 4 or 3 or 2 or 1 or 0, where 5 is the highest performance, 1 is the lowest performance and 0 means no rating. TA - Teacher Approval, AA - Admin/Manager Approval.</div>
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Invoices</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Recipts</a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                                            </li> -->
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <!-- <div class="card mb-4">
                                                    <div class="card-header"> -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                            
                                                            <div class="text-right">
                                                                <div class="actions">
                                                                    <a href="#">
                                                                        <button type="button" class="btn btn-labeled btn-warning mb-2 mr-1">
                                                                            <span class="btn-label"><i class="fas fa-plus"></i></span>Add Invoice
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!-- </div>
                                                </div> -->
                                                <div class="row">
                                                    <div class="table-responsive">
                                                        <table class="table display table-bordered table-striped table-hover sourced">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Invoice #</th>
                                                                    <th>Date Created</th>
                                                                    <th>Status</th>
                                                                    <th>Total</th>
                                                                    <th>Paid</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Invoice #</th>
                                                                    <th>Date Created</th>
                                                                    <th>Status</th>
                                                                    <th>Total</th>
                                                                    <th>Paid</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                
                                                <div class="table-responsive">
                                                    <table class="table display table-bordered table-striped table-hover sourced">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Receipt #</th>
                                                                <th>Assigned To</th>
                                                                <th>Date paid/refunded</th>
                                                                <th>Status</th>
                                                                <th>Amount paid/refunded</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Receipt #</th>
                                                                <th>Assigned To</th>
                                                                <th>Date paid/refunded</th>
                                                                <th>Status</th>
                                                                <th>Amount paid/refunded</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>

                                            </div>
                                            <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure officia elit do ipsum ullamco Lorem. 
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div><!--/.body content-->
                </div><!--/.main content-->
                <?php
                    include($_SERVER['DOCUMENT_ROOT'].'/application/views/footer.php')
                ?>
                <!--/.footer content-->
                <div class="overlay"></div>
            </div><!--/.wrapper-->
        </div>
        <!--Global script(used by all pages)-->
        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/assets/plugins/jQuery/jquery-3.4.1.min.js"></script>
        <script src="/assets/dist/js/popper.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/plugins/metisMenu/metisMenu.min.js"></script>
        <script src="/assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <!-- Third Party Scripts(used by this page)-->
        <script src="/assets/plugins/datatables/dataTables.min.js"></script>
        <script src="/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="/assets/plugins/datatables/data-sources.active.js"></script>
        <!--Page Active Scripts(used by this page)-->

        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>
    </body>

<!-- Mirrored from bhulua.thememinister.com/ui_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 15:22:17 GMT -->
</html>