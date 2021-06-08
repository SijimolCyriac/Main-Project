<?php
session_start();
include("DbConne.php");
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
	                        <h1 class="mt-4">Project</h1>
	                        <ol class="breadcrumb mb-4">
	                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
	                            <li class="breadcrumb-item active">Customer</li>
	                        </ol>

														<div class="card mb-4">
																<div class="card-body">
																	<div class="table-responsive">

																	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<?php
								include("DbConne.php");

								$query = "select l.login_id,h.cust_id from tbl_login l,tbl_customer_reg h  where l.username='$temp' and l.login_id=h.login_id";
								$results = mysqli_query($con,$query);
								$x=mysqli_fetch_array($results);
								$d=$x['cust_id'];

								$sql="select p.proj_id, p.yur_service,p.site_address,p.proj_plan,p.status,c.contractor_name,c.phone_no,c.email_id,c.contractor_id,p.cust_id from tbl_project p,tbl_contractor_reg c
								where p.cust_id='$d' and p.contractor_id=c.contractor_id";

								$res1 = mysqli_query($con,$sql);
								if(mysqli_num_rows($res1)>0)
								{

								echo "<h2><center>Project Details</center></h2>";
								echo "<tr><th>Project Name</th><th>Site Address</th><th>Project Plan</th>
								<th>Contractor Name</th><th>Phone No</th><th>Email Address</th><th>Status</th></tr>";

while($row=mysqli_fetch_array($res1))
{
								if($row['status']==1)
								{
									$f='Approved';
								}
								else {
									$f='Waiting For Approval';
								}
							echo "<tr>";
							echo "<td>".$row['yur_service']."</td><td>"
							.$row['site_address']."</td><td>";
							echo "<a href='proj.php?x=" .$row['proj_id']." ' target='_blank'>view project</a></td><td>"

							.$row['contractor_name']."</td><td>"
							.$row['phone_no']."</td><td>"
									 .$row['email_id']."</td><td>"

									 .$f."</td>";
							echo "</tr>";
						}}


								else {
									?>
									<script>alert("No Project Uploaded");
									location.href="index.php";
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
							</html>
							<?php
							}
							else
							{
								header("location: ../login.php");
							}
							?>
