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
                        <span><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="13766b727e637f7653747e727a7f3d707c7e">[email&#160;protected]</a></span>
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
                    <?php
                        include($_SERVER['DOCUMENT_ROOT'].'/application/views/topbar.php')
                    ?>
                <!--/.navbar-->
                    <div class="body-content">
                        <div class="mailbox">
                            <div class="mailbox-header d-flex align-items-center justify-content-between">
                                <div class="inbox-avatar-wrap d-flex align-items-center"><img src="/assets/dist/img/avatar-1.jpg" class="inbox-avatar border-green" alt="">
                                    <div class="inbox-avatar-text d-none d-sm-inline-block ml-3">
                                        <h6 class="avatar-name mb-0">Naeem Khan</h6>
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
                                    <div class="btn-group ml-1">
                                        <button type="button" class="btn btn-secondary" onclick="myFunction()"><span class="fa fa-print"></span></button>
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
                                    <div class="col-md-12 col-lg-9 p-0 inbox-mail">
                                        <div class="inbox-avatar-wrap p-3 border-btm d-sm-flex">
                                            <img src="/assets/dist/img/avatar5.png" class="inbox-avatar border-green mb-2 mb-sm-0" alt="">
                                            <div class="inbox-avatar-text ml-sm-3 mb-2 mb-sm-0">
                                                <div class="avatar-name"><strong>From: </strong>
                                                    Tanjil Ahmed - <em><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="770316191d1e1b28161f1a121337120f161a071b125914181a">[email&#160;protected]</a></em>
                                                </div>
                                                <div><small><strong>Subject: </strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry</small></div>
                                            </div>
                                            <div class="inbox-date ml-auto">
                                                <div><span class="badge badge-info">Opportunities</span></div>
                                                <div><small>June 5th, 08:41 AM</small></div>
                                            </div>
                                        </div>
                                        <div class="inbox-mail-details p-3">
                                            <p><strong>Hi Naeem,</strong></p>
                                            <p><span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that</span></p>
                                            <p><span>Maecenas sed enim ut sem viverra aliquet. Consectetur adipiscing elit ut aliquam purus sit amet luctus.</span><span>Bibendum est ultricies integer quis :</span></p>
                                            <div>
                                                <ul>
                                                    <li><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
                                                    <li><span>Quisque dictum lorem id tempus lacinia.</span></li>
                                                    <li><span>Aenean placerat metus eget dignissim sodales.</span></li>
                                                    <li><span>Vivamus pretium risus vitae nibh maximus bibendum.</span></li>
                                                    <li><span>Curabitur maximus neque eget elit fermentum, at sagittis elit gravida.</span></li>
                                                </ul>
                                                <blockquote><small><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</strong></small></blockquote>
                                            </div>
                                            <p><span>Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Pellentesque massa placerat duis ultricies.</span></p>
                                            <div><strong>Regards,</strong></div>
                                            <div><strong>Tanjil Ahmed</strong></div>
                                            <hr>
                                            <h5> <i class="fa fa-paperclip"></i> Attachments <span>(3)</span> </h5>
                                            <div class="row">
                                                <div class="col-3 col-lg-2">
                                                    <a href="#"><img class="img-thumbnail img-responsive" alt="attachment" src="/assets/dist/img/Zipper-icon.jpg"> </a>
                                                </div>
                                                <div class="col-3 col-lg-2">
                                                    <a href="#"><img class="img-thumbnail img-responsive" alt="attachment" src="/assets/dist/img/Zipper-icon.jpg"> </a>
                                                </div>
                                                <div class="col-3 col-lg-2">
                                                    <a href="#"><img class="img-thumbnail img-responsive" alt="attachment" src="/assets/dist/img/Zipper-icon.jpg"> </a>
                                                </div>
                                            </div>
                                            <div class="mt-3 border-all p-3">
                                                <p>click here to <a href="#">Reply</a> or <a href="compose.html">Forward</a></p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.body content-->
                </div><!--/.main content-->
                <?php include($_SERVER['DOCUMENT_ROOT'].'/application/views/footer.php') ?> 
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

</html>