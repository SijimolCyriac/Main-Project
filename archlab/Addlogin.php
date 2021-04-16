<?php
   session_start();

include("DbConne.php");

$username=$_POST["uname"];
$password=$_POST["pswrd"];
$pass=md5($password);

$sql="select * from tbl_login where username='$username' and password='$pass' and status='1'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
$_SESSION['uname']=$username;

  if($n>0)
{
  while($fin=mysqli_fetch_array($result))
  {$_SESSION['lid']=$fin['login_id'];

	if($fin['user_type']=="admin")
	{

header("location: admin/dist/index.php");
exit;
    }

	else if($fin['user_type']=="customer")
{
	header("location: customer/index.php");
	exit;
}
else if($fin['user_type']=="contractor")
{
header("location: contractor/index.php");
exit;
}
else if($fin['user_type']=="labour")
{
header("location: labour/index.php");
exit;
}
}}
else

{
  ?>
<script>alert("Invalid Username or Password.");
location.href="login.php";
 exit;
</script>
<?php
}

mysqli_close($con);

   ?>
