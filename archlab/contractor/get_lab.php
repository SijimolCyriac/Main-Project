<?php
require_once("DbConne.php");
if(!empty($_POST["catname"]))
{
  $a=$_POST["catname"];

$query1 =mysqli_query($con,"SELECT category_name FROM tbl_labour_category WHERE category_name = '" . $_POST["catname"] . "'");
$res = mysqli_fetch_array($query1);
$b = $res['category_name'];
$query =mysqli_query($con,"select * from tbl_labours_reg where category_name = '$b'");
?>
<option value="">Select Labour Name</option>
<?php
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row["labour_name"]; ?>"><?php echo $row["labour_name"]; ?></option>
<?php
}
}

?>
