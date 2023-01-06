<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//error_reporting(0);
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>All details</title>

  <!-- Custom fonts for this template-->
  <link href="library/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <!-- Custom styles for this template-->
    <link href="library/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  <?php include_once('includes/sidebar.php')?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
         <?php include_once('includes/header.php')?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><b>Details</b></h1>

<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  <?php
$aid=$_GET['editid'];
// $query=mysqli_query($con,"select * from empexpireince where EmpID=$aid");
$query=mysqli_query($con,"Select employees.*,users.* From users
INNER JOIN employees ON users.User_ID=employees.Emp_User_ID
where users.User_ID='$aid'"); 
$row=mysqli_fetch_array($query);
if($row>0)
{
?>
<table class="table table-bordered" id="dataTable" table-layout="fixed" width="100%" cellspacing="50">
  <p style="font-size:22px; color:MediumPurple" ><b>Profile</b></p>

  <tr>
  <th style="width:50%;">Users ID</th>
  <td><?php echo $row['User_ID'];?></td>
</tr>
<tr>
  <th>Employees ID</th>
  <td><?php echo $row['User_Name'];?></td>
</tr>
<tr>
  <th>Email</th>
  <td><?php echo $row['User_Email'];?></td>
</tr>
<tr>
  <th>Phone No:</th>
  <td><?php echo $row['User_Phone_no'];?></td>
</tr>
<tr>
  <th>Address</th>
  <td><?php echo $row['Emp_Address'];?></td>
</tr>
<tr>
  <th>City</th>
  <td><?php echo $row['Emp_City'];?></td>
</tr>
<tr>
  <th>Area</th>
  <td><?php echo $row['Emp_Area'];?></td>
</tr>
<tr>
  <th>Skills</th>
  <td><?php echo $row['Emp_Skills'];?></td>
</tr>
</table>




<?php }?>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
    $(".jDate").datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
}).datepicker("update", "10/10/2016");
  </script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>
<?php }  ?>
