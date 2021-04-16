<?php
session_start();
include("DbConne.php");
$b=$_POST['state'];
$abc="select sid from tbl_state where state_name='$b'";
$query=mysqli_query($con,$abc);
$result=mysqli_fetch_array($query);
$c=$result['sid'];
$dist_name=$_POST["dist"];

$r="select * from tbl_district where dist_name='$dist_name'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("District Name Already Exists");
location.href="adddist.php";
 exit;
</script>
<?php
}
else {


$sql="insert into tbl_district(sid,dist_name) values('$c','$dist_name')";
if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully Inserted");
   location.href="viewdist.php";
   </script>
   <?php
}}
mysqli_close($con);
?>
