<?php
session_start();
include("DbConne.php");
if(isset($_POST['submit'])){
$b=$_SESSION['uname'];
$abc="select login_id from tbl_login where username='$b'";
$query=mysqli_query($con,$abc);
$cn = $_POST['cname'];
$ab="select labour_name from tbl_labours_reg where lid='$cn'";
$qe=mysqli_query($con,$ab);
$re=mysqli_fetch_array($qe);
$ce=$re['labour_name'];
while($result=mysqli_fetch_array($query))
{
  $c=$result['login_id'];
  $js="select contractor_id,contractor_name from tbl_contractor_reg where login_id='$c'";
  $que=mysqli_query($con,$js);
  $res=mysqli_fetch_array($que);
  $b=$res['contractor_id'];
  $d=$res['contractor_name'];

}


$proj_name=$_POST["proj"];
$site_address=$_POST["add"];
$fdate=$_POST['fdate'];
$tdate=$_POST['tdate'];
$status='0';


$sq="insert into tbl_site_loc(proj_name,site_loc,fdate,tdate,contractor_name,labour_name,status) values('$proj_name','$site_address','$fdate','$tdate','$d','$ce','$status')";
if(mysqli_query($con,$sq))
  {
    ?>
    <script>alert("Site Location Uploaded Successfully");
    location.href="sitelab.php";
     exit;
    </script>
    <?php
  }}
    mysqli_close($con);
     ?>
