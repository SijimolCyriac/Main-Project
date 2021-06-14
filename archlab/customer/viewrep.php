<?php
session_start();
include("DbConne.php");
if(isset($_SESSION['uname']))
{
	$temp=$_SESSION['uname'];
	$login_id=$_SESSION['lid'];
	if(isset($_REQUEST['x']))
		{
			$u=intval($_GET['x']);}
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
	                        <h2 class="mt-4">Weekly Progress Report</h2>
	                        <ol class="breadcrumb mb-4">
	                            <li class="breadcrumb-item"><a href="viewreport.php">Dashboard</a></li>
	                            <li class="breadcrumb-item active">Weekly Report</li>
	                        </ol>

	               <div class="graph-visual tables-main" id="exampl">
									 		<h3><center><b>BuildTech Construction Management System</b></center></h3>
														<div class="card mb-4">
																<div class="card-body">

																	<div class="table-responsive">

																		<table class="table table-bordered" border='1' id="dataTable" width="100%" cellspacing="0">
																		<?php
																		include("DbConne.php");
																		echo "<h3><center>Weekly Progress Report Details</center></h3>";
																		echo "<h4><center>Contractor Details</center></h4>";
																		echo "<tr><th>Contractor Name</th><th>Phone No</th><th>Email Address</th><th>Company Name</th></tr>";
																		$sql="select * from tbl_daily_progress_report where report_id='$u'";
																		$res1 = mysqli_query($con,$sql);
																		$v=mysqli_fetch_array($res1);
																		$cid=$v['proj_id'];

																		$sq="select * from tbl_contractor_reg c,tbl_project d where c.contractor_id=d.contractor_id and d.proj_id='$cid'";
																		$res1 = mysqli_query($con,$sq);
																		if(mysqli_num_rows($res1)>0)
																		{
																		$v=mysqli_fetch_array($res1);
																		echo "<tr>";
																		echo "<td>".$v['contractor_name']."</td><td>"
																		.$v['phone_no']."</td><td>"
																		.$v['email_id']."</td><td>"
																		.$v['companyName']."</td>";
																		echo "</tr>";
																		}
																		?>
																		</table>

																		<table class="table table-bordered" border='1' id="dataTable" width="100%" cellspacing="0">
																		<?php
																		include("DbConne.php");
																		echo "<h4><center>Report Details</center></h4>";
																		echo "<tr><th>Title</th><th>Work Details</th><th>From Date</th><th>To Date</th></tr>";

																		$sql2="select * from tbl_daily_progress_report d,tbl_project p where d.report_id='$u' and p.proj_id=d.proj_id";
																		$query3=mysqli_query($con,$sql2);
																		if(mysqli_num_rows($query3)>0)
																		{
																		$v=mysqli_fetch_array($query3);
																		echo "<tr>";
																		echo "<td>".$v['yur_service']."</td><td>"
																		.$v['description']."</td><td>"
																		.$v['fdate']."</td><td>"
																		.$v['tdate']."</td>";
																		echo "</tr>";
																	  }
																		?>
																		</table>
                                <br>
																<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
													      <tr><th>Activity Details</th></tr>
																<td><center><img src="../contractor/details/<?php echo $v['activityDetails']; ?>"></center></td>
													      </table>

								</div></div>
								</div>
               </div>
							 <p style="margin-top:1%"  align="center">

								<a style="color:white;"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" OnClick="CallPrint(this.value)"><i
																			 class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
						 	</p>


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
							<script>
						function CallPrint(strid) {
						var prtContent = document.getElementById("exampl");
						var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
						WinPrint.document.write(prtContent.innerHTML);
						WinPrint.document.close();
						WinPrint.focus();
						WinPrint.print();
						WinPrint.close();
						}
						</script>
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
