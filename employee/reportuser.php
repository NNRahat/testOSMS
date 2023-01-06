<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$User_id=$_GET['editid'];
if(isset($_POST['signup'])){
    $Emp_ID=$_SESSION['uid'];
    $Subject=$_POST['Subject'];
    $selfdescribe=$_POST['selfdescribe'];
    $query1=mysqli_query($con, "insert into users(Emp_ID,User_ID,Emp_R_Subject,Emp_R_Description) 
                            values ('$Emp_ID,'$User_id','$Subject','$selfdescribe')" );
    if ($query1) { 
        echo '<script type ="text/JavaScript"> 
            alert("You are succesfully registerd. press \"ok\" to log in")
        </script> '; 
    }
    else{
        echo '<script>alert("Something Went Wrong. Please try again.");</script>';
    }
    
}

?>
<!DOCTYPE html>
<html class="forbackdesign">
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Online Service Management System</title>
        <link rel="stylesheet" href="stylesheet2.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    </head>
    <body class="forbackdesign">
    
        <div class="modal">
                    <form class="modal-content" method="post">  
                        <div class="imgcontainer">
                            <h1>SIGN UP</h1> 
                            <a href="employeeindex.php"><span class="close" title="Close">&times;</span></a>  
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
                                <label><b>Subject:</b></label>
                                <input type="text" name="Subject" required>
                            </div>
                            <div class="conrow">
                                <label><b>Description(please describe the scene):</b></label>
                                <textarea rows="3" name="selfdescribe" readonly="true" required></textarea><br>
                            </div>
                            <button type="submit" name="submit">Submit</button><br>
                        </div>
                    </form>
                </div>
    </body>
</html>