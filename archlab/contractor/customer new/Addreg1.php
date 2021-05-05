<?php
session_start();
include("DbConne.php");
if(isset($_POST['update']))
{
$cust_name=$_POST["name"];
$phno=$_POST["phn"];
$email_id=$_POST["email"];
$username=$_POST["uname"];
$user_type="customer";
$status=1;
$temp=$_SESSION['uname'];

$h="select login_id from tbl_login where username='$temp'";
$res=mysqli_query($con,$h);
$a=mysqli_fetch_array($res);
$b=$a['login_id'];
$sq="update tbl_customer_reg set cust_name='$cust_name',
phno='$phno',email_id='$email_id' where login_id='$b'";
mysqli_query($con,$sq);
$a="update tbl_login set username='$username' where username='$temp'";
if(mysqli_query($con,$a))
{
	$_SESSION['uname']=$username;
  ?>
  <script>alert("Profile Updated Successfully");
  location.href="index.php";
   exit;
  </script>
  <?php
}}
mysqli_close($con);
?>
