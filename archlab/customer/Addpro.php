<?php
session_start();
include("DbConne.php");
	if(isset($_POST['submit'])){
$b=$_SESSION['uname'];
$abc="select login_id from tbl_login where username='$b'";
$query=mysqli_query($con,$abc);
while($result=mysqli_fetch_array($query))
{
  $c=$result['login_id'];
  $js="select cust_id from tbl_customer_reg where login_id='$c'";
  $que=mysqli_query($con,$js);
  $res=mysqli_fetch_array($que);
  $b=$res['cust_id'];
}

$service=$_POST['services'];
$site_address=$_POST["add"];
$a=$_SESSION['siji'];

$proj_plan=$_FILES['proj']['name'];
$fileloc="project/";
move_uploaded_file($_FILES["proj"]["tmp_name"],$fileloc.$proj_plan);

$pack=$_POST['pack'];
$rooms=$_POST['rooms'];
$feet=$_POST['feet'];
$status='0';
$proj_status='0';

$sq="insert into tbl_project(yur_service,site_address,proj_plan,package,no_of_floors,sqfeet,cust_id,contractor_id,status,proj_status) values('$service','$site_address','$proj_plan','$pack','$rooms','$feet','$b','$a','$status','$proj_status')";
if(mysqli_query($con,$sq))
  {
    ?>
    <script>alert("Project Uploaded Successfully");
    location.href="viewproj.php";
     exit;
    </script>
    <?php
  }}
    mysqli_close($con);
     ?>
