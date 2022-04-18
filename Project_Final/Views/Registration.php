<html>
	<head>
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
		<script type="text/javascript" src="../JS/Registration.js"></script>
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
					<form id="form" class="form" name = "regform" onsubmit = "return validation()"  method = "POST" action = "../Controller/Registration_Validation.php">
					<fieldset align="center" style= "width : 40%" border="1px">
						<legend align="left">REGISTRATION FORM</legend>
						<table align="center">
							<tr>
								<td><br>Name : </td>
								<td><br><input type="text" name="myname" value=""></td>
								<td><span id="show"></span></td>
							</tr>
							<tr>
								<td><br>E-mail : </td>
								<td><br><input type="text" name="myemail" value=""></td>
								<td><span id="show3"></span></td>
							</tr>
							<tr>
								<td><br>Employ ID: </td>
								<td><br><input type="text" name="myemployid" value=""></td>
								<td><span id="show6"></span></td>
							</tr>
							<tr>
								<td><br>User Name:</td>
								<td><br><input type="text" name="myusername" value=""></td>
								<td><span id="show1"></span></td>
							</tr>
							<tr>
								<td><br>Password:</td>
								<td><br><input type="Password" name="password" value=""></td>
								<td><span id="show4"></span></td>
							</tr>
							<tr>
								<td><br>Confirm Password:</td>
								<td><br><input type="Password" name="confirmpassword" value=""></td>
								<td><span id="show5"></span></td>
							</tr>
							<tr>
  									<tr> 
  										<td><br>Gender</td>
  	 									<td><br>
            								<input id="Male" type="radio" name="gender" value="Male" onclick="gendernotnull()"> Male
            								<input id="Male" type="radio" name="gender" value="Female" onclick="gendernotnull()"> Female
            								<input id="Other" type="radio" name="gender" value="Other" onclick="gendernotnull()"> Other
      									</td><br>
     
  									</tr>	

							</tr>
							<tr>
								<td><br>Date of Birth : </td>
								<td><br><input id="dob" type="Date" name="dob" value="" onkeyup="dobnotnull()"></td>
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