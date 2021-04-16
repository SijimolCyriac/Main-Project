<?php
session_start();
include("DbConne.php");
$login_id=0;
$email_id=$_POST["email"];
$password=$_POST["pswrd"];
$pass=md5($password);
$r="select login_id from tbl_customer_reg where email_id='$email_id'";
$result=mysqli_query($con,$r);
$n=mysqli_num_rows($result);
if($n>0)
{
  $a=mysqli_fetch_array($result);
  $login_id=$a['login_id'];

}
else
{
  $r="select login_id from tbl_contractor_reg where email_id='$email_id'";
  $result=mysqli_query($con,$r);
  $n=mysqli_num_rows($result);
  if($n>0)
  {
    $a=mysqli_fetch_array($result);
    $login_id=$a['login_id'];
  }
else
{
    $r="select login_id from tbl_labours_reg where email_id='$email_id'";
    $result=mysqli_query($con,$r);
    $n=mysqli_num_rows($result);
    if($n>0)
    {
      $a=mysqli_fetch_array($result);
      $login_id=$a['login_id'];
    }
  }
}
if($login_id)
{
$sq="update tbl_login set password='$pass' where login_id='$login_id'";
if(mysqli_query($con,$sq))
{
  ?>
  <script>alert("password successfully changed");
  location.href="login.php";
   exit;
  </script>
  <?php
}}
else {
  ?>
  <script>alert("invalid email");
  location.href="forgot.html";
   exit;
  </script>
  <?php
}
mysqli_close($con);
   ?>
