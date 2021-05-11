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
    <title>Labour</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

    <style>
                table, th, td {

                    text-align:center;

                    min-width: 150px;
                }
            </style>


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
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Contractor
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                              <a class="nav-link" href="searchcontra.php">Search Contractor</a>
                              <a class="nav-link" href="viewreq.php">View Request</a>
                                <a class="nav-link" href="addatt.php">Add Attendence</a>
                            </nav>
                        </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                  <h2 class="mt-4">Attendence Details <a href="#" data-toggle="modal" data-target="#AddAtt"
                    class="btn btn-sm btn-info"> Add New</a></h2>
                  <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                      <li class="breadcrumb-item active">Labour</li>
                  </ol>


                  <div class="card mb-4">
                      <div class="card-body">
                        <div class="table-responsive">

                          <form action="#" method="POST">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <?php
                            include("DbConne.php");
                            $query = "select l.login_id,h.lid,h.labour_name from tbl_login l,tbl_labours_reg h  where l.username='$temp' and l.login_id=h.login_id";
                            $results = mysqli_query($con,$query);
                            $x=mysqli_fetch_array($results);
                            $d=$x['labour_name'];

                            $sql="select * from tbl_attnd
                            where  labour_name='$d'";
                            $res1 = mysqli_query($con,$sql);

                            echo "<h2><center>Attendence Details</center></h2>";
                            echo "<tr><th>Project Name</th><th>Contractor Name</th><th>Today's Date</th><th>Work Proof</th><th>Site Location</th><th>Status</th></tr>";


                            while($v=mysqli_fetch_array($res1))
                            {
                              if($v['status']==1)
                              {
                                $f='Verified';
                              }
                              else {
                                $f='Not Verified';
                              }
                            echo "<tr>";
                            echo "<td>"
                            .$v['proj_name']."</td><td>"
                            .$v['contractor_name']."</td><td>"

                            .$v['cdate']."</td><td>"
                            .$v['work_proof']."</td><td>"
                            .$v['site_loc']."</td><td>"

                            .$f."</td>";
                            echo "</tr>";
                            }

                            ?>
                    </table></form>


                    </div></div>
                    </div>

                    <div id="AddAtt" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content" style="width: 130%">
                        <div class="modal-header"><h3>Add Attendence</h3>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">

                          <form method="POST" action="AddAttn.php" enctype="multipart/form-data">
                            <?php
                            include("DbConne.php");
                            $query = "select l.login_id,h.lid,h.labour_name from tbl_login l,tbl_labours_reg h  where l.username='$temp' and l.login_id=h.login_id";
                            $results = mysqli_query($con,$query);
                            $x=mysqli_fetch_array($results);
                            $d=$x['labour_name'];

                            ?>

                          <div class="form-group">
                          <div class="form-label-group">

                          <label  class="custom">Labour Name:</label>
                          <input type="text" class="form-control" id="name1" name="name" value="<?php echo $x['labour_name']; ?>"
                          placeholder="Contractor Name"  autofocus="autofocus" required>

                          <br><label  class="custom">Contractor Name:</label>
                          <select  name="cname" id="cname1" class="form-control" autofocus="autofocus" required>
                           <option value="">Select Contractor Name</option>
                           <?php $query =mysqli_query($con,"select * from tbl_contractor_reg c,tbl_site_loc s where c.contractor_name=s.contractor_name and s.labour_name='$d'");
                           while($row=mysqli_fetch_array($query))
                           { ?>
                           <option value="<?php echo $row['contractor_id'];?>"><?php echo $row['contractor_name'];?></option>
                           <?php
                           }
                           ?>
                          </select>
                          <br><label  class="custom">Project Name:</label>
                      <select  id="proj1" name="proj" class="form-control" autofocus="autofocus" required>
                      <option value="">Select Project Name</option>
                      <?php $query =mysqli_query($con,"select * from tbl_site_loc  where labour_name='$d'");
                      while($row=mysqli_fetch_array($query))
                      { ?>
                      <option value="<?php echo $row['proj_name'];?>"><?php echo $row['proj_name'];?></option>
                      <?php
                      }
                      ?>
                     </select>
                          <br><label class="custom">Site Address:</label>
                           <textarea type="text" name="add" class="form-control" id="address1" onblur="validate6()" placeholder="Enter Site Address"  autofocus="autofocus" required></textarea>
                         <br><label class="custom">Today's Date:</label>
                         <input type='text' id='txtDate' name="cdate"  class="form-control" placeholder="Enter Today's Date" autofocus="autofocus" required>
                         <br><label class="custom">Work Proof:</label>
                        		<input type="file" name="proof" class="form-control" id="proof1" onchange="return fileValidation()" />
                            <br><label  class="custom">Attendence:</label>
                           <select  id="att1" name="att" class="form-control" autofocus="autofocus" required>
                        <option value="">Select Attendence</option>
                          <option value="Present">Present</option>
                            <option value="Absent">Absent</option>
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
<script>
$(document).ready(function() {
    $('#txtDate').datepicker();
    $('#txtDate').datepicker('setDate', 'today');
});
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
