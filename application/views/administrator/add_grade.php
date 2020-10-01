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
        <!-- <link rel="shortcut icon" href="/assets/dist/img/favicon.png"> -->
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
                    <?php
                        include($_SERVER['DOCUMENT_ROOT'].'/application/views/topbar.php'); 
                        //loadmenu($user_type, $first_name, $last_name, $username);
                    ?>
                    <!--/.navbar-->
                    <!--Content Header (Page header)-->
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="/index.php/dashboard">Home</a></li>
                                <li class="breadcrumb-item"><a href="/index.php/grades">Grades</a></li>
                                <li class="breadcrumb-item active">Add Grade</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <!-- <div class="header-icon text-success mr-3"><i class="typcn typcn-puzzle-outline"></i></div> -->
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Add Grade</h1>
                                    <small>Complete the form below to add a new grade</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)--> 
                    <div class="body-content">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="fs-17 font-weight-600 mb-0 text-success">Grading Schemes</h6>
                                    </div>
                                    <div class="text-right">
                                        <div class="actions">
                                            <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                <!-- <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Refresh</a>
                                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                                    <a href="#" class="dropdown-item">Settings</a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                
                                <div class="form-group row">
                                <input type="hidden" name="_token" value="o9sLxccHEU35Z0xMRQ9NkkHS1vpamF55Od4TARj5">                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="name">Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="name" value="" required maxlength="255">
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="marks_distribution_types">Grading Rules<span class="text-danger">*</span>
                                    </label>
                                    <table class="table table-striped table-bordered haveForm">
                                        <thead>
                                        <tr>
                                            <th>
                                                Grade
                                            </th>
                                            <th>
                                                Point
                                            </th>
                                            <th>
                                                Marks From
                                            </th>
                                            <th>
                                                Marks Upto
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                                                                                                        <tr>
                                                    <td>
                                                        <span>A+</span>
                                                        <input type="hidden" name="grade[]" value="1">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="point[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_from[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_upto[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td>
                                                        <span>A</span>
                                                        <input type="hidden" name="grade[]" value="2">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="point[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_from[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_upto[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td>
                                                        <span>A-</span>
                                                        <input type="hidden" name="grade[]" value="3">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="point[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_from[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_upto[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td>
                                                        <span>B</span>
                                                        <input type="hidden" name="grade[]" value="4">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="point[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_from[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_upto[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td>
                                                        <span>C</span>
                                                        <input type="hidden" name="grade[]" value="5">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="point[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_from[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_upto[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td>
                                                        <span>D</span>
                                                        <input type="hidden" name="grade[]" value="6">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="point[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_from[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_upto[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td>
                                                        <span>F</span>
                                                        <input type="hidden" name="grade[]" value="7">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="point[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_from[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="marks_upto[]" value="0" placeholder="" required min="0">
                                                    </td>
                                                </tr>
                                                                                    </tbody>
                                    </table>
                                    <span class="text-danger"></span>
                                    <span class="text-danger"></span>
                                    <span class="text-danger"></span>
                                    <span class="text-danger"></span>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!-- /.box-body -->
                    
                        </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary mr-1">Submit</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
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
        <!-- <script src="/assets/plugins/jQuery-mask-plugin/jquery.mask.min.js"></script>
        <script src="/assets/plugins/jQuery-mask-plugin/examples.js"></script> -->
        <!--Page Active Scripts(used by this page)-->

        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>
    </body>

</html>