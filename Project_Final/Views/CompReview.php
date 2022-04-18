<?php
	session_start();
	$user="";
	$myname="";
	$myusername="";
	$myemail="";
	$myemployid="";
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
	<title>Complain and Review Page</title>
	<head>
		<title>Dashboard Page</title>
		<style type="text/css">
		body{
		    background:#BCC6CC;
		    margin:0;
		    padding:0;
		    font-family: sens-serif;
			 background-repeat: no-repeat;
			 background-size:100%
		    
		}
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
		<table height="60%" width="100%" border="1px">
			<tr>
				<td align="center">
					<form method="POST" action="../Views/Profile.php"></form>
					<fieldset align="left" style="width: 30%">
						<legend>Write Review</legend>
							<input type="text" name="review" value=""><br>
							<input type="submit" name="submit" value="submit">
						</form>
					</fieldset>
				</td>
			</tr>
		</table>

		<table height="10%" width = "100%" border = "1px">
        <tr height = "50px">
            <td align = "center"> Copyright @ <h align="center">www.facebook.com/e-learing </h>
             </td>
        </tr>
    </table>
	</body>
</html>