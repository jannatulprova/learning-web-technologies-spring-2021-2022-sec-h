<?php
	session_start();
	if (isset($_REQUEST['submit'])) {
		// code...
		print_r($_FILES['browse']);
		$src=$_FILES['browse']['tmp_name'];
		temp=explode(".", $_FILES["browse"]["name"]);
		if (move_uploaded_file($_FILES["browse"],["tmp_name"],"../Views/Upload/" . $newfilename)) {
			// code...
			$_SESSION['ManagementProfilePic']= $newfilename;
			header('location:../Views/Profile.php');
		}
		else
		{
			echo "Null.";
		}
		else
		{
			echo "invalid..";
		}
	}
?>