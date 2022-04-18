<html>
<head>
        <title>Payment Page</title>
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
            <form id="form" class="form" name = "paymentform" onsubmit = "return validation()"  method = "POST" action = "../Controller/Payment_Validation.php">
                    <fieldset align="center" style="width: 40%;">
                    <legend align="left">Login</legend>
                        <table>
                            <tr>
                                <td><b>Student Name</b></td>
                                <td><input type="text" name="student_name" value=""></td>
                                <td><span id="show0"></span></td>
                            </tr>
                             <tr>
                                <td><b>Teacher Name</b></td>
                                <td><input type="text" name="teacher_name" value=""></td>
                                <td><span id="show9"></span></td>
                            </tr>
                             <tr>
                                <td><b>Course Name</b></td>
                                <td><input type="text" name="course_name" value=""></td>
                                <td><span id="show8"></span></td>
                            </tr>
                             <tr>
                                <td><b>Payment</b></td>
                                <td><input type="text" name="payment" value=""></td>
                                <td><span id="show11"></span></td>
                            </tr>
                            <tr>
                                <td><b>B-kash Number</b></td>
                                <td><input type="text" name="bkash_num" value=""></td>
                                <td><span id="show7"></span></td>
                            </tr>
                            <tr>
                                <td><br><input type="submit" name="submit" value="submit"></td>
                            </tr>
                        </table>
                    </fieldset>
             <!-- <form method="POST" action="../Controller/Payment_Validation.php">
                 <table align="Center" border="1px" width="20%" height="100%">

<tr align = "Center">
           <td><b>Student Name</b></td>
           <td><b>Teacher Name</b></td>
           <td><b>Course Name</b></td>
           <td><b>Payment</b></td>
           <td><b>B-kash Number</b></td>
        </tr>
            <td><input type="text" name="student_name" value=""></td> 
           <td><input type="text" name="teacher_name" value=""></td>
           <td><input type="text" name="course_name" value=""></td>
           <td><input type="int" name="payment" value=""></td>
           <td><input type="int" name="bkash_num" value=""></td>
        </tr>
        <td align="right" colspan="5"><input type="submit" name="submit" value="submit"></td>
           </table>
             </form>  -->
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
