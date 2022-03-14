<html>
	<head>
		<title>Login Page</title>
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
			<tr align="center">
				<td>
					<form method="POST" action="../Controller/Login_Validation.php">
					<fieldset align="center" style="width: 40%;">
					<legend align="left">Login</legend>
						<table>
							<tr>
								<td>Username</td>
								<td><input type="text" name="myusername" value=""></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="password" value=""></td>
							</tr>
							<tr>
								<td><br><input type="submit" name="submit" value="submit"></td>
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