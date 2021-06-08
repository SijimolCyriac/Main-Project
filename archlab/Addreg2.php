<?php
session_start();
include("DbConne.php");
$contractor_name=$_POST["name"];
$email_id=$_POST["email"];
$phone_no=$_POST["phn"];
$licenseNo=$_POST['licenseno'];

$licenseProof=$_FILES['lic']['name'];
$fileloc="proof/";
move_uploaded_file($_FILES["lic"]["tmp_name"],$fileloc.$licenseProof);

$companyName=$_POST["compname"];
$spec=$_POST["spec"];
$dist_name=$_POST["district"];
$state_name=$_POST["state"];
$username=$_POST["uname"];
$password=$_POST["pswrd"];
$pass=md5($password);
$user_type="contractor";
$status=1;

$r="select * from tbl_login where username='$username'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("Username already exists");
location.href="contrareg.php";
 exit;
</script>
<?php
}
else
{
  $r="select * from tbl_contractor_reg where email_id='$email_id'";
  $result=mysqli_query($con,$r);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
    ?>
  <script>alert("Email already exists");
  location.href="contrareg.php";
   exit;
  </script>
  <?php
  }
  else
   {
    $r="select * from tbl_contractor_reg where licenseNo='$licenseNo'";
    $result=mysqli_query($con,$r);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
      ?>
    <script>alert("Licenseno Already Exists");
    location.href="contrareg.php";
     exit;
    </script>
    <?php
  }else {

$sqli="insert into tbl_login(username,password,user_type,status) values ('$username','$pass','$user_type','$status')";
$result1=mysqli_query($con,$sqli);
$n=mysqli_insert_id($con);

$sq="insert into tbl_contractor_reg(login_id,contractor_name,email_id,phone_no,licenseNo,licenseProof,companyName,spec,dist_name,state_name,photo,yoexp,status) values('$n','$contractor_name','$email_id','$phone_no','$licenseNo','$licenseProof','$companyName','$spec','$dist_name','$state_name','0','0','$status')";

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
