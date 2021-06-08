<?php
session_start();
include("DbConne.php");
$labour_name=$_POST["name"];
$phoneno=$_POST["phn"];
$email_id=$_POST["email"];
$location=$_POST["loc"];
$dist_name=$_POST["district"];
$state_name=$_POST["state"];

$aadharcard=$_FILES['aad']['name'];
$fileloc="aadhar/";
move_uploaded_file($_FILES["aad"]["tmp_name"],$fileloc.$aadharcard);


$adhar_no=$_POST["card"];
$category_name=$_POST['category'];
$username=$_POST["uname"];
$password=$_POST["pswrd"];
$pass=md5($password);
$user_type="labour";
$status=1;

$r="select * from tbl_login where username='$username'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("Username already exists");
location.href="labreg.php";
 exit;
</script>
<?php
}
else
{
  $r="select * from tbl_labours_reg where email_id='$email_id'";
  $result=mysqli_query($con,$r);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
    ?>
  <script>alert("Email already exists");
  location.href="labreg.php";
   exit;
  </script>
  <?php
  }
 else
 {
   $r="select * from tbl_labours_reg where adhar_no='$adhar_no'";
   $result=mysqli_query($con,$r);
   $num=mysqli_num_rows($result);
   if($num==1)
   {
     ?>
   <script>alert("Aadharno Already Exists");
   location.href="labreg.php";
    exit;
   </script>
   <?php
 }
 else {



$sqli="insert into tbl_login(username,password,user_type,status) values ('$username','$pass','$user_type','$status')";
$result1=mysqli_query($con,$sqli);
$n=mysqli_insert_id($con);
$sq="insert into tbl_labours_reg(login_id,labour_name,phoneno,email_id,location,dist_name,state_name,aadharcard,adhar_no,category_name,status) values('$n','$labour_name','$phoneno','$email_id','$location','$dist_name','$state_name','$aadharcard','$adhar_no','$category_name','$status')";
if(mysqli_query($con,$sq))
{
  ?>
  <script>alert("Successfully Registered. You will be directed to Login Page.");
  location.href="login.php";
   exit;
  </script>
  <?php
}
}}}
mysqli_close($con);
?>
