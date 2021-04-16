<?php
include("DbConne.php");
$state_name=$_POST["state"];

$r="select * from tbl_state where state_name='$state_name'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("State Name Already Exists");
location.href="addstate.php";
 exit;
</script>
<?php
}
else {


$sql="insert into tbl_state(state_name) values('$state_name')";
if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully Inserted");
   location.href="viewstate.php";
   </script>
   <?php
}}

mysqli_close($con);
?>
