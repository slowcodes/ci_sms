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
        <link href="/assets/plugins/icheck/skins/all.css" rel="stylesheet">
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
                                        <h6 class="avatar-name mb-0"><?php echo $first_name.' '.$last_name ?></h6>
                                        <span>Mailbox</span>
                                    </div>
                                </div>
                                <div class="inbox-toolbar btn-toolbar">
                                    <div class="btn-group">
                                        <a href="/index.php/mailbox/compose" class="btn btn-success"><i class="far fa-edit"></i></a>
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
                                                    <li class="nav-item active"><a href="#"><i class="fa fa-inbox"></i>Inbox <small class="label pull-right bg-green">0</small></a></li>
                                                    <li class="nav-item"><a href="/index.php/mailbox/compose"><i class="typcn typcn-mail"></i>Send Mail</a></li>
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
                                    <div class="col-sm-12 col-md-12 col-lg-9 p-0 inbox-mail">
                                        <div class="mailbox-content">
                                            <!-- <div data-href="mailbox_details.html" class="inbox_item d-flex align-items-center unread">
                                                <div class="i-check d-none d-xl-block my-0 mr-2">
                                                    <input tabindex="9" type="checkbox" id="square-checkbox-1">
                                                </div>
                                                <img src="/assets/dist/img/avatar.png" class="inbox-avatar d-none d-xl-block mr-2" alt="">
                                                <div class="inbox-avatar-text">
                                                    <h6 class="avatar-name fs-15 font-weight-600 mb-0">PHPClass</h6>
                                                    <div><span><strong>Early access: </strong><span> Added a new class: Login Class Fast Site.</span></span></div>
                                                </div>
                                                <div class="inbox-date d-none d-xl-block ml-auto">
                                                    <div class="date">9:27 AM</div>
                                                    <div><small>May 27th</small></div>
                                                </div>
                                            </div>
                                            <div data-href="mailbox_details.html" class="inbox_item d-flex align-items-center">
                                                <div class="i-check d-none d-xl-block my-0 mr-2">
                                                    <input tabindex="9" type="checkbox" id="square-checkbox-2">
                                                </div>
                                                <img src="/assets/dist/img/drupal-logos.png" class="inbox-avatar d-none d-xl-block mr-2" alt="">
                                                <div class="inbox-avatar-text">
                                                    <h6 class="avatar-name fs-15 font-weight-600 mb-0">Drupal Community</h6>
                                                    <div><span class="bg-red badge avatar-text">MAGAZINE</span><span><span>Welcome to the Drupal Community</span></span></div>
                                                </div>
                                                <div class="inbox-date d-none d-xl-block ml-auto">
                                                    <div class="date">12:39 AM</div>
                                                    <div><small>Apr 15th</small></div>
                                                </div>
                                            </div>
                                            <div data-href="mailbox_details.html" class="inbox_item d-flex align-items-center unread">
                                                <div class="i-check d-none d-xl-block my-0 mr-2">
                                                    <input tabindex="9" type="checkbox" id="square-checkbox-4">
                                                </div>
                                                <img src="/assets/dist/img/avatar4.png" class="inbox-avatar d-none d-xl-block mr-2" alt="">
                                                <div class="inbox-avatar-text">
                                                    <h6 class="avatar-name fs-15 font-weight-600 mb-0">Terri Rexer, S P N</h6>
                                                    <div><span><strong>Early access: </strong><span>Forget Google AdWords: Un-Limited Clicks fo</span></span></div>
                                                </div>
                                                <div class="inbox-date d-none d-xl-block ml-auto">
                                                    <div class="date">1:45 AM</div>
                                                    <div><small>Jan 29th</small></div>
                                                </div>
                                            </div>
                                            <div data-href="mailbox_details.html" class="inbox_item d-flex align-items-center unread">
                                                <div class="i-check d-none d-xl-block my-0 mr-2">
                                                    <input tabindex="9" type="checkbox" id="square-checkbox-3">
                                                </div>
                                                <img src="/assets/dist/img/linkedin-logo.png" class="inbox-avatar d-none d-xl-block mr-2" alt="">
                                                <div class="inbox-avatar-text">
                                                    <h6 class="avatar-name fs-15 font-weight-600 mb-0">LinkedIn</h6>
                                                    <div><span><span>Alireza: Nokia Networks, System Group and.</span></span></div>
                                                </div>
                                                <div class="inbox-date d-none d-xl-block ml-auto">
                                                    <div class="date">8:56 PM</div>
                                                    <div><small>Aug 19th</small></div>
                                                </div>
                                            </div>
                                            <div data-href="mailbox_details.html" class="inbox_item d-flex align-items-center">
                                                <div class="i-check d-none d-xl-block my-0 mr-2">
                                                    <input tabindex="9" type="checkbox" id="square-checkbox-5">
                                                </div>
                                                <img src="/assets/dist/img/wow-slider-logo.png" class="inbox-avatar d-none d-xl-block mr-2" alt="">
                                                <div class="inbox-avatar-text">
                                                    <h6 class="avatar-name fs-15 font-weight-600 mb-0">WOW Slider</h6>
                                                    <div><span>New WOW Slider v7.8 - 67% off</span></div>
                                                </div>
                                                <div class="inbox-date d-none d-xl-block ml-auto">
                                                    <div class="date">2:45 AM</div>
                                                    <div><small>Jun 29th</small></div>
                                                </div>
                                            </div>
                                            <div data-href="mailbox_details.html" class="inbox_item d-flex align-items-center unread">
                                                <div class="i-check d-none d-xl-block my-0 mr-2">
                                                    <input tabindex="9" type="checkbox" id="square-checkbox-6">
                                                </div>
                                                <img src="/assets/dist/img/avatar.png" class="inbox-avatar d-none d-xl-block mr-2" alt="">
                                                <div class="inbox-avatar-text">
                                                    <h6 class="avatar-name fs-15 font-weight-600 mb-0">Slaah Uddin</h6>
                                                    <div><span class="bg-green badge avatar-text">SOME LABEL</span><span><strong>Early access: </strong><span>The point of using Lorem Ipsum is that it has ....</span></span></div>
                                                </div>
                                                <div class="inbox-date d-none d-xl-block ml-auto">
                                                    <div class="date">8:45 AM</div>
                                                    <div><small>Apr 29th</small></div>
                                                </div>
                                            </div>
                                            <div data-href="mailbox_details.html" class="inbox_item d-flex align-items-center unread">
                                                <div class="i-check d-none d-xl-block my-0 mr-2">
                                                    <input tabindex="9" type="checkbox" id="square-checkbox-7">
                                                </div>
                                                <img src="/assets/dist/img/avatar2.png" class="inbox-avatar d-none d-xl-block mr-2" alt="">
                                                <div class="inbox-avatar-text">
                                                    <h6 class="avatar-name fs-15 font-weight-600 mb-0">Tahmina Akther</h6>
                                                    <div><span><strong>Early access: </strong><span>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</span></span></div>
                                                </div>
                                                <div class="inbox-date d-none d-xl-block ml-auto">
                                                    <div class="date">5:45 AM</div>
                                                    <div><small>Mar 17th</small></div>
                                                </div>
                                            </div>
                                            <div data-href="mailbox_details.html" class="inbox_item d-flex align-items-center">
                                                <div class="i-check d-none d-xl-block my-0 mr-2">
                                                    <input tabindex="9" type="checkbox" id="square-checkbox-8">
                                                </div>
                                                <img src="/assets/dist/img/avatar3.png" class="inbox-avatar border-violet d-none d-xl-block" alt="">
                                                <div class="inbox-avatar-text">
                                                    <h6 class="avatar-name fs-15 font-weight-600 mb-0">Jordyn Ouellet</h6>
                                                    <div><span class="bg-violet badge avatar-text">SOME LABEL</span><span><strong>Early access: </strong><span>Quam nulla porttitor massa id neque aliquam vestibulum.</span></span></div>
                                                </div>
                                                <div class="inbox-date d-none d-xl-block ml-auto">
                                                    <div class="date">3:45 AM</div>
                                                    <div><small>Feb 15th</small></div>
                                                </div>
                                            </div>
                                            <div data-href="mailbox_details.html" class="inbox_item d-flex align-items-center">
                                                <div class="i-check d-none d-xl-block my-0 mr-2">
                                                    <input tabindex="9" type="checkbox" id="square-checkbox-9">
                                                </div>
                                                <img src="/assets/dist/img/facebook-logo.png" class="inbox-avatar d-none d-xl-block mr-2" alt="">
                                                <div class="inbox-avatar-text">
                                                    <h6 class="avatar-name fs-15 font-weight-600 mb-0">Facebook</h6>
                                                    <div><span>Quam nulla porttitor massa id neque aliquam vestibulum morbi blandit.</span></div>
                                                </div>
                                                <div class="inbox-date d-none d-xl-block ml-auto">
                                                    <div class="date">1:45 AM</div>
                                                    <div><small>Jan 29th</small></div>
                                                </div>
                                            </div> -->
                                        </div>
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
        <script src="/assets/plugins/icheck/icheck.min.js"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="/assets/dist/js/pages/mailbox.active.js"></script>
        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>
    </body>
</html>