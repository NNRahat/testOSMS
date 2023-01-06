<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Online Service Management System</title>
        <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
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
                    <h1>Best website for online service</h1>
                    <p>This website brings you the household service which requires experts to handle.<br> You can get the best service from our professionals.</p>
                    <a class="hero-btn" href="hirenow.php">Hire Now! </a>                
                </div>
            </section>


 <!-- service we offer -->
        <section class="services">
            <h1>Services we offer</h1>
            <p>We offer various services from household to construction works. Some services are featured below.</p>
            <div class="row">
                <div class="services-col">
                    <h3>Electricity</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id sodales sem. Cras eleifend dui sed mauris ullamcorper dictum. Duis egestas porta blandit. Fusce interdum dapibus purus id tempus. </p>
                </div>
                <div class="services-col">
                    <h3>IT</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id sodales sem. Cras eleifend dui sed mauris ullamcorper dictum. Duis egestas porta blandit. Fusce interdum dapibus purus id tempus. </p>
                </div>
                <div class="services-col">
                    <h3>Plumbing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id sodales sem. Cras eleifend dui sed mauris ullamcorper dictum. Duis egestas porta blandit. Fusce interdum dapibus purus id tempus. </p>
                </div>
                <div class="services-col">
                    <h3>Carpentry</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id sodales sem. Cras eleifend dui sed mauris ullamcorper dictum. Duis egestas porta blandit. Fusce interdum dapibus purus id tempus. </p>
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
                    <img src="images/comilla-3.jpg">
                    <div class="layer">
                        <h3>comilla</h3>
                    </div>
                </div>
                <div class="city-col">
                    <img src="images/chittagong.jpg">
                    <div class="layer">
                        <h3>chittagong</h3>
                    </div>
                </div>
                <div class="city-col">
                    <img src="images/dhaka.jpg">
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
            <p>Our website has several facilities to the beloved users.</p>
            <div class="row">
                <div class="facilities-col">
                    <img src="images/ezwaytosearch.jpg">
                    <h3>Easy way to search any services</h3>
                    <p>User can find the services by choosing the catagory of services and cities they are in. </p>
                </div>
                <div class="facilities-col">
                    <img src="images/rateemp.jpg">
                    <h3>Rate employee!</h3>
                    <p>User can rate the employee regarding his service to the users. </p>
                </div>
                <div class="facilities-col">
                    <img src="images/rateemp.jpg">
                    <h3>Report!</h3>
                    <p>We care about your security. If there is any misbehaving or any kind of assault happens by one of our employees. User can report to us and action will be taken immidiately. </p>
                </div>
            </div>

        </section>
<!-- ennd of facilities -->

<!-- call us -->
        <section class="cta">
            <h1>Choose our various services online <br>anywhere from bangladesh.</h1>
            <a href="contactus.php" class="hero-btn">Contact Us!</a>
            

        </section>  
<!-- end of call us -->

<!-- footer -->
        <section class="footer">
            <?php include_once('includes/footer.php');?>
        </section>
        </section>
    </body>
</html>

