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
                    <!--Content Header (Page header)-->
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="/index.php/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/index.php/parents">Parent</a></li>
                                <li class="breadcrumb-item active">Add/Update Parents</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <!-- <div class="header-icon text-success mr-3"><i class="typcn typcn-puzzle-outline"></i></div> -->
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Add/Update Parent/Guardian</h1>
                                    <small>Fill out the form below to a register/update  parent/guardian</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)--> 
                    <div class="body-content">
                       
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <form id="parent-form"  data-parsley-validate="">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-17 font-weight-600 mb-0 text-success">Guardian Information</h6>
                                                </div>
                                                <div class="text-right">
                                                    <div class="actions">
                                                        <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="processing"></div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="first_name" class="font-weight-600">First Name</label>
                                                        <input type="text" class="form-control" id="first_name" placeholder="First name" name="first_name" required>
                                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="last_name" class="font-weight-600">Last Name</label>
                                                        <input type="text" class="form-control" id="last_name" placeholder="Last name " name="last_name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group form-check">
                                                        <label class="font-weight-600"  for="middle_name">Middle Name</label>
                                                        <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle name" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="nationality" class="font-weight-600">Nationality</label>
                                                        <select class="form-control" id="nationality" name="nationality" required>
                                                            <option value="Non-Nigerian">Non-Nigeria</option>
                                                            <option value="Nigerian">Nigeria</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group form-check">
                                                        <label class="font-weight-600"  for="religion">Religion</label>
                                                        <select class="form-control" id="religion" required name="religion">
                                                            <option ></option>
                                                            <option value="African Traditional Religion"> African Traditional Religion</option>
                                                            <option value="Buduism">Buduism</option>
                                                            <option value="Christainity">Christainity</option>
                                                            <option value="Hinduism">Hinduism</option>
                                                            <option value="Islam">Islam</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group form-check">
                                                        <label class="font-weight-600"  for="religion">State of origin</label>
                                                        <select class="form-control" required name="state_id" id="state_id">
                                                            <option ></option>
                                                            <?php

                                                                foreach($states as $state){

                                                                    echo "<option value='".$state['id']."'>".$state['state']." </option>";
                                                                }
                                                            
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="email" class="font-weight-600">Email Address</label>
                                                        <input class="form-control" type="email" id="email" data-parsley-trigger="change" name="email" required>                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="phone" class="font-weight-600">Mobile #</label>
                                                        <input class="form-control" type="text" id="phone" name="phone" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group form-check">
                                                        <label class="font-weight-600"  for="address" >Contact Address</label>
                                                        <input class="form-control" type="text" id="address" name="address" required>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <!-- <hr class="my-4"> -->
                                            <h5 class="font-weight-600 text-success">Access Credentials</h5>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="username" class="font-weight-600">Username</label>
                                                        <input type="text" class="form-control" id="username" name="username" required>
                                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="password" class="font-weight-600">Password</label>
                                                        <input type="password" class="form-control" id="password" name="password" required placeholder="Last name ">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group form-check">
                                                        <label class="font-weight-600"  for="conf_password">Confirm password</label>
                                                        <input type="password" class="form-control" id="conf_password" name="conf_password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                <button type="cancle" class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </form>
                            </div>   
                        </div>
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
        <script src="/assets/plugins/parsley/parsley.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $('#parent-form').parsley().on('field:validated', function() {
                    var ok = $('.parsley-error').length === 0;
                    $('.bs-callout-info').toggleClass('hidden', !ok);
                    $('.bs-callout-warning').toggleClass('hidden', ok);
                })
                .on('form:submit', function() {
                    
                    document.body.scrollTop = 0; // For Safari
                    document.documentElement.scrollTop = 0; //
                    
                    $('#processing').html("<img src='/assets/img/ajax-loader.gif' /></center>");
                    //e.preventDefault();
                    formdata = $('#parent-form').serialize();
                    
                    $.post("/index.php/parents/process_add", formdata, 

                    function(result, status){
                        
                        data = JSON.parse(result);
                        if(data.error==true){
                            $('#processing').html("<div class='alert alert-danger'><strong>Opps!!!</strong> "+data.msg+"</div>");
                        }
                        else{
                            $('#processing').html("<div class='alert alert-success'><strong>Congratulations!</strong> "+data.msg+"</div>");
                            document.getElementById("parent-form").reset();   
                            //window.location.href = data.route;
                        }
                    });
                    return false; // Don't submit form for this demo
                });
            });
        </script>
        <!--Page Active Scripts(used by this page)-->
        <script src="/assets/dist/js/pages/forms-basic.active.js"></script>
        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>
    </body>

</html>