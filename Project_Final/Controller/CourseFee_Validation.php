<?php 
    session_start();
    require('../Model/CourseFee_Model.php');


    if(isset($_REQUEST['submit'])){
        $teacher_name = $_REQUEST['teacher_name'];
        $course_name = $_REQUEST['course_name'];
        $course_fee = $_REQUEST['course_fee'];

        if($teacher_name != null && $course_name != null && $course_fee != null){


            $status = add($teacher_name, $course_name, $course_fee);

            if($status)
            {
                header('location: ../Views/ManagementDashboard.php');
            }else{
                header('location: ../Views/Home.php');
            }

        }else{
            echo "null submission..";
        }
    }
?>