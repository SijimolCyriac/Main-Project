<?php
session_start();
include("DbConne.php");
$a;
if(isset($_SESSION['uname']))
{
$temp=$_SESSION['uname'];
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
        <title>Labour</title>
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

                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
														<div class="sb-sidenav-menu-heading">Activities</div>
														<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
															<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
													Contractor
															<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
													</a>
													<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
															<nav class="sb-sidenav-menu-nested nav">
																<a class="nav-link" href="searchcontra.php">Search Contractor</a>
																<a class="nav-link" href="viewreq.php">View Request</a>

															</nav>
													</div>
													<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
															<div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
												Project
															<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
													</a>
													<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
															<nav class="sb-sidenav-menu-nested nav">

																<a class="nav-link" href="check.php">Check Project</a>
																<a class="nav-link" href="addatt.php">Place Attendance</a>
																<a class="nav-link" href="addleave.php">Apply Leave</a>

															</nav>
													</div>
													<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
															<div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
														Complaint
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
                        <h2 class="mt-4">Contractor</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Labour</li>
                        </ol>


												<div class="card mb-4">
														<div class="card-body">
															<div class="table-responsive">

															<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


<?php
include("DbConne.php");
$dist_name=$_POST["district"];
$state_name=$_POST["state"];
$query = "select contractor_id,contractor_name,email_id,phone_no from tbl_contractor_reg where dist_name='$dist_name' and state_name='$state_name'";
$results = mysqli_query($con,$query);

$sq="select status from tbl_project";
$res = mysqli_query($con,$sq);
$siji=mysqli_fetch_array($res);

if(mysqli_num_rows($results)>0)
{
	?>
	<script>alert("Search Found");
	 exit;
	</script>
	<?php

echo "<h2><center>Contractor Details</center></h2>";
echo "<tr><th>Contractor Name</th><th>Email Address</th><th>Contact Number</th></tr>";

while($fin=mysqli_fetch_array($results))
{

echo "<tr>";
echo "<td>".$fin['contractor_name']."</td><td>"
              .$fin['email_id']."</td><td>"
.$fin['phone_no']."</td>";

echo "</tr>";
}}else {
	?>
	<script>alert("Search  Not  Found");
	location.href="searchcontra.php";
	 exit;
	</script>
	<?php
}
?>
</table>
</div></div>
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
