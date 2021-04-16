<?php
include("DbConne.php");
$post_office=$_POST["postoff"];

$r="select * from tbl_postoff where post_office='$post_office'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("Postoffice Name Already Exists");
location.href="addpost.php";
 exit;
</script>
<?php
}
else
{
$sql="insert into tbl_postoff(post_office) values('$post_office')";
if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully Inserted");
   location.href="viewpost.php";
   </script>
   <?php
}
}
mysqli_close($con);
?>
