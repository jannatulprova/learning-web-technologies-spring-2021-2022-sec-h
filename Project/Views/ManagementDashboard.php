<?php
	session_start();
	$username="";
	if (isset($_SESSION['loggeduser'])) {
		// code...
		$username=$_SESSION['loggeduser']['username'];
	}
?>
<html>
	<head>
		<title>Dashboard Page</title>
		<table height="10%" border = "1px" width = "100%">
			<tr>
				<td>
					<h2 align= "left"> E-Learning</h2>
					<h5 align= "right">
						<a href= "Home.php"> Home|</a>
						Logged in as: <a href= "Profile.php"><?php if (isset($username)) {
							// code...
							echo "$username";
						}?></a>
						<a href= "Logout.php"> |Logout|</a>
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
			<td width = "100%">	
			</td>
		</tr>
	</table>
		<table height="10%" width = "100%" border = "1px">
        <tr height = "50px">
            <td align = "center"> Copyright @ www.facebook.com/e-learing
             </td>
        </tr>
    </table>
</body>
</html>