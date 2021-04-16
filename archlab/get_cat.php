<?php
require_once("DbConne.php");
if(!empty($_POST["category_name"]))
{
$query =mysqli_query($con,"SELECT * FROM tbl_labour_category WHERE category_name = '" . $_POST["category_name"] . "'");
?>
<option value="">Select Category</option>
<?php
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row["category_name"]; ?>"><?php echo $row["category_name"]; ?></option>
<?php
}
}

?>
