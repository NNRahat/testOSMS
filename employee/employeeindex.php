<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//Emp_ID	Emp_Email	Emp_Phone_no	Emp_Address	Emp_City	Emp_Area	Emp_Occupation	Emp_Skills	Emp_Password	

// if(isset($_POST['login']))
// {
//     $Email=$_POST['Email'];
//     $Password=$_POST['Password'];
//     $query=mysqli_query($con,"select Emp_ID from employees where Emp_Email='$Email' && Emp_Password='$Password'");
//     $ret=mysqli_fetch_array($query);
//     if($ret>0){
//         $_SESSION['uid']=$ret['Emp_ID'];
//         header('location:employeeindex.php');
//     }
//     else{
//         $msg="Invalid Details.";
//     }
// }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Online Service Management System</title>
        <link rel="stylesheet" href="stylesheet2.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    </head>
    <body>
        <section id="index-body">
    <section class="header">
        <?php include_once('includes/header.php');?>
            <div class="text-box">
                <h1>Welcome!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id sodales sem. <br>
                 Cras eleifend dui sed mauris ullamcorper dictum. Duis egestas porta blandit. Fusce interdum dapibus purus id tempus.</p>
                <!-- <a class="hero-btn" href="">Register! </a>                 -->
            </div>
        </section>


 <!-- service we offer -->
        <section class="services">
            <h1>Manage your opportunities from start to finish.</h1>
            <!-- <p>We offer various services from household to construction works. Some services are featured below.</p> -->
        <div class="row">
            <div class="services-col">
                <h3>Find great people.</h3>
                <p>Over 50,000 monthly users. Here you can find respectful client. </p>
            </div>
            <div class="services-col">
                <h3>Get quality clients.</h3>
                <p>You can communicate with the clients easily which makes it more comfortable to take the job.</p>
            </div>
            <div class="services-col">
                <h3>Connect with your clients.</h3>
                <p>Message,Emails or Phone call with your clients. </p>
            </div>
            <div class="services-col">
                <h3>Make offers with confidence.</h3>
                <p>Give the required price with confidence of the job to the client. </p>
            </div>
        </div>
        </section>
<!-- end of service -->


<!-- city we are available -->

        <section class="city">
            <h1>Cities we are available</h1>
            <p>We are available in various cities. Some cities are featured now.</p>
            <div class="row">
                <div class="city-col">
                    <img src="../images/comilla-3.jpg">
                    <div class="layer">
                        <h3>comilla</h3>
                    </div>
                </div>
                <div class="city-col">
                    <img src="../images/chittagong.jpg">
                    <div class="layer">
                        <h3>chittagong</h3>
                    </div>
                </div>
                <div class="city-col">
                    <img src="../images/dhaka.jpg">
                    <div class="layer">
                        <h3>dhaka</h3>
                    </div>
                </div>
            </div>
        
        
        </section>
<!-- end of cities -->


<!-- facilities -->
        <section class="facilities">
            <h1>Our facilities</h1>
            <p>Our website has several facilities to the beloved employees.</p>
            <div class="row">
                <div class="facilities-col">
                    <img src="../images/ezwaytosearch.jpg">
                    <h3>Buy a package.</h3>
                    <p>Employees can purchase a monthly package with small amount and get the best facilities and quality clients.</p>
                </div>
                <div class="facilities-col">
                    <img src="../images/rateemp.jpg">
                    <h3>Request help</h3>
                    <p>Employees can request service and help provided by the website.</p>
                </div>
                <div class="facilities-col">
                    <img src="../images/rateemp.jpg">
                    <h3>Report!</h3>
                    <p>We care about your security. If there is any misbehaving or any kind of assault or no payment of the dues by the users. Employees can report to us and action will be taken immidiately. </p>
                </div>
            </div>

        </section>
<!-- ennd of facilities -->

<!-- call us -->
        <section class="cta">
            <h1>Sponsored registration are 4.5 times more likely to result in a hire.</h1>
            <h2> <u>Sponsor your job and:</u> </h2>
            <h3>
                <ul> 
                    Invite clients to hire. <br>
                    Get more visibility in search results.
                </ul>
            </h3>
            <!-- <a href="" class="hero-btn">Contact Us!</a> -->
            

        </section>  
<!-- end of call us -->

<!-- footer -->
        <section class="footer">
            <?php include_once('includes/footer.php');?>
        </section>
        </section>
    </body>
</html>

