<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $uname=$_POST['username'];
    $Password=$_POST['Password'];
    $query=mysqli_query($con,"select A_ID from admin where Admin_Name='$uname' && Admin_Password='$Password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['aid']=$ret['A_ID'];
    header('location:welcome.php');
    }
    else{
      $msg="Invalid Details";
    }
  }
  ?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="Employee Record management System in php and mysql">
  <meta name="description" content="Employee Record management System in php and mysql">
  <meta name="author" content="Sarita Pandey">

  <title>ERMS Admin Login</title>

  <!-- Custom fonts for this template-->
  <link href="../library/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <!-- Custom styles for this template-->
  <link href="../library/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
      <h3 align="center" style="color: black; padding-top: 2%">Online Service Managment System</h3>

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block" >
                <img style="width: 400px; height: 400px;" src="../images/boss-2.jpg" alt="">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Admin login!</h1>
                  </div>
                  <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                  <form class="user" method="post" action="">
                    <div class="form-group">
                      <input type="test" class="form-control form-control-user" id="username" name="username" aria-describedby="emailHelp" required="true" placeholder="Enter username ...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="Password" name="Password" placeholder="Password" required="true">
                    </div>
                    <p> <input type="submit" class="btn btn-primary btn-user btn-block" name="login" value="login"></p>
                    <hr>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="../index.php">Back</a>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../library/jquery.min.js"></script>
  <script src="../library/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <!-- <script src="../library/jquery.easing.min.js"></script> -->

  <!-- Custom scripts for all pages-->
  <script src="../library/sb-admin-2.min.js"></script>

</body>

</html>
