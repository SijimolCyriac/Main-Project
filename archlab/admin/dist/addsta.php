<?php
session_start();
include("DbConne.php");
if(isset($_POST['submit'])){
$address = $_POST['address'];
$status=0;
$r="select * from tbl_state where state_name='$address'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("State Name Already Exists");
location.href="viewstate.php";
 exit;
</script>
<?php
}
else {
$query = "insert into tbl_state(state_name,status) values('$address','$status')";
  mysqli_query($con,$query)or die (mysqli_error($con));

  ?>
  <script type="text/javascript">
alert("New State Has Been Added Successfully!.");
window.location = "viewstate.php";
</script>
<?php
}}
?>
