<?php
session_start();
include("DbConne.php");
if(isset($_REQUEST['x']))
{
 $a=$_GET['x'];
 $sql="update tbl_est  set status='0' where est_id='$a'";
mysqli_query($con,$sql);
}
if(isset($_REQUEST['y']))
{
	$a=$_GET['y'];

	$sql="update tbl_est set status='1' where est_id='$a'";
	mysqli_query($con,$sql);
}
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
                        <h2 class="mt-4">Estimation</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Customer</li>
                        </ol>


												<div class="card mb-4">
														<div class="card-body">
															<div class="table-responsive">

																<form action="#" method="POST">
																<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
																	<?php
																	include("DbConne.php");
																	$abc="select login_id from tbl_login where username='$temp'";
																	$query=mysqli_query($con,$abc);
																	$result=mysqli_fetch_array($query);

																	$c=$result['login_id'];
																	$js="select cust_name from tbl_customer_reg where login_id='$c'";
																	$que=mysqli_query($con,$js);
																	$res=mysqli_fetch_array($que);
																	$d=$res['cust_name'];

																	$sql="select * from tbl_project p,tbl_est e
																	where  p.proj_id=e.proj_id and e.cust_name='$d'";
																	$res1 = mysqli_query($con,$sql);


																	if(mysqli_num_rows($res1)>0)
 								 								{
                                  echo "<h2><center>Estimation Details</center></h2>";
 																	echo "<tr><th>Project Name</th><th>Contractor Name</th><th>Total Cost</th><th>Concrete</th><th>Brick</th><th>Door</th><th>Electrical</th><th>Floor</th><th>Painting</th><th>Status</th></tr>";

																	while($v=mysqli_fetch_array($res1))
																	{

																	echo "<tr>";
																	echo "<td>"
																	.$v['yur_service']."</td><td>"
																	.$v['contractor_name']."</td><td>"
																	.$v['total_cost']."</td><td>"
																	.$v['concrete']."</td><td>"
																	.$v['brick']."</td><td>"
																	.$v['door']."</td><td>"
																	.$v['electrical']."</td><td>"
                                  .$v['floor']."</td><td>"
                                  .$v['paint']."</td><td>";
																	if($v['status'] == 1 || $v['status'] =='')
																	{
																	echo "<a href='viewest.php?x=" .$v['est_id']." '>Approved</a>";
																	}
																	else
																	{
																	echo "<a href='viewest.php?y=" .$v['est_id']." '>Waiting for Approval</a>
																	</td>";
																	}
																	echo "</tr>";
																}}
																else
																{
															
																	?>
																<script>alert("No Estimation Found");
																location.href="index.php";
																exit;
																</script>
																<?php
																}
																	?>
													</table></form>


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
