<!doctype html>
<html lang="en">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
        <meta name="author" content="Bdtask">
        <title> SLMS - Government Secoundary School, Kuje</title>
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
                        //loadmenu($user_type, $first_name, $last_name, $username);
                    ?>
                    <!--/.navbar-->
                    <!--Content Header (Page header)-->
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="/index.php/dashboard">Home</a></li>
                                <li class="breadcrumb-item"><a href="/index.php/teachers">Teachers</a></li>
                                <li class="breadcrumb-item active">Add/Update Teacher</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <!-- <div class="header-icon text-success mr-3"><i class="typcn typcn-puzzle-outline"></i></div> -->
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Add/Update Teacher</h1>
                                    <small>Complete the form below to add a new teacher</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)--> 
                    <div class="body-content">
                        <form id="teacher-form" data-parsley-validate="" method="post">
                            <div class="card">
                                <div class="alert alert-warning">
                                    On completing of this form, Teachers are adviced to fill out the employement history form immediately activating their account and they accessing their account for the first time.
                                </div>
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="fs-17 font-weight-600 mb-0 text-success">Personal Information</h6>
                                        </div>
                                        <div class="text-right">
                                            <div class="actions">
                                                <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                                <div class="dropdown action-item" data-toggle="dropdown">
                                                    <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="processing"></div>
                                    <div class="form-group row">
                                        <label for="staff_id" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Staff ID</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <input type="text" class="date form-control" id="staff_id" name="staff_id" required/>
                                            <!-- <div class="text-muted">Custom date format: <code>mm/dd/yyyy</code></div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="first_name" class="col-lg-3 col-sm-12 col-form-label font-weight-600">First Name</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <input type="text" class="time form-control" id="first_name" name="first_name" required/>
                                            <!-- <div class="text-muted">Custom time format: <code>00:00:00</code></div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="last_name" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Last Name</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <input type="text" class="date_time form-control" id="last_name" name="last_name" required/>
                                            <!-- <div class="text-muted">Date &amp; Hour format: <code>mm/dd/yyyy & 00:00:00</code></div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="middle_name" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Middle Name</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <input type="text" class="cep form-control" id="middle_name" name="middle_name" required/>
                                            <!-- <div class="text-muted">ZIP Code Mask <code>00000-000</code></div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sex" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Gender</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <select class="cep_with_callback form-control" id="sex" name="sex" required>
                                                <option></option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="date_of_birth" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Date of birth</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <input type="date" class=" form-control" id="date_of_birth" name="dob"/>
                                            <!-- <div class="text-muted">Crazy Zip Code Mask <code>0-00-00-00</code></div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Email Address</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <input type="email" class="money form-control" id="email" name="email" data-parsley-trigger="change"/>
                                            <!-- <div class="text-muted">Money Mask <code>000.000.000.000.000,00</code></div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Contact Address (Postal)</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <input type="text" class="placeholder form-control" id="address" name="address" required/>
                                            <!-- <div class="text-muted">Placeholder Mask <code>00/00/0000</code></div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Telephone</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <input type="text" class="phone form-control" id="phone" name="phone" required/>
                                            <!-- <div class="text-muted">Telephone Mask <code>0000-0000</code></div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="home_town" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Home town address</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <input type="text" class="phone_with_ddd form-control" id="home_town" name="home_town" required/>
                                            <!-- <div class="text-muted">Telephone with Code Area Mask<code> (00) 0000-0000</code></div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="state" class="col-lg-3 col-sm-12 col-form-label font-weight-600">State of origin</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <select class="phone_us form-control" id="state" name="state" required>
                                                <option></option>
                                                <?php

                                                    foreach($states as $state){

                                                        echo "<option value='".$state['id']."'>".$state['state']." </option>";
                                                    }

                                                ?>                                            </select>
                                            <!-- <div class="text-muted">US Telephone Mask<code> (000) 000-0000</code></div> -->
                                        </div>
                                    </div>
                                    

                                    <h5 class="font-weight-600 text-success">Access Credentails</h5>

                                    <div class="form-group row">
                                        <label for="username" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Username</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <input type="text" class="mixed form-control" id="username" name="username" required/>
                                            <!-- <div class="text-muted">Mixed Type Mask<code> AAA 000-S0S</code></div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Password</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <input type="password" class="cpf form-control" id="password" name="password" required/>
                                            <!-- <div class="text-muted">CPF Mask<code> 000.000.000-00</code></div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="conf_password" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Confirm password</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <input type="password" class="cnpj form-control" id="conf_password" name="conf_password" required/>
                                            <!-- <div class="text-muted">CNPJ Mask<code> 00.000.000/0000-00</code></div> -->
                                        </div>
                                    </div>
                                    <h5 class="font-weight-600 text-success">Academic Information</h5>

                                    <div class="form-group row">
                                        <label for="qualification" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Highest Qualification</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <select class="sp_celphones form-control" id="qualification" name="qualification" required>
                                                <option value="B.sc">B.sc</option>
                                                <option value="M.sc">M.sc</option>
                                                <option value="Phd">Phd</option>
                                                <option value="B.Ed">B.Ed</option>
                                                <option value="M.Ed">M.Ed</option>
                                                <option value="NCE">NCE</option>
                                                <option value="HND">HND</option>
                                                <option value="OND">OND</option>
                                            </select>
                                            <!--<div class="text-muted">São Paulo Celphones Mask<code>(000) 000-0000</code></div>-->
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="qualification_year" class="col-lg-3 col-sm-12 col-form-label font-weight-600">Year Obtained</label>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <input type="text" class="clear-if-not-match form-control" id="qualification_year" name="qualification_year" required/>
                                            <!-- <div class="text-muted">With Clear If Not Match Option Mask<code> 00/00/0000</code></div> -->
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                    
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                    <button type="cancel" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                        </form>
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
        <script src="/assets/plugins/parsley/parsley.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $('#teacher-form').parsley().on('field:validated', function() {
                    var ok = $('.parsley-error').length === 0;
                    $('.bs-callout-info').toggleClass('hidden', !ok);
                    $('.bs-callout-warning').toggleClass('hidden', ok);
                })
                .on('form:submit', function() {
                    document.body.scrollTop = 0; // For Safari
                    document.documentElement.scrollTop = 0; //
                    
                    $('#processing').html("<img src='/assets/img/ajax-loader.gif' /></center>");
                    //e.preventDefault();
                    formdata = $('#teacher-form').serialize();
                    
                    $.post("/index.php/teachers/process_add", formdata, 
                    function(result, status){
                        
                        data = JSON.parse(result);
                        if(data.error==true){
                            $('#processing').html("<div class='alert alert-danger'><strong>Opps!!!</strong> "+data.msg+"</div>");
                        }
                        else{
                            $('#processing').html("<div class='alert alert-success'><strong>Congratulations!</strong> "+data.msg+"</div>");
                            document.getElementById("teacher-form").reset();   
                            //window.location.href = data.route;
                        }
                    });
                    return false; // Don't submit form for this demo
                });
            });
        </script>
        <!-- Third Party Scripts(used by this page)-->
        <!-- <script src="/assets/plugins/jQuery-mask-plugin/jquery.mask.min.js"></script>
        <script src="/assets/plugins/jQuery-mask-plugin/examples.js"></script> -->
        <!--Page Active Scripts(used by this page)-->

        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>
    </body>

</html>