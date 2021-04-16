<?php
include("DbConne.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Register Form</title>

      <!-- Required meta tags-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Colorlib Templates">
      <meta name="author" content="Colorlib">
      <meta name="keywords" content="Colorlib Templates">
      <style>
      .status-available{color:#2FC332;}
      .status-not-available{color:#D60202;}
      </style>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

      <script>
      function getdistrict(val) {
      $.ajax({
      type: "POST",
      url: "get_district.php",
      data:'state_id='+val,
      success: function(data){
        $("#district-list").html(data);
      }
      });
    }
      function getcat(val) {
        $.ajax({
        type: "POST",
        url: "get_cat.php",
        data:'category_name='+val,
        success: function(data){
          $("#category-list").html(data);
        }
        });
    }


      </script>
      <!-- Title Page-->



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	      <a class="navbar-brand" href="index.html">BuildTech Construction Management System</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="abouts.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="teams.html" class="nav-link">Team</a></li>
	          <li class="nav-item"><a href="servic.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="contacts.html" class="nav-link">Contact</a></li>
            <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Sign Up <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="custreg.php" style="color:green;">Customer</a></li>
                <li class="nav-item"><a href="contrareg.php" style="color:green;">Contractor</a></li>
                <li class="nav-item"><a href="labreg.php" style="color:green;">Labour</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="login.php" class="nav-link">Sign In</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="ftco-section contact-section" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
          <div class="col-md-9 ftco-animate pb-5">

            <div class="d-flex justify-content-center h-100">
            <div class="card">
            <div class="card-header" style="background:#abb0b8">
            <h3><center><b>Labour Registration Form</b></center></h3>
            </div>
            <div class="card-body" style="background:#abb0b8">
            <form action="Addreg3.php" method="POST" enctype="multipart/form-data">

              <div class="input-group form-group">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control" name="name" id="name1" placeholder="Full Name" onblur="validate()" required/>
              </div>

            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-phone"></i></span>
            </div>
            <input type="tel" class="form-control" name="phn" id="phno" placeholder="Phone Number" onblur="validate2()" required/>
            </div>

            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>
            <input type="text" class="form-control" name="email" id="email1" placeholder="Email Address" onblur="checkAvailability5()" required/>
            </div>
            <span id="user-availability-status1"></span>
            <span id="username-list"></span>
            <p id="loaderIcon" style="display:none;">Loading..</p>


                        <div class="input-group form-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-location-arrow"></i></span>
                        </div>
                        <input type="text" class="form-control" name="loc" id="loc1" placeholder="Location"  required/>
                        </div>

            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
            </div>
            <select onChange="getdistrict(this.value);"  name="state" id="state1" class="form-control" required>
            <option value="">Select State</option>
            <?php $query =mysqli_query($con,"SELECT * FROM tbl_state where status=1");
            while($row=mysqli_fetch_array($query))
            { ?>
            <option value="<?php echo $row['state_name'];?>"><?php echo $row['state_name'];?></option>
            <?php
            }
            ?>
            </select>

            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-location-arrow"></i></span>
            </div>
            <select name="district" id="district-list" class="form-control" required>
            <option value="">Select</option>
            </select>
            </div>

            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-certificate"></i></span>
            </div>

            <input class="form-control" type="file" name="aad" id="file1" placeholder="Upload Aadharcard Proof" onchange="valproof()" required/>

            </div>

            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-id-card"></i></span>
            </div>
            <input type="tel" class="form-control" name="card" id="card1"  placeholder="AdharCard Number"  onblur="validate5()" required/>
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-list"></i></span>
            </div>

            <select onChange="getcat(this.value);"  name="category" id="category" class="form-control" required >
            <option value="">Select Category</option>
            <?php $query =mysqli_query($con,"SELECT * FROM tbl_labour_category where status=1");
            while($row=mysqli_fetch_array($query))
            { ?>
            <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></option>
            <?php
            }
            ?>
            </select>
            </div>

            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="uname" id="uname1" placeholder="Create Username" onblur="checkAvailability4()"  required/>
            </div>
            <span id="user-availability-status2"></span>
            <span id="username-list"></span>
            <p id="loaderIcon" style="display:none;">Loading..</p>

            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" name="pswrd" id="pass" placeholder="Create Password" onblur="validate4()" required/>
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" id="cpawd" name="confirm" onblur="validcpass()"  placeholder="Confirm Password" required/>
            </div>

            <div class="card-footer">
            <div class="d-flex justify-content-center links">
            <center><input type="submit" value="Register" class="btn btn-success" >
            <input type="reset" value="Cancel" class="btn btn-success"></center>
            </div>

            </div>
            </div>
            </div>

          </div>
        </div>
      </div>
    </section>




    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">BuilTech Construction Management System</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>

            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Community</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Team</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reviews</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>FAQs</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Our Story</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Meet the team</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Press</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
                  <li><span class="icon fa fa-map"></span><span class="text">203 Fake St. North, Rajasthan, India</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+91 9961717047</span></a></li>
	                <li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span class="text">admin@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">


          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script>
  function checkAvailability5() {
    $("#loaderIcon").show();
    jQuery.ajax({
    url: "check_availability5.php",
    data:'email_id='+$("#email1").val(),
    type: "POST",
    success:function(data){
      $("#user-availability-status1").html(data);
      $("#loaderIcon").hide();
    },
    error:function (){}
    });
  }
  </script>
  <script>
  function check() {
      var em = document.getElementById('email1').value;
            if (!em) return;
            console.log("WORKING user TILL HERE");
            var ajax = new XMLHttpRequest();
            console.log("hello");
            ajax.onreadystatechange = function(){
              if (this.readyState == 4 && this.status == 200 ){
                console.log(this.response); //helps SEE WHATS GOING ON in the php file;
                if(this.response=='TRUE'){
                    // document.getElementById('u').innerHTML="Username taken";
                    document.getElementById('email1').value="";
                    document.forms["tf"]["email"].focus();
                    alert("email taken");
                }
              }
            }
            ajax.open("GET", "getemail1.php?email="+em, true);
            ajax.send();

  }
  </script>


  <script>
  function checkAvailability4() {
    $("#loaderIcon").show();
    jQuery.ajax({
    url: "check_availability4.php",
    data:'username='+$("#uname1").val(),
    type: "POST",
    success:function(data){
      $("#user-availability-status2").html(data);
      $("#loaderIcon").hide();
    },
    error:function (){}
    });
  }
  </script>
  <script>
  function check1() {
      var em = document.getElementById('uname1').value;
            if (!em) return;
            console.log("WORKING user TILL HERE");
            var ajax = new XMLHttpRequest();
            console.log("hello");
            ajax.onreadystatechange = function(){
              if (this.readyState == 4 && this.status == 200 ){
                console.log(this.response); //helps SEE WHATS GOING ON in the php file;
                if(this.response=='TRUE'){
                    // document.getElementById('u').innerHTML="Username taken";
                    document.getElementById('uname1').value="";
                    document.forms["tf"]["uname"].focus();
                    alert("email taken");
                }
              }
            }
            ajax.open("GET", "getuname1.php?uname="+em, true);
            ajax.send();
  }
  </script>

  <script>
  function validate()
  {
  var name=document.getElementById("name1").value;
  var letters=/^[a-zA-Z\s]*$/;
  if(!name.match(letters))
  {
  alert("Please Enter Valid Name");
  document.getElementById("name1").value="";
  }
  }
  function validate2()
  {
  var phone = document.getElementById("phno").value;
  var ph=/^(9|8|7|6)[0-9]{9}$/;
   if(!phone.match(ph))
  {
  alert("Enter Valid Phone Number");
  document.getElementById("phno").value="";
  }
  }
  function validate1()
  {
  var email = document.getElementById("email1").value;
  var pat=/^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$/;
   if(!email.match(pat))
  {
  alert("Please Enter Valid Email");
  document.getElementById("email1").value="";
  }
  }
  function valproof()
  {
  var proof = document.getElementById("file1").value;
  var pat=/^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.pdf)$/;
  if(!proof.match(pat))
  {
  alert("Enter Valid File Type Eg: .jpg/.jpeg/.pdf");
  document.getElementById("file1").value="";
  }
  }
  function validate5()
  {
  var adnum = document.getElementById("card1").value;
  var num=/^\d{12}$|^\d{4}\d{4}\d{4}$/;
  if(!adnum.match(num))
  {
  alert("Enter Valid Adharcard Number");
  document.getElementById("card1").value="";
  }
  }

  function validate3()
  {
  var usname=document.getElementById("uname").value;
  var letters=/^[0-9a-zA-Z]+$/;
  if(!usname.match(letters))
  {
  alert("Please Enter Valid Username");
  document.getElementById("uname").value="";
  }
  }
  function validate4()
  {
  var password = document.getElementById("pass").value;
  var pass=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{6,}/;
   if(!password.match(pass))
   {
    alert("Please Enter Valid Password");
   document.getElementById("pass").value="";
  }
  }
  function validcpass()
     {
      var password=document.getElementById("pass").value;
  	var cpass=document.getElementById("cpawd").value;
  	if(!(password==cpass))
  	{
  	 alert("Password Not Matching");
  	 document.getElementById("cpawd").value="";
  	}
     }

  </script>
     <!-- Jquery JS-->
     <script src="vendor/jquery/jquery.min.js"></script>
     <!-- Vendor JS-->
     <script src="vendor/select2/select2.min.js"></script>
     <script src="vendor/datepicker/moment.min.js"></script>
     <script src="vendor/datepicker/daterangepicker.js"></script>

  <!-- Main JS-->
  <script src="js/global.js"></script>




  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</form>
  </body>
  <script src="app.js"></script>
  <script>
     history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
   </script>
</html>