<?php
session_start();
include("DbConne.php");
if(isset($_REQUEST['x']))
	{
		$a=intval($_GET['x']);
		$sql="select proj_plan from tbl_project  where proj_id='$a'";
		$res=mysqli_query($con,$sql);
		$sqli=mysqli_fetch_array($res);
		?>
		<p><?php
    $h=$sqli['proj_plan'];
		$s="../customer/project/";
		header("location: $s$h");
			 ?></p>
	  <?php
	}
  ?>
