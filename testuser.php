<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

$ExpID=$_SESSION['uid'];
$query=mysqli_query($con,"select * from employees where Emp_ID=$ExpID");
$row=mysqli_fetch_array($query);

  ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><label>hello <?php echo $row['Emp_Email'];?></label></p>
</body>
</html>