<?php
session_start();
include("DbConne.php");
if(isset($_SESSION['uname']))
{
	$temp=$_SESSION['uname'];
	?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


.oval {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 100%;
}
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.oval :hover {
  color: cyan;
}
.pad{

	margin-bottom:300px;
}





</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<h1 style="color: blue;"><b><center>BUILDTECH CONSTRUCTION MANAGEMENT SYSTEM</center><b></h1><br>
	<div class="sidenav">
  <a href style="text-decoration:none;" ="#"><p style="color:white; width:100px;">
  <?php
  echo $temp;
  ?>
  </p></a>
    <a href="reguser.php" style="color: blue; font-size: 20px; ">Dashboard</a>
    <a href="#" style="font-size: 20px; ">Registered Users</a>
    <a href="#" style="font-size: 20px; ">Add Category</a>
    <a href="#services" style="font-size: 20px; ">Services</a>
    <a href="#clients" style="font-size: 20px; ">Clients</a>
    <a href="#contact" style="font-size: 20px; ">Contact</a>
  	<a href="logout.php" style="font-size: 20px; ">Sign Out</a>
  </div>



  <div id="" class="pad">
    <form action="." method="POST">
  <table class="table table-striped table-advance table-hover" style="margin:100px 200px; max-width:70%; border:1px solid black;">
   <?php
  $query = "select * from tbl_labour_category";
  $results = mysqli_query($con,$query);
	echo "<h2><center>View Category</center></h2>";
  echo "<tr><th>category_id</th><th>category_name</th></tr>";
  while($fin=mysqli_fetch_array($results))
  {
  echo "<tr>";
  echo "<td>".$fin['category_id']."</td><td>"
  	       .$fin['category_name']."</td>";
echo "</tr>";
  }
   ?>

   </table>
   </form>

  </div>


</body>
</html>
<?php
}
else
{
header("location:lo.html");
}
?>
