<?php
	session_start();
	require('../Model/Management_Model.php');
	if (isset($_REQUEST['submit'])) 
	{
		$myusername = $_REQUEST['myusername'];
		$password = $_REQUEST['password'];

		if ($myusername != null && $password != null) 
		{
			if(login($myusername, $password))
			{
				$_SESSION['status'] = 'true';
                $con = mysqli_connect('localhost', 'root', '', 'e-learningdb');
                $sql = "select * from management_log_in where myusername = '{$myusername}' and password = '{$password}'";
                $res = mysqli_query($con, $sql);
                if(mysqli_num_rows($res))
                {
                	while($row = mysqli_fetch_assoc($res))
                	{
                		if($myusername == $row['myusername'] and $password == $row['password'])
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
							$myemployid = $row['myemployid']; 
							$_SESSION['current_myemployid']=$row['myemployid'];
							break;
						}
                	}
                }
                setcookie('status', 'true', time()+3600, '/');
                header('location:../Views/ManagementDashboard.php');
			}

			
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
	else echo "Error";
?>