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
        <title>Customer</title>
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
										<a class="dropdown-item" href="custmreg.php">Profile</a>
										<a class="dropdown-item" href="changepas.php">Change Password</a>
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
																Daily Progress Report
																<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
														</a>
														<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
																<nav class="sb-sidenav-menu-nested nav">
																		<a class="nav-link" href="viewreport.php">View Report</a>

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
                        <h1 class="mt-4">Change Password</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Change Password</li>
                        </ol>


												<div class="card mb-4">
														<div class="card-body">
															<div class="table-responsive">

															<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

																<section class="ftco-section contact-section">
																	<div class="container">
																		<div class="row block-9 justify-content-center mb-5">
																			<div class="col-md-8 mb-md-5">
																				<h1 class="mt-4"><center>Change Password</center></h1>
																				<form action="changepass.php" method="POST" class="bg-light p-5 contact-form">

																					<?php
																					include("DbConne.php");
																					$sq="select * from tbl_login where username='$temp'";
																					$res=mysqli_query($con,$sq);
																					$a=mysqli_fetch_array($res);
																					?>

																					<div class="form-group">
																						<input type="text" class="form-control" name="name" value="<?php echo $a['username']; ?>" placeholder="UsernameName">
																					</div>
																					<div class="form-group">
																						<input type="password" class="form-control" name="old" id="old" value="<?php echo $a['password']; ?>" placeholder="Old Password">
																					</div>
																					<div class="form-group">
																						<input type="password" class="form-control" name="new" id="pass" placeholder="New Password" onblur="validate4()" required>
																					</div>
																					<div class="form-group">
																						<input type="password" name="cnew" class="form-control" id="cpawd" placeholder="Confirm New Password" onblur="validcpass()" required>
																					</div>
																					<div class="form-group">
																						<center><input type="submit" value="Update" class="btn btn-primary py-3 px-5"></center>
																					</div>
																					<div class="pad-top">
																						<label>
                                               <center>Password must have at least one digit (0-9), one lowercase character (a-z) , one uppercase character(A-Z),one special character. It can have minimum 8 characters and maximum 16 characters.</center>
																						</label></div>
																				</form>

																			</div>
																		</div>
</div>

																</section>


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
<script>
function validate4()
{
var password = document.getElementById("pass").value;
var pass=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{6,}/;
 if(!password.match(pass))
 {
	alert("Please Enter Valid Password");
 document.getElementById("pass").value="";
}

}
function validcpass()
	 {
		var password=document.getElementById("pass").value;
	var cpass=document.getElementById("cpawd").value;
	if(!(password==cpass))
	{
	 alert("Password Not Matching");
	 document.getElementById("cpawd").value="";
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
	header("location: ../login.html");
}
?>
