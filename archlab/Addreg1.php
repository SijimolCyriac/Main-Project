<?php
session_start();
include("DbConne.php");
$cust_name=$_POST["name"];
$address=$_POST['address'];
$post_office=$_POST['post_office'];
$PIN_Code=$_POST["pincode"];
$phno=$_POST["phn"];
$email_id=$_POST["email"];
$dist_name=$_POST["district"];
$state_name=$_POST["state"];
$username=$_POST["uname"];
$password=$_POST["pswrd"];
$pass=md5($password);
$user_type="customer";
$status=1;

$r="select * from tbl_login where username='$username'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num>0)
{
  ?>
<script>alert("Username Already Exists");
location.href="custreg.php";
 exit;
</script>
<?php
}
else
{
  $r="select * from tbl_customer_reg where email_id='$email_id'";
  $result=mysqli_query($con,$r);
  $num=mysqli_num_rows($result);
  if($num>0)
  {
    ?>
  <script>alert("Email Already Exists");
  location.href="custreg.php";
   exit;
  </script>
  <?php
  }
else
{
  $r="select * from tbl_customer_reg where phno='$phno'";
  $result=mysqli_query($con,$r);
  $num=mysqli_num_rows($result);
  if($num>0)
  {
    ?>
  <script>alert("Phoneno Already Exists");
  location.href="custreg.php";
   exit;
  </script>
  <?php
}
else {

$sqli="insert into tbl_login(username,password,user_type,status) values ('$username','$pass','$user_type','$status')";
$result1=mysqli_query($con,$sqli);
$n=mysqli_insert_id($con);
$sq="insert into tbl_customer_reg(login_id,cust_name,address,post_office,PIN_Code,phno,email_id,dist_name,state_name,status) values('$n','$cust_name','$address','$post_office','$PIN_Code','$phno','$email_id','$dist_name','$state_name','$status')";
if(mysqli_query($con,$sq))
{
  ?>
  <script>alert("Successfully Registered. You will be directed to Login Page.");
  location.href="login.php";
   exit;
  </script>
  <?php
}}}}
mysqli_close($con);
?>
