<?php 

    function connection()
    {
        $con = mysqli_connect('localhost', 'root', '', 'e-learningdb');
        return $con;
    }
    function login($username, $password)
    {
        $con = connection();
        $sql = "select * from management_log_in where myusername = '{$username}' and password = '{$password}'";
        $res = mysqli_query($con, $sql);
        if(mysqli_num_rows($res))
        {
            while($row = mysqli_fetch_assoc($res))
            {
                print_r($row['myusername']);
                if($username == $row['myusername'] and $password == $row['password'])
                {
                    $_SESSION['id'] = $row['myemployid'];
                    return true;
                }
            }
        }
        return false;
    }

     function signup($myname, $myemail, $myemployid, $myusername, $password, $confirmpassword, $gender, $dob){
        $con = connection();
        $ssql = "select * from management_log_in";
        $id = 1;
        $res = mysqli_query($con, $ssql);
        if(mysqli_num_rows($res)){
            while($row = mysqli_fetch_assoc($res)){
                $temp = $row['employid'];
                $id = max($id, $temp);
            }
            $id += 1;
        }
        $sql = "insert into management_log_in values ('{$myname}','{$myemail}','{$myemployid}','{$myusername}','{$password}','{$gender}','{$dob}')";
        if(mysqli_query($con, $sql))
        {
            return true;
        }else{
            return false;
        }
    }
?>