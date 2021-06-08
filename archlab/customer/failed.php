<?php
session_start();
include("DbConne.php");
$siji=$_SESSION['proj_id'];
$amt=$_SESSION['amt'];
$sq="insert into tbl_payment(proj_id,amount,pstatus) values('$siji','$amt','0')";
mysqli_query($con,$sq);
?>
<script>alert("Payment Failed. You will be redirected to Payment Page.");
location.href="Payment.php";
 exit;
</script>
<?php
mysqli_close($con);
 ?>
