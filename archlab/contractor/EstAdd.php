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
																		<a class="nav-link" href="viewproj.php">View Project Details</a>
	<a class="nav-link" href="EstAdd.php">Add Estimation Details</a>

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
															Daily Progress Report
																<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
														</a>
														<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
																<nav class="sb-sidenav-menu-nested nav">
																		<a class="nav-link" href="viewreport.php">View Report Details</a>
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
                        <h2 class="mt-4">Estimation Details <a href="#" data-toggle="modal" data-target="#AddEst"
													class="btn btn-sm btn-info"> Add New</a></h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contractor</li>
                        </ol>


												<div class="card mb-4">
														<div class="card-body">
															<div class="table-responsive">

																<form action="#" method="POST">
																<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
																	<?php
																	include("DbConne.php");


																	$sql="select * from tbl_project p,tbl_est e
																	where  p.proj_id=e.proj_id";
																	$res1 = mysqli_query($con,$sql);

																	echo "<h2><center>Estimation Details</center></h2>";
 																	echo "<tr><th>Project Name</th><th>Customer Name</th><th>Total Cost</th><th>Concrete</th><th>Brick</th><th>Door</th><th>Electrical</th><th>Status</th></tr>";


																	while($v=mysqli_fetch_array($res1))
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
																	.$v['yur_service']."</td><td>"
																	.$v['cust_name']."</td><td>"
																	.$v['total_cost']."</td><td>"
																	.$v['concrete']."</td><td>"
																	.$v['brick']."</td><td>"
																	.$v['door']."</td><td>"
																	.$v['electrical']."</td><td>"
																	.$f."</td>";
																	echo "</tr>";
																	}

																	?>
													</table></form>


													</div></div>
													</div>

													<div id="AddEst" class="modal fade" role="dialog">
													<div class="modal-dialog">

														<!-- Modal content-->
														<div class="modal-content" style="width: 130%">
															<div class="modal-header"><h3>Construction Cost Estimator</h3>
																<button type="button" class="close" data-dismiss="modal">&times;</button>
															</div>
															<div class="modal-body">

																<form method="POST" action="AddEst.php">
																	<?php
																	include("DbConne.php");

																	$query = "select l.login_id,h.contractor_id,h.contractor_name from tbl_login l,tbl_contractor_reg h  where l.username='$temp' and l.login_id=h.login_id";
																	$results = mysqli_query($con,$query);
																	$x=mysqli_fetch_array($results);
																	$d=$x['contractor_id'];

																	$sql="select p.proj_id,p.contractor_id,c.cust_id from tbl_project p,tbl_customer_reg c
																	where p.contractor_id='$d' and p.cust_id=c.cust_id";
																	$res1 = mysqli_query($con,$sql);
																	$v=mysqli_fetch_array($res1);
																	$m=$v['proj_id'];
																	?>

																<div class="form-group">
																<div class="form-label-group">

																 <label for="exampleInputEmail1">Contractor Name:</label>
																<input type="text" class="form-control" id="name1" name="name" value="<?php echo $x['contractor_name']; ?>"
																placeholder="Contractor Name"  autofocus="autofocus" required>
																<br><label for="exampleInputEmail1">Customer Name:</label>
															 <select  name="cname" id="cname1" class="form-control" autofocus="autofocus" required>
																 <option value="">Select Customer Name</option>
																 <?php $query =mysqli_query($con,"SELECT * FROM tbl_customer_reg where status=1");
																 while($row=mysqli_fetch_array($query))
																 { ?>
																 <option value="<?php echo $row['cust_id'];?>"><?php echo $row['cust_name'];?></option>
																 <?php
																 }
																 ?>
																</select>
																 <br><label for="exampleInputEmail1">Area in Square Feet:</label>
																 <input type="number" name="sqr" id="a" class="form-control" placeholder="Enter Square Feet" autofocus="autofocus" required>
																 <br><label for="exampleInputEmail1">Package:</label>
																 <select onChange="getpack(this.value);"  name="pack" id="pack1" class="form-control" required>
																 <option value="">Select Package</option>
																 <option value="0">Standard Package</option>
																 <option value="1">Premium Package</option>
																 <option value="2">Luxury Package</option>
																 </select>
																 <br><label for="exampleInputEmail1">Total Cost:</label>
																 <input class="form-control" id="x" name="cost" placeholder="Total Cost" autofocus="autofocus" required>
																 <br><label for="exampleInputEmail1">Concrete Structure:</label>
																 <input class="form-control" id="c" name="con" placeholder="Concrete Structure" autofocus="autofocus" required>
																 <br><label for="exampleInputEmail1">Brick Work - Walls:</label>
																 <input class="form-control" id="d"  name="brick" placeholder="Brick Work - Walls" autofocus="autofocus" required>
																 <br><label for="exampleInputEmail1">Doors & Windows:</label>
																 <input class="form-control" id="e" name="door" placeholder="Doors & Windows" autofocus="autofocus" required>
																 <br><label for="exampleInputEmail1">Electrical & Plumbing:</label>
																 <input class="form-control" id="f" name="elec" placeholder="Electrical & Plumbing" autofocus="autofocus" required>

																											</div>
																											</div>
																											<script>
																											function getpack(a)
																											{
																											if(a==0)
																											{
																											var b=$('#a').val();
																											$("#x").val(1750*b);
																											$("#c").val((1750/4)*70*4);
																											$("#d").val(b*(b/8)*0.5);
																											$("#e").val(b*4*150*(b/900)+1000);
																											$("#f").val(30000+25000);

																											}

																											if(a==1)
																											{
																											var b=$('#a').val();
																											$("#x").val(1850*b);
																											$("#c").val((1850/5)*80*5);
																											$("#d").val(b*(b/8)*0.6);
																											$("#e").val(b*4*160*(b/900)+1000);
																											$("#f").val(35000+25000);
																											}
																											if(a==2)
																											{
																											var b=$('#a').val();
																											$("#x").val(1950*b);
																											$("#c").val((1950/6)*90*6);
																											$("#d").val(b*(b/8)*0.7);
																											$("#e").val(b*4*170*(b/900)+1000);
																											$("#f").val(40000+30000);
																											}
																											}
																											</script>
																											<div class="modal-footer">
																												 <button type="button" class="btn btn-default" data-dismiss="modal">
																													 Close
																													 <span class="glyphicon glyphicon-remove-sign"></span>
																												 </button>
																												 <input type="submit" name="submit" value="Upload" class="btn btn-success">
																											 </div>
																											</form>
</div></div>
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
