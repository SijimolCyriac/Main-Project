<?php
session_start();
include("DbConne.php");

if(isset($_SESSION['uname']))
{
$temp=$_SESSION['uname'];
$login_id=$_SESSION['lid'];
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

				<script>
				function getdistrict(val) {
				$.ajax({
				type: "POST",
				url: "get_district.php",
				data:'state_id='+val,
				success: function(data){
					$("#district-list").html(data);
				}
				});
				}

				</script>

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
																<div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
															Complaints
																<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
														</a>
														<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
																<nav class="sb-sidenav-menu-nested nav">
																		<a class="nav-link" href="viewcomp.php">View Complaints</a>
																</nav>
														</div>


                    </div>

                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Report Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contractor</li>
                        </ol>


												<div class="card mb-4">
														<div class="card-body">
															<div class="table-responsive">
                            <h2><center>Report Details</center></h2>
															<form action="viewreport.php" method="POST">
																<?php
																include("DbConne.php");
																$sql="select * from tbl_contractor_reg where login_id='$login_id'";
		                            $query1=mysqli_query($con,$sql);
		                            $result=mysqli_fetch_array($query1);

		                            $contractor_name=$result['contractor_name'];
																?>
															<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <div class="input-group form-group">
																<div class="input-group-prepend">
																<span class="input-group-text"><i class="fa fa-list"></i></span>
																</div>


																<select name="cname" class="form-control" id="nam" autofocus="autofocus" required>
																	<option value="">Select Labour Name</option>
																	<?php $query =mysqli_query($con,"select * from tbl_labours_reg c,tbl_site_loc p where p.contractor_name='$contractor_name' and p.labour_name=c.labour_name and p.status='1'");
																	while($row=mysqli_fetch_array($query))
																	{ ?>
																	<option value="<?php echo $row['labour_name'];?>"><?php echo $row['labour_name'];?></option>
																	<?php
																	}
																	?>
																 </select>

												<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-map-marker"></i></span>
												</div>

												<input type="date" name="fdate" class="form-control" placeholder="Enter Today's Date" autofocus="autofocus" required>
</div>


												<div class="card-footer">
						            <div class="d-flex justify-content-center links">
						            <center><input type="submit" name="search" value="Search" class="btn btn-primary" >
						            <input type="reset" value="Cancel" class="btn btn-primary"></center>
						            </div>
						            </div>
											</table>
											</form>
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
