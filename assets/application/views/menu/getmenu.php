<?php

function loadmenu($userType, $first_name, $last_name, $username){
    if($userType == 'Administrator'){
        include('admin_menu.php');
    }
    elseif ($userType == 'Teacher'){
        include('teacher_menu.php');
    }
    elseif ($userType == 'Student'){
        include('student_menu.php');
    }
    elseif ($userType == 'Parent'){
        include('parent_menu.php');
    }
    elseif ($userType == 'Manager'){
        include('manager_menu.php');
    }
}

?>