<?php 
	session_start();
	$id =$_SESSION['current_myemployid'];
	$con = mysqli_connect('localhost', 'root', '', 'e-learningdb');
  
	 $sql = "select * from management_log_in where myemployid = '{$id}'";
	 $res = mysqli_query($con, $sql);
	 $row =  mysqli_fetch_assoc($res);
	 if(isset($_POST['submit']))
	{
		$myname = $_POST['myname'];
		$myemail = $_POST['myemail'];
		$dob = $_POST['dob'];
		$sql = "update management_log_in set myname='{$myname}',
		myemail='{$myemail}',
		DOB='{$dob}' 
		where myemployid = '{$id}'";
		$res = mysqli_query($con, $sql);
		header('location:../Views/Profile.php');


	}
?>