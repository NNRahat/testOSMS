<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
    include('includes/delid.php');
    // if(isset($_POST['submit']))
    // {
    //     $sname=$_POST['SName'];
    //     $query= mysqli_query($con,"select * from users where User_Name='$sname'");
    //     $row=mysqli_fetch_array($query);
    //     $_SESSION['tid']=$row['User_Name'];
    //     header('location:searchresults.php');
    // }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Employees report</title>

  <!-- Custom fonts for this template-->
  <link href="library/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

  <!-- Custom styles for this template-->
  <!--   <link href="library/sb-admin-2.min.css" rel="stylesheet"> -->
  <link href="library/sb-admin-2.css?v=<?php echo time(); ?>" rel="stylesheet">
  <link href="library/sb-admin-2.min.css?v=<?php echo time(); ?>" rel="stylesheet">

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
          <h1 class="h3 mb-4 text-gray-800">Employees report on user</h1>

<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  
            <!-- <form class="user" method="post" action="">
              <div class="row" align="center">
                <div class="col-5 mb-2"><b>Search:</b></div>
                <div class="col-4 mb-2">   
                  <input type="text" class="form-control form-control-user" id="SName" name="SName" aria-describedby="emailHelp" value="">
                  </div>
                  <div class="col-1 mb-2">   
                      <input type="submit" name="submit"  value="Search" class="btn btn-primary btn-user btn-block">
                  </div>
              </div>
              <hr>
            </form> -->

 <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<!-- Emp_ID	User_ID	Report_Subject	Report_Descriptiom -->
<tr>
  <th>S no.</th>
  <th>Report ID</th>
  <th>Emp_ID</th>
  <th>User_ID</th>
  <th>Subject</th>
  <th>Description</th>
  <th>Actions</th>
</tr>

<?php
$ret=mysqli_query($con,"Select * from employees_reports");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<tr>
  <td><?php echo $cnt;?></td>
  <td><?php  echo $row['Re_ID'];?></td>
  <td><?php  echo $row['Emp_ID'];?></td>
  <td><?php echo $row['User_ID'];?></td>
  <td><?php echo $row['Emp_R_Subject'];?></td>
  <td><?php echo $row['Emp_R_Description'];?></td>
  <td><a href="viewdetails.php?editid=<?php echo $row['Re_ID'];?>">View All Details</a> |
    <!-- <a href="editempprofile.php?editid=<?php //echo $row['Re_ID'];?>">Edit Profile Details</a> | -->
    <a href="allemployees.php?delid=<?php echo $row['Re_ID'];?>" onclick="return confirm('Do you really want to delete');" style="color:red">Delete</a>
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
