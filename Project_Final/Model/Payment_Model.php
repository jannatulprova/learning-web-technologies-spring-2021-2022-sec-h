<?php 

    function connection()
    {
        $con = mysqli_connect('localhost', 'root', '', 'e-learningdb');
        return $con;
    }

    function add($student_name,$teacher_name,$course_name, $payment, $bkash_num)
    {
        $conn = connection();
        $sql = "insert into payment values ('{$student_name}','{$teacher_name}','{$course_name}','{$payment}','{$bkash_num}')";
        echo $sql;
        if(mysqli_query($conn,$sql)){
            return true;
        }else{
            return false;
        }

    }
        function getAllUser(){
        $conn = getConnection();
    }

    function getUserByStudentName($student_name){
        $conn = getConnection();
    }

    function updateUser(){
        $conn = getConnection();
    }


?>