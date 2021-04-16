<?php
require_once("DbConne.php");
if(!empty($_POST["username"]))
{
	$a = $_POST["username"];
	$sqli="select username from tbl_login where  username = '$a'";
	$query1 =mysqli_query($con,$sqli);
	$res = mysqli_fetch_array($query1);
  $num=mysqli_num_rows($query1);
  if($num>0)
  {
  echo "Username Already Exist";
  }
	else {

	}
}
mysqli_close($con);
?>
