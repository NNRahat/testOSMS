<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
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

        <div class="modal">
                    <form class="modal-content" method="post">  
                        <div class="imgcontainer">
                            <h1>Profile</h1> 
                            <a href="../index.php"><span class="close" title="Close">&times;</span></a>                  
                        </div>
<?php   
    $User_ID=$_SESSION['uid'];                 
    $ret1=mysqli_query($con, "select * from users where User_ID='$User_ID'");
    $result1=mysqli_fetch_array($ret1);
?> 
                        <div class="container2">
                            <div class="conrow">
                                <label><b>Username:</b></label>
                                <label><b><?php echo $result1['User_Name']; ?></b></label>
                            </div>
                            <div class="conrow">
                                <label><b>Email:</b></label>
                                <label><b><?php echo $result1['User_Email']; ?></b></label>
                            </div>
                            <div class="conrow">
                                <label><b>Phone no:</b></label>
                                <label><b><?php echo $result1['User_Phone_no']; ?></b></label>
                            </div>
                            <div class="conrow">
                                <label><b>Password:</b></label>
                                <label><b><?php echo $result1['User_Password']; ?></b></label>
                            </div>
                            
                            <br>
                            <div class="donthacc">
                            <a href="editprofile.php"><button type="button" class="cancelbtn">Edit</button><br></a>
                        </div>
                        </div>
                    </form>
                </div>
    </body>
</html>