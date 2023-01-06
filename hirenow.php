<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

// if(isset($_POST['search'])){
//     $Emp_ID=$_SESSION['uid'];
//     $catagory=$_POST['catagory'];
//     $city=$_POST['City'];
//     hirenowfiter.php
// }
if(isset($_POST['search'])){
    $Emp_ID=$_SESSION['uid'];
    $catagory=$_POST['catagory'];
    $City=$_POST['City']; 
    $_SESSION['City']=$City;
    $_SESSION['catagory']=$catagory; 
    // $row = mysqli_query($con, "Select Emp_GIG_ID from gigs where GIG_City='$city' AND GIG_Catagory='$catagory'");
    header('location:hirenowfilter.php');
    
}?>
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
                        <form  method="post" >
                            <div class="row">
                                <!-- <input type="text" id="catagox" name="catagory" type="text"> -->
                                <input list="catagory" id="catagox" name="catagory" type="text" placeholder="Select Service Catagory" required>
                                    <datalist id="catagory">
                                        <option value="electricity">
                                        <option value="plumbing">
                                        <option value="IT">
                                        <option value="Carpenter">
                                        <option value="AC Mechanics">
                                        <option value="painter">
                                        <option value="Welder">
                                        <option value="Tiles Construction">
                                        <option value="Sanitary">
                                        <option value="Automobile">
                                        <option value="Technology service">
                                        <option value="Interior Design">
                                        <option value="Masonry">
                                    </datalist> 
                                    <!-- <input type="text" id="citox"  type="text"> -->
                                    <input list="City" id="citox" type="text" name="City" placeholder="Select City" required>
                                    <datalist id="City">
                                        <option value="chittagong">
                                        <option value="Dhaka">
                                        <option value="Cumilla">
                                        <option value="Barisal">
                                        <option value="Noakhali">
                                    </datalist> 
                                    <a href=""><input type="submit" class="searchbtn" name="search" value="Search"></a>                             
                            </div>
                        </form>
                        
                    </div>
                </section>
<!-- for jumping purpose   -->
                <a id="dynalist"></a> 
                <section class="dynamicpage">
                    
                </section>
<?php  
$User_ID=$_SESSION['uid'];                 
$ret1=mysqli_query($con, "Select employees.*,gigs.*,users.* From employees 
INNER JOIN gigs ON employees.Emp_User_ID=gigs.Emp_GIG_ID
INNER JOIN users ON gigs.Emp_GIG_ID=users.User_ID");
$num=mysqli_num_rows($ret1); 
?> 
                
 
                <section class="dynamicpage">
                <h3>Total result: <?php echo $num;?></h3>
                    <div class="gigcard">
                        <div class="row">
<?php   
    while ($result1=mysqli_fetch_array($ret1)){
?>                            
                            <div class="services-col">
                                <img src="images/gigshowpicsample.jpg" alt="">
                                <div class="empidentity">
                                    <div class="empimage">
                                        <img src="employee/login/<?php echo $result1['Emp_Image'];?>" alt="" class="emppropic">
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

<?php } ?>   
                            
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
