<?php
session_start();
include("DbConne.php");

if(isset($_SESSION['uname']))
{
	$temp=$_SESSION['uname'];

	?>
<!DOCTYPE html>
<html lang="en">
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
				function getdistrict(val) {
				$.ajax({
				type: "POST",
				url: "get_district.php",
				data:'state_id='+val,
				success: function(data){
					$("#district-list").html(data);
				}
				});
				}

				</script>

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
									 ?></a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
											<a class="dropdown-item" href="logout.php">Logout</a>
									</div>
							</li>
            </ul>
        </nav>
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
                        <h1 class="mt-4">Daily Progress Report </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
														<li class="breadcrumb-item active">Progress Report</li>

                        </ol>

                        <div class="d-flex justify-content-center h-100">
                        <div class="card">
                        <div class="card-header" style="background:lightgreen">
                        <h3><center>Progress Report Details</center></h3>
                        </div>
                        <div class="card-body" style="background:lightgreen">
													<form action="Addrep.php" method="POST" enctype="multipart/form-data">
													  <div class="input-group form-group">
													         <div class="input-group-prepend">
													</div>
													<input type="text" name="name" class="form-control" id="title1" onblur="validate1()" placeholder="Report Title" required>
													</div>
													<div class="input-group form-group">
																 <div class="input-group-prepend">
												</div>
												<input type="text" name="cname" class="form-control" id="name1" onblur="validate()" placeholder="Customer Name" required>
												</div>
													<div class="input-group form-group">
													     <div class="input-group-prepend">
													</div>
													<textarea  cols="30" rows="7" name="comp" class="form-control" id="work1" onblur="validate2()" placeholder="Work Details" required></textarea>
													</div>



													<div class="input-group form-group">
													<div class="input-group-prepend">

													</div>
													<input type="file" name="proj" class="form-control" id="file1" placeholder="Report Details" id="file1" onchange="valproof()" required>
													</div>


													<div class="input-group form-group">
													<div class="input-group-prepend">

													</div>
													<input type="date" name="cdate" class="form-control" placeholder="Date" required>
													</div>


													<div class="card-footer">
													<div class="d-flex justify-content-center links">
													&emsp;<input type="submit" value="Upload" class="btn btn-success">
													&emsp;<input type="reset" value="Cancel" class="btn btn-success">
													</div>
													</div>
													</form>

                          </div>
                          </div>
                          </div>

                        <div style="height: 100vh;"></div>
                        <div class="card mb-4"><div class="card-body"></div></div>
                    </div>
                </main>

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
var letters=/^[a-zA-Z\s]*$/;
if(!name.match(letters))
{
alert("Please Enter Details Coorectly");
document.getElementById("work1").value="";
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
</html>
<?php
}
else
{
	header("location: ../login.php");
}
?>
