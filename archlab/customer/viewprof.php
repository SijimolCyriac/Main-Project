<?php
session_start();
include("DbConne.php");

if(isset($_SESSION['uname']))
{
$temp=$_SESSION['uname'];
$dist=$_SESSION['dist'];
$statee=$_SESSION['state'];
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
                        <h1 class="mt-4">Contractor Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="viewcontra1.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contractor</li>
                        </ol>


												<div class="card mb-4">
														<div class="card-body">
															<div class="table-responsive">

															<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

																				 <form action="." method="POST">
								 													<?php
								 													include("DbConne.php");
																					if(isset($_REQUEST['x']))
																						{
																					$a=intval($_GET['x']);
																					$_SESSION['siji']=$a;
								 													$sql="select * from tbl_contractor_reg where contractor_id='$a'";
								 													$c=mysqli_query($con,$sql);
								 													$result=mysqli_fetch_array($c);

																					$abc="select login_id from tbl_login where username='$temp'";
																					$query=mysqli_query($con,$abc);
																					$res=mysqli_fetch_array($query);
																					$b=$res['login_id'];


																				  }
								 													?>
																					<img src="../contractor/photo/<?php echo $result['photo']; ?>"
 																          align="left" width="300" height="400">

																					<div style="margin-top:15%;  color:green;">
                                          <center>
								                          <span><h5>Name : <?php echo $result['contractor_name'];?></h5></span>
                                          <span><h5>Email id : <?php echo $result['email_id']; ?></h5></span>
                                          <span><h5>Phone Number : <?php echo $result['phone_no']; ?></h5></span>
																					<span><h5>Company Name : <?php echo $result['companyName']; ?></h5></span>
																						<span><h5>Specialization : <?php echo $result['spec']; ?></h5></span>
																				  <span><h5>Year of Experience : <?php echo $result['yoexp']; ?></h5></span><br>
																				  <a href="#" class="btn btn-sm btn-info" data-toggle="modal"
		 																		 data-target="#UploadProject">Upload Project</a></center>
																			 </div></form>
</table>
																				<div id="UploadProject" class="modal fade" role="dialog">
		 																	 <div class="modal-dialog">

		 																	 	<!-- Modal content-->
		 																	 	<div class="modal-content" style="width: 130%">
		 																	 		<div class="modal-header"><h3>Add New Project</h3>
		 																	 			<button type="button" class="close" data-dismiss="modal">&times;</button>
		 																	 		</div>
		 																	 		<div class="modal-body">


		 																	 						<form method="POST" action="Addpro.php" enctype="multipart/form-data">

		 																	 							<div class="form-group">
		 																	 								<div class="form-label-group">
		 																	 							<label class="custom">Your Service</label>
																										<input type="text" class="form-control" name="services" id="service1"  value="<?php echo $result['spec']; ?>" required>

		 																	 								<br><label class="custom">Site Address</label>
		 																	 							<textarea type="text" name="add" class="form-control" id="address1" onblur="validate6()" placeholder="Enter Site Address"  autofocus="autofocus" required></textarea>
		 																	 									<br><label class="custom">Upload Project Plan</label>
		 																	 									<input type="file" name="proj" class="form-control" placeholder="Upload Project Plan" id="file1" onchange="valproof()" autofocus="autofocus" required>

                                                                	<br><label class="custom">Package</label>
																																	<select name="pack" id="pack1" class="form-control" required>
			 																	 														<option value="">Select Package</option>
			 																	 														<option value="Standard Package">Standard Package</option>
			 																	 														<option value="Premium Package">Premium Package</option>
			 																	 														<option value="Luxury Package">Luxury Package</option>

			 																	 													</select>
																																<br><label class="custom">No of Floors</label>
		 																	 													<select name="rooms" id="room1" class="form-control" required>
		 																	 														<option value="">Select No of Floors</option>
																																	<option value="0">0</option>
																																	<option value="1">1</option>
																																	<option value="2">2</option>
																																	<option value="3">3</option>
		 																	 														<option value="4">4</option>
		 																	 														<option value="5">5</option>
		 																	 														<option value="6">6</option>
		 																	 														<option value="7">7</option>
		 																	 														<option value="8">8</option>
		 																	 													</select>
		 																	 															<br><label class="custom">Area in Square Feet</label>
		 																	 															<select name="feet" id="feet1" class="form-control" required>
		 																	 																<option value="">Select Square Feet</option>
		 																	 																<option value="600">600 sq ft</option>
		 																	 																<option value="800">800 sq ft</option>
		 																	 																<option value="1000">1000 sq ft</option>
		 																	 																<option value="1300">1300 sq ft</option>
		 																	 																<option value="1500">1500 sq ft</option>
		 																	 																<option value="1800">1800 sq ft</option>
		 																	 																<option value="2500">2500 sq ft</option>
		 																	 																<option value="3000">3000 sq ft</option>

		 																	 															</select>

		 																	 							</div>
		 																	 							</div>
																										<div class="modal-footer">
																											<button type="button" class="btn btn-default" data-dismiss="modal">
																												Close
																												<span class="glyphicon glyphicon-remove-sign"></span>
																											</button>
																											<input type="submit" name="submit" value="Upload" class="btn btn-success">
																										</div>
																										</form>

																										</div>
																										</div>
																										</div>
																										</div>



																<section class="ftco-section ftco-portfolio">
														    	<div class="row justify-content-center no-gutters">
														        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
														        	<span class="subheading">Projects</span>
														          <h2 class="mb-2">Our Unique Latest Projects</h2>
														        </div>
														      </div>

														    	<div class="container">
														    		<div class="row no-gutters">
															  			<div class="col-md-12 portfolio-wrap">
															  				<div class="row no-gutters align-items-center">
															  					<div class="col-md-5 img js-fullheight">
																						<img src=
																				 "images/a1.jpg"
																									alt="GeeksforGeeks logo"
																									align="left" width="400" height="500">

															  					</div>
															  					<div class="col-md-7">
															  						<div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
															  							<div class="px-4 px-lg-4">
															  								<div class="desc">
																  								<div class="top">
																	  								<span class="subheading">Exterior {12/07/2020}</span>
																		  							<h2 class="mb-4"><a href="#work.html">Geometric Building</a></h2>
																	  							</div>
																	  							<div class="absolute">
																		  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
																		  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
																	  							</div>
																  							</div>
															  							</div>
															  						</div>
															  					</div>
															  				</div>
															  			</div>

															  			<div class="col-md-12 portfolio-wrap">
															  				<div class="row no-gutters align-items-center">
															  					<div class="col-md-5 order-md-last img js-fullheight" >
																						<img src="images/a2.jpg"
																										 alt="GeeksforGeeks logo"
																										 align="left" width="500" height="600">
															  					</div>
															  					<div class="col-md-7">
															  						<div class="text pt-5 pr-md-5 ftco-animate">
															  							<div class="px-4 px-lg-4">
															  								<div class="desc text-md-right">
																  								<div class="top">
																	  								<span class="subheading">Furniture {12/07/2020}</span>
																		  							<h2 class="mb-4"><a href="work.html">Twin Office</a></h2>
																	  							</div>
																	  							<div class="absolute">
																		  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
																		  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
																	  							</div>
																  							</div>
															  							</div>
															  						</div>
															  					</div>
															  				</div>
															  			</div>

															  			<div class="col-md-12 portfolio-wrap">
															  				<div class="row no-gutters align-items-center">
															  					<div class="col-md-5 img js-fullheight">
																						<img src="images/a3.jpg"
																										 alt="GeeksforGeeks logo"
																										 align="left" width="400" height="500">
															  					</div>
															  					<div class="col-md-7">
															  						<div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
															  							<div class="px-4 px-lg-4">
															  								<div class="desc">
																  								<div class="top">
																	  								<span class="subheading">Building {12/07/2020}</span>
																		  							<h2 class="mb-4"><a href="#work.html">Cultural Complex Centre</a></h2>
																	  							</div>
																	  							<div class="absolute">
																		  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
																		  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
																	  							</div>
																  							</div>
															  							</div>
															  						</div>
															  					</div>
															  				</div>
															  			</div>

															  			<div class="col-md-12 portfolio-wrap">
															  				<div class="row no-gutters align-items-center">
															  					<div class="col-md-5 order-md-last img js-fullheight">
																						<img src="images/a4.jpg"
																										 alt="GeeksforGeeks logo"
																										 align="left" width="500" height="600">
															  					</div>
															  					<div class="col-md-7">
															  						<div class="text pt-5 pr-md-5 ftco-animate">
															  							<div class="px-4 px-lg-4">
															  								<div class="desc text-md-right">
																  								<div class="top">
																	  								<span class="subheading">Furniture {12/07/2020}</span>
																		  							<h2 class="mb-4"><a href="work.html">Twin Office</a></h2>
																	  							</div>
																	  							<div class="absolute">
																		  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
																		  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
																	  							</div>
																  							</div>
															  							</div>
															  						</div>
															  					</div>
															  				</div>
															  			</div>

															  			<div class="col-md-12 portfolio-wrap">
															  				<div class="row no-gutters align-items-center">
															  					<div class="col-md-5 img js-fullheight">
																						<img src="images/a5.jpg"
																										 alt="GeeksforGeeks logo"
																										 align="left" width="400" height="500">
															  					</div>
															  					<div class="col-md-7">
															  						<div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
															  							<div class="px-4 px-lg-4">
															  								<div class="desc">
																  								<div class="top">
																	  								<span class="subheading">Building {12/07/2020}</span>
																		  							<h2 class="mb-4"><a href="work.html">Cultural Complex Centre</a></h2>
																	  							</div>
																	  							<div class="absolute">
																		  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
																		  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
																	  							</div>
																  							</div>
															  							</div>
															  						</div>
															  					</div>
															  				</div>
															  			</div>
															  		</div>
														    	</div>
														    </section>




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




<script>
function validate6()
{
var name=document.getElementById("address1").value;
var letters=/^[a-zA-Z0-9,\s]*$/;
if(!name.match(letters))
{
alert("Please Enter Address Correctly");
document.getElementById("address1").value="";
}
}
function valproof()
{
var proof = document.getElementById("file1").value;
var pat=/^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.pdf)$/;
if(!proof.match(pat))
{
alert("Enter Valid File Type Eg: .jpg/.jpeg/.pdf");
document.getElementById("file1").value="";
}
}

</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
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
