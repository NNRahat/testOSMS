<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $uemail=$_POST['uemail'];
    $question=$_POST['question'];
    $query1=mysqli_query($con, "insert into help (U_Name,U_Email,U_Question) 
                                values ('$uname','$uemail','$question')" );
        if ($query1) { 
            echo '<script type ="text/JavaScript"> 
                window.alert("You question has been submitted.")
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
    <title>Help</title>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet2.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    </head>
    <body>
        <section id="help-body">
        <section class="help-header">
        <?php include_once('includes/header.php');?>
            <div class="text-box">
                <h1>FAQs</h1>
                <p>Here are some problems most asked by the employees asked. <br>
                   You can also ask question by filling the form below. </p>                
            </div>
        </section>

        <section>
            <div class="wrapper">
                <div class="according">
                    <div class="item">
                        <input type="radio" id="one" name="item">
                        <label for="one" class="title">Is this job part time or contract based?</label>
                        <div class="content"> Both are available on our site.</div>
                    </div>
                    <div class="item">
                        <input type="radio" id="two" name="item">
                        <label for="two" class="title">What is Online Service Management System(OSMS) ?</label>
                        <div class="content">OSMS is an online platform which gives from household to construction services.</div>
                    </div>
                    <div class="item">
                        <input type="radio" id="three" name="item">
                        <label for="three" class="title">Is it paid monthly salary??</label>
                        <div class="content">It depends on work experience, customer rating and number of finished task.</div>
                    </div>
                    <div class="item">
                        <input type="radio" id="four" name="item">
                        <label for="four" class="title">How does the reporting work?</label>
                        <div class="content">So basically reporting is for the the people who gets assaulted by our customer such as verbally,physically etc.</div>
                    </div>
                    <div class="item">
                        <input type="radio" id="five" name="item">
                        <label for="five" class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</label>
                        <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id sodales sem. Cras eleifend dui sed mauris ullamcorper dictum. Duis egestas porta blandit. Fusce interdum dapibus purus id tempus.</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="help-ask">
            <div class="ask">
                <h1>Can't find answer here? </h1>
                <h3>You can ask us questions.</h3>
            </div>
            <div class="help-box">
                <form class="help-form" method="POST">
                        <input type="text" class="form-control" name="uname" placeholder="Enter name">
                        <input type="email" name="uemail" placeholder="Enter email">
                        <textarea rows="3" name="question" placeholder="Ask a question!"></textarea><br>
                        <button type="submit" name="submit" class="hero-btn cyan-btn">submit</button>                  
                </form>
            </div>
        </section>
        <!-- footer -->
        <section class="footer">    
            <?php include_once('includes/footer.php');?>
        </section> 
</section> 


    </body>
</html>