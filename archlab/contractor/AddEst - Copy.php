<?php
session_start();
include("DbConne.php");
	if(isset($_POST['submit']))
	{
$b=$_SESSION['uname'];
$abc="select login_id from tbl_login where username='$b'";
$query=mysqli_query($con,$abc);
 $id = $_POST['id'];
while($result=mysqli_fetch_array($query))
{
  $c=$result['login_id'];
  $js="select contractor_id from tbl_contractor_reg where login_id='$c'";
  $que=mysqli_query($con,$js);
  $res=mysqli_fetch_array($que);
  $b=$res['contractor_id'];

  $sj="select proj_id from tbl_project where proj_id='$id' and contractor_id='$b'";
  $quee=mysqli_query($con,$sj);
  $r=mysqli_fetch_array($quee);
  $p=$r['proj_id'];
}

$cost=$_POST['cost'];
$concrete=$_POST['con'];

$brick=$_POST['brick'];
$door=$_POST['door'];
$electrical=$_POST['elec'];
$r="select * from tbl_est where proj_id='$p'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("Estimation Already Done");
location.href="viewproj.php";
 exit;
</script>
<?php
}
else
  {
		$sq="insert into tbl_est(proj_id,total_cost,concrete,brick,door,electrical) values('$p','$cost','$concrete','$brick','$door','$electrical')";
		if(mysqli_query($con,$sq))
		{
			?>
    <script>alert("Estimation Uploaded Successfully");
    location.href="viewproj.php";
     exit;
    </script>
    <?php
  }}}
    mysqli_close($con);
     ?>
