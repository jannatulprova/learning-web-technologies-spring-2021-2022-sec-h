<?php
	session_start();
	$user="";
	$myname="";
	$myemail="";
	$myemployid="";
	$myusername="";
	$gender="";
	$dob="";
	if (isset($_SESSION['current_myemployid'])) {
		// code...
		$id = $_SESSION['current_myemployid'];
		$con = mysqli_connect('localhost', 'root', '', 'e-learningdb');
                $sql = "select * from management_log_in where myemployid = '{$id}'";
                $res = mysqli_query($con, $sql);
		
		if(mysqli_num_rows($res))
                {
                	while($row = mysqli_fetch_assoc($res))
                	{
                		if($id == $row['myemployid'])
                		{
						$myname=$row['myname'];
						$myemail=$row['myemail'];
						$myemployid=$row['myemployid'];
						$myusername=$row['myusername'];
						$gender=$row['gender'];
						$dob=$row['dob'];	
						}
                	}
                }
	}
?>
<html>
<head>
	<title>Profile Page</title>
	<style type="text/css">
		body{
		    background:#BCC6CC;
		    margin:0;
		    padding:0;
		    font-family: sens-serif;
			 background-repeat: no-repeat;
			 background-size:100%
		    
		}

		
	</style>
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
						if (isset($myemployid)) {
							// code...
							echo "$myemployid";
						}?>
							
						</td>
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