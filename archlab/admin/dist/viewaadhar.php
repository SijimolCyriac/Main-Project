<?php
session_start();
include("DbConne.php");
if(isset($_REQUEST['x']))
	{
		$a=intval($_GET['x']);
		$sql="select aadharcard from tbl_labours_reg  where login_id='$a'";
		$res=mysqli_query($con,$sql);
		$sqli=mysqli_fetch_array($res);
		?>
		<p><?php
    $h=$sqli['aadharcard'];
		$s="../../aadhar/";
		header("location: $s$h");
			 ?></p>
	  <?php
	}
  ?>
