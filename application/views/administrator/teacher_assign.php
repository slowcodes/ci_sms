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
        <link rel="shortcut icon" href="assets/dist/img/favicon.png">
        <!--Global Styles(used by all pages)-->
        <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="/assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
        <link href="/assets/plugins/typicons/src/typicons.min.css" rel="stylesheet">
        <link href="/assets/plugins/themify-icons/themify-icons.min.css" rel="stylesheet">
        <!--Third party Styles(used by this page)--> 
        <link href="/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


        <link href="/assets/plugins/NotificationStyles/css/demo.css" rel="stylesheet">
        <link href="/assets/plugins/NotificationStyles/css/ns-default.css" rel="stylesheet">
        <link href="/assets/plugins/NotificationStyles/css/ns-style-growl.css" rel="stylesheet">
        <link href="/assets/plugins/NotificationStyles/css/ns-style-attached.css" rel="stylesheet">
        <link href="/assets/plugins/NotificationStyles/css/ns-style-bar.css" rel="stylesheet">
        <link href="/assets/plugins/NotificationStyles/css/ns-style-other.css" rel="stylesheet">
        <link href="/assets/plugins/sweetalert/sweetalert.css" rel="stylesheet">
        <link href="/assets/plugins/toastr/toastr.css" rel="stylesheet">

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
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Teachers</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <!-- <div class="header-icon text-success mr-3"><i class="typcn typcn-puzzle-outline"></i></div> -->
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Assign Teachers & Subject</h1>
                                    <small>Manage Teachers &amp; Subject by assigning subjects to teachers </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)--> 
                    <div class="body-content">
                        <!--HTML (DOM) sourced data-->
                        <div class="card mb-4">
                            
                            <div class="row">
                                <div class="col-md-4">
                                    
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-success">Teachers</h5>
                                        </div>
                                    
                                        <div class="card-body">
                                            <!-- <div class="form-group form-check"> -->
                                                <!-- <label class="font-weight-600"  for="middle_name"> &nbsp; </label> -->
                                                <select name="classes" id="classes" class="form-control" onChange="getTeacher(this);">
                                                    <?php
                                                    foreach($teachers as $teacher){
                                                        echo "<option value='".$teacher['id']."'>".$teacher['first_name'].' '.$teacher['last_name']."</option>";
                                                    }
                                                        
                                                    ?>
                                                </select>
                                                <hr/>
                                                <div id="processing"></div>

                                                <div id="table_response"> 
                                                    <div class="table-responsive">
                                                        <h6>ASSIGNED SUBJECTS</h6>
                                                        <table class="table">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Subject</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbl_rsp">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div id="table_response"> 
                                                    <div class="table-responsive">
                                                        <h6>ASSIGNED CLASSES</6>
                                                        <table class="table">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Classrooms</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbl_cls_rsp">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            <!-- </div> -->
                                        </div>
                                    </div>                                 
                                </div>

                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-success">All classes</h5>
                                        </div>

                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table display table-bordered table-striped table-hover sourced">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Select</th>
                                                            <th>Level</th>
                                                            <th>Class</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php

                                                            foreach($classrooms As $classroom){
                                                                echo "<tr><td>".$classroom['id']."</td>";
                                                                echo "<td><input type='checkbox' class='form-control' onclick=checkAddClassroom(this) value=".$classroom['id']." name='classroom[]' /></td>";
                                                                echo "<td>".$classroom['level']."</td>";
                                                                echo "<td>".$classroom['classroom']."</td>
                                                                </tr>";
                                                            }
                                                        ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Select</th>
                                                            <th>Level</th>
                                                            <th>Class</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-success">All Subjects on offer</h5>
                                        </div>

                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table display table-bordered table-striped table-hover sourced">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Select</th>
                                                            <th>Subject</th>
                                                            <th>Level</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                            <?php

                                                                foreach($subjects As $subject){
                                                                    echo "<tr><td>".$subject['id']."</td>";
                                                                    echo "<td><input type='checkbox' class='form-control' onclick=checkAddSubject(".$subject['id'].") name='classroom[]' /></td>";
                                                                    echo "<td>".$subject['subject']."</td>";
                                                                    echo "<td>".$subject['level']."</td></tr>";
                                                                }
                                                            ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Select</th>
                                                            <th>Subject</th>
                                                            <th>Level</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

        <script src="/assets/plugins/NotificationStyles/js/modernizr.custom.js"></script>
        <script src="/assets/plugins/NotificationStyles/js/classie.js"></script>
        <script src="/assets/plugins/NotificationStyles/js/notificationFx.js"></script>
        <script src="/assets/plugins/NotificationStyles/js/snap.svg-min.js"></script>


        <!-- Third Party Scripts(used by this page)-->
        <script src="/assets/plugins/datatables/dataTables.min.js"></script>
        <script src="/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="/assets/plugins/datatables/data-sources.active.js"></script>
        <!--Page Scripts(used by all page)-->
        <script src="/assets/dist/js/sidebar.js"></script>

        <script>

            function getTeacher(obj){
                $.post("/index.php/teachers/get_teacher/"+obj.value, 
                    function(result, status){
                        data = JSON.parse(result);
                        if(data.error==true){
                            $('#processing').html("<div class='alert alert-danger'><strong>Opps!!!</strong> "+data.msg+"</div>");
                        }
                        else{
                            $('#processing').html("<div class='alert alert-success'><strong>Congratulations!</strong> "+data.msg+"</div>");
                            $('#processing').html("<b style='text-transform:uppercase'>"+data.teacher.first_name+' '+data.teacher.last_name+"</b> ("+data.highest_qualification+")");
                            $('#processing').prepend('<div><img src="/assets/img/dummy.png" width="70%" id="passport"/></div>');

                            //for(assignment in data.subject_assigned){
                            //    console.log(assignment.subject);
                            //}
                            data.subject_assigned.forEach(addSubjectTable);
                            data.classes.forEach(addClassesTable);
                        }
                    }
                );
            }

            function addSubjectTable(row){
                $('#tbl_rsp').append("<tr><td>"+row.id+"</td><td>"+row.subject+"</td><td><button class='btn btn-danger btn-circle mb-2 mr-1'><i class='fas fa-trash-alt'></i></button></td></tr>")
                //console.log(row.subject);
            }

            function addClassesTable(row){
                $('#tbl_cls_rsp').append("<tr><td>"+row.id+"</td><td>"+row.classroom+"</td><td><button class='btn btn-danger btn-circle mb-2 mr-1'><i class='fas fa-trash-alt'></i></button></d></tr>");
            }

            function checkAddClassroom(classObj){
                if(classObj.checked == true){

                    showAlert();
                    // $.post("/index.php/teachers/add_subject_teacher/"+obj.value+"/"+$('classes').value, 
                    //     function(result, status){
                    //         data = JSON.parse(result);
                    //         if(data.error==true){
                    //         }
                    //     }
                    // );
                }
                else{
                    //remove if exist
                }
                
            }

            function showAlert(){
                setTimeout(function () {

                    //classie.remove(bttn, 'active');

                    // create the notification
                    var notification = new NotificationFx({
                        message: '<p>Congratulations the selected teacher has been successfully assigned the selected subject. <a href="#">View teacher chatter</a>.</p>',
                        layout: 'growl',
                        effect: 'scale',
                        type: 'notice', // notice, warning, error or success
                        onClose: function () {
                            //bttn.disabled = false;
                        }
                    });

                    // show the notification
                    notification.show();

                }, 1200);
            }
        </script>
    </body>

</html>