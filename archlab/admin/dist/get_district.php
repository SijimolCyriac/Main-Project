<?php
require_once("DbConne.php");
if(!empty($_POST["state_id"]))
{

	$a = $_POST["state_id"];
	$query1 =mysqli_query($con,"SELECT sid FROM tbl_state WHERE state_name = '$a'");
	$res = mysqli_fetch_array($query1);
	$b = $res['sid'];
$query =mysqli_query($con,"SELECT * FROM tbl_district WHERE sid = '$b'");
?>
<option value="">Select District</option>
<?php
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row["dist_name"]; ?>"><?php echo $row["dist_name"]; ?></option>
<?php
}
}
?>
