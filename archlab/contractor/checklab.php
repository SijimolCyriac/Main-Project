<?php
session_start();
include("DbConne.php");
if(isset($_SESSION['uname']))
{
$temp=$_SESSION['uname'];
if(isset($_REQUEST['x']))
{
	$a=intval($_GET['x']);
	$sql="update tbl_site_loc set sstatus='0' where sid='$a'";
	mysqli_query($con,$sql);
}
if(isset($_REQUEST['y']))
{
	$a=intval($_GET['y']);
	$sql="update tbl_site_loc set sstatus='1' where sid='$a'";
	mysqli_query($con,$sql);
}
	?>
<!DOCTYPE html>
<html lang="en">
<?php 	include("header.php");
?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contractor</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

				<style>
										table, th, td {

												text-align:center;

			min-width: 150px;
										}


								</style>

    </head>
    <body>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
														<div class="sb-sidenav-menu-heading">Activities</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                              Project
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="viewproj.php">View Project</a>
																		<a class="nav-link" href="EstAdd.php">Add Estimation</a>
																			<a class="nav-link" href="check.php">Checking Projects</a>


                                </nav>
                            </div>
														<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
																<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
															Labours
																<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
														</a>
														<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
																<nav class="sb-sidenav-menu-nested nav">
																		<a class="nav-link" href="searchlab.php">Search Labours</a>
																			<a class="nav-link" href="sitelab.php">Assign Location</a>
	                                     <a class="nav-link" href="checklab.php">Checking Works</a>
																			  <a class="nav-link" href="viewleave.php">View Leave</a>
																			 <a class="nav-link" href="viewattd.php">View Attendence</a>

																</nav>
														</div>
														<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
																<div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
															Weekly Progress Report
																<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
														</a>
														<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
																<nav class="sb-sidenav-menu-nested nav">

																			<a class="nav-link" href="viewreport.php">View Report</a>
																</nav>
														</div>
														<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
																<div class="sb-nav-link-icon"><i class="fa fa-credit-card"></i></div>
														Payment
																<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
														</a>
														<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
																<nav class="sb-sidenav-menu-nested nav">

																			<a class="nav-link" href="viewpay.php">View Transaction Log</a>
																</nav>
														</div>

														<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
																<div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
															Complaints
																<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
														</a>
														<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
																<nav class="sb-sidenav-menu-nested nav">
																		<a class="nav-link" href="viewcomp.php">View Complaints</a>
																</nav>
														</div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-4">Checking Work</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contractor</li>
                        </ol>


												<div class="card mb-4">
														<div class="card-body">
															<div class="table-responsive">

																<form action="#" method="POST">
																<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
																	<?php
																	include("DbConne.php");
																	$query = "select l.login_id,h.contractor_id,h.contractor_name from tbl_login l,tbl_contractor_reg h  where l.username='$temp' and l.login_id=h.login_id";
																	$results = mysqli_query($con,$query);
																	$x=mysqli_fetch_array($results);
																	$d=$x['contractor_name'];

																	$sql="select * from tbl_site_loc s,tbl_project p
																	where  p.proj_id=s.proj_id and  s.contractor_name='$d' and s.sstatus=1";
																	$res1 = mysqli_query($con,$sql);



																	if(mysqli_num_rows($res1)>0)
																	{
																		echo "<h2><center>Work Details</center></h2>";
																		echo "<tr><th>Project Name</th><th>Labour Name</th><th>From Date</th><th>To Date</th><th>Site Location</th><th>Status</th></tr>";
																	while($v=mysqli_fetch_array($res1))
																	{
																		if($v['proj_sstatus']==0)
																		{
																			$f='Pending';
																		}
																		else if($v['proj_sstatus']==1) {
																			$f='Work in Progress';
																		}
																		else {
																			$f='Completed';
																		}

																	  echo "<tr>";
																	  echo "<td>"
																	.$v['yur_service']."</td><td>"
																	.$v['labour_name']."</td><td>"

																	.$v['fdate']."</td><td>"
																	.$v['tdate']."</td><td>"
																	.$v['site_address']."</td><td>"

																	.$f."</td>";
																	echo "</tr>";
																}}
																else
																{

																	?>
																<script>alert("No Records Found");
																location.href="index.php";
																exit;
																</script>
																<?php
																}

																	?>
													</table></form>


													</div></div>
													</div>


</div></div>
</div>
</div>

  <div style="height: 100vh;"></div>
  <div class="card mb-4"><div class="card-body"></div></div>
</div>
</main>
<footer class="py-4 bg-light mt-auto">
<div class="container-fluid">
  <div class="d-flex align-items-center justify-content-between small">
      <div class="text-muted"></div>
      <div>
          <a href="#"></a>
          &middot;
          <a href="#"></a>
      </div>
  </div>
</div>
</footer>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
<script src="app.js"></script>
<script>
	 history.pushState(null, null, location.href);
	window.onpopstate = function () {
			history.go(1);
	};
	</script>
</html>
<?php
}
else
{
	header("location: ../login.php");
}
?>
