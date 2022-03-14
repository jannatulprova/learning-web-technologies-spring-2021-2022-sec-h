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
        <title>Home Page</title>
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
    <table border = "2px" height = "60%" width = "100%" shade = "noshade">
        <tr align = "center">
            <td> 
                <img src = "Upload/<?=$_SESSION['Offerpic']?>" height="" width = "" align="center"> 
                <h2 align = "center">Welcome to E-learning Website! </h2>

                <h2 align="left">
                <a href="">Click here for more Courses </a>
             <img src = "Upload/<?=$_SESSION['Advpic']?>" height="" width = "200" align="right">         
            </td>
           
            
            
        </tr>
    </table>
    <table width = "100%" border = "1px">
        <tr height = "50px">
            <td align = "center"> Copyright @ <h align="center">www.facebook.com/e-learing </h>
             </td>
        </tr>
    </table>
</body>
</html>
