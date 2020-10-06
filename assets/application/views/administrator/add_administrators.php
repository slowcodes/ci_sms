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
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Administrators</a></li>
                                <li class="breadcrumb-item active">Add New </li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <!-- <div class="header-icon text-success mr-3"><i class="typcn typcn-puzzle-outline"></i></div> -->
                                <div class="media-body">
                                    <h1 class="font-weight-bold">New System Administrator</h1>
                                    <small>System Administrator have exclusive rights to all system features and accounts</small>
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
                                        <!-- <h6 class="fs-17 font-weight-600 mb-0">Free Bootstrap Wizard</h6> -->
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
                                <div class="row justify-content-center">
                                    <div class="col-xl-6 text-center">
                                        <form method="post" class="f1">
                                            <h3 class="mb-1 font-weight-600">Register a New Administrator</h3>
                                            <p class="mb-5">Fill in the form to get instant access</p>
                                            <div class="f1-steps">
                                                <div class="f1-progress">
                                                    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                                                </div>
                                                <div class="f1-step active">
                                                    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                                    <p>about</p>
                                                </div>
                                                <div class="f1-step">
                                                    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                                    <p>account</p>
                                                </div>
                                                <div class="f1-step">
                                                    <div class="f1-step-icon"><i class="fab fa-twitter"></i></div>
                                                    <p>social</p>
                                                </div>
                                            </div>
                                            <fieldset>
                                                <h5 class="mb-3 font-weight-600">Provide information about the Administrator:</h5>
                                                <div class="form-group">
                                                    <label class="sr-only" for="f1-first-name">First name</label>
                                                    <input type="text" name="f1-first-name" placeholder="First name..." class="form-control" id="f1-first-name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="f1-last-name">Last name</label>
                                                    <input type="text" name="f1-last-name" placeholder="Last name..." class="form-control" id="f1-last-name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="f1-about-yourself">About yourself</label>
                                                    <textarea name="f1-about-yourself" placeholder="About yourself..." 
                                                              class="form-control" id="f1-about-yourself" rows="5"></textarea>
                                                </div>
                                                <div class="f1-buttons">
                                                    <button type="button" class="btn btn-success btn-next">Next</button>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <h5 class="mb-3 font-weight-600">Set up your account:</h5>
                                                <div class="form-group">
                                                    <label class="sr-only" for="f1-email">Email</label>
                                                    <input type="text" name="f1-email" placeholder="Email..." class="form-control" id="f1-email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="f1-password">Password</label>
                                                    <input type="password" name="f1-password" placeholder="Password..." class="form-control" id="f1-password">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="f1-repeat-password">Repeat password</label>
                                                    <input type="password" name="f1-repeat-password" placeholder="Repeat password..." 
                                                           class="form-control" id="f1-repeat-password">
                                                </div>
                                                <div class="f1-buttons">
                                                    <button type="button" class="btn btn-previous">Previous</button>
                                                    <button type="button" class="btn btn-success btn-next">Next</button>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <h5 class="mb-3 font-weight-600">Social media profiles:</h5>
                                                <div class="form-group">
                                                    <label class="sr-only" for="f1-facebook">Facebook</label>
                                                    <input type="text" name="f1-facebook" placeholder="Facebook..." class="form-control" id="f1-facebook">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="f1-twitter">Twitter</label>
                                                    <input type="text" name="f1-twitter" placeholder="Twitter..." class="form-control" id="f1-twitter">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="f1-google-plus">Google plus</label>
                                                    <input type="text" name="f1-google-plus" placeholder="Google plus..." class="form-control" id="f1-google-plus">
                                                </div>
                                                <div class="f1-buttons">
                                                    <button type="button" class="btn btn-previous">Previous</button>
                                                    <button type="submit" class="btn btn-success btn-submit">Submit</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.body content-->
                </div><!--/.main content-->
                <?php
                    include($_SERVER['DOCUMENT_ROOT'].'/application/views/footer.php');
                ?>
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
        <script src="/assets/plugins/bootstrap-wizard/jquery.backstretch.min.js"></script>
        <script src="/assets/plugins/bootstrap-wizard/form.scripts.js"></script>
        <!--Page Active Scripts(used by this page)-->

        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>
    </body>

</html>