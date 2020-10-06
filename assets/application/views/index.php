<?php

    if($user_type == 'Administrator'){
        include('dashboard/admin_dashboard.php');
    }
    elseif ($user_type == 'Teacher'){
        include('dashboard/teacher_dashboard.php');
    }
    elseif ($user_type == 'Student'){
        include('dashboard/student_dashboard.php');
    }
    elseif ($user_type == 'Parent'){
        include('dashboard/parent_dashboard.php');
    }
    elseif ($user_type == 'Manager'){
        include('dashboard/manager_dashboard.php');
    }

?>