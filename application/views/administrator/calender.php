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
        <link href="/assets/plugins/fullcalendar/packages/core/main.min.css" rel="stylesheet">
        <link href="/assets/plugins/fullcalendar/packages/daygrid/main.min.css" rel="stylesheet">
        <link href="/assets/plugins/fullcalendar/packages/timegrid/main.min.css" rel="stylesheet">
        <link href="/assets/plugins/fullcalendar/packages/list/main.min.css" rel="stylesheet">
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
                                <!-- <li class="breadcrumb-item"><a href="#">Calendar</a></li> -->
                                <li class="breadcrumb-item active">Events</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <div class="header-icon text-success mr-3"><i class="typcn typcn-calendar-outline"></i></div>
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Event Management</h1>
                                    <small>Manage and schedule events for your institution.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)--> 
                    <div class="body-content">
                        <div class="row">
                            <div class="col-lg-12 col-xl-3">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div id='external-events'>
                                            <h4 class="fs-19 mb-3">School Events</h4>
                                            <div id='external-events-list'>
                                                <div class='fc-event'>My Event 1</div>
                                                <div class='fc-event'>My Event 2</div>
                                                <div class='fc-event'>My Event 3</div>
                                                <div class='fc-event'>My Event 4</div>
                                                <div class='fc-event'>My Event 5</div>
                                            </div>
                                            <div class="mt-3">
                                                <input type='checkbox' id='drop-remove' />
                                                <label for='drop-remove'>remove after drop</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h4 class="fs-19 mb-3">FullCalendar</h4>
                                        <p> is a jQuery plugin that provides a full-sized, drag &amp; drop calendar like the one below. It uses AJAX to fetch events on-the-fly for each month and is
                                            easily configured to use your own feed format (an extension is provided for Google Calendar).</p>
                                        <p><a href="https://fullcalendar.io/" target="_blank">FullCalendar documentation</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- calender -->
                                        <div id='calendar'></div>
                                    </div>
                                </div>
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
        <script src="/assets/plugins/fullcalendar/packages/core/main.min.js"></script>
        <script src="/assets/plugins/fullcalendar/packages/interaction/main.min.js"></script>
        <script src="/assets/plugins/fullcalendar/packages/daygrid/main.min.js"></script>
        <script src="/assets/plugins/fullcalendar/packages/timegrid/main.min.js"></script>
        <script src="/assets/plugins/fullcalendar/packages/list/main.min.js"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="/assets/plugins/fullcalendar/fullcalendar.active.js"></script>
        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>
    </body>

</html>