<?php
session_start();
include("DbConne.php");
if(isset($_SESSION['uname']))
{
	$temp=$_SESSION['uname'];
	$login_id=$_SESSION['lid'];
	if(isset($_REQUEST['x']))
	{
		$a=intval($_GET['x']);
		$sql="update tbl_daily_progress_report set dstatus='0' where report_id='$a'";
		mysqli_query($con,$sql);
	}
	if(isset($_REQUEST['y']))
	{
		$a=intval($_GET['y']);
		$sql="update tbl_daily_progress_report set dstatus='1' where report_id='$a'";
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
	                        <h1 class="mt-4">Weekly Progress Report</h1>
	                        <ol class="breadcrumb mb-4">
	                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
	                            <li class="breadcrumb-item active">Weekly Report</li>
	                        </ol>

														    <div class="card mb-4">
																<div class="card-body">
																<div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<?php
								include("DbConne.php");
								$sql="select * from tbl_customer_reg where login_id='$login_id'";
								$query1=mysqli_query($con,$sql);
								$result=mysqli_fetch_array($query1);
							    $cust_id=$result['cust_id'];

								$sql2="select * from tbl_daily_progress_report d,tbl_project p where p.proj_id=d.proj_id and p.cust_id='$cust_id'";
								$query3=mysqli_query($con,$sql2);
								if(mysqli_num_rows($query3)>0)
								{
								    echo "<tr><th>Uploaded Date</th><th>Action</th><th>Status</th></tr>";
								while($v=mysqli_fetch_array($query3))
								{
								echo "<tr>";
								echo "<td>".$v['tdate']."</td><td>";

                echo "<a href='viewrep.php?x=" .$v['report_id']." ' class='btn btn-sm btn-info'>View</a></td><td>";
								if($v['dstatus'] == 1 || $v['dstatus'] =='')
								{
								echo "<a href='viewreport.php?x=" .$v['report_id']." '>Verified</a>";
								}
								else
								{
								echo "<a href='viewreport.php?y=" .$v['report_id']." '>Not Verified</a>
								</td>";
								}
								echo "</tr>";
							}

								}
else
{

	?>
<script>alert("No Report Found");
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
