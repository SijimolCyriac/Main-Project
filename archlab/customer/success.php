<?php
session_start();
include("DbConne.php");
$siji=$_SESSION['proj_id'];
$amt=$_SESSION['amt'];
$sq="insert into tbl_payment(proj_id,amount,pstatus) values('$siji','$amt','1')";
mysqli_query($con,$sq);
?>
<script>alert("Payment Done Successfully. You will be redirected to Home Page.");
location.href="index.php";
 exit;
</script>
<?php
mysqli_close($con);
 ?>
