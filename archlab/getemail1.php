<?php
require_once("DbConne.php");
if(!empty($_POST["email_id"]))
{
	$a = $_POST["email_id"];
	$sqli="select email_id from tbl_contractor_reg where  email_id = '$a'";
	$query1 =mysqli_query($con,$sqli);
	$res = mysqli_fetch_array($query1);
  $num=mysqli_num_rows($query1);
  if($num>0)
  {
  echo "Email Already Exist";
  }
	else {

	}
}
mysqli_close($con);
?>
