<?php
session_start();
include("DbConne.php");
if(isset($_POST['submit'])){
$b=$_SESSION['uname'];
$abc="select login_id from tbl_login where username='$b'";
$query=mysqli_query($con,$abc);

$cn = $_POST['cname'];
$ab="select * from tbl_contractor_reg where contractor_name='$cn'";
$qe=mysqli_query($con,$ab);
$re=mysqli_fetch_array($qe);
$ce=$re['contractor_id'];

while($result=mysqli_fetch_array($query))
{
  $c=$result['login_id'];
  $js="select * from tbl_labours_reg where login_id='$c'";
  $que=mysqli_query($con,$js);
  $res=mysqli_fetch_array($que);
  $d=$res['lid'];

}

$leave=$_POST['leave'];
$reason=$_POST['reason'];
$status='0';
$cdate=date("Y-m-d");

$jss="select * from tbl_leave where leave_date='$leave' and applied_on='$cdate' and contractor_id='$ce' and lid='$d'";
$quee=mysqli_query($con,$jss);
$num=mysqli_num_rows($quee);
if($num==1)
{
  ?>
  <script>alert("Leave Already Applied");
  location.href="addleave.php";
   exit;
  </script>
  <?php
}
else{
$sq="insert into tbl_leave(leave_date,applied_on,contractor_id,lid,reason,lstatus) values('$leave','$cdate','$ce','$d','$reason','$status')";
if(mysqli_query($con,$sq))
  {
    ?>
    <script>alert("Leave Applied Successfully");
    location.href="addleave.php";
     exit;
    </script>
    <?php
  }}}
    mysqli_close($con);
     ?>
