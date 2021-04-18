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
                        <h2 class="mt-4">View Weekly Work Details <a href="#" data-toggle="modal" data-target="#AddReport"
													class="btn btn-sm btn-info"> Add New</a></h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contractor</li>
                        </ol>


												<div class="card mb-4">
														<div class="card-body">
															<div class="table-responsive">

															<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

																<?php
																echo "<h2><center>Weekly Work Details</center></h2>";
																echo "<tr><th>Customer Name</th><th>Title</th><th>Work Details</th><th>Activity Details</th><th>Date</th><th>Status</th></tr>";

																include("DbConne.php");

																$sql="select * from tbl_contractor_reg where login_id='$login_id'";
																$query1=mysqli_query($con,$sql);
																if(mysqli_num_rows($query1)>0)
																{
																$result=mysqli_fetch_array($query1);
																$contractor_id=$result['contractor_id'];

																$sql1="select * from tbl_project where contractor_id='$contractor_id'";
																$query2=mysqli_query($con,$sql1);
															while($result1=mysqli_fetch_array($query2)){
																$cust_id=$result1['cust_id'];

																$query = "select * from tbl_customer_reg where cust_id='$cust_id'";
																$results = mysqli_query($con,$query);
																if($v=mysqli_fetch_array($results))
																{
																	$chk_id=$v['login_id'];
																	$chk_id1=$result['login_id'];
																	$sql2="select * from tbl_daily_progress_report where login_id='$chk_id' and from_login_id='$chk_id1'";
																	$query3=mysqli_query($con,$sql2);
																	while($result2=mysqli_fetch_array($query3)){

																	if($result2['status']==1)
																	{
																		$a='Verified';
																	}
																	else {
																		$a='Not Verified';
																	}
																echo "<tr>";
																echo "<td>".$v['cust_name']."</td><td>"
																.$result2['title']."</td><td>"
																.$result2['description']."</td><td>";
																echo "<a href='repp.php?x=" .$result2['report_id']." ' target='_blank'>View Activity</a></td><td>"

																.$result2['fdate']."</td><td>"
																.$a."</td>";
																echo "</tr>";
															}}}}
																else {
																?>
																<script>alert("No Report Found");
																location.href="index.php";
																exit;
																</script>
																<?php
															}

																?>
</table>


</div></div>
</div>


												<div id="AddReport" class="modal fade" role="dialog">
												<div class="modal-dialog">

													<!-- Modal content-->
													<div class="modal-content" style="width: 130%">
														<div class="modal-header"><h3>Add New Report</h3>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body">


																		<form method="POST" action="#" enctype="multipart/form-data">
																			<div class="form-group">
																						<div class="form-label-group">
																			<label class="custom">Title</label>
																			<input type="text" name="name" class="form-control" id="title1" onblur="validate1()" placeholder="Enter Report Title"  autofocus="autofocus" required>
                                      <br><label class="custom">Customer Name</label>
																			<input type="text" name="cname" class="form-control" id="name1" onblur="validate()" placeholder="Enter Customer Name"  autofocus="autofocus" required>
																			<br><label class="custom">Description</label>
																			<textarea  name="comp" class="form-control" id="work1" onblur="validate2()" placeholder="Enter Work Details"  autofocus="autofocus" required></textarea>
																			<br><label class="custom">Work Details</label>
																			<input type="file" name="proj" class="form-control" id="d1" onchange="return fileValidation()" />
                                      <br><label class="custom">From Date</label>
																	    <input type="date" name="fdate" class="form-control" placeholder="Enter Date" autofocus="autofocus" required>
																			<br><label class="custom">To Date</label>
																	    <input type="date" name="tdate" class="form-control" placeholder="Enter Date" autofocus="autofocus" required>
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
												<?php

												if(isset($_POST['submit'])){
													$title=$_POST["name"];
													$cust_name=$_POST["cname"];
													$summary=$_POST["comp"];

													$details=$_FILES['proj']['name'];
													$fileloc="details/";
													move_uploaded_file($_FILES["proj"]["tmp_name"],$fileloc.$details);

													$fdate=$_POST['fdate'];
													$tdate=$_POST['tdate'];
													$status='0';
													$f="select login_id from tbl_customer_reg where cust_name='$cust_name'";
													$res=mysqli_query($con,$f);
													$h=mysqli_fetch_array($res);
													$e=$h['login_id'];


													$abc="select login_id from tbl_login where username='$temp'";
													$query=mysqli_query($con,$abc);
													$result=mysqli_fetch_array($query);
													$c=$result['login_id'];

													$sq="insert into tbl_daily_progress_report(title,login_id,from_login_id,description,activityDetails,fdate,tdate,status) values('$title','$e','$c','$summary','$details','$fdate','$tdate','$status')";
													if(mysqli_query($con,$sq))
													  {
													    ?>
													    <script>alert("Report Uploaded Successfully");
													    location.href="viewreport.php";
													     exit;
													    </script>
													    <?php
													  }}
													    mysqli_close($con);
													     ?>


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
function validate1()
{
var name=document.getElementById("title1").value;
var letters=/^[a-z0-9A-Z\s]*$/;
if(!name.match(letters))
{
alert("Please Enter Title Correctly");
document.getElementById("title1").value="";
}
}
function validate()
{
var name=document.getElementById("name1").value;
var letters=/^[a-zA-Z\s]*$/;
if(!name.match(letters))
{
alert("Please Enter Valid Name");
document.getElementById("name1").value="";
}
}
function validate2()
{
var name=document.getElementById("work1").value;
var letters=/^[a-z.A-Z,\s]*$/;
if(!name.match(letters))
{
alert("Please Enter Details Coorectly");
document.getElementById("work1").value="";
}
}
function valprof()
{
var proof = document.getElementById("file1").value;
var pat=/^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.pdf)$/;
if(!proof.match(pat))
{
alert("Enter Valid File Type Eg: .jpg/.jpeg/.pdf");
var fl=document.getElementById("file1");

}
}
</script>
<script>
        function fileValidation() {
            var fileInput =
                document.getElementById('d1');

            var filePath = fileInput.value;

            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.pdf)$/i;

            if (!allowedExtensions.exec(filePath)) {
                alert('Enter Valid File Type Eg: .jpg/.jpeg/.pdf');
                fileInput.value = '';
                return false;
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
