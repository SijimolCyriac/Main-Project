<?php
require_once("DbConne.php");
if(!empty($_POST["username"]))
 {

  $a=preg_match("/^[0-9a-zA-Z]+$/",$_POST['username']);
   if($a==1)
   {
     $query = "SELECT * FROM tbl_login WHERE username='" . $_POST["username"] . "'";
     $res=mysqli_query($con,$query);
     $row=mysqli_fetch_array($res);
     if(mysqli_num_rows($res)>0) {
         echo "<span class='status-not-available'> Username Already Exist.</span>";
     }else{
     }
   }
   else {
     echo "<script>alert('Please Enter Valid Username');</script>";
      }

}
?>
