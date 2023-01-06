<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['order']))
{

    $User_ID=$_SESSION['uid'];  
    $gigid=$_SESSION['gigid'] ;
    $query=mysqli_query($con,"insert into hire(GIG_ID,User_ID) values('$gigid','$User_ID') ");
    if ($query) { 
        echo '<script type ="text/JavaScript"> 
            alert("You have ordered this service.")
        </script> '; 
    }
    else{
        echo '<script>alert("Something Went Wrong. Please try again.");</script>';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>GIG info</title>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    </head>
    <body>
        <section id="about-page">
                <section class="gig-header">
                    <?php include_once('includes/header.php');?>
                    <div class="text-box">
                        <h1>Gig Details</h1>
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
$_SESSION['gigid']=$row['GIG_ID']; 
$num=mysqli_num_rows($ret1);
?>
                <section class="giginfo_descrip">
                    <div class="gigbody">
                        <h1><?php echo $row['GIG_Title'];?></h1>
                        <div class="detailgig">
                            <div class="gigdetails">
                                    <img src="employee/login/<?php echo $row['Emp_Image'];?>" alt="" class="emppropic">
                                    <ul>
                                    <li><div class="rating">
                                        <a href="emppovuser.php?editid=<?php echo $row['User_ID'];?>"><?php echo $row['User_Name'];?></a><br>
                                        </div>
                                    </li>
                                    <li><div class="rating">
                                        <span class="spanlevel" title="Its the level of the employee">Level <?php echo $row['Emp_level'];?></span>
                                        </div>
                                    </li>
                                    <li><div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="spanlevel"><?php echo $row['Emp_Rating'];?></span> 
                                        <span class="spanlevel">(<?php echo $row['Emp_totaldone'];?>)</span>
                                    </div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="discripgig">
                            <div class="discripmargin">
                                <img src="images/gigshowpicsample.jpg" alt="" class="gigpic">
                            </div>
                            <div class="discripmargin">
                                <div class="descriptionset">
                                    <h2>Description:</h2><br>
                                    <p><?php echo $row['GIG_Description'];?></p><br>
                                </div>
                                <div class="pricelabel">
                                    <h2>Price: BDT <?php echo $row['GIG_Price'];?>TK</h2>
                                </div>
                                <div class="buttonmarginset">
                                    <div class="buttonset">
                                        <form action="" method="post">
                                        <input type="submit" class="orderbtn" name="order" value="Order"></form>
                                        <!-- <button  name="order">Order</button> -->
                                    </div><br>
                                    <div class="buttonset">
                                        <a href="contactemp.php"><button class="contactbtn">Contact me</button></a>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </section>
                
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

                        <!-- <div class="buttonset">
                            
                        </div> -->
                    </div>
                </div>
            </section>  
                
        </section>
                

        <!-- footer -->
            <section class="footer">
                    <?php include_once('includes/footer.php');?>
                </section>
            </section>
    </body>
</html>
