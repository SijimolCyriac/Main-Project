<?php
session_start();
include("DbConne.php");
if(isset($_SESSION['uname']))
{
$temp=$_SESSION['uname'];
if(isset($_GET['proj_id']))
	{
		$u=$_GET['proj_id'];
			$_SESSION['proj_id']=$u;
	  $y=$_GET['con_name'];
		$_SESSION['con_name']=$y;
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

				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <h2 class="mt-4">Payment Details</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="addpay.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Customer</li>
                        </ol>
												<div class="card mb-4">
														<div class="card-body">
													<form method="POST" action="Payment1.php">
													<div class="form-group">
													<div class="form-label-group">

													<label for="exampleInputEmail1">Contractor Name:</label>
													<input type="text" class="form-control" id="name1" name="name" disabled value="<?php echo $_SESSION['con_name']; ?>"
													placeholder="Contractor Name"  autofocus="autofocus" required>
													<br><label for="exampleInputEmail1">Amount:</label>
													<input type="number" class="form-control" id="amt1" name="amt"
													placeholder="Enter the amount"  autofocus="autofocus" onblur="validate2()" required>

																								</div>
																								</div>

																								<div class="modal-footer">

																									 <input type="submit" name="submit" value="Pay with Razorpay" class="btn btn-success">
																								 </div>
																								</form>
																							</div></div>



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
function validate2()
{
var phone = document.getElementById("amt1").value;
var ph=/^\d+/;
 if(!phone.match(ph))
{
alert("Please Only Enter Numeric Characters As Amount! (Allowed  input:0-9)");
document.getElementById("amt1").value="";
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
