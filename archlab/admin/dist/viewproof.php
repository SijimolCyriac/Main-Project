<?php
session_start();
include("DbConne.php");
if(isset($_REQUEST['x']))
	{
		$a=intval($_GET['x']);
		$sql="select licenseProof from tbl_contractor_reg  where login_id='$a'";
		$res=mysqli_query($con,$sql);
		$sqli=mysqli_fetch_array($res);
		?>
		<p><?php
    $h=$sqli['licenseProof'];
		$s="../../proof/";
		header("location: $s$h");
			 ?></p>
	  <?php
	}
  ?>
