<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

?>
<!DOCTYPE html>
<html>
    <head>
    <title>About us</title>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet2.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    </head>
    <body>
        <section id="about-page">
                <section class="sub-header">
                    <?php include_once('includes/header.php');?>
                    <div class="text-box">
                        <h1>About us</h1>
                        <!-- <a class="hero-btn" href="">Hire Now! </a> -->
                        
                    </div>
                </section>

            <!-- about us content -->
                <section class="about-us">
                    <div class="row">
                        <div class="about-col">
                            <h1>World's first Online Service Management System.</h1>
                            <p>This website brings you the household service which requires experts to handle. You can get the best service from our professionals.</p>
                            <a href="" class="hero-btn cyan-btn">Contact us</a>
                        </div>  
                        <div class="about-col">
                            <img src="../images/aboutuswall2.jpg" alt="">
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
