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
		<title>Pofile Picture Change Page</title>
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
				<td align="left">
					<table border="1px" width="100%">
						<tr>
							<td width="10%" align="center">Arts</td>
							<td width="10%" align="center">Graphical</td>
							<td width="10%" align="center">Managment</td>
							<td width="10%" align="center">Social</td>
							<td width="10%" align="center">Computer Science</td>

						</tr>
						<tr>
							<td>
               <select name="">
                <option value="">Designing</option>
                <option value="">Photography</option>
                <option value="">Videography</option>
                <option value="">Content Writting</option>
							</td>
				
				<td>
               <select name="">
                <option value="">3D Painting</option>
                <option value="">Web Designing</option>
                <option value="">Graphics Design</option>
                <option value="">3D Animation</option>
                <option value="">2D Animation</option>

           		</td> 
           		<td>
               <select name="">
                <option value="">Hotel Managment</option>
                <option value="">Basic Finance</option>

           </td> 
           <td>
               <select name="">
                <option value="">Social behaviour</option>
                <option value="">Social Etiqquite</option>
                <option value="">Data Analysing</option>
                <option value="">Spanish</option>
                <option value="">English Speaking</option>
           </td> 
           <td>
               <select name="">
                <option value="">Software Development</option>
                <option value="">Graphics Design</option>
                <option value="">Game Development</option>
                <option value="">Web Development</option>
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