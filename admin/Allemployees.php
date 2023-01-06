<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
    include('includes/delid.php');
    if(isset($_POST['submit']))
    {
        $sname=$_POST['SName'];
        $query= mysqli_query($con,"select * from users where EmpFname='$sname'");
        $row=mysqli_fetch_array($query);
        $_SESSION['tid']=$row['EmpFname'];
        header('location:searchresults.php');
    }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Employees Details</title>

  <!-- Custom fonts for this template-->
  <link href="library/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

  <!-- Custom styles for this template-->
  <!--   <link href="library/sb-admin-2.min.css" rel="stylesheet"> -->
  <link href="library/sb-admin-2.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
 <link href="library/sb-admin-2.min.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">

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
          <h1 class="h3 mb-4 text-gray-800">Employees Details</h1>

<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  

 <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
  <th>S no.</th>
  <th>Emp ID</th>
  <th>Name</th>
  <th>Email</th>
  <th>Contact</th>
  <th>Address</th>
  <th>City</th>
  <th>Area</th>
  <th>Skill</th>
  <th>Action</th>

</tr>

<?php
$ret=mysqli_query($con,"Select users.*,employees.* From users 
INNER JOIN employees ON users.User_ID=employees.Emp_User_ID ORDER BY User_Name ASC ;");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<tr>
  <td><?php echo $cnt;?></td>
  <td><?php  echo $row['User_ID'];?></td>
  <td><?php echo $row['User_Name'];?></td>
  <td><?php echo $row['User_Email'];?></td>
  <td><?php echo $row['User_Phone_no'];?></td>
  <td><?php echo $row['Emp_Address'];?></td>
  <td><?php echo $row['Emp_City'];?></td>
  <td><?php echo $row['Emp_Area'];?></td>
  <td><?php echo $row['Emp_Skills'];?></td>
  <td><a href="empdetails.php?editid=<?php echo $row['User_ID'];?>">View All Details</a> |
    <a href="allemployees.php?delid=<?php echo $row['User_ID'];?>" onclick="return confirm('Do you really want to delete');" style="color:red">Delete</a>
  </td>
</tr>

<?php
$cnt=$cnt+1;
}?>

</table>

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
<?php }  ?>
