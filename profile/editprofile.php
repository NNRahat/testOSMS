<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
$User_ID=$_SESSION['uid'];  
if(isset($_POST['signup'])){
    
    $uname=$_POST['uname'];
    $e_mail=$_POST['e_mail'];
    $phn_no=$_POST['phn_no'];
    $psw=$_POST['psw'];
    $Cpsw=$_POST['Cpsw'];
    if($psw != $Cpsw){
        $msg2=  "passwords don't match. Try again.";    
    }
    else{
        $query1=mysqli_query($con, "update users set User_Name ='$uname',User_Email ='$e_mail',User_Phone_no ='$phn_no',User_Password='$psw' where User_ID='$User_ID'");
        if ($query1) { 
            // echo ('<script type ="text/JavaScript"> 
            //     window.alert("Edited Successfully")
            //     window.location.href='login.php'
            // </script> '; 
            echo ("<script>
                    window.alert('Edited Successfully');
                    window.location.href='profile.php';
                    </script>");
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
                            <h1>Edit profile</h1> 
                            <a href="profile.php"><span class="close" title="Close">&times;</span></a>  
                            <div style="padding:0px 150px">
                                <h6 style="font-size:16px;margin-top:15px;color:red" align="center"> <?php if($msg2){
                                echo $msg2;
                                }  ?> </h6> 
                            </div>                
                        </div>
<?php   
                   
    $ret1=mysqli_query($con, "select * from users where User_ID='$User_ID'");
    $result1=mysqli_fetch_array($ret1);
?> 
                        <div class="container">
                            <div class="conrow">
                                <label><b>Username:</b></label>
                                <input type="text" name="uname" value="<?php echo $result1['User_Name'] ?>"  required>
                            </div>
                            <div class="conrow">
                                <label><b>Email:</b></label>
                                <input type="text" name="e_mail" value="<?php echo $result1['User_Email'] ?>"  required>
                            </div>
                            <div class="conrow">
                                <label><b>Phone no:</b></label>
                                <input type="text" name="phn_no"  value="<?php echo $result1['User_Phone_no'] ?>" required>
                            </div>
                            <div class="conrow">
                                <label><b>Password:</b></label>
                                <input type="text" name="psw" value="<?php echo $result1['User_Password'] ?>" required>
                            </div>
                            <div class="conrow">
                                    <label><b>Confirm Password:</b></label>
                                <input type="text" name="Cpsw" value="" required>
                            </div>
<?php   
    $ret2=mysqli_query($con, "select * from employees where Emp_User_ID='$User_ID'");
    $result2=mysqli_fetch_array($ret2);
    if($result2){
?> 
                            <div class="conrow">
                                    <label><b>Adress:</b></label>
                                <input type="text" name="adress" value="" required>
                            </div>
<?php   
}
?> 
                            <button type="submit" name="signup">Submit</button><br>

                        </div>
                    </form>
                </div>
    </body>
</html>