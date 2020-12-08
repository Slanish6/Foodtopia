<?php
    include_once 'connect.php';

    if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = "user";
    $query = "SELECT * FROM user where username = '$username' ";
    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);

    $db_username = $row['username'];
    $db_password = $row['password'];

    if ($username === $db_username && $password === $db_password)
    {   
        session_start();
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $username;
        $_SESSION['type'] = $type;
        header("location:index.php");

    }
    else
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Invalid Username or Password.");'; 
        echo 'window.location.href = "sign_in.php";';
        echo '</script>';

    }

}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Foodtopia</title>
    

  </head>

  <body>
<?php
include "nav.php";
?>
<div class="wrap">
<p class="form-title" style="font-family:Axiforma; padding-top:132px; font-size:35px; color:white;"> Sign In</p>
<form class="login" method="post" action="sign_in.php">
<input type="text" style="color:black;" name="username" placeholder="USERNAME" />
<br> <br>
<input type="password" style="color:black;" name="password" placeholder="PASSWORD" />
<br> <br>
<input type="submit" name="login" value="Sign In" class="btn btn-success btn-sm" style="position:absolute; left:588px; border-radius:50px; width:83px; height:50px; font-size:13px; font-weight:bold;" />
 </form>
</div>



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
    <script src="assets/js/sign_in.js"></script>
    <!-- <script src="assets/js/sign_up.js"></script> -->

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
    <link href="assets/css/sign_in.css" rel="stylesheet">
    <!-- <link href="assets/css/sign_up.css" rel="stylesheet"> -->