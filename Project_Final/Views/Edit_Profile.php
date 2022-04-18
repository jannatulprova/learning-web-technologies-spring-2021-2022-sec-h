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
			<td width = "100%" align = "center">
			<form method = "POST" action = "../controller/Editprofile_validation.php">
				<fieldset style = "width: 65%">
					<legend>Profile</legend>
					<table align = "left" style="width : 100%">
						<tr>
							<td width = "30%"> Name</td>
							<td >: <input type = "text" name = "myname" value = "<?= $myname?>"></td>
							<td> </td>
						</tr>
						<tr>
							<td width = "30%"> Email </td>
							<td >: <input type = "text" name = "myemail" value = "<?= $myemail?>"></td>
							<td> </td>
						</tr>
						<tr>
							<td width = "30%"> Date of birth</td>
							<td >: <input type="date" name="dob" value="<?= $dob?>"></td>
							<td> </td>
						</tr>
						<tr>
							<td align="right"> <input type = "submit" name = "submit" value = "Save Changes"> </td>
							    
						</tr>
					</table>
				</fieldset>
			</form>
			</td>
		</tr>
	</table>
	<table width = "100%" border = "1px">
		<tr height = "50px">
			<td align = "center"> Copyright @2022 </td>
		</tr>
	</table>
</body>
</html>