<?php
session_start();
include("DbConne.php");
if(!empty($_SESSION['uname']))
{
	$temp=$_SESSION['uname'];
	if(isset($_REQUEST['x']))
	{
		$a=intval($_GET['x']);
		$sql="update tbl_state set status='1' where sid='$a'";
		mysqli_query($con,$sql);

	}
	if(isset($_REQUEST['y']))
	{
		$a=intval($_GET['y']);
		$sql="update tbl_state set status='0' where sid='$a'";
		mysqli_query($con,$sql);

	}
	?>
<!DOCTYPE html>
<html lang="en">
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


				            }


				        </style>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">BuildTech Construction</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">

                    <div class="input-group-append">

                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
							<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php
									 echo $temp;
									 ?><i class="fas fa-user-circle fa-fw"></i></a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
										<a class="dropdown-item" href="index.php" data-toggle="modal"
										data-target="#UpdateProfile"><i class="fas fa-user-circle"></i> Profile</a>
										<a class="dropdown-item" href="changepasss.php"><i class="fa fa-lock"></i> Change Password</a>
											<a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
									</div>
							</li>
            </ul>
        </nav>
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
                        <h2 class="mt-4">View State <a href="#" data-toggle="modal" data-target="#AddLocation"
													class="btn btn-sm btn-info"> Add New</a></h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">State</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
															<div class="table-responsive">

                              <form action="#" method="POST">
                            	<table class="table table-bordered" id="dataTable" width="50%">
                             <?php
														$con=mysqli_connect("localhost","root","","constdb") or die("COULDN'T CONNECT");
                            $query = "select * from tbl_state";
                            $results = mysqli_query($con,$query);

                            echo "<tr><th>Sl No</th><th>State Name</th><th>Action</th><th>Status</th></tr>";
                            while($fin=mysqli_fetch_array($results))
                            {
                            echo "<tr>";
                            echo "<td>".$fin['sid']."</td><td>"
                            	       .$fin['state_name']."</td><td>";
																		 echo '<a href="#" class="btn btn-sm btn-info" data-toggle="modal"
																		 data-target="#UpdateLocation'.$fin['sid'].'">edit</a></td><td>';
			                               ?>
			                               <div id="UpdateLocation<?php echo $fin['sid']; ?>" class="modal fade" role="dialog">
			              <div class="modal-dialog">

			                <!-- Modal content-->
			                <div class="modal-content" style="width: 130%">
			                  <div class="modal-header"><h3>Modify State</h3>
			                    <button type="button" class="close" data-dismiss="modal">&times;</button>
			                  </div>
			                  <div class="modal-body">
			                          <form method="POST" action="#">
			                            <div class="form-group">
			                            <div class="form-label-group">
			                            <input type="hidden" name="id" value="<?php echo $fin['sid']; ?>">
			                            <input type="text" id="am" class="form-control"  name="address" autofocus="autofocus" onblur="validate()" required value="<?php echo $fin['state_name']; ?>">
			                            </div>
			                            </div>
			                      <div class="modal-footer">
			                     <button type="button" class="btn btn-default" data-dismiss="modal">
			                      Close
			                      <span class="glyphicon glyphicon-remove-sign"></span>
			                    </button>
			                    <input type="submit" name="update" value="Update" class="btn btn-success">
			                  </div>
			                  </form>
		                   	</div>
			                      </div>
			              </div>
			            </div>
									<?php
									if(isset($_POST['update'])){
									  $address = $_POST['address'];
									  $id = $_POST['id'];
										$r="select * from tbl_state where state_name='$address'";
										$result=mysqli_query($con,$r);
										$num=mysqli_num_rows($result);
										if($num==1)
										{
											?>
										<script>alert("State Name Already Exists");
										location.href="viewstate.php";
										 exit;
										</script>
										<?php
										}
										else
									{
									$query = "update tbl_state set state_name='$address' where sid='$id'";
										mysqli_query($con,$query)or die (mysqli_error($con));
										?>
										<script type="text/javascript">
									alert("State Has Been Updated Successfully!.");
									window.location = "viewstate.php";
									</script>
									<?php
								}}
																		 if($fin['status'] == 0 || $fin['status'] =='')
			                             	 {
			                             		 echo "<a href='viewstate.php?x=" .$fin['sid']." '>inactive</a>";
			                             		 }
			                             		 else
			                             		 	{
			                             				echo "<a href='viewstate.php?y=" .$fin['sid']." '>active</a>
			                             				</td>";
			                             			}
                          echo "</tr>";
                            }
                             ?>
                          </table>
                          </form>
                            </div>
                        </div>
												<div id="AddLocation" class="modal fade" role="dialog">
												<div class="modal-dialog">

													<!-- Modal content-->
													<div class="modal-content" style="width: 130%">
														<div class="modal-header"><h3>Add New State</h3>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body">


																		<form method="POST" action="addsta.php">
																			<div class="form-group">
																			<div class="form-label-group">
																			<input type="text" id="am1" class="form-control" placeholder="State Name" name="address1" onblur="validate1()" autofocus="autofocus" required>
																			</div>
																			</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">
																Close
																<span class="glyphicon glyphicon-remove-sign"></span>
															</button>
															<input type="submit" name="submit" value="Save" class="btn btn-success">
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
				var name=document.getElementById("am").value;

				var letters=/^[a-zA-Z]*$/;
				if(!name.match(letters))
				{
					document.getElementById("am").value="";
				alert("Please Enter Valid State Name");

				}
				}
				function validate1()
				{
				var name=document.getElementById("am1").value;

				var letters=/^[a-zA-Z]*$/;
				if(!name.match(letters))
				{
					document.getElementById("am1").value="";
				alert("Please Enter Valid State Name");

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
		header("location: ../../login.php");
}
?>
