<?php
session_start();
include("DbConne.php");
if(isset($_SESSION['uname']))
{
$temp=$_SESSION['uname'];
if(isset($_GET['attnd_id']))
	{
		$u=$_GET['attnd_id'];
			$_SESSION['attnd_id']=$u;
	  $y=$_GET['lab_name'];
		$_SESSION['lab_name']=$y;

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
        <title>Contractor</title>
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
                                <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                              Project
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="viewproj.php">View Project</a>
																		<a class="nav-link" href="EstAdd.php">Add Estimation</a>
																			<a class="nav-link" href="check.php">Checking Projects</a>


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
	                                     <a class="nav-link" href="checklab.php">Checking Works</a>
																			  <a class="nav-link" href="viewleave.php">View Leave</a>
																			 <a class="nav-link" href="viewattd.php">View Attendence</a>

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
																<div class="sb-nav-link-icon"><i class="fa fa-credit-card"></i></div>
														Payment
																<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
														</a>
														<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
																<nav class="sb-sidenav-menu-nested nav">

																			<a class="nav-link" href="viewpay.php">View Transaction Log</a>
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
															<h2 class="mt-4">Add Daily Wages </h2>
															<ol class="breadcrumb mb-4">
																	<li class="breadcrumb-item"><a href="viewattd.php">Dashboard</a></li>
																	<li class="breadcrumb-item active">Contractor</li>
															</ol>

															<div class="card mb-4">
																	<div class="card-body">
																<form method="POST" action="#">
																<div class="form-group">
																<div class="form-label-group">

																<label for="exampleInputEmail1">Labour Name:</label>
																<input type="text" class="form-control" id="name1" name="name" disabled value="<?php echo $_SESSION['lab_name']; ?>"
																placeholder="Contractor Name"  autofocus="autofocus" required>
																<br><label for="exampleInputEmail1">Daily Wage:</label>
															  <input type="number" class="form-control" id="amt1" name="amt"
															  placeholder="Enter the daily wage"  autofocus="autofocus" required>

																											</div>
																											</div>

																											<div class="modal-footer">
																												 <button type="button" class="btn btn-default" data-dismiss="modal">
																													 Close
																													 <span class="glyphicon glyphicon-remove-sign"></span>
																												 </button>
																												 <input type="submit" name="submit" value="Add" class="btn btn-success">
																											 </div>
																											</form>
																										</div></div>
																										</div>

																										<?php
																										include("DbConne.php");
																										if(isset($_POST['submit'])){
                                                    $siji=$_SESSION['attnd_id'];
																										$amt=$_POST['amt'];
																										$status=1;
																										$sql="select * from tbl_daily_wages where attnd_id='$siji'";
																										$c=mysqli_query($con,$sql);
																										$num=mysqli_num_rows($c);
																										if($num==1)
																										{

																											?>
																											<script>alert("Wage Already Added");
																											location.href="viewattd.php";
																											 exit;
																											</script>
																											<?php
																										}

																										else{
																										$sq="insert into tbl_daily_wages(attnd_id,wages,status) values('$siji','$amt','$status')";

																										if(mysqli_query($con,$sq))
																										  {
																										    ?>
																										    <script>alert("Wage Added Successfully");
																										    location.href="Addwage.php";
																										     exit;
																										    </script>
																										    <?php
																										  }}}
																										    mysqli_close($con);
																										     ?>


																										<div class="container-fluid">
																												<h2 class="mt-4">Daily Wage </h2>
																												<ol class="breadcrumb mb-4">
																														<li class="breadcrumb-item"><a href="viewattd.php">Dashboard</a></li>
																														<li class="breadcrumb-item active">Contractor</li>
																												</ol>


																												<div class="card mb-4">
																														<div class="card-body">
																															<div class="table-responsive">

																																<form action="#" method="POST">
																																<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
																																	<?php
																																	include("DbConne.php");
																																	$query = "select l.login_id,h.contractor_id,h.contractor_name from tbl_login l,tbl_contractor_reg h  where l.username='$temp' and l.login_id=h.login_id";
																																	$results = mysqli_query($con,$query);
																																	$x=mysqli_fetch_array($results);
																																	$d=$x['contractor_name'];

																																	$sql="select * from tbl_daily_wages s,tbl_attnd p
																																	where  p.attnd_id=s.attnd_id and p.contractor_name='$d'";
																																	$res1 = mysqli_query($con,$sql);

																																	echo "<h2><center>Daily Wage Details</center></h2>";
																																	echo "<tr><th>Labour Name</th><th>Date</th><th>Wage</th></tr>";

																																	while($v=mysqli_fetch_array($res1))
																																	{

																																	echo "<tr>";
																																	echo "<td>"

																																	.$v['labour_name']."</td><td>"
                                                                   .$v['cdate']."</td><td>"
																																	.$v['wages']."</td>";

																																	echo "</tr>";
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
<script>
function validate6()
{
var name=document.getElementById("address1").value;
var letters=/^[a-z.A-Z0-9,\s]*$/;
if(!name.match(letters))
{
alert("Please Enter Address Correctly");
document.getElementById("address1").value="";
}
}
function validate7()
{
var name=document.getElementById("proj1").value;
var letters=/^[a-zA-Z0-9\s]*$/;
if(!name.match(letters))
{
alert("Please Enter Project Name Correctly");
document.getElementById("proj1").value="";
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
