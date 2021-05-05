<?php
session_start();
include("DbConne.php");
if(isset($_REQUEST['x']))
	{
		$a=intval($_GET['x']);
		$sql="select activityDetails from tbl_daily_progress_report  where report_id='$a'";
		$res=mysqli_query($con,$sql);
		$sqli=mysqli_fetch_array($res);
		?>
		<p><?php
    $h=$sqli['activityDetails'];
		$s="../contractor/details/";
		header("location: $s$h");
			 ?></p>
	  <?php
	}
  ?>
