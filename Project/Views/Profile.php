<?php
	session_start();
	$user="";
	$name="";
	$username="";
	$email="";
	$employid="";
	$gender="";
	$dob="";
	if (isset($_SESSION['loggeduser'])) {
		// code...
		$user=$_SESSION['loggeduser'];
		$name=$_user['myname'];
		$username=$_user['myusername'];
		$email=$_user['myemail'];
		$employid=$_user['myemployid'];
		$gender=$_user['gender'];
		$dob=$_user['dob'];
	}
?>
<html>
<head>
	<title>Profile Page</title>
	<table Height="10%" border = "1px" width = "100%"> 
		<tr>
			<td> 
				<h2 align="left"> E-Learing </h2> 
				<h5 align = "right">
					<a href="Home.php">Home|</a>
				Logged in as:  <a href = "Profile.php"> <?php if(isset($myusername)) echo "$myusername" ?></a> 
				<a href="Logout.php"> |Logout </a>
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>
			<table border = "1px" width="100%" height="60%">
		<tr>
			<td >
				<table width = "250px">
					<tr colspan = "100%"> 
					</tr>
					<tr>
					<ul>
						<li><a href="Profile.php">Profile</a></li>
						<li><a href="Edit_Profile.php">Edit Profile</a></li>
						<li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
						<li><a href="ManagementDashboard.php">Dashboard</a></li>
						<li><a href="Payment.php">See Payment</a></li>
						<li><a href="Catagories.php">See Catagories</a></li>
						<li><a href="CourseFee.php">CourseFee</a></li>
						<li><a href="Advertisement.php">Give Advertisement</a></li>
						<li><a href="ControlExam.php">Control Exam</a></li>
						<li><a href="AddRules.php">Add Rules</a></li>
						<li><a href="Promotionaloffer.php">Give Promotional Offer</a></li>
						<li><a href="CompReview.php">See Complain and Review</a></li>

					</ul>
					</tr>
				</table>
			</td>
			<td width = "100%" align="center">
			<fieldset style="width:80%">
				<legend>Profile</legend>
				<table>
					<tr>
						<td width="2%" align="left">Name</td>
						<td>: <?php
						if (isset($myname)) {
							// code...
							echo "$myname";
						}?></td>
						<td ></td>
					</tr>
					<tr>
						<td>Username</td>
						<td>: <?php
						if (isset($myusername)) {
							// code...
							echo "$myusername";
						}?></td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td>: <?php
						if (isset($myemail)) {
							// code...
							echo "$myemail";
						}?></td>
					</tr>
					<tr>
						<td>Employ ID</td>
						<td>: <?php
						if (isset($emymployid)) {
							// code...
							echo "$myemployid";
						}?>
							
						</td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>: <?php
						if (isset($gender)) {
							// code...
							echo "$gender";
						}
					?></td>
					</tr>
					<tr>
						<td>Date of Birth</td>
						<td>: <?php
						if (isset($dob)) {
							// code...
							echo "$dob";
						}
					?></td>
					</tr>
					<tr>
						<td></td>
						<td align="right"><a href = "../Views/ChangeProfilePicture.php"> Change Profile Picture </a> </td>
					</tr>
				</table>
			</fieldset>	
			</td>
		</tr>
	</table>


    <table width = "100%" border = "1px">
        <tr height = "50px">
            <td align = "center"> Copyright @ <h align="center">www.facebook.com/e-learing </h>
             </td>
        </tr>
    </table>
</body>
</html>