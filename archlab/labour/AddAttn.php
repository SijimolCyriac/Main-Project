<?php
session_start();
include("DbConne.php");
if(isset($_POST['submit'])){
$b=$_SESSION['uname'];
$abc="select login_id from tbl_login where username='$b'";
$query=mysqli_query($con,$abc);

$cn = $_POST['cname'];
$ab="select contractor_name from tbl_contractor_reg where contractor_name='$cn'";
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

  $sql="select * from tbl_project p,tbl_site_loc c
  where p.proj_id=c.proj_id and c.contractor_name='$ce' and c.labour_name='$d' and c.proj_sstatus=1";
  $res1 = mysqli_query($con,$sql);
  $v=mysqli_fetch_array($res1);
  $m=$v['proj_id'];

}

$att=$_POST['att'];
$status='1';
$cdate=date("Y-m-d");
$jss="select * from tbl_attnd where proj_id='$m' and cdate='$cdate' and contractor_name='$ce' and labour_name='$d'";
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
$sq="insert into tbl_attnd(proj_id,cdate,contractor_name,labour_name,attd,status) values('$m','$cdate','$ce','$d','$att','$status')";
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
