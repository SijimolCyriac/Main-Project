<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div id="UpdateProfile" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content" style="width: 130%">
  <div class="modal-header"><h3>Edit Profile</h3>
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  <div class="modal-body">
  <form method="POST" action="#">
  <?php
  include("DbConne.php");
  $sq="select * from tbl_login where username='$temp'";
  $res=mysqli_query($con,$sq);
  $a=mysqli_fetch_array($res);
  $b=$a['login_id'];
  $sql="select * from tbl_admin where login_id='$b'";
  $c=mysqli_query($con,$sql);
  $result=mysqli_fetch_array($c);
  ?>
  <div class="form-group">
  <div class="form-label-group">
  <input type="hidden" name="id" value="<?php echo $b;?>">
  <label for="exampleInputEmail1">Full Name</label>
  <input type="text" id="name1" class="form-control"  name="name" autofocus="autofocus" required  placeholder="Enter Full Name"  onblur="validate()" value="<?php echo $result['name']; ?>">
      <br><label for="exampleInputEmail1">Phone Number</label>
      <input type="tel" id="phno" class="form-control"  name="phn" autofocus="autofocus" required  onblur="validate2()" placeholder="Enter Phone Number" value="<?php echo $result['phno']; ?>">
      <br><label for="exampleInputEmail1">Email Address</label>
      <input type="text" class="form-control" value="<?php echo $result['email_id']; ?>" autofocus="autofocus" name="email" id="email1" placeholder="Enter Email Address" onblur="validate1()" required/>
      <br><label for="exampleInputEmail1">Username</label>
      <input type="text" class="form-control" name="uname" value="<?php echo $a['username']; ?>" autofocus="autofocus" id="uname1" placeholder="Enter Username" onblur="validate3()"  required/>
  </div>
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">
  Close
  <span class="glyphicon glyphicon-remove-sign"></span>
  </button>
  <input type="submit" name="update" value="Update" class="btn btn-success">
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  <?php
  if(isset($_POST['update']))
  {

  	$name=$_POST["name"];
  	$phno=$_POST["phn"];
  	$email_id=$_POST["email"];
  	$username=$_POST["uname"];
  	$user_type="admin";
  	$status=1;
  	$b=$_SESSION['uname'];
  	$abc="select login_id from tbl_login where username='$b'";
  	$query=mysqli_query($con,$abc);
  	$result=mysqli_fetch_array($query);
  	$c=$result['login_id'];
  	echo "$name+$phno+$email_id+$username";
  	$sq="update tbl_admin set name='$name', phno='$phno',email_id='$email_id' where login_id=$c";
  	mysqli_query($con,$sq);
  	$a="update tbl_login set username='$username' where username='$b'";
    if(mysqli_query($con,$a))
  	{
  	$_SESSION['uname']=$username;
    ?>
    <script>alert("Profile Has Been Updated Successfully!.");
    location.href="index.php";
     exit;
    </script>
    <?php
  }}
  mysqli_close($con);
  ?>


</body>
</html>
