<?php
session_start();
include("DbConne.php");
if(isset($_POST['submit'])){
$temp=$_SESSION['uname'];
$siji=$_SESSION['proj_id'];
$amount=$_POST['amt'];
$_SESSION['amt']=$amount;
$amt=$_SESSION['amt'];
$query = "select * from tbl_login l,tbl_customer_reg h  where l.username='$temp' and l.login_id=h.login_id";
$results = mysqli_query($con,$query);
$x=mysqli_fetch_array($results);
$e=$x['cust_name'];
$f=$x['phno'];
$g=$x['email_id'];
}

     ?>
<button id="rzp-button1">Pay</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
#rzp-button1{
  display: none;
}
</style>
<script>
$(document).ready(function(){
  $("#rzp-button1").click()
  });
</script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_aG8mdESPQXjZBJ", // Enter the Key ID generated from the Dashboard
    "amount": "<?php  echo $amt*100;?> ", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "<?php  echo $e;?>",
    "description": "Project Transaction",
    "image": "https://img-premium.flaticon.com/png/512/21/21104.png?token=exp=1622901614~hmac=4d8e22f1c6d8531f478dfaa653360e59",
    //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        //alert(response.razorpay_payment_id);
        if (typeof response.razorpay_payment_id == 'undefined' ||  response.razorpay_payment_id < 1) {

} else {
  redirect_url = 'success.php';
}
location.href = redirect_url;
        //alert(response.razorpay_order_id);
        //alert(response.razorpay_signature)
    },
    "prefill": {
        "name": "<?php  echo $e;?>",
        "email": "<?php  echo $g;?>",
        "contact": "<?php  echo $f;?>"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
      (response.error.code);
      (response.error.description);
        (response.error.source);
        (response.error.step);
        (response.error.reason);
        (response.error.metadata.order_id);
        (response.error.metadata.payment_id);
        location.href='failed.php';

});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
