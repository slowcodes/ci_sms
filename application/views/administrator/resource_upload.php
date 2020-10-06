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
        <link rel="shortcut icon" href="/assets/dist/img/favicon.png">
        <!--Global Styles(used by all pages)-->
        <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="/assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
        <link href="/assets/plugins/typicons/src/typicons.min.css" rel="stylesheet">
        <link href="/assets/plugins/themify-icons/themify-icons.min.css" rel="stylesheet">
        <!--Third party Styles(used by this page)--> 
        <link href="/assets/plugins/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
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
                         include($_SERVER['DOCUMENT_ROOT'].'/application/views/topbar.php')
                    ?>
                    <!--/.navbar-->
                    <!--Content Header (Page header)-->
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Elearning</a></li>
                                <li class="breadcrumb-item active">Upload learning resource</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <div class="header-icon text-success mr-3"><i class="typcn typcn-upload"></i></div>
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Upload learning Resources</h1>
                                    <small> Drag and drop learning resources intended for students with image previews.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)--> 
                    <div class="body-content">
                        <div class="card">
                            <div class="alert alert-warning">
                                <strong>E-learning</strong> supported content types includes .pdf, .mp4, .docx, .txt and .mpeg. This means 
                                    that you can drag and drop a files of these type onto the upload box, and the file gets uploaded to the server via AJAX
                            </div>
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="fs-17 font-weight-600 mb-0">Content upload form</h6>
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
                                <div id="processing"></div>
                                <form method="post" id="params" action="#">
                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="subject" class="font-weight-600">Description</label>
                                                <input class="form-control" id="description" name="description" onfocusout="setSubjectLevel();">
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="level" class="font-weight-600">Level</label>
                                                <select class="form-control" id="level" name="level" onChange="setSubjectLevel();" >
                                                    <?php
                                                        foreach($levels as $level){
                                                            echo "<option value='".$level['id']."'>".$level['level']."</option>";
                                                        }
                                                    ?>
                                                </select>
                                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="subject" class="font-weight-600">Subject</label>
                                                <select class="form-control" id="subject" name="subject" onChange="setSubjectLevel();">
                                                    <?php
                                                        foreach($subjects as $subject){
                                                            echo "<option value='".$subject['id']."'>".$subject['subject']."</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </form>
                                <form action="/index.php/resources/upload" class="dropzone" id="fileupload" >
                                    <div class="fallback " >
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                                <!-- <div class="col-md-12"> To be called on si=ubmission
                                    <div class="form-group">
                                        <label  for="religion">Class</label>
                                        <select class="form-control" id="religion" required name="religion">
                                            <option ></option>
                                            <option value="African Traditional Religion"> African Traditional Religion</option>
                                            <option value="Buduism">Buduism</option>
                                            <option value="Christainity">Christainity</option>
                                            <option value="Hinduism">Hinduism</option>
                                            <option value="Islam">Islam</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="card-footer">
                                    <button type="submit" id="submit-all" onClick="resetform();" class="btn btn-primary mr-1">Submit</button>
                                    <button type="cancel" class="btn btn-danger">Cancel</button>
                                </div>

                            </div>
                            <!-- <div class="card-footer">
                                <p class="mb-0">All avalible options and full documentation you can find: <a target="_blank" href="http://www.dropzonejs.com/#configuration-options">http://www.dropzonejs.com/#configuration-options</a> </p>
                            </div> -->
                        </div>
                    </div><!--/.body content-->
                </div><!--/.main content-->
                <?php
                    include($_SERVER['DOCUMENT_ROOT'].'/application/views/footer.php')
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
        <script src="/assets/plugins/dropzone/dist/min/dropzone.min.js"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="/assets/plugins/dropzone/dropzone.active.js"></script>
        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>

        <script>
            function setSubjectLevel() {
                formdata = $('#params').serialize();
                $.post("/index.php/resources/setparams", formdata, 
                    function(result, status){
                });    
            }

            function resetform(){
                $("#processing").html("<div class='alert alert-success'><strong>Congratulations!</strong> Your files has been successfully uploaded</div>");
                setTimeout(function() { 
                    $("#processing").hide(); 
                    window.location.href = '/index.php/resources/add';
                }, 5000);
                document.getElementById("fileupload").reset();
                document.getElementById("params").reset();
            }

        </script>
    </body>

</html>