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
//     $row=mysqli_fetch_array($ret1);
//     if($row>0){
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
        <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
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
$aid=$_GET['editid'];                
$User_ID=$_SESSION['uid'];                 
$ret1=mysqli_query($con, "Select employees.*,gigs.*,users.* From employees 
INNER JOIN gigs ON employees.Emp_User_ID=gigs.Emp_GIG_ID
INNER JOIN users ON gigs.Emp_GIG_ID=users.User_ID
where employees.Emp_User_ID='$aid'");
$row=mysqli_fetch_array($ret1);
?>
            <section class="detailbody">
                <div class="employeedetails">
                    <div class="img_name">
                        <img src="employee/login/<?php echo $row['Emp_Image'];?>" alt=""><br>
                        <label><?php echo $row['User_Name'];?></label>
                        <div class="profrating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span><?php echo $row['Emp_Rating'];?></span> 
                            <span>(<?php echo $row['Emp_totaldone'];?>)</span>
                        </div>
                    </div>
                    <div class="description">
                        <p><?php echo $row['Emp_Description'];?></p><br>
                        <i class="fas fa-map-marker-alt"></i>
                        <label><?php echo $row['Emp_City'];?></label><br><br>
                        <div class="skillset">
                            <label><h4>Skill:</h4></label>&emsp;
                            <span ><?php echo $row['Emp_Skills'];?></span>
                            <!-- <input type="checkbox" for="" name="" id=""> -->
                        </div><br><br>
                        <div class="buttonset">
                            <a href="contactemp.php"><button class="contactbtn">Contact me</button></a>
                            <a href="reportemp.php"><button class="contactbtn">Report!</button></a>
                        </div>
                        <!-- <div class="buttonset">
                            
                        </div> -->
                    </div>
                </div>
            </section>     
        
            <section class="dynamicpage"> 
                
                <div class="gigcard">
                    <h1>MY GIGS</h1>
                    <div class="row">
<?php
$ret2=mysqli_query($con, "Select employees.*,gigs.*,users.* From employees 
INNER JOIN gigs ON employees.Emp_User_ID=gigs.Emp_GIG_ID
INNER JOIN users ON gigs.Emp_GIG_ID=users.User_ID
where employees.Emp_User_ID='$aid'");
while($row2=mysqli_fetch_array($ret2)){?>
                        <div class="services-col">
                            <img src="images/gigshowpicsample.jpg" alt="">
                            <div class="empidentity">
                                <div class="empimage">
                                    <img src="employee/login/<?php echo $row2['Emp_Image'];?>" alt="" class="emppropic">
                                </div>
                                <div class="name_catagory">
                                    <a href="emppovuser.php?editid=<?php echo $row2['User_ID'];?>"><?php echo $row2['User_Name'];?></a><br>
                                    <span title="Its the level of the employee">Level <?php echo $row2['Emp_level'];?></span>
                                </div>
                            </div>
                            <h3>
                                <a href="giginfo.php?editid=<?php echo $row2['User_ID'];?>"><?php echo $row2['GIG_Title'];?></a>
                            </h3>
                            <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span><?php echo $row2['Emp_Rating'];?></span> 
                                <span title="Number of times he did this job by this gig">(<?php echo $row2['Emp_totaldone'];?>)</span>
                            </div>
                            <div class="list_price">
                                <a href="giginfo.php?editid=<?php echo $row2['User_ID'];?>"><h6>BDT <?php echo $row2['GIG_Price'];?>TK</h6></a>
                            </div>
                        </div>  
<?php  
}
?>                             
                    </div> 
                </div>
            </section>

            

<!-- footer -->
        <section class="footer">
            <?php include_once('includes/footer.php');?>
        </section>
        </section>
    </body>
</html>
