<?php
session_start();
include("DbConne.php");
if(!empty($_SESSION['uname']))
{
	$temp=$_SESSION['uname'];
	if(isset($_REQUEST['x']))
	{
		$a=intval($_GET['x']);
		$sql="update tbl_contractor_reg set status='1' where login_id='$a'";
		$sqli="update tbl_login set status='1' where login_id='$a'";
		mysqli_query($con,$sql);
		mysqli_query($con,$sqli);
	}
	if(isset($_REQUEST['y']))
	{
		$a=intval($_GET['y']);
		$sql="update tbl_contractor_reg set status='0' where login_id='$a'";
		$sqli="update tbl_login set status='0' where login_id='$a'";
		mysqli_query($con,$sql);
		mysqli_query($con,$sqli);
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
        <title>Admin</title>
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
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-home"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Activities</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-users"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="viewcust.php">Manage Customer</a>
                                     <a class="nav-link" href="viewcontra.php">Manage Contractor</a>
																		 <a class="nav-link" href="viewlab.php">Manage Labour</a>
                                </nav>
                            </div>
														<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
                                Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">

                                      <a class="nav-link" href="viewcat.php">Manage Category</a>


                                </nav>
                            </div>
														<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
																			<div class="sb-nav-link-icon"><i class=" fas fa-tasks"></i></div>

																	Services
																		<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
																	</a>
																	<div class="collapse" id="collapseLayouts" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
																			<nav class="sb-sidenav-menu-nested nav">

																						<a class="nav-link" href="viewservice.php">Manage Services</a>


																			</nav>
																	</div>
														<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
																<div class="sb-nav-link-icon"><i class=" fa fa-map-marker"></i></div>
															Locations
															<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
														</a>
															<div class="collapse" id="collapsePages" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
																	<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
																			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
																		State
																					<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
																			</a>
																			<div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
																					<nav class="sb-sidenav-menu-nested nav">

																							<a class="nav-link" href="viewstate.php">Manage State</a>

																					</nav>
																			</div>
																			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
																					District
																					<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
																			</a>
																			<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
																					<nav class="sb-sidenav-menu-nested nav">

																							<a class="nav-link" href="viewdist.php">Manage District</a>

																					</nav>
																			</div>
																			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
																				Post Office
																					<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
																			</a>
																			<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
																					<nav class="sb-sidenav-menu-nested nav">

																							<a class="nav-link" href="viewpost.php">Manage Post Office</a>

																					</nav>
																			</div>
																			</nav>
																			</div>


                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        BuildTech Construction
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-4">Contractor</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contractor</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
															<div class="table-responsive">

                              <form action="Addreg2.php" method="POST">
                            	<table style="background-color:#ccd4e0" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php
                               $query = "select * from tbl_contractor_reg";
                               $results = mysqli_query($con,$query);
                             	echo "<h2><center>Contractor Details</center></h2>";
                               echo "<tr><th>Sl No</th><th>Contractor Name</th><th>Email Id</th><th>Phone No</th><th>License No</th><th>License Proof</th><th>Company Name</th><th>Specialization</th><th>District Name</th><th>State Name</th><th>Status</th></tr>";
                               while($fin=mysqli_fetch_array($results))
                               {
                               echo "<tr>";
                               echo "<td>".$fin['contractor_id']."</td><td>"
															         .$fin['contractor_name']."</td><td>"
                               		   .$fin['email_id']."</td><td>"
                                      .$fin['phone_no']."</td><td>"
                                    .$fin['licenseNo']."</td><td>";

																		echo "<a href='viewproof.php?x=" .$fin['login_id']." ' target='_blank'>proof details</a></td><td>"
                                 .$fin['companyName']."</td><td>"
																 .$fin['spec']."</td><td>"
																    .$fin['dist_name']."</td><td>"
                                .$fin['state_name']."</td><td>";
                             	 if($fin['status'] == 0 || $fin['status'] =='')
                             	 {

                             		 echo "<a href='viewcontra.php?x=" .$fin['login_id']." '>deactivated</a>";
                             		 }
                             		 else
                             		 	{
                             				echo "<a href='viewcontra.php?y=" .$fin['login_id']." '>activated</a>
                             				</td>";
                             			}
                             echo "</tr>";
                               }
                                ?>

                          </table>
                          </form>
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
</html>
<?php
}
else
{
	header("location: ../../login.php");
}
?>
