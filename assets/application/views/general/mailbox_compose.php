<!doctype html>
<html lang="en">
    
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
        <link href="/assets/plugins/summernote/summernote.css" rel="stylesheet">
        <link href="/assets/plugins/summernote/summernote-bs4.css" rel="stylesheet">
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
                ?>
            <!--/.navbar-->
                    <div class="body-content">
                        <div class="mailbox">
                            <div class="mailbox-header d-flex align-items-center justify-content-between">
                                <div class="inbox-avatar-wrap d-flex align-items-center"><img src="/assets/dist/img/avatar-1.jpg" class="inbox-avatar border-green" alt="">
                                    <div class="inbox-avatar-text d-none d-sm-inline-block ml-3">
                                        <h6 class="avatar-name mb-0"><?php $first_name. ' '. $last_name ?></h6>
                                        <span>Mailbox</span>
                                    </div>
                                </div>
                                <div class="inbox-toolbar btn-toolbar">
                                    <div class="btn-group">
                                        <a href="compose.html" class="btn btn-success"><i class="far fa-edit"></i></a>
                                    </div>
                                    <div class="btn-group ml-1">
                                        <a href="#" class="btn btn-secondary"><span class="fa fa-reply"></span></a>
                                        <a href="#" class=" btn btn-secondary d-none d-lg-block"><span class="fa fa-reply-all"></span></a>
                                        <a href="#" class="btn btn-secondary"><span class="fa fa-share"></span></a>
                                    </div>
                                    <div class="btn-group ml-1 d-none d-lg-flex">
                                        <button type="button" class="text-center btn btn-danger"><span class="fa fa-exclamation"></span></button>
                                        <button type="button" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="mailbox-body">
                                <div class="row m-0">
                                    <div class="col-lg-3 p-0 inbox-nav d-none d-lg-block">
                                        <div class="mailbox-sideber">
                                            <div class="profile-usermenu">
                                                <h6 class="fs-13 font-weight-bold">Mailbox</h6>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item active"><a href="#"><i class="fa fa-inbox"></i>Inbox <small class="label pull-right bg-green">61</small></a></li>
                                                    <li class="nav-item"><a href="compose.html"><i class="typcn typcn-mail"></i>Send Mail</a></li>
                                                    <li class="nav-item"><a href="#"><i class="typcn typcn-star-outline"></i>Starred</a></li>
                                                    <li class="nav-item"><a href="#"><i class="typcn typcn-trash"></i>Tresh </a></li>
                                                    <li class="nav-item"><a href="#"><i class="typcn typcn-attachment-outline"></i>Attachments</a></li>
                                                </ul>
                                                <h6 class="fs-13 font-weight-bold">Other</h6>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item"><a href="#"><i class="typcn typcn-warning"></i>Spam</a></li>
                                                    <li class="nav-item"><a href="#"><i class="typcn typcn-clipboard"></i>Draft</a></li>
                                                </ul>
                                                <h6 class="fs-13 font-weight-bold">Tags</h6>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item"><a href="#"><i class="typcn typcn-media-record text-success"></i>#sometag</a></li>
                                                    <li class="nav-item"><a href="#"><i class="typcn typcn-media-record text-warning"></i>#anothertag</a></li>
                                                    <li class="nav-item"><a href="#"><i class="typcn typcn-media-record text-danger"></i>#anotheronetag</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-9 p-0 inbox-mail p-3">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-md-2 col-form-label text-right">To :</label>
                                            <div class="col-sm-9 col-md-10">
                                                <input class="form-control" type="text"  id="to">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-md-2 col-form-label text-right">Cc :</label>
                                            <div class="col-sm-9 col-md-10">
                                                <input class="form-control" type="text" id="cc">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-md-2 col-form-label text-right">Subject :</label>
                                            <div class="col-sm-9 col-md-10">
                                                <input class="form-control" type="text" id="subjejct">
                                            </div>
                                        </div>
                                        <!-- summernote -->
                                        <div id="summernote"></div>
                                        <div class="mt-3">
                                            <div class="hidden-xs hidden-sm btn-group">
                                                <button type="button" class="text-center btn btn-default">DISCARD</button>
                                                <button type="button" class="btn btn-default">SAVE</button>
                                            </div>
                                            <div class="btn-group pull-right">
                                                <button type="button" class="btn btn-success">SEND</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.body content-->
                </div><!--/.main content-->
                <footer class="footer-content">
                    <div class="footer-text d-flex align-items-center justify-content-between">
                        <div class="copy">© 2018 Bdtask Responsive Bootstrap 4 Dashboard Template</div>
                        <div class="credit">Designed by: <a href="#">Bdtask</a></div>
                    </div>
                </footer><!--/.footer content-->
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
        <script src="/assets/plugins/summernote/summernote.min.js"></script>
        <script src="/assets/plugins/summernote/summernote-bs4.min.js"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="/assets/dist/js/pages/compose.active.js"></script>
        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>
    </body>

</html>