<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $Designation=$_POST['Designation'];  
    $query=mysqli_query($con, "insert into skills(Skill_Name) values('$Designation')" );
    if ($query) { 
      echo "<script>alert('Record Added Successfully');</script>";
      echo "<script>window.location.href='Services.php'</script>";
  }
  else{
      $msg="Something Went Wrong. Please try again.";
    }
}
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add a new Service</title>

  <!-- Custom fonts for this template-->
  <link href="../library/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

  <!-- Custom styles for this template-->
  <link href="../library/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  <?php include_once('../includes/sidebar.php')?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
         <?php include_once('../includes/header.php')?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Add a new catagory</h1>

<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <p style="font-size:16px; color:green" align="center"> <?php if($msg1){
    echo $msg1;
  }  ?> </p>

                <form class="user" method="post" action="" >               
                  <div class="row">
                      <div class="col-4 mb-3">Service</div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="Designation" name="Designation" aria-describedby="emailHelp" value=""  required="true">
                    </div></div>    
                    <div class="row" style="margin-top:4%">
                      <div class="col-4"></div>
                      <div class="col-4">
                      <input type="submit" name="submit"  value="Submit" class="btn btn-primary btn-user btn-block">
                    </div>
                    </div>              
                </form>





        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
   <?php include_once('../includes/footer.php');?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <!-- Bootstrap core JavaScript-->
  <script src="../library/jquery.min.js"></script>
    <script src="../library/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../library/sb-admin-2.min.js"></script>
  <script type="text/javascript">
    $(".jDate").datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
}).datepicker("update", "10/10/2016"); 
  </script>

</body>

</html>
<?php //}  ?>
