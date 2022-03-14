<?php
	session_start();

	if (isset($_REQUEST['submit'])) 
	{
		$myusername = $_REQUEST['myusername'];
		$password = $_REQUEST['password'];

		if ($myusername != null && $password != null) 
		{
			
			//if (isset($_SESSION['user'])) 
		//{
			//$user = $_SESSION['user'];
		//}

		//if ($user['myusername'] == $myusername && $user['password'] == $password) 
		//{
			// code...
			//$_SESSION['status'] = 'true';
			//setcookie('status', 'true', time()+3600, '/');
			$_SESSION['user']=$user;
			header('location:../Views/ManagementDashboard.php');
		}
		else
		{
			echo "Null submission";
		}
	//}
	//else
	//{
		//echo "Null submission";
	//}
		
	}
?>