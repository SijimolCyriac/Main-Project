<?php
include("DbConne.php");
$category_name=$_POST["item"];

$r="select * from tbl_labour_category where category_name='$category_name'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("Category Name Already Exists");
location.href="addcat.php";
 exit;
</script>
<?php
}
else
{
$sql="insert into tbl_labour_category(category_name) values('$category_name')";
if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully Inserted");
   location.href="addcat.php";
   </script>
   <?php
}
}
mysqli_close($con);
?>
