<?php
session_start();
include("DbConne.php");
$cid=$_SESSION['siji'];
$category=$_POST["item"];
$b="update tbl_labour_category set category_name='$category' where category_id='$cid'";
if(mysqli_query($con,$b))
{
  ?>
  <script>alert("Category Updated Successfully");
  location.href="viewcat.php";
   exit;
  </script>
  <?php
}
mysqli_close($con);
?>
