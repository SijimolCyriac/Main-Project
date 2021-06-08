<?php
session_start();
include("DbConne.php");
$cod=$_POST['name'];
$b=$_SESSION['uname'];
$abc="select login_id from tbl_login where username='$b'";
$query=mysqli_query($con,$abc);
$result=mysqli_fetch_array($query);
$c=$result['login_id'];

$name=$_POST["name"];
$complaint=$_POST["comp"];
$status=0;

$abc1="select a.login_id from tbl_login a,tbl_contractor_reg b where a.login_id=b.login_id and b.contractor_name='$cod'";
$query1=mysqli_query($con,$abc1);
$result1=mysqli_fetch_array($query1);
$e=$result1['login_id'];

$sq="insert into tbl_complaint(login_id,to_login_id,complaint,ccstatus) values('$c','$e','$complaint','$status')";
if(mysqli_query($con,$sq))
  {
    ?>
    <script>alert("Complaint Added Successfully");
    location.href="viewcomp.php";
     exit;
    </script>
    <?php
  }
    mysqli_close($con);
     ?>
