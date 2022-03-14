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
		<title>Addvertisement Page</title>
		<table height="10%" border = "1px" width = "100%">
			<tr>
				<td>
					<h2 align= "left"> E-Learning</h2>
					<h5 align= "right">
						<a href= "Home.php"> Home|</a>
						<a href= "Login.php"> Login|</a>
						<a href= "Registration.php"> Registration|</a>
					</h5>
				</td>
			</tr>
			
		</table>
	</head>
	<body>
		<table height="60%" width="100%" border="1px">
			<tr>
				<td align="center">
					<fieldset align="left" style="width: 30%">
						<legend>Upload Advertisement</legend>
						<form method="POST" action="../Controller/Promotionaloffer_Validation.php" enctype="multipart/form-data">
							Image:<input type="file" name="browse">
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