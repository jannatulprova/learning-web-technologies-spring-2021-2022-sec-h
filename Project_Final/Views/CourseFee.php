<html>
<head>
        <title>Course Fee Page</title>
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
    <table border = "1px" height = "60%" width = "100%">
       <tr>
         <td>
             <form method="POST" action="../Controller/CourseFee_Validation.php">
                 <table align="Center" border="1px" width="20%" height="100%">

<tr align = "Center">
            <td><b>Teacher Name</b></td>
           <td><b>Course Name</b></td>
           <td><b>Course Fee</b></td>
        </tr>
        <tr align="center">
            <td>
               <input type="text" name="teacher_name" value="">
           </td> 
           <td><input type="text" name="course_name"></td>
          <td><input type="text" name="course_fee" value=""><br>
            <input type="submit" name="submit" view= submit></td>
        </tr>
              
           </table>
             </form> 
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
