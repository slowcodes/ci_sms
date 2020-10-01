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
        <link href="/assets/plugins/themify-icons/themify-icons.min.css" rel="stylesheet">
        <!--Third party Styles(used by this page)--> 
        <link href="/assets/plugins/material_icons/materia_icons.css" rel="stylesheet">
        <link href="/assets/plugins/emojionearea/dist/emojionearea.min.css" rel="stylesheet">
        <link href="/assets/dist/css/messenger.css" rel="stylesheet">
        <!--Start Your Custom Style Now-->
        <link href="/assets/dist/css/style.css" rel="stylesheet">
    </head>
    <body class="fixed bg-white">
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
                    <div class="body-content p-3 p-lg-0">
                        <div class="chat-container row m-0">
                            <div class="chat-list__sidebar">
                                <div class="chat-list__search position-relative">
                                    <form class="form-inline position-relative">
                                        <input type="search" class="form-control" placeholder="People Groups and Messages">
                                        <button type="button" class="btn btn-link loop"><i class="ti-search"></i></button>
                                    </form>
                                    <button class="btn create" data-toggle="modal" data-target="#startnewchat"><i class="material-icons">create</i></button>
                                </div><!--/.chat list search-->
                                <ul class="chat-list__sidebar-tabs nav nav-tabs" id="sidebarTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="chat-tab" data-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="true"><div class="position-relative"><i class="material-icons">chat</i><div class="counts">5</div></div><span>Chats</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="phone-tab" data-toggle="tab" href="#phone" role="tab" aria-controls="phone" aria-selected="true"><div class="position-relative"><i class="material-icons">whatshot</i></div><span>Online users</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contacts-tab" data-toggle="tab" href="#contacts" role="tab" aria-controls="contacts" aria-selected="false"><div class="position-relative"><i class="material-icons">perm_contact_calendar</i></div><span>Contacts</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab" aria-controls="notifications" aria-selected="false"><div class="position-relative"><i class="material-icons">notifications</i><div class="counts">3</div></div><span>Notifications</span></a>
                                    </li>
                                </ul><!--/.chat list sidebar tabs-->
                                <div class="tab-content" id="sidebarTabContent">
                                    <div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat-tab">
                                        <div class="chat-list__in">
                                            <h2>Recent Chat</h2>
                                            <div class="nav chat-list">
                                                <a class="item-list item-list__chat d-flex align-items-start unseen active" id="list-item1-tab" data-toggle="tab" href="#list-item1" role="tab" aria-controls="list-item1" aria-selected="true">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-2.png" alt="avatar">
                                                        <div class="status online"></div>
                                                        <div class="new bg-yellow"><span>9</span> </div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Tahamina Akther</h5>
                                                        <span>Sat</span>
                                                        <p>A new feature has been updated to your...</p>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a class="item-list item-list__chat d-flex align-items-start unseen" id="list-item2-tab" data-toggle="tab" href="#list-item2" role="tab" aria-controls="list-item2" aria-selected="true">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar-1.jpg" alt="avatar">
                                                        <div class="status online"></div>
                                                        <div class="new bg-pink"><span>+10</span></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Mozammel Hoque</h5>
                                                        <span>10:05PM</span>
                                                        <p>How can i improve my chances of getting a deposit?</p>
                                                    </div>
                                                </a><!--/.chat list item-->			
                                                <a class="item-list item-list__chat d-flex align-items-start seen" id="list-item3-tab" data-toggle="tab" href="#list-item3" role="tab" aria-controls="list-item3" aria-selected="true">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar-4.jpg" alt="avatar">
                                                        <div class="status ofline"></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Tuhin Sorker</h5>
                                                        <span>Tus</span>
                                                        <p>Hey Chris, could i ask you to help me out with variation...</p>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a href="#" class="item-list item-list__chat d-flex align-items-start seen">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-3.png" alt="avatar">
                                                        <div class="status online"></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>H M Ishak</h5>
                                                        <span>1/22/2019</span>
                                                        <p>By injected humour, or randomised words which...</p>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a href="#" class="item-list item-list__chat d-flex align-items-start seen">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-4.png" alt="avatar">
                                                        <div class="status ofline"></div>
                                                        <div class="new bg-pink"><span>10</span></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Naeen Khan</h5>
                                                        <span>1/18/2019</span>
                                                        <p>No more running out of the office at 4pm on Fridays!</p>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a href="#" class="item-list item-list__chat d-flex align-items-start seen">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-5.png" alt="avatar">
                                                        <div class="status ofline"></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Sumaya Islam</h5>
                                                        <span>1/09/2019</span>
                                                        <p>All your favourite books at your reach! We are now mobile.</p>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a href="#" class="item-list item-list__chat d-flex align-items-start unseen">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-6.png" alt="avatar">
                                                        <div class="status"></div>
                                                        <div class="new bg-gray"><span>?</span></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Tareq Rahman</h5>
                                                        <span>Feb 10</span>
                                                        <p>Hi Keith, I'd like to add you as a contact.</p>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a href="#" class="item-list item-list__chat d-flex align-items-start seen">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-5.png" alt="avatar">
                                                        <div class="status"></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Shahab Uddin</h5>
                                                        <span>Feb 9</span>
                                                        <p>Dear Deborah, your Thai massage is today at 5pm.</p>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a href="#" class="item-list item-list__chat d-flex align-items-start unseen">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-4.png" alt="avatar">
                                                        <div class="status"></div>
                                                        <div class="new bg-green"><span>+10</span></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Al Amin</h5>
                                                        <span>Thu</span>
                                                        <p>Unfortunately your session today has been cancelled!</p>
                                                    </div>
                                                </a><!--/.chat list item-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="phone" role="tabpanel" aria-labelledby="phone-tab">
                                        <div class="chat-list__in">
                                            <h2>Online Users</h2>
                                            <div class="online-visitor">
                                                <a href="#" class="visitor-history" data-toggle="popover" data-trigger="hover"  data-placement="right" title="User Info" data-content="<div class='chat-user__info chat-user__info-popover user-info d-flex align-items-center'><div class='avatar'><img src='assets/dist/img/avatar/avatar-5.png' alt='avatar'><div class='status online'></div></div><div class='info-text'><table class='table m-0'><tbody><tr><td class='user-info-first'>Name</td><td class='text-muted'>Mozammel Hoque</td></tr><tr><td class='user-info-first'>ID</td><td class='text-muted'>123</td></tr><tr><td class='user-info-first'>E-mail</td><td class='text-muted'>example@email.com</td></tr><tr><td class='user-info-first'>URL</td><td class='text-muted'><a href='#' class='text-muted'>https//www.bdtask.com/</a></td></tr></tbody></table></div></div>">
                                                    <div><span class="visitor-id">visitor.75327</span><span class="source-link">www.bdtask.com/inventory-management-system.php</span></div>
                                                </a><!--/.visitor history-->
                                                <a href="#" class="visitor-history" data-toggle="popover" data-trigger="hover"  data-placement="right" title="User Info" data-content="<div class='chat-user__info chat-user__info-popover user-info d-flex align-items-center'><div class='avatar'><img src='assets/dist/img/avatar/avatar-5.png' alt='avatar'><div class='status online'></div></div><div class='info-text'><table class='table m-0'><tbody><tr><td class='user-info-first'>Name</td><td class='text-muted'>Mozammel Hoque</td></tr><tr><td class='user-info-first'>ID</td><td class='text-muted'>123</td></tr><tr><td class='user-info-first'>E-mail</td><td class='text-muted'>example@email.com</td></tr><tr><td class='user-info-first'>URL</td><td class='text-muted'><a href='#' class='text-muted'>https//www.bdtask.com/</a></td></tr></tbody></table></div></div>">
                                                    <div><span class="visitor-id">Pawel</span><span class="source-link">https://www.bdtask.com/multi-store-ecommerce-shopping-cart-software/</span></div>
                                                </a><!--/.visitor history-->
                                                <a href="#" class="visitor-history" data-toggle="popover" data-trigger="hover"  data-placement="right" title="User Info" data-content="<div class='chat-user__info chat-user__info-popover user-info d-flex align-items-center'><div class='avatar'><img src='assets/dist/img/avatar/avatar-5.png' alt='avatar'><div class='status online'></div></div><div class='info-text'><table class='table m-0'><tbody><tr><td class='user-info-first'>Name</td><td class='text-muted'>Mozammel Hoque</td></tr><tr><td class='user-info-first'>ID</td><td class='text-muted'>123</td></tr><tr><td class='user-info-first'>E-mail</td><td class='text-muted'>example@email.com</td></tr><tr><td class='user-info-first'>URL</td><td class='text-muted'><a href='#' class='text-muted'>https//www.bdtask.com/</a></td></tr></tbody></table></div></div>">
                                                    <div><span class="visitor-id">Visitor.13150</span><span class="source-link">www.bdtask.com/../#module2</span></div>
                                                </a><!--/.visitor history-->
                                                <a href="#" class="visitor-history" data-toggle="popover" data-trigger="hover"  data-placement="right" title="User Info" data-content="<div class='chat-user__info chat-user__info-popover user-info d-flex align-items-center'><div class='avatar'><img src='assets/dist/img/avatar/avatar-5.png' alt='avatar'><div class='status online'></div></div><div class='info-text'><table class='table m-0'><tbody><tr><td class='user-info-first'>Name</td><td class='text-muted'>Mozammel Hoque</td></tr><tr><td class='user-info-first'>ID</td><td class='text-muted'>123</td></tr><tr><td class='user-info-first'>E-mail</td><td class='text-muted'>example@email.com</td></tr><tr><td class='user-info-first'>URL</td><td class='text-muted'><a href='#' class='text-muted'>https//www.bdtask.com/</a></td></tr></tbody></table></div></div>">
                                                    <div><span class="visitor-id">visitor.65652</span><span class="source-link">www.bdtask.com/../#module2</span></div>
                                                </a><!--/.visitor history-->
                                                <a href="#" class="visitor-history" data-toggle="popover" data-trigger="hover"  data-placement="right" title="User Info" data-content="<div class='chat-user__info chat-user__info-popover user-info d-flex align-items-center'><div class='avatar'><img src='assets/dist/img/avatar/avatar-5.png' alt='avatar'><div class='status online'></div></div><div class='info-text'><table class='table m-0'><tbody><tr><td class='user-info-first'>Name</td><td class='text-muted'>Mozammel Hoque</td></tr><tr><td class='user-info-first'>ID</td><td class='text-muted'>123</td></tr><tr><td class='user-info-first'>E-mail</td><td class='text-muted'>example@email.com</td></tr><tr><td class='user-info-first'>URL</td><td class='text-muted'><a href='#' class='text-muted'>https//www.bdtask.com/</a></td></tr></tbody></table></div></div>">
                                                    <div><span class="visitor-id">visitor.75327</span><span class="source-link">www.bdtask.com/inventory-management-system.php</span></div>
                                                </a><!--/.visitor history-->
                                                <a href="#" class="visitor-history" data-toggle="popover" data-trigger="hover"  data-placement="right" title="User Info" data-content="<div class='chat-user__info chat-user__info-popover user-info d-flex align-items-center'><div class='avatar'><img src='assets/dist/img/avatar/avatar-5.png' alt='avatar'><div class='status online'></div></div><div class='info-text'><table class='table m-0'><tbody><tr><td class='user-info-first'>Name</td><td class='text-muted'>Mozammel Hoque</td></tr><tr><td class='user-info-first'>ID</td><td class='text-muted'>123</td></tr><tr><td class='user-info-first'>E-mail</td><td class='text-muted'>example@email.com</td></tr><tr><td class='user-info-first'>URL</td><td class='text-muted'><a href='#' class='text-muted'>https//www.bdtask.com/</a></td></tr></tbody></table></div></div>">
                                                    <div><span class="visitor-id">visitor.95343</span><span class="source-link">www.bdtask.com/hospital-management-system.php</span></div>
                                                </a><!--/.visitor history-->
                                                <a href="#" class="visitor-history" data-toggle="popover" data-trigger="hover"  data-placement="right" title="User Info" data-content="<div class='chat-user__info chat-user__info-popover user-info d-flex align-items-center'><div class='avatar'><img src='assets/dist/img/avatar/avatar-5.png' alt='avatar'><div class='status online'></div></div><div class='info-text'><table class='table m-0'><tbody><tr><td class='user-info-first'>Name</td><td class='text-muted'>Mozammel Hoque</td></tr><tr><td class='user-info-first'>ID</td><td class='text-muted'>123</td></tr><tr><td class='user-info-first'>E-mail</td><td class='text-muted'>example@email.com</td></tr><tr><td class='user-info-first'>URL</td><td class='text-muted'><a href='#' class='text-muted'>https//www.bdtask.com/</a></td></tr></tbody></table></div></div>">
                                                    <div><span class="visitor-id">Visitor.13150</span><span class="source-link">www.bdtask.com/../#module2</span></div>
                                                </a><!--/.visitor history-->
                                                <a href="#" class="visitor-history" data-toggle="popover" data-trigger="hover"  data-placement="right" title="User Info" data-content="<div class='chat-user__info chat-user__info-popover user-info d-flex align-items-center'><div class='avatar'><img src='assets/dist/img/avatar/avatar-5.png' alt='avatar'><div class='status online'></div></div><div class='info-text'><table class='table m-0'><tbody><tr><td class='user-info-first'>Name</td><td class='text-muted'>Mozammel Hoque</td></tr><tr><td class='user-info-first'>ID</td><td class='text-muted'>123</td></tr><tr><td class='user-info-first'>E-mail</td><td class='text-muted'>example@email.com</td></tr><tr><td class='user-info-first'>URL</td><td class='text-muted'><a href='#' class='text-muted'>https//www.bdtask.com/</a></td></tr></tbody></table></div></div>">
                                                    <div><span class="visitor-id">visitor.65652</span><span class="source-link">www.bdtask.com/../#module2</span></div>
                                                </a><!--/.visitor history-->
                                            </div><!--/.online visitor-->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                                        <div class="chat-list__in">
                                            <h2>Contacts</h2>
                                            <div class="nav contact-list">
                                                <a class="item-list item-list__contact d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-10.png" alt="avatar">
                                                        <div class="status online"></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Tanjil Ahmed</h5>
                                                        <p>Dhaka, Bangladesh</p>
                                                    </div>
                                                    <div class="person-add">
                                                        <i class="material-icons">person</i>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a class="item-list item-list__contact d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-1.png" alt="avatar">
                                                        <div class="status online"></div>
                                                        <div class="new bg-pink"><span>+10</span></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Shafiqul Hasan</h5>
                                                        <p>Douala, Cameroon</p>
                                                    </div>
                                                    <div class="person-add">
                                                        <i class="material-icons">person</i>
                                                    </div>
                                                </a><!--/.chat list item-->			
                                                <a class="item-list item-list__contact d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-2.png" alt="avatar">
                                                        <div class="status ofline"></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Tuhin Sorker</h5>
                                                        <p>Abuja, Nigeria</p>
                                                    </div>
                                                    <div class="person-add">
                                                        <i class="material-icons">person</i>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a href="#" class="item-list item-list__contact d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-3.png" alt="avatar">
                                                        <div class="status online"></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>H M Ishak</h5>
                                                        <p>Kampala, Uganda</p>
                                                    </div>
                                                    <div class="person-add">
                                                        <i class="material-icons">person</i>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a href="#" class="item-list item-list__contact d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-4.png" alt="avatar">
                                                        <div class="status ofline"></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Naeen Khan</h5>
                                                        <p>London, United Kingdom</p>
                                                    </div>
                                                    <div class="person-add">
                                                        <i class="material-icons">person</i>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a href="#" class="item-list item-list__contact d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-5.png" alt="avatar">
                                                        <div class="status ofline"></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Sumaya Islam</h5>
                                                        <p>Berlin, Germany</p>
                                                    </div>
                                                    <div class="person-add">
                                                        <i class="material-icons">person</i>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a href="#" class="item-list item-list__contact d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-6.png" alt="avatar">
                                                        <div class="status"></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Tareq Rahman</h5>
                                                        <p>Douala, Cameroon</p>
                                                    </div>
                                                    <div class="person-add">
                                                        <i class="material-icons">person</i>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a href="#" class="item-list item-list__contact d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-5.png" alt="avatar">
                                                        <div class="status"></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Shahab Uddin</h5>
                                                        <p>Honolulu, Hawaii</p>
                                                    </div>
                                                    <div class="person-add">
                                                        <i class="material-icons">person</i>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a href="#" class="item-list item-list__contact d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-4.png" alt="avatar">
                                                        <div class="status"></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Al Amin</h5>
                                                        <p>Nairobi, Kenya</p>
                                                    </div>
                                                    <div class="person-add">
                                                        <i class="material-icons">person</i>
                                                    </div>
                                                </a><!--/.chat list item-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
                                        <div class="chat-list__in">
                                            <h2>Notifications</h2>
                                            <div class="nav notification-list">
                                                <a class="item-list item-list__contact d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-10.png" alt="avatar">
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Tanjil Ahmed have just sent you a new message.</h5>
                                                        <p>Thursday at 6:59PM</p>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a class="item-list item-list__contact d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-1.png" alt="avatar">
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Tahamina Akther has a birthday today. Wish her all the best.</h5>
                                                        <p>Friday at 5:34PM</p>
                                                    </div>
                                                </a><!--/.chat list item-->			
                                                <a class="item-list item-list__contact d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-2.png" alt="avatar">
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>Tuhin Sorker has a birthday today. Wish him all the best.</h5>
                                                        <p>Sunday at 3:34PM</p>
                                                    </div>
                                                </a><!--/.chat list item-->
                                                <a href="#" class="item-list item-list__contact d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="/assets/dist/img/avatar/avatar-3.png" alt="avatar">
                                                        <div class="status online"></div>
                                                    </div>
                                                    <div class="info-text">
                                                        <h5>H M Ishak have just sent you a new message.</h5>
                                                        <p>Monday at 8:34PM</p>
                                                    </div>
                                                </a><!--/.chat list item-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.chat list sidebar-->
                            <div class="tab-content chat-panel">
                                <div class="tab-pane fade" id="list-item-empty" role="tabpanel">
                                    <div class="message-content app-empty-page empty">
                                        <div class="no-messages">
                                            <i class="material-icons">forum</i>
                                            <p>Seems people are shy to start the chat. Break the ice send the first message.</p>
                                        </div>
                                    </div><!--App empty page-->
                                </div>
                                <div class="tab-pane show active" id="list-item1" role="tabpanel" aria-labelledby="list-item1-tab">
                                    <div class="chat-header d-flex align-items-center">
                                        <button type="button" class="btn chat-sidebar-collapse d-block d-xl-none">
                                            <i class="material-icons">menu</i>
                                        </button>
                                        <!--chat list sidebar collapse button-->
                                        <!--<a href="#" class="position-relative">
                                            <img src="/assets/dist/img/avatar.png" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith">
                                            <div class="status online"></div>
                                        </a>-->
                                        <div class="meta-info data mr-auto">
                                            <h5><a href="#">Tahamina Akther</a></h5>
                                            <span>Last seen 12hour ago</span>
                                        </div>
                                        <button class="btn d-md-block d-none" title="Start a voice call"><i class="material-icons md-30">phone_in_talk</i></button>
                                        <button class="btn d-md-block d-none" title="Start a video call"><i class="material-icons md-36">videocam</i></button>
                                        <button class="btn d-md-block d-none" title="Conversation information"><i class="material-icons">info</i></button>
                                        <button class="btn d-md-block d-none search-btn" title="Search in conversation"><i class="material-icons">search</i></button>
                                        <button class="btn d-block d-lg-none chat-settings-collapse" title="Settings"><i class="material-icons">settings</i></button>
                                        <div class="dropdown">
                                            <button class="btn mr-0" data-toggle="dropdown" aria-haspopup="true"><i class="material-icons">more_vert</i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item connect" name="1"><i class="material-icons">phone_in_talk</i>Voice Call</button>
                                                <button class="dropdown-item connect" name="1"><i class="material-icons">videocam</i>Video Call</button>
                                                <hr>
                                                <button class="dropdown-item"><i class="material-icons">clear</i>Clear History</button>
                                                <button class="dropdown-item"><i class="material-icons">block</i>Block Contact</button>
                                                <button class="dropdown-item"><i class="material-icons">delete</i>Delete Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="messenger-dialog row m-0">
                                        <div class="messenger-dialog__area">
                                            <div class="conversation-search">
                                                <div class="d-flex">
                                                    <div class="btn-group mr-3" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn"><i class="ti-angle-up"></i></button>
                                                        <button type="button" class="btn"><i class="ti-angle-down"></i></button>
                                                    </div>
                                                    <div class="input-group">
                                                        <i class="ti-search search__icon"></i>
                                                        <input type="text" class="form-control" placeholder="Find messages in current conversation" aria-label="Find messages in current conversation" aria-describedby="button-addon1">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary close-search" type="button" id="button-addon1">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--/.conversation search-->
                                            <div class="message-content empty">
                                                <div class="no-messages">
                                                    <i class="material-icons">forum</i>
                                                    <p>Seems people are shy to start the chat. Break the ice send the first message.</p>
                                                </div>
                                            </div>
                                            <!--/.tab content-->
                                            <div class="chat-area-bottom d-flex align-items-center">
                                                <form class="position-relative w-100">
                                                    <textarea class="form-control emojionearea" placeholder="Type a message here..." rows="1"></textarea>
                                                    <!--<button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>-->
                                                    <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                                                </form>
                                                <label>
                                                    <input type="file">
                                                    <span class="btn attach"><i class="material-icons">attach_file</i></span>
                                                </label> 
                                            </div><!--/.chat area bottom-->
                                        </div>
                                        <div class="chat-list__sidebar--right">
                                            <div class="chat-user__info d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="/assets/dist/img/avatar/avatar-2.png" alt="avatar">
                                                    <div class="status online"></div>
                                                </div>
                                                <div class="info-text">
                                                    <h5 class="m-0">Tahamina Akther</h5>
                                                    <p class="writing">Tahamina typing a message</p>
                                                </div>
                                            </div>
                                            <div class="chatting_indicate card-body">
                                                <h5>Conversation With Auto bot or manual</h5>
                                                <p>Everyone in this conversation will see this.</p>
                                                <div class="d-flex align-items-center">
                                                    <label class="toggler toggler--is-active" id="autobot">Auto bot</label>
                                                    <div class="toggle">
                                                        <input type="checkbox" id="switcher" class="check">
                                                        <b class="toggle-switch"></b>
                                                    </div>
                                                    <label class="toggler" id="manual">Manual</label>
                                                </div>
                                            </div>
                                            <div id="accordion" class="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="card-header__title mb-0">
                                                            <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                <i class="material-icons">person</i>User Details
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <div class="user-info">
                                                                <div class="table-responsive">
                                                                    <table class="table border">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="user-info-first">Name</td>
                                                                                <td>Tahamina Akther</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="user-info-first">ID</td>
                                                                                <td>123</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="user-info-first">E-mail</td>
                                                                                <td><a href="/cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="adc8d5ccc0ddc1c8edc8c0ccc4c183cec2c0">[email&#160;protected]</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="user-info-first">URL</td>
                                                                                <td><a href="#">https//www.bdtask.com/</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="user-info-first">Browser</td>
                                                                                <td>Chrome</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="card-header__title mb-0">
                                                            <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                <i class="material-icons">create</i>Edit name
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <h5>Edit Nickname for Tahamina Akther</h5>
                                                            <p>Everyone in this conversation will see this.</p>
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tahamina Akther">
                                                            </div>
                                                            <div class="action-btn text-right">
                                                                <a href="#" >Save</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="card-header__title mb-0">
                                                            <a href="javascript:void(0)" class="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                                <i class="material-icons">color_lens</i>Change color 
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <h5>Pick a color for this conversation</h5>
                                                            <p>Everyone in this conversation will see this.</p>
                                                            <div class="radio-list change-bg-color">
                                                                <input type="radio" name="color" id="red"/>
                                                                <label for="red" data-color="red"><span class="red"></span></label>

                                                                <input type="radio" name="color" id="green" checked/>
                                                                <label for="green" data-color="green"><span class="green"></span></label>

                                                                <input type="radio" name="color" id="yellow" />
                                                                <label for="yellow" data-color="yellow"><span class="yellow"></span></label>

                                                                <input type="radio" name="color" id="olive" />
                                                                <label for="olive" data-color="olive"><span class="olive"></span></label>

                                                                <input type="radio" name="color" id="orange" />
                                                                <label for="orange" data-color="orange"><span class="orange"></span></label>

                                                                <input type="radio" name="color" id="teal" />
                                                                <label for="teal" data-color="teal"><span class="teal"></span></label>

                                                                <input type="radio" name="color" id="blue" />
                                                                <label for="blue" data-color="blue"><span class="blue"></span></label>

                                                                <input type="radio" name="color" id="violet" />
                                                                <label for="violet" data-color="violet"><span class="violet"></span></label>

                                                                <input type="radio" name="color" id="purple" />
                                                                <label for="purple" data-color="purple"><span class="purple"></span></label>

                                                                <input type="radio" name="color" id="pink" />
                                                                <label for="pink" data-color="pink"><span class="pink"></span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingFour">
                                                        <h5 class="card-header__title mb-0">
                                                            <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                <i class="material-icons">notifications</i>Notifications
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <h5>Conversation Notifications</h5>
                                                            <p>Everyone in this conversation will see this.</p>
                                                            <div class="form-group mb-4">
                                                                <span class="switch switch-sm">
                                                                    <input type="checkbox" class="switch" id="switch1">
                                                                    <label for="switch1">Receive notifications for new messages</label>
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <span class="switch switch-sm">
                                                                    <input type="checkbox" class="switch" id="switch2">
                                                                    <label for="switch2">Receive notifications for reactions</label>
                                                                </span>
                                                            </div>
                                                            <div class="action-btn text-right">
                                                                <a href="#" >Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--/.chat list sidebar right-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="list-item2" role="tabpanel" aria-labelledby="list-item2-tab">
                                    <div class="chat-header d-flex align-items-center">
                                        <button type="button" class="btn chat-sidebar-collapse d-block d-xl-none">
                                            <i class="material-icons">menu</i>
                                        </button>
                                        <!--<a href="#" class="position-relative">
                                            <img src="/assets/dist/img/avatar.png" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith">
                                            <div class="status online"></div>
                                        </a>-->
                                        <div class="meta-info data mr-auto">
                                            <h5><a href="#">Mozammel Hoque</a></h5>
                                            <span>Last seen 12hour ago</span>
                                        </div>
                                        <button class="btn d-md-block d-none" title="Start a voice call"><i class="material-icons md-30">phone_in_talk</i></button>
                                        <button class="btn d-md-block d-none" title="Start a video call"><i class="material-icons md-36">videocam</i></button>
                                        <button class="btn d-md-block d-none" title="Conversation information"><i class="material-icons">info</i></button>
                                        <button class="btn d-md-block d-none search-btn" title="Search in conversation"><i class="material-icons">search</i></button>
                                        <button class="btn d-block d-lg-none chat-settings-collapse" title="Settings"><i class="material-icons">settings</i></button>
                                        <div class="dropdown">
                                            <button class="btn mr-0" data-toggle="dropdown" aria-haspopup="true"><i class="material-icons">more_vert</i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item connect" name="1"><i class="material-icons">phone_in_talk</i>Voice Call</button>
                                                <button class="dropdown-item connect" name="1"><i class="material-icons">videocam</i>Video Call</button>
                                                <hr>
                                                <button class="dropdown-item"><i class="material-icons">clear</i>Clear History</button>
                                                <button class="dropdown-item"><i class="material-icons">block</i>Block Contact</button>
                                                <button class="dropdown-item"><i class="material-icons">delete</i>Delete Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="messenger-dialog row m-0">
                                        <div class="messenger-dialog__area">
                                            <div class="conversation-search">
                                                <div class="d-flex">
                                                    <div class="btn-group mr-3" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn"><i class="ti-angle-up"></i></button>
                                                        <button type="button" class="btn"><i class="ti-angle-down"></i></button>
                                                    </div>
                                                    <div class="input-group">
                                                        <i class="ti-search search__icon"></i>
                                                        <input type="text" class="form-control" placeholder="Find messages in current conversation" aria-label="Find messages in current conversation" aria-describedby="button-addon2">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary close-search" type="button" id="button-addon2">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--/.conversation search-->
                                            <div class="message-content message-content-scroll bg-text-green">
                                                <div class="position-relative">
                                                    <div class="date">
                                                        <hr><span>Yesterday</span><hr>
                                                    </div>
                                                    <div class="message">
                                                        <img class="avatar" src="/assets/dist/img/avatar-1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith">
                                                        <div class="text-main">
                                                            <span class="time-ago">09:46 AM</span>
                                                            <div class="text-group">
                                                                <div class="text">
                                                                    <p>It is a long established fact that a reader will be.</p>
                                                                    <!--<a class="text-action" tabindex="0" role="button" data-container="body" data-toggle="popover" data-placement="top" data-content="<a href='#' title=''>Delete</a> <a href='' title='test add link'>Save to server</a>">
                                                                        <div class="dot-icon"></div>
                                                                    </a>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message me">
                                                        <div class="text-main">
                                                            <span class="time-ago">11:32 AM</span>
                                                            <div class="text-group me">
                                                                <div class="text me">
                                                                    <p> By the readable content of a page when looking at its?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message">
                                                        <img class="avatar" src="/assets/dist/img/avatar-1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith">
                                                        <div class="text-main">
                                                            <span class="time-ago">02:56 PM</span>
                                                            <div class="text-group">
                                                                <div class="text">
                                                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message me">
                                                        <div class="text-main">
                                                            <span class="time-ago">10:21 PM</span>
                                                            <div class="text-group me">
                                                                <div class="text me">
                                                                    <p>Roger that boss!</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-group me">
                                                                <div class="text me">
                                                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message">
                                                        <img class="avatar" src="/assets/dist/img/avatar-1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith">
                                                        <div class="text-main">
                                                            <span class="time-ago">11:07 PM</span>
                                                            <div class="text-group">
                                                                <div class="text">
                                                                    <p> Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="date">
                                                        <hr><span>Today</span><hr>
                                                    </div><!--/.date-->
                                                    <div class="message me">
                                                        <div class="text-main">
                                                            <span>10:21 PM</span>
                                                            <div class="text-group me">
                                                                <div class="text me">
                                                                    <p>There are many variations of passages of Lorem Ipsum available.</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-group me">
                                                                <div class="text text-img me">
                                                                    <img src="/assets/dist/img/user.jpg" class="img-fluid" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message">
                                                        <img class="avatar" src="/assets/dist/img/avatar-1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith">
                                                        <div class="text-main">
                                                            <span>11:07 PM</span>
                                                            <div class="text-group">
                                                                <div class="text">
                                                                    <div class="attachment">
                                                                        <button class="btn attach"><i class="material-icons md-18">insert_drive_file</i></button>
                                                                        <div class="file">
                                                                            <h5><a href="#">Documentations.pdf</a></h5>
                                                                            <span>21kb Document</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message me">
                                                        <div class="text-main">
                                                            <span><i class="material-icons">check</i>10:21 PM</span>
                                                            <div class="text-group me">
                                                                <div class="text me">
                                                                    <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message">
                                                        <img class="avatar" src="/assets/dist/img/avatar-1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith">
                                                        <div class="text-main">
                                                            <div class="text-group">
                                                                <div class="text typing">
                                                                    <div class="wave">
                                                                        <span class="dot"></span>
                                                                        <span class="dot"></span>
                                                                        <span class="dot"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                </div>
                                            </div>
                                            <div class="chat-area-bottom d-flex align-items-center">
                                                <form class="position-relative w-100">
                                                    <textarea class="form-control emojionearea" placeholder="Type a message here..." rows="1"></textarea>
                                                    <!--<button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>-->
                                                    <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                                                </form>
                                                <label>
                                                    <input type="file">
                                                    <span class="btn attach"><i class="material-icons">attach_file</i></span>
                                                </label> 
                                            </div><!--/.chat area bottom-->
                                        </div>
                                        <div class="chat-list__sidebar--right">
                                            <div class="chat-user__info d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="/assets/dist/img/avatar-1.jpg" alt="avatar">
                                                    <div class="status online"></div>
                                                </div>
                                                <div class="info-text">
                                                    <h5 class="m-0">Mozammel Hoque</h5>
                                                    <p class="writing">Mozammel typing a message</p>
                                                </div>
                                            </div>
                                            <div class="chatting_indicate card-body">
                                                <h5>Conversation With Auto bot or manual</h5>
                                                <p>Everyone in this conversation will see this.</p>
                                                <div class="d-flex align-items-center">
                                                    <label class="toggler toggler--is-active" id="autobot2">Auto bot</label>
                                                    <div class="toggle">
                                                        <input type="checkbox" id="switcher2" class="check">
                                                        <b class="toggle-switch"></b>
                                                    </div>
                                                    <label class="toggler" id="manual2">Manual</label>
                                                </div>
                                            </div>
                                            <div id="accordion2" class="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingThree2">
                                                        <h5 class="card-header__title mb-0">
                                                            <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                                                <i class="material-icons">person</i>User Details
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            <div class="user-info">
                                                                <div class="table-responsive">
                                                                    <table class="table border">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="user-info-first">Name</td>
                                                                                <td>Tahamina Akther</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="user-info-first">ID</td>
                                                                                <td>123</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="user-info-first">E-mail</td>
                                                                                <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="42273a232f322e2702272f232b2e6c212d2f">[email&#160;protected]</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="user-info-first">URL</td>
                                                                                <td><a href="#">https//www.bdtask.com/</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="user-info-first">Browser</td>
                                                                                <td>Chrome</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne2">
                                                        <h5 class="card-header__title mb-0">
                                                            <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                                                <i class="material-icons">create</i>Edit name
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            <h5>Edit Nickname for Tahamina Akther</h5>
                                                            <p>Everyone in this conversation will see this.</p>
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Tahamina Akther">
                                                            </div>
                                                            <div class="action-btn text-right">
                                                                <a href="#" >Save</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo2">
                                                        <h5 class="card-header__title mb-0">
                                                            <a href="javascript:void(0)" class="" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo2">
                                                                <i class="material-icons">color_lens</i>Change color 
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo2" class="collapse show" aria-labelledby="headingTwo2" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            <h5>Pick a color for this conversation</h5>
                                                            <p>Everyone in this conversation will see this.</p>
                                                            <div class="radio-list change-bg-color">
                                                                <input type="radio" name="color" id="red2"/>
                                                                <label for="red2" data-color="red"><span class="red"></span></label>

                                                                <input type="radio" name="color" id="green2" checked/>
                                                                <label for="green2" data-color="green"><span class="green"></span></label>

                                                                <input type="radio" name="color" id="yellow2" />
                                                                <label for="yellow2" data-color="yellow"><span class="yellow"></span></label>

                                                                <input type="radio" name="color" id="olive2" />
                                                                <label for="olive2" data-color="olive"><span class="olive"></span></label>

                                                                <input type="radio" name="color" id="orange2" />
                                                                <label for="orange2" data-color="orange"><span class="orange"></span></label>

                                                                <input type="radio" name="color" id="teal2" />
                                                                <label for="teal2" data-color="teal"><span class="teal"></span></label>

                                                                <input type="radio" name="color" id="blue2" />
                                                                <label for="blue2" data-color="blue"><span class="blue"></span></label>

                                                                <input type="radio" name="color" id="violet2" />
                                                                <label for="violet2" data-color="violet"><span class="violet"></span></label>

                                                                <input type="radio" name="color" id="purple2" />
                                                                <label for="purple2" data-color="purple"><span class="purple"></span></label>

                                                                <input type="radio" name="color" id="pink2" />
                                                                <label for="pink2" data-color="pink"><span class="pink"></span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingFour2">
                                                        <h5 class="card-header__title mb-0">
                                                            <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
                                                                <i class="material-icons">notifications</i>Notifications
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseFour2" class="collapse" aria-labelledby="headingFour2" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            <h5>Conversation Notifications</h5>
                                                            <p>Everyone in this conversation will see this.</p>
                                                            <div class="form-group mb-4">
                                                                <span class="switch switch-sm">
                                                                    <input type="checkbox" class="switch" id="switch3">
                                                                    <label for="switch3">Receive notifications for new messages</label>
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <span class="switch switch-sm">
                                                                    <input type="checkbox" class="switch" id="switch4">
                                                                    <label for="switch4">Receive notifications for reactions</label>
                                                                </span>
                                                            </div>
                                                            <div class="action-btn text-right">
                                                                <a href="#" >Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--/.chat list sidebar right-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="list-item3" role="tabpanel" aria-labelledby="list-item3-tab">
                                    <div class="chat-header d-flex align-items-center">
                                        <button type="button" class="btn chat-sidebar-collapse d-block d-xl-none">
                                            <i class="material-icons">menu</i>
                                        </button>
                                        <!--<a href="#" class="position-relative">
                                            <img src="/assets/dist/img/avatar.png" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith">
                                            <div class="status online"></div>
                                        </a>-->
                                        <div class="meta-info data mr-auto">
                                            <h5><a href="#">Tuhin Sorker</a></h5>
                                            <span>Last seen 12hour ago</span>
                                        </div>
                                        <button class="btn d-md-block d-none" title="Start a voice call"><i class="material-icons md-30">phone_in_talk</i></button>
                                        <button class="btn d-md-block d-none" title="Start a video call"><i class="material-icons md-36">videocam</i></button>
                                        <button class="btn d-md-block d-none" title="Conversation information"><i class="material-icons">info</i></button>
                                        <button class="btn d-md-block d-none search-btn" title="Search in conversation"><i class="material-icons">search</i></button>
                                        <button class="btn d-block d-lg-none chat-settings-collapse" title="Settings"><i class="material-icons">settings</i></button>
                                        <div class="dropdown">
                                            <button class="btn mr-0" data-toggle="dropdown" aria-haspopup="true"><i class="material-icons">more_vert</i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item connect" name="1"><i class="material-icons">phone_in_talk</i>Voice Call</button>
                                                <button class="dropdown-item connect" name="1"><i class="material-icons">videocam</i>Video Call</button>
                                                <hr>
                                                <button class="dropdown-item"><i class="material-icons">clear</i>Clear History</button>
                                                <button class="dropdown-item"><i class="material-icons">block</i>Block Contact</button>
                                                <button class="dropdown-item"><i class="material-icons">delete</i>Delete Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="messenger-dialog row m-0">
                                        <div class="messenger-dialog__area">
                                            <div class="conversation-search">
                                                <div class="d-flex">
                                                    <div class="btn-group mr-3" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn"><i class="ti-angle-up"></i></button>
                                                        <button type="button" class="btn"><i class="ti-angle-down"></i></button>
                                                    </div>
                                                    <div class="input-group">
                                                        <i class="ti-search search__icon"></i>
                                                        <input type="text" class="form-control" placeholder="Find messages in current conversation" aria-label="Find messages in current conversation" aria-describedby="button-addon3">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary close-search" type="button" id="button-addon3">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--/.conversation search-->
                                            <div class="message-content message-content-scroll bg-text-green">
                                                <div class="position-relative">
                                                    <div class="date">
                                                        <hr><span>Yesterday</span><hr>
                                                    </div>
                                                    <div class="message">
                                                        <img class="avatar" src="/assets/dist/img/avatar-4.jpg" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith">
                                                        <div class="text-main">
                                                            <span class="time-ago">09:46 AM</span>
                                                            <div class="text-group">
                                                                <div class="text">
                                                                    <p>It is a long established fact that a reader will be.</p>
                                                                    <!--<a class="text-action" tabindex="0" role="button" data-container="body" data-toggle="popover" data-placement="top" data-content="<a href='#' title=''>Delete</a> <a href='' title='test add link'>Save to server</a>">
                                                                        <div class="dot-icon"></div>
                                                                    </a>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message me">
                                                        <div class="text-main">
                                                            <span class="time-ago">11:32 AM</span>
                                                            <div class="text-group me">
                                                                <div class="text me">
                                                                    <p> By the readable content of a page when looking at its?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message">
                                                        <img class="avatar" src="/assets/dist/img/avatar-4.jpg" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith">
                                                        <div class="text-main">
                                                            <span class="time-ago">02:56 PM</span>
                                                            <div class="text-group">
                                                                <div class="text">
                                                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message me">
                                                        <div class="text-main">
                                                            <span class="time-ago">10:21 PM</span>
                                                            <div class="text-group me">
                                                                <div class="text me">
                                                                    <p>Roger that boss!</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-group me">
                                                                <div class="text me">
                                                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message">
                                                        <img class="avatar" src="/assets/dist/img/avatar-4.jpg" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith">
                                                        <div class="text-main">
                                                            <span class="time-ago">11:07 PM</span>
                                                            <div class="text-group">
                                                                <div class="text">
                                                                    <p> Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="date">
                                                        <hr><span>Today</span><hr>
                                                    </div><!--/.date-->
                                                    <div class="message me">
                                                        <div class="text-main">
                                                            <span>10:21 PM</span>
                                                            <div class="text-group me">
                                                                <div class="text me">
                                                                    <p>There are many variations of passages of Lorem Ipsum available.</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-group me">
                                                                <div class="text text-img me">
                                                                    <img src="/assets/dist/img/user.jpg" class="img-fluid" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message">
                                                        <img class="avatar" src="/assets/dist/img/avatar-4.jpg" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith">
                                                        <div class="text-main">
                                                            <span>11:07 PM</span>
                                                            <div class="text-group">
                                                                <div class="text">
                                                                    <div class="attachment">
                                                                        <button class="btn attach"><i class="material-icons md-18">insert_drive_file</i></button>
                                                                        <div class="file">
                                                                            <h5><a href="#">Documentations.pdf</a></h5>
                                                                            <span>21kb Document</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message me">
                                                        <div class="text-main">
                                                            <span><i class="material-icons">check</i>10:21 PM</span>
                                                            <div class="text-group me">
                                                                <div class="text me">
                                                                    <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                    <div class="message">
                                                        <img class="avatar" src="/assets/dist/img/avatar-4.jpg" data-toggle="tooltip" data-placement="top" title="" alt="avatar" data-original-title="Keith">
                                                        <div class="text-main">
                                                            <div class="text-group">
                                                                <div class="text typing">
                                                                    <div class="wave">
                                                                        <span class="dot"></span>
                                                                        <span class="dot"></span>
                                                                        <span class="dot"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--/.message-->
                                                </div>
                                            </div>
                                            <!--/.tab content-->
                                            <div class="chat-area-bottom d-flex align-items-center">
                                                <form class="position-relative w-100">
                                                    <textarea class="form-control emojionearea" placeholder="Type a message here..." rows="1"></textarea>
                                                    <!--<button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>-->
                                                    <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                                                </form>
                                                <label>
                                                    <input type="file">
                                                    <span class="btn attach"><i class="material-icons">attach_file</i></span>
                                                </label> 
                                            </div><!--/.chat area bottom-->
                                        </div>
                                        <div class="chat-list__sidebar--right">
                                            <div class="chat-user__info d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="/assets/dist/img/avatar-4.jpg" alt="avatar">
                                                    <div class="status online"></div>
                                                </div>
                                                <div class="info-text">
                                                    <h5 class="m-0">Tuhin Sorker</h5>
                                                    <p class="writing">Tuhin typing a message</p>
                                                </div>
                                            </div>
                                            <div class="chatting_indicate card-body">
                                                <h5>Conversation With Auto bot or manual</h5>
                                                <p>Everyone in this conversation will see this.</p>
                                                <div class="d-flex align-items-center">
                                                    <label class="toggler toggler--is-active" id="autobot3">Auto bot</label>
                                                    <div class="toggle">
                                                        <input type="checkbox" id="switcher3" class="check">
                                                        <b class="toggle-switch"></b>
                                                    </div>
                                                    <label class="toggler" id="manual3">Manual</label>
                                                </div>
                                            </div>
                                            <div id="accordion3" class="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingThree3">
                                                        <h5 class="card-header__title mb-0">
                                                            <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                                                <i class="material-icons">person</i>User Details
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordion3">
                                                        <div class="card-body">
                                                            <div class="user-info">
                                                                <div class="table-responsive">
                                                                    <table class="table border">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="user-info-first">Name</td>
                                                                                <td>Tahamina Akther</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="user-info-first">ID</td>
                                                                                <td>123</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="user-info-first">E-mail</td>
                                                                                <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="0f6a776e627f636a4f6a626e6663216c6062">[email&#160;protected]</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="user-info-first">URL</td>
                                                                                <td><a href="#">https//www.bdtask.com/</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="user-info-first">Browser</td>
                                                                                <td>Chrome</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne3">
                                                        <h5 class="card-header__title mb-0">
                                                            <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                                                                <i class="material-icons">create</i>Edit name
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne3" class="collapse" aria-labelledby="headingOne3" data-parent="#accordion3">
                                                        <div class="card-body">
                                                            <h5>Edit Nickname for Tahamina Akther</h5>
                                                            <p>Everyone in this conversation will see this.</p>
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Tahamina Akther">
                                                            </div>
                                                            <div class="action-btn text-right">
                                                                <a href="#" >Save</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo3">
                                                        <h5 class="card-header__title mb-0">
                                                            <a href="javascript:void(0)" class="" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="true" aria-controls="collapseTwo3">
                                                                <i class="material-icons">color_lens</i>Change color 
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo3" class="collapse show" aria-labelledby="headingTwo3" data-parent="#accordion3">
                                                        <div class="card-body">
                                                            <h5>Pick a color for this conversation</h5>
                                                            <p>Everyone in this conversation will see this.</p>
                                                            <div class="radio-list change-bg-color">
                                                                <input type="radio" name="color" id="red3"/>
                                                                <label for="red3" data-color="red"><span class="red"></span></label>

                                                                <input type="radio" name="color" id="green3" checked/>
                                                                <label for="green3" data-color="green"><span class="green"></span></label>

                                                                <input type="radio" name="color" id="yellow3" />
                                                                <label for="yellow3" data-color="yellow"><span class="yellow"></span></label>

                                                                <input type="radio" name="color" id="olive3" />
                                                                <label for="olive3" data-color="olive"><span class="olive"></span></label>

                                                                <input type="radio" name="color" id="orange3" />
                                                                <label for="orange3" data-color="orange"><span class="orange"></span></label>

                                                                <input type="radio" name="color" id="teal3" />
                                                                <label for="teal3" data-color="teal"><span class="teal"></span></label>

                                                                <input type="radio" name="color" id="blue3" />
                                                                <label for="blue3" data-color="blue"><span class="blue"></span></label>

                                                                <input type="radio" name="color" id="violet3" />
                                                                <label for="violet3" data-color="violet"><span class="violet"></span></label>

                                                                <input type="radio" name="color" id="purple3" />
                                                                <label for="purple3" data-color="purple"><span class="purple"></span></label>

                                                                <input type="radio" name="color" id="pink3" />
                                                                <label for="pink3" data-color="pink"><span class="pink"></span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingFour3">
                                                        <h5 class="card-header__title mb-0">
                                                            <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseFour3" aria-expanded="false" aria-controls="collapseFour3">
                                                                <i class="material-icons">notifications</i>Notifications
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseFour3" class="collapse" aria-labelledby="headingFour3" data-parent="#accordion3">
                                                        <div class="card-body">
                                                            <h5>Conversation Notifications</h5>
                                                            <p>Everyone in this conversation will see this.</p>
                                                            <div class="form-group mb-4">
                                                                <span class="switch switch-sm">
                                                                    <input type="checkbox" class="switch" id="switch5">
                                                                    <label for="switch5">Receive notifications for new messages</label>
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <span class="switch switch-sm">
                                                                    <input type="checkbox" class="switch" id="switch6">
                                                                    <label for="switch6">Receive notifications for reactions</label>
                                                                </span>
                                                            </div>
                                                            <div class="action-btn text-right">
                                                                <a href="#" >Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--/.chat list sidebar right-->
                                    </div>
                                </div>
                            </div>
                            <div class="chat-overlay"></div>
                        </div><!--/.chat container-->
                    </div><!--/.body content-->
                </div><!--/.main content-->
                <?php include($_SERVER['DOCUMENT_ROOT'].'/application/views/footer.php'); ?> 
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
        <script src="/assets/plugins/emojionearea/dist/emojionearea.min.js"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="/assets/dist/js/pages/messenger.active.js"></script>
        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>
    </body>

</html>