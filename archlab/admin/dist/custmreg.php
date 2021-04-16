<?php
session_start();
include("DbConne.php");
if(isset($_POST['update']))
{

	$name=$_POST["name"];
	$phno=$_POST["phn"];
	$email_id=$_POST["email"];
	$username=$_POST["uname"];
	$user_type="admin";
	$status=1;
	$b=$_SESSION['uname'];
	$abc="select login_id from tbl_login where username='$b'";
	$query=mysqli_query($con,$abc);
	$result=mysqli_fetch_array($query);
	$c=$result['login_id'];
	$sq="update tbl_admin set name='$name', phno='$phno',email_id='$email_id' where login_id=$c";
	mysqli_query($con,$sq);
	$a="update tbl_login set username='$username' where username='$b'";
  if(mysqli_query($con,$a))
	{
	$_SESSION['uname']=$username;
  ?>
  <script>alert("Profile Has Been Updated Successfully!.");
  location.href="index.php";
   exit;
  </script>
  <?php
}}
mysqli_close($con);
?>
