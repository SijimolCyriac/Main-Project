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

				      <script>
				      function getlab(val,val1) {
				      $.ajax({
				      type: "POST",
				      url: "get_lab.php",
				      data:'catname='+val,
				      success: function(data){
				        $("#"+val1).html(data);
				      }
				      })
				      }

				      </script>
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
                                <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                              Project
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="viewproj.php">View Project Details</a>
																		<a class="nav-link" href="EstAdd.php">Add Estimation Details</a>
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

																			<a class="nav-link" href="viewreport.php">View Report Details</a>
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
																		<a class="nav-link" href="viewcomplab.php">Worksite Complaints</a>
																</nav>
														</div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-4">Complaint</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contractor</li>
                        </ol>


												<div class="card mb-4">
														<div class="card-body">
															<div class="table-responsive">

															<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<?php
include("DbConne.php");
$sql="select a.login_id,b.to_login_id from tbl_login a,tbl_complaint b where
a.login_id=b.to_login_id and a.username='$temp'";
$query1=mysqli_query($con,$sql);
if(mysqli_num_rows($query1)>0)
{
$result=mysqli_fetch_array($query1);
$h=$result['login_id'];
$query = "select l.login_id,l.comp_id,l.complaint,l.ccstatus,h.cust_name from tbl_complaint l,tbl_customer_reg h
where  l.login_id=h.login_id and l.to_login_id='$h'";
$results = mysqli_query($con,$query);

echo "<h2><center>Complaint Details</center></h2>";
echo "<tr><th>Customer Name</th><th>Complaint</th><th>Action</th><th>Status</th></tr>";
while($v=mysqli_fetch_array($results))
{
echo "<tr>";
echo "<td>".$v['cust_name']."</td><td>"

.$v['complaint']."</td><td>";

echo '<a href="#" class="btn btn-sm btn-info" data-toggle="modal"
data-target="#AsgnLab'.$v['comp_id'].'">Assign Labour</a></td>';
?>
<div id="AsgnLab<?php echo $v['comp_id']; ?>" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content" style="width: 130%">
<div class="modal-header"><h3>Assign Labour</h3>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<form method="POST" action="view.php">
<div class="form-group">
<div class="form-label-group">
<input type="hidden" name="id" value="<?php echo $v['comp_id']; ?>">
<label for="exampleInputEmail">Category Name</label>
<select onChange="getlab(this.value,<?php echo $v['comp_id']; ?>)"  name="address" id="c" class="form-control" required>
<option value="">Select Category</option>
<?php $query =mysqli_query($con,"SELECT * FROM tbl_labour_category where status=1");
while($row=mysqli_fetch_array($query))
{ ?>
<option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></option>
<?php
}
?>
</select>
<br><label for="exampleInputEmail">Labour Name</label>
<select name="lab" id="<?php echo $v['comp_id']; ?>" class="form-control" required>
<option value="">Select</option>
</select>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
Close
<span class="glyphicon glyphicon-remove-sign"></span>
</button>
<input type="submit" name="update" value="Send" class="btn btn-success">
</div>
</form>
</div>
</div>
</div>
</div>
<?php
if($v['ccstatus']==1)
{
	$f='Solved';
}
else {
	$f='Pending';
}
echo "<td>"
 .$f."</td>";
echo "</tr>";
}}
else {
	?>
	<script>alert("No Complaint Found");
	location.href="index.php";
	 exit;
	</script>
	<?php
}
?>
</table>


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
