<?php
session_start();
include("DbConne.php");

$username=$_POST["uname"];
$password=$_POST["pswrd"];
$pass=md5($password);

$sql="select * from tbl_login where username='$username' and password='$pass' and status='1'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
$_SESSION['uname1']=$username;
  if($n>0)
{
  while($fin=mysqli_fetch_array($result))
  {
	if($fin['user_type']=="admin")
	{
header("location: index.php");
exit;
}
}
}
else
{
  ?>
<script>alert("Invalid Username or Password.");
location.href="login.html";
 exit;
</script>
<?php
}
mysqli_close($con);
?>
