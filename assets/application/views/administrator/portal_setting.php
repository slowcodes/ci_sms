<!doctype html>
<html lang="en">
    
<!-- Mirrored from bhulua.thememinister.com/ui_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 15:22:17 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
        <meta name="author" content="I-tech Solution">
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
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/application/views/topbar.php'); ?>
                    <!--/.navbar-->
                    <!--Content Header (Page header)-->
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="/index.php/dashboard">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                                <li class="breadcrumb-item active">Portal Settings</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <!-- <div class="header-icon text-success mr-3"><i class="typcn typcn-puzzle-outline"></i></div> -->
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Portal Settings</h1>
                                    <small>The setting configured in this console will be used globally with the portal. Current setting will reflect on result upload, fees payments, etc </small>
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
                                    <!-- <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Basic Tabs</h6>
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
                                        <!-- <p>Takes the basic nav from above and adds the <code>.nav-tabs</code> class to generate a tabbed interface.</p> -->
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Academic</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Report</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Finance</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Access</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            
                                        
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h6 class="fs-17 font-weight-600 mb-0">SESSIONS &amp; TERMS</h6>
                                                        <div class="form-row">
                                                            
                                                            <div class="col-md-4 mb-3">
                                                                <div class="form-group">
                                                                    <label for="profile" class="font-weight-600">Choose Profile</label>
                                                                    <select name="profile" id="profile" class="form-control">
                                                                        <option>School</option>
                                                                        <option>Personal</option>
                                                                    </select>   
                                                                </div>                                                     
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="form-group">
                                                                    <label for="session" class="font-weight-600">Set Session</label>
                                                                    <select name="session" id="profile" class="form-control">
                                                                        <option>2019/2020</option>
                                                                        <option>2020/2021</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="form-group form-check">
                                                                    <label class="font-weight-600"  for="term">Set Term</label>
                                                                    <select name="term" id="term" class="form-control">
                                                                        <option>First</option>
                                                                        <option>Secound</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <h6 class="fs-17 font-weight-600 mb-0">GRADES &amp; BNS RECORDS</h6>
                                                        <div class="form-row">
                                                            <div class="col-md-12 mb-3">
                                                                <div class="form-group">
                                                                    <label for="profile" class="font-weight-600 italics">Can be approved by</label>
                                                                    <select name="profile" id="profile" class="form-control">
                                                                        <option>Admin/Managers</option>
                                                                        <option>Admin/Managers/Teachers</option>
                                                                    </select>   
                                                                </div>                                                     
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">                        
                                                    <div>
                                                        <h6 class="fs-17 font-weight-600 mb-0">GRADING SYSTEM, ACADEMIC HEAD &amp; SCORE ROUNDUP</h6>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-row">
                                                            <div class="col-md-3 mb-3">
                                                                <div class="form-group">
                                                                    <label for="profile" class="font-weight-600 italics">Choose Level</label>
                                                                    <select name="profile" id="profile" class="form-control">
                                                                        <option>Secoundary School</option>
                                                                    </select>   
                                                                </div>                                                     
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <div class="form-group">
                                                                    <label for="profile" class="font-weight-600 italics">Choose Class</label>
                                                                    <select name="profile" id="profile" class="form-control">
                                                                        <option>All</option>
                                                                    </select>   
                                                                </div>                                                     
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <div class="form-group">
                                                                    <label for="profile" class="font-weight-600 italics">Set Class Grading System</label>
                                                                    <!-- <select name="profile" id="profile" class="form-control">
                                                                        <option>Secoundary School</option>
                                                                    </select>    -->
                                                                    DEFAULT GRADING SYSTEM
                                                                </div>                                                     
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <div class="form-group">
                                                                    <label for="profile" class="font-weight-600 italics">Set Class CAE System</label>
                                                                    DEFAULT CAE System
                                                                </div>                                                     
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-row">
                                                            <div class="col-md-3 mb-3">
                                                                <div class="form-group">
                                                                    <label for="academic_head" class="font-weight-600 italics">Set Academic Head</label>
                                                                    <select name="academic_head" id="profile" class="form-control">
                                                                        <option></option>
                                                                    </select>   
                                                                </div>                                                     
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <div class="form-group">
                                                                    <label for="roundup" class="font-weight-600 italics">Set Score Round Up</label>
                                                                    <select name="roundup" id="profile" class="form-control">
                                                                        <option>WHOLE</option>
                                                                        <option>ONE DECIMAL</option>
                                                                        <option>TWO DECIMAL</option>
                                                                        <option>THREE DECIMAL</option>
                                                                    </select>   
                                                                </div>                                                     
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">                        
                                                    <div>
                                                        <h6 class="fs-17 font-weight-600 mb-0">ACADEMIC SETTINGS FOR MANAGERS</h6>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-row">
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group">
                                                                    <label for="profile" class="font-weight-600 italics">Allow access to veiw academic/member records</label>
                                                                    <select name="profile" id="profile" class="form-control">
                                                                        <option></option>
                                                                    </select>   
                                                                </div>                                                     
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group">
                                                                    <label for="profile" class="font-weight-600 italics">Allow access to handle academic/members records/</label>
                                                                    <select name="profile" id="profile" class="form-control">
                                                                        <option>All</option>
                                                                    </select>   
                                                                </div>                                                     
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <button class="btn btn-primary" type="button" value="Update Portal Settings">Update Portal Settings</button>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <!-- Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis. -->
                                            </div>
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                <!-- Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure officia elit do ipsum ullamco Lorem.  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div><!--/.body content-->
                </div><!--/.main content-->
                <?php include($_SERVER['DOCUMENT_ROOT'].'/application/views/footer.php'); ?><!--/.footer content-->
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

<!-- Mirrored from bhulua.thememinister.com/ui_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 15:22:17 GMT -->
</html>