<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Hire</title>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    </head>
    <body>
        <section id="about-page">
                <section class="hire-header">
                    <?php include_once('includes/header.php');?>
                    <div class="text-box">
                        <h1>My Orders</h1>
                    </div>
                </section>
<!-- for jumping purpose   -->
                <a id="dynalist"></a> 

                <section class="dynamicpage">
                    
                    <div class="gigcard">
                        <h1>My orders</h1>
                        <div class="row">                            
<?php 
$User_ID=$_SESSION['uid'];                 
$ret1=mysqli_query($con, "Select GIG_ID From hire where User_ID = $User_ID");
   
    while($row1=mysqli_fetch_array($ret1)){
        $GIG_ID = $row1['GIG_ID'];
        $ret2=mysqli_query($con, "Select employees.*,gigs.*,users.* From gigs 
                                    INNER JOIN employees ON gigs.Emp_GIG_ID=employees.Emp_User_ID
                                    INNER JOIN users ON employees.Emp_User_ID=users.User_ID
                                    where gigs.GIG_ID='$GIG_ID'");
        $result1=mysqli_fetch_array($ret2);
?>                            
                            <div class="services-col">
                                <img src="images/gigshowpicsample.jpg" alt="">
                                <div class="empidentity">
                                    <div class="empimage">
                                        <img src="images/profile_default.jpg" alt="" class="emppropic">
                                    </div>
                                    <div class="name_catagory">
                                        <a href="emppovuser.php?editid=<?php echo $result1['User_ID'];?>"><?php echo $result1['User_Name'];?></a><br>
                                        <span title="Its the level of the employee">Level <?php echo $result1['Emp_level'];?></span>
                                    </div>
                                </div>
                                <h3>
                                    <a href="giginfo.php?editid=<?php echo $result1['User_ID'];?>"><?php echo $result1['GIG_Title'];?></a>
                                </h3>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span><?php echo $result1['Emp_Rating'];?></span> 
                                    <span title="Number of times he did this job by this gig">(<?php echo $result1['Emp_totaldone'];?>)</span>
                                </div>
                                <div class="list_price">
                                    <a href="giginfo.php?editid=<?php echo $result1['User_ID'];?>"><h6>BDT <?php echo $result1['GIG_Price'];?>TK</h6></a>
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
