<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');


// if(isset($_POST['login']))
// {
//     $Email=$_POST['Email'];
//     $Password=$_POST['Password'];
//     $query=mysqli_query($con,"select User_ID from users where  User_Email='$Email' && User_Password='$Password' ");
//     $ret=mysqli_fetch_array($query);
//     if($ret>0){
//         $_SESSION['uid']=$ret['User_ID'];
//         header('location:testuser.php');
//     }
//     else{
//         $msg="Invalid Details.";
//     }
// }
// if(isset($_POST['signup'])){
//     $uname=$_POST['uname'];
//     $e_mail=$_POST['e_mail'];
//     $phn_no=$_POST['phn_no'];
//     $psw=$_POST['psw'];
//     $Cpsw=$_POST['Cpsw'];
//     $ret1=mysqli_query($con, "select User_Email from users where User_email='$e_mail'");
//     $result1=mysqli_fetch_array($ret1);
//     if($result1>0){
//         echo '<script>alert("This email already associated with another account");</script>';
//         header('location:index.php');
//     }
//     else if($psw != $Cpsw){      
//         echo '<script type ="text/JavaScript">';  
//         echo 'alert("Password and Confirm password doesnt match. Try again.")';  
//         echo '</script>';  
//         echo "<script>window.location.href='index.php'</script>";
//     }
//     else{
//         $query1=mysqli_query($con, "insert into users(User_Name,User_Email,User_Phone_no,User_Password) 
//                                 values ('$uname','$e_mail','$phn_no','$psw')" );
//         if ($query1) { 
//             echo '<script type ="text/JavaScript"> 
//                 alert("You are succesfully registerd. press \"ok\" to log in")
//             </script> '; 
//         }
//         else{
//             echo '<script>alert("Something Went Wrong. Please try again.");</script>';
//         }
//     }
// }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>User profile</title>
        <link rel="stylesheet" href="stylesheet2.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    
    </head>
    <body>

        
        <section id="gigbody">
            <section class="emppovuser_header">
                <?php include_once('includes/header.php');?>
                <div class="text-box">
                    <h1>About Seller</h1>
                </div>
            </section>

<?php   
$User_ID=$_SESSION['uid'];                 
$ret1=mysqli_query($con, "Select GIG_ID From gigs where Emp_GIG_ID = $User_ID");
   
    while($row1=mysqli_fetch_array($ret1)){
        $GIG_ID = $row1['GIG_ID'];
        $ret2=mysqli_query($con, "Select Hire_ID from hire where GIG_ID='$GIG_ID'");
        // $result1=mysqli_fetch_array($ret2);
        while($row2=mysqli_fetch_array($ret2)){
            $Hire_ID = $row2['Hire_ID'];
            $ret3=mysqli_query($con, "Select users.*,gigs.* From hire
                                        INNER JOIN users ON hire.User_ID=users.User_ID
                                        INNER JOIN gigs ON hire.GIG_ID=gigs.GIG_ID
                                        where hire.Hire_ID='$Hire_ID'");
            $result1=mysqli_fetch_array($ret3);
?>  
            <section class="detailbody">
                <div class="employeedetails">
                    <div class="img_name">
                                <label style="color:#15a894d7;"><b>Username:</b></label>
                                <label><?php echo $result1['User_Name']; ?></label><br><br>
                                <label style="color:#15a894d7;"><b>Email:</b></label>
                                <label><?php echo $result1['User_Email']; ?></label><br><br>
                                <label style="color:#15a894d7;"><b>Phone no:</b></label>
                                <label><?php echo $result1['User_Phone_no']; ?></label><br><br>
                    </div>
                    <div class="description">
                        <p>GIG Title: <a href="../giginfo.php?editid=<?php echo $result1['Emp_GIG_ID'];?>"><?php echo $result1['GIG_Title'];?></a></p><br>

                        <div class="buttonset">
                            <a href="reportuser.php"><button class="contactbtn">Report!</button></a>
                        </div>
                        <!-- <div class="buttonset">
                            
                        </div> -->
                    </div>
                </div>
            </section>     
<?php }}?>             

<!-- footer -->
        <section class="footer">
            <?php include_once('includes/footer.php');?>
        </section>
        </section>
    </body>
</html>
