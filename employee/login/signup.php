<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if(isset($_POST['signup'])){
    $uname=$_POST['uname'];
    $e_mail=$_POST['e_mail'];
    $phn_no=$_POST['phn_no'];
    $psw=$_POST['psw'];
    $Cpsw=$_POST['Cpsw'];
    $ret1=mysqli_query($con, "select User_Email from users where User_email='$e_mail'");
    $result1=mysqli_fetch_array($ret1);
    if($result1>0){
        $msg1=  "This email is already associated with another account"; 
    }
    else if($psw != $Cpsw){
        $msg2=  "passwords don't match. Try again.";    
    }
    else{
        $query1=mysqli_query($con, "insert into users(User_Name,User_Email,User_Phone_no,User_Password) 
                                values ('$uname','$e_mail','$phn_no','$psw')" );
        if ($query1) { 
            echo '<script type ="text/JavaScript"> 
                alert("You are succesfully registerd. press \"ok\" to log in")
            </script> '; 
        }
        else{
            echo '<script>alert("Something Went Wrong. Please try again.");</script>';
        }
    }
}

?>
<!DOCTYPE html>
<html class="forbackdesign">
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Online Service Management System</title>
        <link rel="stylesheet" href="../stylesheet2.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    </head>
    <body >
    
        <div class="modal"><a href="../../admin/index.php" class="adminlink">hello</a>
                    <form class="modal-content" method="post">  
                        <div class="imgcontainer">
                            <h1>SIGN UP</h1> 
                            <a href="../employeeindex.php"><span class="close" title="Close">&times;</span></a>  
                            <div style="padding:0px 150px">
                                <h6 style="font-size:16px;margin-top:15px;color:red" align="center"> <?php if($msg1){
                                    echo $msg1;
                                }  ?> </h6>
                                <h6 style="font-size:16px;margin-top:15px;color:red" align="center"> <?php if($msg2){
                                echo $msg2;
                                }  ?> </h6> 
                            </div>                
                        </div>
                        <div class="container">
                            <div class="conrow">
                                <label><b>Username:</b></label>
                                <input type="text" name="uname" required>
                            </div>
                            <div class="conrow">
                                <label><b>Email:</b></label>
                                <input type="text" name="e_mail" required>
                            </div>
                            <div class="conrow">
                                <label><b>Phone no:</b></label>
                                <input type="text" name="phn_no" required>
                            </div>
                            <div class="conrow">
                                <label><b>Password:</b></label>
                                <input type="password" name="psw" required>
                            </div>
                            <div class="conrow">
                                    <label><b>Confirm Password:</b></label>
                                <input type="password" class="cp" name="Cpsw" required>
                            </div>
                            <button type="submit" name="signup">Sign up</button><br>
                            <hr>
                            <div class="donthacc">
                                <label>Already hava an account?</label>
                                <a href="login.php"><button type="button" class="cancelbtn">Login!</button></a><br>
                            </div>
                        </div>
                    </form>
                </div>
    </body>
</html>