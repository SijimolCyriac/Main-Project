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
													background-color:;
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
	                        <h2 class="mt-4">Complaint  <a href="#" data-toggle="modal" data-target="#AddComp"
														class="btn btn-sm btn-info"> Add New</a></h2>
	                        <ol class="breadcrumb mb-4">
	                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
	                            <li class="breadcrumb-item active">Complaint Details</li>
	                        </ol>

														<div class="card mb-4">
																<div class="card-body">
																	<div class="table-responsive">
                                  <form action="#" method="POST">
																	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
																		<?php
																		include("DbConne.php");
																		$sql="select a.login_id,b.login_id from tbl_login a,tbl_complaint b where
																		a.login_id=b.login_id and a.username='$temp'";
																		$query1=mysqli_query($con,$sql);
																		if(mysqli_num_rows($query1)>0)
																		{
																		$result=mysqli_fetch_array($query1);
																		$h=$result['login_id'];
																		$query = "select * from tbl_complaint
																	  where  login_id='$h'";
																		$results = mysqli_query($con,$query);

																		echo "<h2><center>Complaint Details</center></h2>";
																		echo "<tr><th>Complaint</th><th>Status</th></tr>";
																		while($v=mysqli_fetch_array($results))
																		{
																			if($v['status']==1)
																			{
																				$f='Approved';
																			}
																			else {
																				$f='Not Approved';
																			}
																		echo "<tr>";
																		echo "<td>"
																		.$v['complaint']."</td><td>"
																		.$f."</td>";
																		echo "</tr>";
																		}}

																		?>
								</table></form>


								</div></div>
								</div>

								<div id="AddComp" class="modal fade" role="dialog">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content" style="width: 130%">
										<div class="modal-header"><h3>Add New Complaint</h3>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<div class="modal-body">


														<form method="POST" action="addcomp.php">
															<?php
															include("DbConne.php");
															$query = "select l.login_id,h.cust_id from tbl_login l,tbl_customer_reg h  where l.username='$temp' and
															l.login_id=h.login_id";
															$results = mysqli_query($con,$query);
															$x=mysqli_fetch_array($results);
															$d=$x['cust_id'];


															?>
															<div class="form-group">
															<label class="custom">Contractor Name</label>
															<div class="form-label-group">
																<select  name="name" id="name1" class="form-control" autofocus="autofocus" required>
																	<option value="">Select Contractor Name</option>
																	<?php
																	include("DbConne.php");
																	$ss="select * from tbl_contractor_reg c,tbl_project p where p.cust_id='$d' and p.contractor_id=c.contractor_id";
																	$query1 =mysqli_query($con,$ss);
																	if(mysqli_num_rows($query1))
																	{

																	while($row=mysqli_fetch_array($query1))
																	{ ?>
																	<option value="<?php echo $row['contractor_id'];?>"><?php echo $row['contractor_name'];?></option>
																	<?php
																}}
																	?>
																 </select>
															</div></div>
															<div class="form-group">
															<label class="custom">Complaint</label>
															<div class="form-label-group">
															<textarea  cols="30" rows="7" id="comp1" name="comp" class="form-control" placeholder="Complaint" onblur="validate2()" autofocus="autofocus" required></textarea>

															</div>
															</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">
												Close
												<span class="glyphicon glyphicon-remove-sign"></span>
											</button>
											<input type="submit" name="submit" value="Send Complaint" class="btn btn-success">
										</div>
										</form>

								</div>
								</div>
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
							<script>
							function validate()
							{
							var name=document.getElementById("name1").value;
							var letters=/^[a-zA-Z\s]*$/;
							if(!name.match(letters))
							{
							alert("Please Enter Name Corrrectly");
							document.getElementById("name1").value="";
							}
							}
							function validate1()
							{
							var email = document.getElementById("email1").value;
							var pat=/^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$/;
							 if(!email.match(pat))
							{
							alert("Please Enter Valid Email");
							document.getElementById("email1").value="";
							}
							}
							function validate2()
							{
							var name=document.getElementById("comp1").value;
							var letters=/^[a-zA-Z\s]*$/;
							if(!name.match(letters))
							{
							alert("Please Enter Complaint Correctly");
							document.getElementById("comp1").value="";
							}
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
