<?php
session_start();
include("DbConne.php");
if(isset($_POST['submit'])){
$address = $_POST['address'];
$status=0;
$r="select * from tbl_services where service='$address'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("Service Name Already Exists");
location.href="viewservice.php";
 exit;
</script>
<?php
}
else {
$query = "insert into tbl_services(service,status) values('$address','$status')";
  mysqli_query($con,$query)or die (mysqli_error($con));

  ?>
  <script type="text/javascript">
alert("New Service Has Been Added Successfully!.");
window.location = "viewservice.php";
</script>
<?php
}}
?>
