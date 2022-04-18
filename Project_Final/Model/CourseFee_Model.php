<?php
	function connection()
	{
		$con = mysqli_connect('localhost', 'root', '', 'e-learningdb');
        return $con;
	}
	function add($teacher_name, $course_name, $course_fee)
	{
		$conn = connection();
        $sql = "insert into course_fee values ('{$teacher_name}','{$course_name}','{$course_fee}')";
        //echo $sql;
        if(mysqli_query($conn,$sql)){
            return true;
        }else{
            return false;
        }
	}
		function getAllUser()
		{
			$conn = getConnection();
		}
		function getUserByName($course_name)
		{
			$conn = getConnection();
		}
		function updateUser()
		{
			$conn = getConnection();
		}
?>
