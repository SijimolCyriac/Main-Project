<?php
session_start();
include("DbConne.php");
if(isset($_POST['submit'])){
$address = $_POST['address'];
$status=0;
$r="select * from tbl_labour_category where category_name='$address'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("Category Name Already Exists");
location.href="viewcat.php";
 exit;
</script>
<?php
}
else {
$query = "insert into tbl_labour_category(category_name,status) values('$address','$status')";
mysqli_query($con,$query)or die (mysqli_error($con));
  ?>
  <script type="text/javascript">
alert("New Category Has Been Added Successfully!.");
window.location = "viewcat.php";
</script>
<?php
}}
?>
