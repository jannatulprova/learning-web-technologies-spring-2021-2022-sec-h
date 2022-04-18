<?php 
    session_start();
    require('../model/Payment_Model.php');


    if(isset($_REQUEST['submit'])){
        $student_name = $_REQUEST['student_name'];
        $teacher_name = $_REQUEST['teacher_name'];
        $course_name = $_REQUEST['course_name'];
        $payment = $_REQUEST['payment'];
        $bkash_num = $_REQUEST['bkash_num'];

        if($student_name != null && $teacher_name != null && $course_name != null && $payment != null && $bkash_num != null){


            $status = add($student_name, $teacher_name, $course_name, $payment, $bkash_num);

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