<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Foodie</title>
    
  </head>

  <body>

<?php
include "nav.php";
?>

   

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <h1 style="color:white;">Sign Up</h1>
        <h6 style="color:grey; font-family: Axiforma;position: absolute; top: 134px;left: 240px;font-size: 10px;">Already have an account? <a href="sign_in.php" style="text-decoration:none; color:white;">Login </a></h6>
        
      <!-- Sign up form-->
      <div class="container">
  <div class="row">
        <div class="col-md-6">
            <form action="regProcess.php" method="post" id="signup" role="form" enctype="multipart/form-data">
            <fieldset><legend class="text-center" style="color:white; font-size:12px; padding-left:261px; padding-top:11px;">Valid information is required to register. <span class="req" style="font-size:10px;"><small> required *</small></span></legend>

            <div class="form-group">
            <label for="phonenumber" style="color:white;"><span class="req" style="color:white;">* </span> Phone Number: </label>
                    <input required type="text" name="phone" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="not used for marketing"/> 
            </div>

            <div class="form-group">   
                <label for="firstname" style="color:white;"><span class="req" style="color:white;">* </span> First name: </label>
                    <input class="form-control" type="text" name="fname" id = "txt" onkeyup = "Validate(this)" required /> 
                        <div id="errFirst"></div>    
            </div>

            <div class="form-group">
                <label for="lastname" style="color:white;"><span class="req" style="color:white;">* </span> Last name: </label> 
                    <input class="form-control" type="text" name="lname" id = "txt" onkeyup = "Validate(this)" placeholder="hyphen or single quote OK" required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
                <label for="address" style="color:white;"><span class="req" style="color:white;">* </span> Address: </label> 
                    <input class="form-control" required type="text" name="address" id = "address"  onchange="" />   
                        <div class="status" id="status"></div>
            </div>

            <div class="form-group">
                <label for="email" style="color:white;"><span class="req" style="color:white;">* </span> Email Address: </label> 
                    <input class="form-control" required type="text" name="email" id = "email"  onchange="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div>

            <div class="form-group">
                <label for="username" style="color:white;"><span class="req" style="color:white;">* </span> Username:  <small>This will be your login user name</small> </label> 
                    <input class="form-control" type="text" name="username" id = "txt" onkeyup = "Validate(this)" placeholder="minimum 3 characters" required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
                <label for="password" style="color:white;"><span class="req" style="color:white;">* </span> Password: </label>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" /> </p>
            </div>

            <div class="form-group">
                <label for="image" style="color:white;"><span class="req" style="color:white;">* </span> Picture: </label>
                    <input id="uploadBtn" type="file" class="upload" name="image" accept="image/*"/>
            </div>

            <div class="form-group">
                <input class="btn btn-success" type="submit" name="submit_reg" value="Register">
            </div> 

            </fieldset>
            </form><!-- ends register form -->

<script type="text/javascript">
  document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
</script>
        </div><!-- ends col-6 -->
   
           
</div>

<br>
<br>

      <!-- Contact us form ends Here-->




   

  </body>

</html>


<!-- assets -->    
    
    <!-- <script src="assets/js/bootstrap.bundle.js"></script> -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="assets/js/bootstrap.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/source.bootstrap.min.js"></script>
    <!-- <script src="assets/js/contact_us.js"></script> -->
    <!-- <script src="assets/js/dropdown.js"></script> -->
    <!-- <script src="assets/js/jquery.js"></script> -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- <script src="assets/js/payment.js"></script> -->
    <!-- <script src="assets/js/restaurant.js"></script> -->
    <!-- <script src="assets/js/result.js"></script> -->
    <!-- <script src="assets/js/review.js"></script> -->
    <!-- <script src="assets/js/sign_in.js"></script> -->
    <script src="assets/js/sign_up.js"></script>

    <!-- <link href="assets/css/account_header.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/animate.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/source.bootstrap.min.css" rel="stylesheet">
    <!-- <link href="assets/css/bootstrap-grid.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap-grid.min.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap-reboot.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap-reboot.min.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/checkout.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/check-radio.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/contact_us.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/delivery.css" rel="stylesheet"> -->
    <link href="assets/css/half-slider.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
    <!-- <link href="assets/css/payment.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/profile.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/result.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/review.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/sign_in.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/sign_up.css" rel="stylesheet"> -->