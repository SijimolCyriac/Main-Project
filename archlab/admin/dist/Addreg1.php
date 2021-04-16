<?php
session_start();
include("DbConne.php");
$cust_name=$_POST["name"];
$address=$_POST['address'];
$phno=$_POST["phn"];
$email_id=$_POST["email"];
$user_type="admin";
$status=1;
$b=$_SESSION['uname'];
$abc="select login_id from tbl_login where username='$b'";
$query=mysqli_query($con,$abc);
$result=mysqli_fetch_array($query);
$c=$result['login_id'];
$sq="update tbl_customer_reg set cust_name='$cust_name',address='$address',
phno='$phno',email_id='$email_id' where login_id='$c'";

if(mysqli_query($con,$sq))
{

  ?>
  <script>alert("Profile Updated Successfully");
  location.href="index.php";
   exit;
  </script>
  <?php
}
mysqli_close($con);
?>
