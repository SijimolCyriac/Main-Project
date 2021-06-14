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

  $name=$_POST['nam'];
  $sql="select p.proj_id from tbl_project p,tbl_customer_reg c
  where p.contractor_id='$b' and c.cust_name='$name' and p.cust_id=c.cust_id";
  $res1 = mysqli_query($con,$sql);
  $v=mysqli_fetch_array($res1);
  $m=$v['proj_id'];

}


$proj_name=$_POST["proj"];

$fdate=$_POST['fdate'];
$tdate=$_POST['tdate'];
$status='0';
$sstatus='0';
$jss="select * from tbl_site_loc where proj_id='$m' and fdate='$fdate' and tdate='$tdate' and contractor_name='$d' and labour_name='$ce'";
$quee=mysqli_query($con,$jss);
$num=mysqli_num_rows($quee);
if($num==1)
{
  ?>
  <script>alert("Site Location Already Assigned");
  location.href="sitelab.php";
   exit;
  </script>
  <?php
}

else{
$sq="insert into tbl_site_loc(proj_id,fdate,tdate,contractor_name,labour_name,sstatus,proj_sstatus) values('$m','$fdate','$tdate','$d','$ce','$status','$sstatus')";
if(mysqli_query($con,$sq))
  {
    ?>
    <script>alert("Site Location Uploaded Successfully");
    location.href="sitelab.php";
     exit;
    </script>
    <?php
  }}}
    mysqli_close($con);
     ?>
