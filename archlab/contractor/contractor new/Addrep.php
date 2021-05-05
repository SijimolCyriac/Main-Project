<?php
session_start();
include("DbConne.php");
$title=$_POST["name"];
$cust_name=$_POST["cname"];
$summary=$_POST["comp"];

$details=$_FILES['proj']['name'];
$fileloc="details/";
move_uploaded_file($_FILES["proj"]["tmp_name"],$fileloc.$details);

$date=$_POST['cdate'];
$status='0';
$f="select login_id from tbl_customer_reg where cust_name='$cust_name'";
$res=mysqli_query($con,$f);
$h=mysqli_fetch_array($res);
$e=$h['login_id'];
$sq="insert into tbl_daily_progress_report(title,login_id,description,activityDetails,date,status) values('$title','$e','$summary','$details','$date','$status')";
if(mysqli_query($con,$sq))
  {
    ?>
    <script>alert("Report Uploaded Successfully");
    location.href="index.php";
     exit;
    </script>
    <?php
  }
    mysqli_close($con);
     ?>
