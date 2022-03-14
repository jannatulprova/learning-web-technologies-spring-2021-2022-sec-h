<?php
	session_start();

	if (isset($_REQUEST['submit'])) 
		{
			$myname = $_REQUEST['myname'];
			$myemail = $_REQUEST['myemail'];
			$myemployid = $_REQUEST['myemployid'];
			$myusername = $_REQUEST['myusername'];
			$password = $_REQUEST['password'];
			$confirmpassword = $_REQUEST['confirmpassword'];
			$gender = $_REQUEST['gender'];
			$dob = $_REQUEST['dob'];
			
			if($myname != null && $myemail !=null && $myemployid != null && $myusername != null && $password != null && $confirmpassword != null && $gender != null && $dob != null)
		

				{
					//if (isset($_SESSION['user'])) 
						//{
							//$user = $_SESSION['user'];
						
						//if ($user['myname'] == $myname && $user['myemail'] == $myemail && $user['myemployid'] == $myemployid && $user['myusername'] == $myusername && $user['password'] == $password && $user['confirmpassword'] == $confirmpassword && $user['gender'] == $gender && $user['dob'] == $dob)$ok=false;

							//{
								//$_SESSION['status'] = 'true';
								//setcookie('status', 'true', time()+3600, '/');
								$user=['myemployid'=>$myemployid, 'myusername'=>$myusername, 'password'=>$password, 'myemail'=>$myemail];
								$_SESSION['user']= $user;
								header('location: ../Views/Login.php');
							}else{
								echo "Null submission";
							}

							//}
							

							

						
						//}
						
				}
				

		
?>