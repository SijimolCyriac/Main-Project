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
        <title>Customer</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

<style>
* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
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
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Project
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="viewproj.php">View Project</a>
                                    <a class="nav-link" href="viewest.php">View Estimation</a>
																		<a class="nav-link" href="checkproj.php">Check Project</a>
                                </nav>
                            </div>

														<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
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
																		<a class="nav-link" href="addpay.php">View Payment</a>
                                    <a class="nav-link" href="viewtran.php">View Transaction Log</a>
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
                        <h1 class="mt-5">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
													<div class="col-xl-4 col-md-6">
															<div class="card bg-warning text-white mb-4">
																	<div class="card-body">Contractor</div>
																	<div class="card-footer d-flex align-items-center justify-content-between">
																			<a class="small text-white stretched-link" href="searchcontra.php">Search Contractors</a>
																			<div class="small text-white"><i class="fas fa-angle-right"></i></div>
																	</div>
															</div>
													</div>
													<div class="col-xl-4 col-md-6">
															<div class="card bg-success text-white mb-4">
																	<div class="card-body">Weekly Progress Report</div>
																	<div class="card-footer d-flex align-items-center justify-content-between">
																			<a class="small text-white stretched-link" href="viewreport.php">View Details</a>
																			<div class="small text-white"><i class="fas fa-angle-right"></i></div>
																	</div>
															</div>
													</div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Complaints</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="viewcomp.php">Add Complaints</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                        </div><br><br>
												<h2 style="text-align:center">Packages</h2>
												<div class="columns">
												  <ul class="price">
												    <li class="header">Standard</li>
												    <li class="grey">&#8377; 1750 / SqFt</li>
												    <li class="grey"><a href="#" class="btn btn-success d-block px-2 py-3" data-toggle="modal" data-target="#myStd">Estimate Now</a></li>
												  </ul>
												</div>

												<div class="modal fade" id="myStd" role="dialog">
												<div class="modal-dialog">
												<!-- Modal content-->
												<div class="modal-content" style="width: 130%">
												<div class="modal-header"><h3><center>Construction Cost Estimator</center></h3>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>
												<div class="modal-body">
												<form oninput="x.value=parseInt(a.value)*1750">

												<div class="form-group">
												<div class="form-label-group">

												<label for="exampleInputEmail1">Area in Square Feet:</label>
												<input type="number" name="sqr" id="a" class="form-control" placeholder="Enter Square Feet" autofocus="autofocus" required>
											  <br><label for="exampleInputEmail1">Total Cost:</label>
											  <input class="form-control" name="x" for="a 1750" placeholder="Total Cost" autofocus="autofocus" required>
																							 </div>
																							 </div>
																							 </form>
																							 </div>
																							 </div>
																							 </div>
																							 </div>

												<div class="columns">
												  <ul class="price">
												    <li class="header" style="background-color:#4CAF50">Premium</li>
												    <li class="grey">&#8377; 1950 / SqFt</li>
												    <li class="grey"><a href="#" class="btn btn-success d-block px-2 py-3" data-toggle="modal" data-target="#myPre">Estimate Now</a></li>
												  </ul>
												</div>


																								<div class="modal fade" id="myPre" role="dialog">
																								<div class="modal-dialog">
																								<!-- Modal content-->
																								<div class="modal-content" style="width: 130%">
																								<div class="modal-header"><h3><center>Construction Cost Estimator</center></h3>
																								<button type="button" class="close" data-dismiss="modal">&times;</button>
																								</div>
																								<div class="modal-body">
																								<form oninput="x.value=parseInt(a.value)*1850">

																								<div class="form-group">
																								<div class="form-label-group">

																								<label for="exampleInputEmail1">Area in Square Feet:</label>
																								<input type="number" name="sqr" id="a" class="form-control" placeholder="Enter Square Feet" autofocus="autofocus" required>
																							  <br><label for="exampleInputEmail1">Total Cost:</label>
																							  <input class="form-control" name="x" for="a 1750" placeholder="Total Cost" autofocus="autofocus" required>
																																			 </div>
																																			 </div>
																																			 </form>
																																			 </div>
																																			 </div>
																																			 </div>
																																			 </div>

												<div class="columns">
												  <ul class="price">
												    <li class="header">Luxury</li>
												    <li class="grey">&#x20B9; 2150 / SqFt</li>
												    <li class="grey"><a href="#" class="btn btn-success d-block px-2 py-3" data-toggle="modal" data-target="#myLux">Estimate Now</a></li>
												  </ul>
												</div>

												<div class="modal fade" id="myLux" role="dialog">
												<div class="modal-dialog">
												<!-- Modal content-->
												<div class="modal-content" style="width: 130%">
												<div class="modal-header"><h3><center>Construction Cost Estimator</center></h3>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>
												<div class="modal-body">
												<form oninput="x.value=parseInt(a.value)*1950">

												<div class="form-group">
												<div class="form-label-group">

												<label for="exampleInputEmail1">Area in Square Feet:</label>
												<input type="number" name="sqr" id="a" class="form-control" placeholder="Enter Square Feet" autofocus="autofocus" required>
												<br><label for="exampleInputEmail1">Total Cost:</label>
												<input class="form-control" name="x" for="a 1750" placeholder="Total Cost" autofocus="autofocus" required>
																							 </div>
																							 </div>
																							 </form>
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
