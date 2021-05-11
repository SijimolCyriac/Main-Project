<?php
session_start();
include("DbConne.php");
if(isset($_POST['submit'])){
$b=$_SESSION['uname'];
$abc="select login_id from tbl_login where username='$b'";
$query=mysqli_query($con,$abc);

$cn = $_POST['cname'];
$ab="select contractor_name from tbl_contractor_reg where contractor_id='$cn'";
$qe=mysqli_query($con,$ab);
$re=mysqli_fetch_array($qe);
$ce=$re['contractor_name'];

while($result=mysqli_fetch_array($query))
{
  $c=$result['login_id'];
  $js="select labour_name from tbl_labours_reg where login_id='$c'";
  $que=mysqli_query($con,$js);
  $res=mysqli_fetch_array($que);
  $d=$res['labour_name'];

}


$proj_name=$_POST["proj"];
$site_address=$_POST["add"];
$cdate=$_POST['cdate'];

$details=$_FILES['proof']['name'];
$fileloc="work/";
move_uploaded_file($_FILES["proof"]["tmp_name"],$fileloc.$details);
$att=$_POST['att'];

$status='0';

$jss="select * from tbl_attnd where proj_name='$proj_name' and site_loc='$site_address' and cdate='$cdate' and contractor_name='$ce' and labour_name='$d' and work_proof='$details'";
$quee=mysqli_query($con,$jss);
$num=mysqli_num_rows($quee);
if($num==1)
{
  ?>
  <script>alert("Attendence Already Uploaded ");
  location.href="addatt.php";
   exit;
  </script>
  <?php
}

else{
$sq="insert into tbl_attnd(proj_name,site_loc,cdate,contractor_name,labour_name,work_proof,attd,status) values('$proj_name','$site_address','$cdate','$ce','$d','$details','$att','$status')";
if(mysqli_query($con,$sq))
  {
    ?>
    <script>alert("Attendence Uploaded Successfully");
    location.href="addatt.php";
     exit;
    </script>
    <?php
  }}}
    mysqli_close($con);
     ?>
