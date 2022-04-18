<?php
	session_start();
	$user="";
	$myname="";
	$myusername="";
	$myemail="";
	$myemployid="";
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
		<title>Pofile Picture Change Page</title>
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
				<a href="Logout.php">Logout| </a>
				</h5> 
			</td>
		</tr>
	</table>
	</head>
	<body>
		<table height="60%" width="100%" border="1px">
			<tr>
				<td align="center">
					<table>
						<tr>
							<td>
								<fieldset align="left" style="width: 30%">
						<legend>Upload Image</legend>
						<form method="POST" action="../Controller/ChangeProfilePicture_Validation.php" enctype="multipart/form-data">
							Image:<input type="file" name="browse">
							
						</form>
					</fieldset>
				</td>
				<td></td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="submit" value="submit">
							</td>
						</tr>

					</table>
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