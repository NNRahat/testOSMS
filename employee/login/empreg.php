<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
//Emp_ID User_Name User_Email	User_Phone_no	Emp_Address	Emp_City	Emp_Area	Emp_Occupation	Emp_Skills	User_Password	

if(isset($_POST['signup'])){
    // ename  email phn_no address city area occupation skills psw Cpsw
    $fileName=$_FILES["file"]["name"];
    $fileTmpName =$_FILES["file"]['tmp_name'];
    $fileDestination= 'uploads/'.$fileName;
    move_uploaded_file($fileTmpName, $fileDestination);
    $Empid=$_SESSION['uid'];
    $National_ID=$_POST['National_ID'];
    $Date_of_Birth=$_POST['Date_of_Birth'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $area=$_POST['area'];
    $selfdescribe=$_POST['selfdescribe'];
    $skills=$_POST['skills'];
    $psw=$_POST['psw'];
        $query1=mysqli_query($con, "insert into employees(Emp_User_ID,Emp_Image,Emp_Address,Emp_City,Emp_Area,Emp_Skills,Emp_birth,Emp_Description,Emp_NatID) 
                                values ('$Empid',$fileDestination,'$address','$city','$area','$skills','$Emp_birth','$selfdescribe','$National_ID')" );
	
	
	
        if ($query1) { 
            echo '<script type ="text/JavaScript"> 
                alert("You are succesfully registerd. press \"ok\" to log in")
            </script> '; 
        }
        else{
            echo '<script>alert("Something Went Wrong. Please try again.");</script>';
            header('location:employeeindex.php');
        }
    
}
// if (isset($_POST['upload'])) { 
    

// }

?>

<!DOCTYPE html>
<html class="forbackdesign">
    <head>
    <title>Registration</title>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../stylesheet2.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    </head>
    <body >
    <!-- signup modal -->
    <div class="modal2">
            <form class="reg-content" method="post" enctype="multipart/form-data">
                <div class="imgcontainer"> 
                    <h1>Registration</h1>  
                    <a href="../employeeindex.php"><span class="close" title="Close">&times;</span></a>
                    <!-- alerts -->
                    <div style="padding:0px 350px">
                            <h6 style="font-size:16px;margin-top:15px;color:red" align="center"> <?php if($msg1){
                                echo $msg1;
                            }  ?> </h6>
                            <h6 style="font-size:16px;margin-top:15px;color:red" align="center"> <?php if($msg2){
                            echo $msg2;
                        }  ?> </h6>
                    </div>
                </div>
                <div class="piccontainer">
                    <div class="picfigure">
                        <img src="../../images/profile_default.jpg" alt="Avatar" id="avatar"><br>
                        <input type="file" id="file" id="profileImage" name="file"><br>
                        <!-- <label for="file" name="file-button" id="uploadbtn">Choose photo</label> -->
                            
                    </div> 
                    <!-- <form action="upload.php" method="post" enctype="multipart/form-data"> -->
                                <!-- <div class="donthacc">
                                    <button type="button" name="upload" >Upload</button> -->
                                    <!-- <input type="submit" value="uplaod" name="upload" class="cancelbtn"><br>
                             </div>  -->
                        <!-- </form> -->
                </div>
                <div class="container">
                    <div class="row">
                        <label><b>National ID:</b></label>
                        <input type="text" placeholder="Enter National ID" name="National_ID" required>
                    </div>
                    <div class="row">
                        <label><b>Date of Birth(DD/MM/YYYY):</b></label>
                        <input type="text" placeholder="Enter Date of Birth" name="Date_of_Birth" required>
                    </div>
                    <div class="row">
                        <label><b>Address:</b></label>                    
                        <input type="text" placeholder="Enter Address" name="address"  required>
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
                        <label><b>Skills:</b></label>
                        <input list="browsers" name="browser" type="text" placeholder="Enter Skills" name="skills" required>
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
                        <label><b>Description(Yourself and your qualification):</b></label>
                        <textarea rows="3" name="selfdescribe" required></textarea><br>
                    </div>

                    <input type="submit" class="cancelbtn" value="signup" name="signup">
                    <hr><br><br>

                </div>
            </form>
        <br><br><br>
        </div>


<Script>
    function triggerClick() {
        document.querySelector('#avatar').click();
    }
    
    function displayImage(e) {
    if (e.files[0]) {
    
        var reader = new FileReader();
        reader.onload = function(e) {
            document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
    
    }
</Script>
    </body>
</html>
