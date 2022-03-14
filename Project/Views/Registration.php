<html>
	<head>
		<title>Registration Page</title>
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
		<table height = "60%" width="100%" border="1px">
			<tr align="center">
				<td>
					<form method="POST" action="../Controller/Registration_Validation.php">
					<fieldset align="center" style= "width : 40%" border="1px">
						<legend align="left">REGISTRATION FORM</legend>
						<table align="center">
							<tr>
								<td><br>Name : </td>
								<td><br><input type="text" name="myname" value=""></td>
							</tr>
							<tr>
								<td><br>E-mail : </td>
								<td><br><input type="text" name="myemail" value=""></td>
							</tr>
							<tr>
								<td><br>Employ ID: </td>
								<td><br><input type="text" name="myemployid" value=""></td>
							</tr>
							<tr>
								<td><br>User Name:</td>
								<td><br><input type="text" name="myusername" value=""></td>
							</tr>
							<tr>
								<td><br>Password:</td>
								<td><br><input type="Password" name="password" value=""></td>
							</tr>
							<tr>
								<td><br>Confirm Password:</td>
								<td><br><input type="Password" name="confirmpassword" value=""></td>
							</tr>
							<tr>
  									<tr> 
  										<td><br>Gender</td>
  	 									<td><br>
            								<input type="radio" name="gender" value="Male"> Male
            								<input type="radio" name="gender" value="Female"> Female
            								<input type="radio" name="gender" value="Other"> Other
      									</td><br>
     
  									</tr>	

							</tr>
							<tr>
								<td><br>Date of Birth : </td>
								<td><br><input type="Date" name="dob" value=""></td>
							</tr>
							<tr>
								<td align="left"><br>
									<input type="submit" name="submit" value="Submit">
								</td>
							</tr>
						</table>
						
					</fieldset>
					</form>
				</td>
			</tr>
		</table>


		<table height="10%" width = "100%" border = "1px">
			<tr>
				<td align="center"> Copyright @2022</td>
			</tr>
		</table>
		
	</body>
</html>