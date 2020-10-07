<nav class="sidebar sidebar-bunker">
                <div class="sidebar-header">
                    <!--<a href="index.html" class="logo"><span>bd</span>task</a>-->
                    <a href="/index.php/dashboard/" class="logo text-success"><img src="/assets/dist/img/logo.png" alt=""> GSS Kuje</a>
                </div><!--/.sidebar header-->
                <div class="profile-element d-flex align-items-center flex-shrink-0">
                    <div class="avatar online">
                        <img src="/assets/dist/img/avatar-1.jpg" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="profile-text">
                    <h6 class="m-0"><?php echo $first_name.' '.$last_name?></h6>
                        <span style="text-transform: uppercase;"><a href="#" class="__cf_email__"><?php echo $username; ?></a></span>
                    </div>
                </div><!--/.profile element-->
                <!--                <form class="search sidebar-form" action="#" method="get" >
                                    <div class="search__inner">
                                        <input type="text" class="search__text" placeholder="Search...">
                                        <i class="typcn typcn-zoom-outline search__helper" data-sa-action="search-close"></i>
                                    </div>
                                </form>/.search-->
                <div class="sidebar-body">
                    <nav class="sidebar-nav">
                        <ul class="metismenu">
                            <li class="nav-label">Main Menu</li>
                            <li class="mm-active">
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-home-outline mr-2"></i>
                                    Dashboard
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="/index.php/dashboard/">My Dashboard</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-chart-pie-outline mr-2"></i>
                                    Members
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="/index.php/teachers/assign">Assign Classes &amp; Subjects</a></li>
                                    <li><a href="/index.php/teachers">My Teachers</a></li>
                                    <li><a href="/index.php/students">My Students</a></li>
                                    <li><a href="/index.php/parents">Parents</a></li>
                                    <li><a href="/index.php/administrators">Administrators</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="typcn typcn-messages mr-2"></i> Chat</a></li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-mail mr-2"></i>
                                    Mailbox
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="/index.php/mailbox">Mailbox</a></li>
                                    <!-- <li><a href="/index.php/mailbox/details">Mailbox Details</a></li> -->
                                    <li><a href="/index.php/mailbox/compose">Compose</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-archive mr-2"></i>
                                    Accademics
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="/index.php/classes">Classes</a></li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">E-learning</a>
                                        <ul class="nav-third-level">
                                            <li><a href="/index.php/questions">Question Bank</a></li>
                                            <li><a href="/index.php/resources">Learning Resources</a></li>
                                            <li><a href="/index.php/schedules/tests">Scheduled Tests</a></li>
                                            <li><a href="/index.php/schedules/classes">Scheduled Classes</a></li>
                                            <li><a href="/index.php/schedules/exams">Scheduled Exams</a></li>
                                            <li><a href="/index.php/results">Results</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/index.php/subjects">Subjects</a></li>
                                    <li><a href="/index.php/grades">Grades</a></li>
                                    <li><a href="/index.php/behaviours">Behaviours &amp; Skills</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-archive mr-2"></i>
                                    Library Management
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="#">User</a></li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Books</a>
                                        <ul class="nav-third-level">
                                            <li><a href="#">Add Book</a></li>
                                            <li><a href="#">Issue Book</a></li>
                                            <li><a href="#">Return Book</a></li>
                                            <li><a href="#">Inventory</a></li>
                                            <li><a href="#">Issued Books</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Fines &amp; Overdues</a></li>
                                    <li><a href="#"></a>Reports</li>
                                </ul>
                            </li>
                            <li class="nav-label">Archives</li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-coffee mr-2"></i>
                                    Reports
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="/index.php/reports/term_report">Term Report</a></li>
                                    <li><a href="/index.php/reports/broad_sheet">Broad sheet</a></li>
                                    <li><a href="/index.php/reports/generate_reports">Generate Report</a></li>
                                    <li><a href="#">Generate PINs</a></li>
                                    <li><a href="/index.php/reports/midterm_report">Mid Term Report</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-clipboard mr-2"></i>
                                    Finance
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="/index.php/finance/fees_categories">Fees Categories</a></li>
                                    <li><a href="/index.php/finance/collectible_fees">Collectible Fees</a></li>
                                    <li><a href="/index.php/finance/invoice_receipts">Invoice/Receipts </a></li>
                                    <li><a href="/index.php/finance/payment_history">Payment History</a></li>
                                </ul>
                            </li>
                            <li><a href="/index.php/events"><i class="typcn typcn-calendar-outline mr-2"></i>Calendar</a></li>
                            <li class="nav-label">Extra</li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-device-tablet mr-2"></i>
                                    My School
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="/index.php/settings/school/web">School Profile</a></li>
                                    <li><a href="/index.php/settings/school/portal">Portal Setting</a></li>
                                    <!-- <li><a href="/index.php/settings/assigned_subjects">Sessions &amp; Terms </a></li> -->
                                    <li><a href="/index.php/setting/form_teachers">Form Teachers</a></li>
                                </ul>
                            </li>
    
                            <li><a href="/index.php/settings/announcements"><i class="typcn typcn-bookmark mr-2"></i>Annoucements</a></li>
                            
                            <li><a href="#"><i class="typcn typcn-attachment-outline mr-2"></i>Changelog<span class="badge badge-success ml-auto">v1.1.0</span></a></li>
                            <li><a href="#"><i class="typcn typcn-support mr-2"></i>Documentation</a></li>
                        </ul>
                    </nav>
                </div><!-- sidebar-body -->
                <div class="navbar-user d-none d-md-flex" id="sidebarUser">
                    <!-- Icon -->
                    <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
                        <span class="icon">
                            <i class="typcn typcn-bell"></i>
                        </span>
                    </a>
                    <!-- Icon -->
                    <a href="#" class="navbar-user-link">
                        <span class="icon">
                            <i class="typcn typcn-messages"></i>
                        </span>
                    </a>
                    <!-- Icon -->
                    <a href="#modalSearch" class="navbar-user-link" data-toggle="modal">
                        <span class="icon">
                            <i class="typcn typcn-zoom-outline"></i>
                        </span>
                    </a>
                    <!-- settings -->
                    <div class="settings">
                        <!-- Toggle -->
                        <a href="#" id="sidebarIconCopy" class="navbar-user-link ropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon">
                                <i class="typcn typcn-cog-outline"></i>
                            </span>
                        </a>
                        <!-- Menu -->
                        <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                            <a href="/index.php/user/profile" class="dropdown-item"><i class="typcn typcn-user-outline fs-18"></i> My Profile</a>
                            <a href="/index.php/user/profile" class="dropdown-item"><i class="typcn typcn-edit fs-18"></i> Edit Profile</a>
                            <a href="#" class="dropdown-item"><i class="typcn typcn-arrow-shuffle fs-18"></i> Activity Logs</a>
                            <a href="#" class="dropdown-item"><i class="typcn typcn-cog-outline fs-18"></i> Account Settings</a>
                            <a href="/index.php/login/logout/" class="dropdown-item"><i class="typcn typcn-key-outline fs-18"></i> Sign Out</a>
                        </div>
                    </div>
                </div>
            </nav>