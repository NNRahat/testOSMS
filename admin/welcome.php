<?php
session_start();
include('includes/dbconnection.php');
if(strlen($_SESSION['aid']==0)){
	header('location:logout.php');
}
else {
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome to Online Service Management System </title>

  <!-- Custom fonts for this template-->
  <link href="library/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <!-- Custom styles for this template-->
  <link href="library/sb-admin-2.css?v=<?php echo time(); ?>" rel="stylesheet">
 <link href="library/sb-admin-2.min.css?v=<?php echo time(); ?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include_once('includes/sidebar.php');?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <?php include_once('includes/header.php');?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Online Service Management System</h1>
                   </div>

          <!-- Content Row -->
          <div class="row">
<div class="col-xl-3 col-md-6 mb-4"></div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Welcome Back to Online Service Managment System!</div>

                      <?php
$adminid=$_SESSION['aid'];
$ret=mysqli_query($con,"select Admin_Name from admin where A_ID='$adminid'");
$row=mysqli_fetch_array($ret);
$name=$row['Admin_Name'];

?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $name; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>

          <!-- Content Row -->

        </div>



          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
       <?php include_once('includes/footer.php');?>
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
  <script src="library/jquery.min.js"></script>
  <script src="library/bootstrap.bundle.min.js"></script>

  <script src="library/sb-admin-2.min.js"></script>

</body>

</html>

</html>
<?php
}
?>
