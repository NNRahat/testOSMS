<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');

if(isset($_POST['login']))
{
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $query=mysqli_query($con,"select User_ID from users where  User_Email='$Email' && User_Password='$Password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
        $_SESSION['uid']=$ret['User_ID'];
        header('location:../index.php');
    }
    else{
        $msg="Invalid Details.";
    }
}


?>
<!DOCTYPE html>
<html class="forbackdesign">
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Online Service Management System</title>
        <link rel="stylesheet" href="../stylesheet.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    </head>
    <body>
        <!-- login modal -->
        <div class="modal">
            <form class="modal-content" method="post" action="">
                <div class="imgcontainer">
                    <h1>LOGIN</h1>
                    <a href="../index.php"><span class="close" title="Close">&times;</span></a>

                    <div style="padding:0px 150px">
                        <h6 style="font-size:16px;margin-top:15px;color:red" align="center"> <?php if($msg){
                            echo $msg;
                        }  ?> </h6>
                    </div>
                </div>

                <div class="container">
                    <div class="conrow">
                        <label><b>Email:</b></label>
                        <input type="text" name="Email" required>
                    </div>
                    <div class="conrow">
                        <label><b>Password:</b></label>
                        <input type="password" class="noborder" name="Password" required>
                    </div>
                    <br>

                    <button type="submit" name="login">Login</button><br><br>
                    <hr><br>
                    <div class="donthacc">
                        <label>Don't hava an account?&emsp;</label>
                        <a href="signup.php"><button type="button" class="cancelbtn">sign up</button><br></a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>