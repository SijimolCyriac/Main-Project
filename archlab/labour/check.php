<?php
session_start();
include("DbConne.php");
if(isset($_SESSION['uname']))
{
$temp=$_SESSION['uname'];
if(isset($_REQUEST['x']))
{
 $a=$_GET['x'];
 $sql="update tbl_site_loc  set proj_sstatus='1' where sid='$a'";
mysqli_query($con,$sql);
}
if(isset($_REQUEST['y']))
{
	$a=$_GET['y'];

	$sql="update tbl_site_loc set proj_sstatus='2' where sid='$a'";
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
    <title>Labour</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#btn1").click(function(){

    $("#box1").show();
    $("#box2").hide();
    $("#box3").hide();
      });
      $("#btn2").click(function(){

    $("#box2").show();
    $("#box1").hide();
    $("#box3").hide();
      });
      $("#btn3").click(function(){
    $("#box3").show();
    $("#box2").hide();
    $("#box1").hide();
      });
    });
    </script>
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
                          <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                      Contractor
                          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                      </a>
                      <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                          <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="searchcontra.php">Search Contractor</a>
                            <a class="nav-link" href="viewreq.php">View Request</a>

                          </nav>
                      </div>
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                          <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                    Project
                          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                      </a>
                      <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                          <nav class="sb-sidenav-menu-nested nav">

                            <a class="nav-link" href="check.php">Check Project</a>
                            <a class="nav-link" href="addatt.php">Place Attendance</a>
                            <a class="nav-link" href="addleave.php">Apply Leave</a>

                          </nav>
                      </div>
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                          <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                      Complaint
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
                    <h2 class="mt-4">Project</h2>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Labour</li>
                    </ol>

                    <p><center>
<a style="color:white;" class="btn btn-primary" id="btn1">
  Pending
</a>
<a style="color:white;" class="btn btn-primary" id="btn2">
Work in Progress
</a>
<a style="color:white;" class="btn btn-primary" id="btn3">
  Completed
</a></center>
</p>
                    <div class="row" >
                    <div class=".col-2 .col-md-8" id="box1">
                    <div class="card card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <?php
                    include("DbConne.php");
                    $query = "select l.login_id,h.lid,h.labour_name from tbl_login l,tbl_labours_reg h  where l.username='$temp' and
                    l.login_id=h.login_id";
                    $results = mysqli_query($con,$query);
                    $x=mysqli_fetch_array($results);
                    $d=$x['labour_name'];

                    $sql="select * from tbl_site_loc s,tbl_project p
                    where  p.proj_id=s.proj_id and s.labour_name='$d' and s.sstatus='1' and s.proj_sstatus='0'";
                    $res1 = mysqli_query($con,$sql);
                    if(mysqli_num_rows($res1)>0)
                    {
                      echo "<h2><center>Work Details</center></h2>";
                      echo "<tr><th>Project Name</th><th>Contractor Name</th><th>From Date</th><th>To Date</th><th>Site Location</th><th>Status</th></tr>";
                    while($v=mysqli_fetch_array($res1))
                    {

                    echo "<tr>";
                    echo "<td>"
                    .$v['yur_service']."</td><td>"
                    .$v['contractor_name']."</td><td>"
                    .$v['fdate']."</td><td>"
                    .$v['tdate']."</td><td>"
                    .$v['site_address']."</td><td>";

                    if($v['proj_sstatus'] == 0 || $v['proj_sstatus'] =='')
                    {
                    echo "<a href='check.php?x=" .$v['sid']." '>Pending</a></td>";
                    }
                    echo "</tr>";
                    }
                    }

                    else {
                    ?><table style="width:1000px !important; min-width: auto !important;">
                    <center>		<tr><td rowspan="3"	><h2>No Pending Projects.</h2></td></tr></center>
                    </table>
                    <?php
                    }
                    ?></table>
                    </div>
                    </div>
                    </div>

                    <div class=".col-2 .col-md-8" id="box2" style="display:none;">
                    <div class="card card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <?php
                    include("DbConne.php");

                    $query = "select l.login_id,h.lid,h.labour_name from tbl_login l,tbl_labours_reg h  where l.username='$temp' and l.login_id=h.login_id";
                    $results = mysqli_query($con,$query);
                    $x=mysqli_fetch_array($results);
                    $d=$x['labour_name'];

                    $sql="select * from tbl_site_loc s,tbl_project p
                    where  p.proj_id=s.proj_id and s.labour_name='$d' and s.proj_sstatus='1'";
                    $res1 = mysqli_query($con,$sql);

                    if(mysqli_num_rows($res1)>0)
                    {
                      echo "<h2><center>Work Details</center></h2>";
                      echo "<tr><th>Project Name</th><th>Contractor Name</th><th>From Date</th><th>To Date</th><th>Site Location</th><th>Status</th></tr>";
                    while($v=mysqli_fetch_array($res1))
                    {

                    echo "<tr>";
                    echo "<td>"
                    .$v['yur_service']."</td><td>"
                    .$v['contractor_name']."</td><td>"
                    .$v['fdate']."</td><td>"
                    .$v['tdate']."</td><td>"
                    .$v['site_address']."</td><td>";

                    if($v['proj_sstatus'] == 1)
                    {
                    echo "<a href='check.php?y=" .$v['sid']." '>Work in Progress</a></td>";
                    }
                    echo "</tr>";
                    }
                    }

                    else {
                    ?><table style="width:1000px !important; min-width: auto !important;">
                    <center>		<tr><td rowspan="3"	><h2>No Ongoing Projects.</h2></td></tr></center>
                    </table>
                    <?php
                    }
                    ?>
                    </table>
                    </div>
                    </div>
                    </div>

                    <div class=".col-2 .col-md-8" id="box3" style="display:none;">
                    <div class="card card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <?php
                    include("DbConne.php");

                    $query = "select l.login_id,h.lid,h.labour_name from tbl_login l,tbl_labours_reg h  where l.username='$temp' and l.login_id=h.login_id";
                    $results = mysqli_query($con,$query);
                    $x=mysqli_fetch_array($results);
                    $d=$x['labour_name'];

                    $sql="select * from tbl_site_loc s,tbl_project p
                    where  p.proj_id=s.proj_id and s.labour_name='$d' and s.proj_sstatus='2'";
                    $res1 = mysqli_query($con,$sql);

                    if(mysqli_num_rows($res1)>0)
                    {
                      echo "<h2><center>Work Details</center></h2>";
                      echo "<tr><th>Project Name</th><th>Contractor Name</th><th>From Date</th><th>To Date</th><th>Site Location</th><th>Status</th></tr>";
                    while($v=mysqli_fetch_array($res1))
                    {
                    if($v['proj_sstatus']==2)
                    {
                    $f='Completed';
                    }
                    echo "<tr>";
                    echo "<td>".$v['yur_service']."</td><td>"
                    .$v['contractor_name']."</td><td>"
                    .$v['fdate']."</td><td>"
                    .$v['tdate']."</td><td>"
                    .$v['site_address']."</td><td>"
                    .$f."</td>";
                    echo "</tr>";
                    }
                    }

                    else {
                    ?>
                    <table style="width:1000px !important; min-width: auto !important;">
                    <center>		<tr><td rowspan="3"	><h2>No Completed Projects.</h2></td></tr></center>
                    </table>
                    <?php
                    }
                    ?>
                    </table>

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
