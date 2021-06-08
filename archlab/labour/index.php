<?php
session_start();
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
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
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
																	<a class="nav-link" href="viewwage.php">View Wages</a>

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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>




																	<div class="row">
																		<div class="col-xl-4 col-md-6">
																				<div class="card bg-success text-white mb-4">
																						<div class="card-body">Project</div>
																						<div class="card-footer d-flex align-items-center justify-content-between">
																								<a class="small text-white stretched-link" href="viewreq.php">View Requests</a>
																								<div class="small text-white"><i class="fas fa-angle-right"></i></div>
																						</div>
																				</div>
																		</div>
																		<div class="col-xl-4 col-md-6">
																				<div class="card bg-warning text-white mb-4">
																						<div class="card-body">Leave</div>
																						<div class="card-footer d-flex align-items-center justify-content-between">
																								<a class="small text-white stretched-link" href="addleave.php">Apply Leave</a>
																								<div class="small text-white"><i class="fas fa-angle-right"></i></div>
																						</div>
																				</div>
																		</div>
																			<div class="col-xl-4 col-md-6">
																					<div class="card bg-primary text-white mb-4">
																							<div class="card-body">Complaints</div>
																							<div class="card-footer d-flex align-items-center justify-content-between">
																									<a class="small text-white stretched-link" href="viewcomp.php">View Details</a>
																									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
																							</div>
																					</div>
																			</div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
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
