<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$Emp_ID = $_SESSION['uid'];
//Emp_ID User_Name User_Email	User_Phone_no	Emp_Address	Emp_City	Emp_Area	Emp_Occupation	Emp_Skills	User_Password	

if(isset($_POST['Submitgig'])){
    // ename  email phn_no address city area occupation skills psw Cpsw
    
    $title=$_POST['title'];
    $gigdescription=$_POST['gigdescription'];
    $price=$_POST['price'];
    $city=$_POST['city'];
    $area=$_POST['area'];
    $skills=$_POST['skills'];
    $query1=mysqli_query($con,"insert into gigs(Emp_GIG_ID,GIG_Title,GIG_Description,GIG_Price,GIG_Area,GIG_City) 
                                values ('$Emp_ID','$title','$gigdescription','$price','$area','$city')" );

    if ($query1) { 
        echo '<script type ="text/JavaScript"> 
            alert("You are succesfully registerd. press \"ok\" to log in")
        </script> '; 
        header('location:employeeindex.php');
    }
    else{
        echo '<script>alert("Something Went Wrong. Please try again.");</script>';
        header('location:employeeindex.php');
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Create a GIG</title>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet2.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    </head>
    <body>
    <!-- signup modal -->
        <section class="Newgig-page">
                <section class="Newgig-header">
                    <?php include_once('includes/header.php');?>
                    <div class="text-box">
                        <h1>Create a GIG</h1>
                        <!-- <a class="hero-btn" href="">Hire Now! </a> -->
                    </div>
                </section>

                <form class="reg-content" method="post">
<?php
$ret1=mysqli_query($con, "select Skill_Name from skills");
$result1=mysqli_fetch_array($ret1);
// $num=mysqli_num_rows($ret1);
?>
                    <div class="imgcontainer">
                        
                        <h1>New GIG</h1>  
                        <!-- alerts -->
                        <!-- <div style="padding:0px 350px">
                                <h6 style="font-size:16px;margin-top:15px;color:red" align="center"> <?php //if($msg1){  echo $msg1;}  ?> </h6>
                                
                                
                                <h6 style="font-size:16px;margin-top:15px;color:red" align="center"> <?php //if($msg2){echo $msg2;}  ?> </h6>
                                
                        </div> -->
                        
                    </div>
                    <div class="piccontainer">
                        <div class="picfigure">
                                <img src="../images/creategig1.jpg" alt="Avatar" class="avatar"><br>
                                    <input type="file" id="file"><br>
                                <label for="file" id="uploadbtn">Choose photo</label>
                                
                            </div> 
                    </div>
                    <div class="container">
                        <div class="row">
                            <label><b>Skill needed for the work:</b></label>                    
                            <input list="browsers" type="text" placeholder="Enter Address" name="skill" required>
                                <datalist id="browsers">
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
                        </div>
                        
                        <div class="row">
                            <label><b>City:</b></label>
                            <input type="text" placeholder="Enter City" name="city" required>
                        </div>
                        <div class="row">
                            <label><b>Area:</b></label>
                            <input type="text" placeholder="Enter Area" name="area" required>
                        </div>
                        <div class="row">
                            <label><b>Price(BDT):</b></label>
                            <input type="text" placeholder="Enter Price" name="price" required>
                        </div>
                        <div class="row">
                            <label><b>Title(for the GIG) *less than 50 characters*:</b></label>
                            <textarea rows="3" name="title"></textarea><br>
                        </div>
                        <div class="row">
                            <label><b>Description(of the gig) *less than 150 characters*:</b></label>
                            <textarea rows="3" name="gigdescription"></textarea><br>
                        </div>
                        <input type="submit" class="cancelbtn" value="submit" name="Submitgig">
                        <br><br>
                    </div>
                </form>
        </section>
        <br><br><br>
        </div>
        <!-- footer -->
        <section class="footer">
            <?php include_once('includes/footer.php');?>
        </section>
    </body>
</html>
