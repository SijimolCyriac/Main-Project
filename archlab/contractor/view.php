<?php
include("DbConne.php");
if(isset($_POST['update'])){
$id = $_POST['id'];
$lab = $_POST['lab'];
$status='0';

$sql="select b.contractor_id,b.login_id,a.comp_id,a.login_id,a.to_login_id from tbl_complaint a,tbl_contractor_reg b where
b.login_id=a.to_login_id and a.comp_id='$id'";
$query1=mysqli_query($con,$sql);
$result=mysqli_fetch_array($query1);
$h=$result['login_id'];
$j=$result['contractor_id'];


$query = "select l.comp_id,l.login_id,h.cust_id from tbl_complaint l,tbl_customer_reg h
where  l.login_id=h.login_id and l.login_id='$h' and l.comp_id='$id'";
$res = mysqli_query($con,$query);
$results=mysqli_fetch_array($res);
$k=$results['cust_id'];


$r="select proj_id from tbl_project  where contractor_id='$j' and cust_id='$k'";
$ress=mysqli_query($con,$r);
$siji=mysqli_fetch_array($ress);
$tessa=$siji['proj_id'];


$rr="select * from tbl_comp_assignlab where comp_id='$id'";
$resultt=mysqli_query($con,$rr);
$num=mysqli_num_rows($resultt);
if($num==1)
{
?>
<script>alert("Labour Already Assigned to Complaint Site");
location.href="viewcomp.php";
exit;
</script>
<?php
}

else
{

$query = "insert into tbl_comp_assignlab(comp_id,proj_id,labour_name,cstatus) values('$id','$tessa','$lab','$status')";
mysqli_query($con,$query)or die (mysqli_error($con));
?>
<script type="text/javascript">
alert("Labour Has Been Assigned Successfully!.");
window.location = "viewcomplab.php";
</script>
<?php
}}
mysqli_close($con);
 ?>
