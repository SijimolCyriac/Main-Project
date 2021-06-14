<?php
session_start();
include("DbConne.php");
	if(isset($_POST['submit']))
	{
$b=$_SESSION['uname'];
$abc="select login_id from tbl_login where username='$b'";
$query=mysqli_query($con,$abc);
 $cn = $_POST['cname'];
 $ab="select cust_name from tbl_customer_reg where cust_id='$cn'";
 $qe=mysqli_query($con,$ab);
 $re=mysqli_fetch_array($qe);
 $ce=$re['cust_name'];
while($result=mysqli_fetch_array($query))
{
  $c=$result['login_id'];
  $js="select contractor_id,contractor_name from tbl_contractor_reg where login_id='$c'";
  $que=mysqli_query($con,$js);
  $res=mysqli_fetch_array($que);
  $b=$res['contractor_id'];
  $d=$res['contractor_name'];

  $sj="select proj_id from tbl_project where cust_id='$cn' and contractor_id='$b'";
  $quee=mysqli_query($con,$sj);
  $r=mysqli_fetch_array($quee);
  $p=$r['proj_id'];
}

$cost=$_POST['cost'];
$concrete=$_POST['con'];
$brick=$_POST['brick'];
$door=$_POST['door'];
$electrical=$_POST['elec'];
$floor=$_POST['floor'];
$paint=$_POST['paint'];
$status=0;
$r="select * from tbl_est where proj_id='$p'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("Estimation Already Done");
location.href="EstAdd.php";
 exit;
</script>
<?php
}
else
  {
		$sq="insert into tbl_est(proj_id,cust_name,contractor_name,total_cost,concrete,brick,door,electrical,floor,paint,status) values('$p','$ce','$d','$cost','$concrete','$brick','$door','$electrical','$floor','$paint','$status')";
		if(mysqli_query($con,$sq))
		{
			?>
    <script>alert("Estimation Uploaded Successfully");
    location.href="EstAdd.php";
     exit;
    </script>
    <?php
  }}}
    mysqli_close($con);
     ?>
