<?php
session_start();
include("DbConne.php");
$labour_name=$_POST["name"];
$phoneno=$_POST["phn"];
$email_id=$_POST["email"];
$username=$_POST["uname"];

$user_type="labour";
$status=1;

$b=$_SESSION['uname'];
$abc="select login_id from tbl_login where username='$b'";
$query=mysqli_query($con,$abc);
$result=mysqli_fetch_array($query);
$c=$result['login_id'];
$sq="update tbl_labours_reg set labour_name='$labour_name',email_id='$email_id',phoneno='$phoneno' where login_id='$c'";
mysqli_query($con,$sq);
$a="update tbl_login set username='$username' where username='$b'";
if(mysqli_query($con,$a))
{
	$_SESSION['uname']=$username;
  ?>
  <script>alert("Profile Updated Successfully");
  location.href="index.php";
   exit;
  </script>
  <?php
}
mysqli_close($con);
?>
