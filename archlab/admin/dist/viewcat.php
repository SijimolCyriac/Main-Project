<?php
session_start();
include("DbConne.php");
if(!empty($_SESSION['uname']))
{
	$temp=$_SESSION['uname'];
	if(isset($_REQUEST['x']))
	{
		$a=intval($_GET['x']);
		$sql="update tbl_labour_category set status='1' where category_id='$a'";
		mysqli_query($con,$sql);

	}
	if(isset($_REQUEST['y']))
	{
		$a=intval($_GET['y']);
		$sql="update tbl_labour_category set status='0' where category_id='$a'";
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
        <title>Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
				<style>
				            table, th, td {

				                text-align:center;


				            }
.custom{float:left !important;}

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
                        <h2 class="mt-4">Category <a href="#" data-toggle="modal" data-target="#AddLocation"
													class="btn btn-sm btn-info"> Add New</a></h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
															<div class="table-responsive">

                              <form action="#" method="POST">
                            	<table class="table table-bordered" id="dataTable">
                             <?php
														$con=mysqli_connect("localhost","root","","constdb") or die("COULDN'T CONNECT");
                            $query = "select * from tbl_labour_category";
                            $results = mysqli_query($con,$query);
                            echo "<tr><th>Sl No</th><th>Category Name</th><th>Action</th><th>Status</th></tr>";
                            while($fin=mysqli_fetch_array($results))
                            {
                            echo "<tr>";
                            echo "<td>".$fin['category_id']."</td><td>"
                            	       .$fin['category_name']."</td><td>";
																		 echo '<a href="#" class="btn btn-sm btn-info" data-toggle="modal"
																		 data-target="#UpdateLocation'.$fin['category_id'].'">edit</a></td><td>';
			                               ?>
			                               <div id="UpdateLocation<?php echo $fin['category_id']; ?>" class="modal fade" role="dialog">
			              <div class="modal-dialog">

			                <!-- Modal content-->
			                <div class="modal-content" style="width: 130%">
			                  <div class="modal-header"><h3>Modify Category</h3>
			                    <button type="button" class="close" data-dismiss="modal">&times;</button>
			                  </div>
			                  <div class="modal-body">
			                          <form method="POST" action="#">
			                            <div class="form-group">
			                            <div class="form-label-group">
			                            <input type="hidden" name="id" value="<?php echo $fin['category_id']; ?>">
																	<label for="exampleInputEmail">Category Name</label>
			                            <input type="text" id="c" class="form-control"  placeholder="Enter Category Name" name="address" onblur="validate()" autofocus="autofocus" required value="<?php echo $fin['category_name']; ?>">
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
										$r="select * from tbl_labour_category where category_name='$address'";
										$result=mysqli_query($con,$r);
										$num=mysqli_num_rows($result);
										if($num==1)
										{
											?>
										<script>alert("Category Name Already Exists");
										location.href="viewcat.php";
										 exit;
										</script>
										<?php
										}
										else
{
									$query = "update tbl_labour_category set category_name='$address' where category_id='$id'";
										mysqli_query($con,$query)or die (mysqli_error($con));
										?>
										<script type="text/javascript">
									alert("Category Has Been Updated Successfully!.");
									window.location = "viewcat.php";
									</script>
									<?php
								}}

																		 if($fin['status'] == 0 || $fin['status'] =='')
			                             	 {
			                             		 echo "<a href='viewcat.php?x=" .$fin['category_id']." '>inactive</a>";
			                             	 }
			                             		 else
			                             	 {
			                             				echo "<a href='viewcat.php?y=" .$fin['category_id']." '>active</a>
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
														<div class="modal-header"><h3>Add New Category</h3>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body">


																		<form method="POST" action="addcat1.php">
																			<div class="form-group">
																			<label class="custom">Category Name</label>

																			<div class="form-label-group">
																			<input type="text" id="cc" class="form-control" placeholder="Enter Cateogry Name" name="address" autofocus="autofocus" onblur="validate1()" required>
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
			  var name=document.getElementById("c").value;
			  var letters=/^[a-zA-Z]+$/;
			  if(!name.match(letters))
			  {
					document.getElementById("c").value="";
			  alert("Please Enter Valid Category Name");

			  }
			  }
				</script>
				<script>
				function validate1()
			  {
			  var name=document.getElementById("cc").value;

			  var letters=/^[a-zA-Z]+$/;
			  if(!name.match(letters))
			  {
					document.getElementById("cc").value="";
			  alert("Please Enter Valid Category Name");

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
