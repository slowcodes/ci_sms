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
                                <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                                <li class="breadcrumb-item active">Tabs</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <!-- <div class="header-icon text-success mr-3"><i class="typcn typcn-puzzle-outline"></i></div> -->
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Behaviours & Skills</h1>
                                    <small>Manage behaviours &amp; record student's behaviours</small>
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
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Manage Behaviours</h6>
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
                                        <div class="alert alert-info">Info! In rating student's behaviours & skills, select either 5 or 4 or 3 or 2 or 1 or 0, where 5 is the highest performance, 1 is the lowest performance and 0 means no rating. TA - Teacher Approval, AA - Admin/Manager Approval.</div>
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Behaviour &amp; Skill System</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Record Behaviour &amp; Skill</a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                                            </li> -->
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="card mb-4">
                                                            <div class="card-header">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <h6 class="fs-17 font-weight-600 mb-0">Available Behaviours/Skills</h6>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped">
                                                                        <thead class="thead-dark">
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Skills/Behaviour</th>
                                                                                
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-lg-6">
                                                        <div class="card mb-4">
                                                            <div class="card-header">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <h6 class="fs-17 font-weight-600 mb-0">Add Behaviours/Skills</h6>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <!-- <div class="actions">
                                                                            <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <a href="#" class="dropdown-item">Refresh</a>
                                                                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                                                                    <a href="#" class="dropdown-item">Settings</a>
                                                                                </div>
                                                                            </div>
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <!-- <p>You can activate a tab or pill navigation without writing any JavaScript by simply specifying <code>data-toggle="tab"</code> or <code>data-toggle="pill"</code> on an element. Use these data attributes on <code>.nav-tabs</code> or <code>.nav-pills</code>.</p> -->
                                                                <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" id="pills-home2-tab" data-toggle="pill" href="#pills-home2" role="tab" aria-controls="pills-home2" aria-selected="true">Skills</a>
                                                                    </li>
                                                                    
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="pills-contact2-tab" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact2" aria-selected="false">Behaviours</a>
                                                                    </li>
                                                                    
                                                                </ul>



                                                                <div class="tab-content" id="pills-tabContent2">
                                                                    <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home2-tab">
                                                                        <div class="form-group row">
                                                                            <label for="skill_category" class="col-lg-3 col-sm-12 col-form-label  font-weight-600">Category</label>
                                                                            <div class="col-lg-11 col-md-12 col-sm-12">
                                                                                <select type="text" class="form-control" id="skill_category">
                                                                                    <option>ARTS & CRAFT </option>
                                                                                    <option>ENTERTAINMENT </option>
                                                                                    <option>FLUENCY </option>
                                                                                    <option>HAND WRITING </option>
                                                                                    <option>INDOOR GAMES </option>
                                                                                    <option>OUTDOOR GAMES </option>
                                                                                    <option>TOOL HANDLING </option>
                                                                                    <option>OTHERS </option>
                                                                                </select>
                                                                                <!-- <div class="text-muted">Custom date format: <code>mm/dd/yyyy</code></div> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="skill" class="col-lg-3 col-sm-12 col-form-label  font-weight-600">New skill </label>
                                                                            <div class="col-lg-11 col-md-12 col-sm-12">
                                                                                <input type="text" class="form-control" id="skill"/>
                                                                                <!-- <div class="text-muted">Custom time format: <code>00:00:00</code></div> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-footer">
                                                                            <button type="button" class="btn btn-primary mr-1">Submit</button>
                                                                            <button type="button" class="btn btn-danger">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact2-tab">
                                                                        <div class="form-group row">
                                                                            <label for="skill_category" class="col-lg-3 col-sm-12 col-form-label  font-weight-600">Category</label>
                                                                            <div class="col-lg-11 col-md-12 col-sm-12">
                                                                                <select type="text" class="form-control" id="skill_category">
                                                                                    <option>NEATNESS </option>
                                                                                    <option>PUNTUALITY </option>
                                
                                                                                </select>
                                                                                <!-- <div class="text-muted">Custom date format: <code>mm/dd/yyyy</code></div> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="skill" class="col-lg-3 col-sm-12 col-form-label  font-weight-600">Behaviours </label>
                                                                            <div class="col-lg-11 col-md-12 col-sm-12">
                                                                                <input type="text" class="form-control" id="skill"/>
                                                                                <!-- <div class="text-muted">Custom time format: <code>00:00:00</code></div> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-footer">
                                                                            <button type="button" class="btn btn-primary mr-1">Submit</button>
                                                                            <button type="button" class="btn btn-danger">Cancel</button>
                                                                        </div>                                                                
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="card mb-4">
                                                            <div class="card-header">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <h6 class="fs-17 font-weight-600 mb-0">My Students</h6>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                
                                                                <div class="form-group row">
                                                                    <label for="skill_category" class="col-lg-3 col-sm-12 col-form-label  font-weight-600">Classrooms</label>
                                                                    <div class="col-lg-11 col-md-12 col-sm-12">
                                                                        <select type="text" class="form-control" id="classes">
                                                                            <option>Select Class </option>
                                                                        </select>
                                                                        <!-- <div class="text-muted">Custom date format: <code>mm/dd/yyyy</code></div> -->
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-lg-6">
                                                        <div class="card mb-4">
                                                            <div class="card-header">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <h6 class="fs-17 font-weight-600 mb-0">Add Behaviours/Skills</h6>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <!-- <div class="actions">
                                                                            <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <a href="#" class="dropdown-item">Refresh</a>
                                                                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                                                                    <a href="#" class="dropdown-item">Settings</a>
                                                                                </div>
                                                                            </div>
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped">
                                                                        <thead class="thead-dark">
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Behaviour</th>
                                                                                
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <div class="table-responsive">
                                                                    <table class="table table-striped">
                                                                        <thead class="thead-dark">
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Skills</th>
                                                                                
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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

        <!--Page Active Scripts(used by this page)-->

        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>
    </body>

<!-- Mirrored from bhulua.thememinister.com/ui_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 15:22:17 GMT -->
</html>