<?php
session_start();
include("DbConne.php");
if(isset($_POST['update']))
{
$contractor_name=$_POST["name"];
$email_id=$_POST["email"];
$phone_no=$_POST["phn"];

$photo=$_FILES['pic']['name'];
$fileloc="photo/";
move_uploaded_file($_FILES["pic"]["tmp_name"],$fileloc.$photo);

$yoexp=$_POST["yoe"];
$username=$_POST["uname"];
$user_type="contractor";
$status=1;

$f=$_SESSION['uname'];
$abc="select login_id from tbl_login where username='$f'";
$query=mysqli_query($con,$abc);
$result=mysqli_fetch_array($query);
$c=$result['login_id'];

$sq="update tbl_contractor_reg set contractor_name='$contractor_name',email_id='$email_id',phone_no='$phone_no',photo='$photo',yoexp='$yoexp' where login_id='$c'";
mysqli_query($con,$sq);
$a="update tbl_login set username='$username' where username='$f'";
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
