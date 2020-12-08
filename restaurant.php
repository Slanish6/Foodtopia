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

    
      <!-- Navigation -->
<?php
include "nav.php";
?>

    
 
    
    <!-- Page Content -->

<?php
    include_once 'connect.php';
    $id = intval($_GET['id']);
    $sql = 'SELECT * FROM restaurant WHERE sl = '.$id.' ';
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $restaurant = $row['name'];
?>    

    <section class="py-5">
      <div class="container">
        <h1 style="font-family:Axiforma;color:white;"><?php echo "$restaurant"; ?></h1>
        <!-- <p> Chicken, Burger, Fries, Milkshake</p> -->
        </div></section>


      <!--Comment box ends here-->
      
    <br>

    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->


<!-- View Deliverables-->
<form method="POST" action="process.php">
<div class="container">
  <h2 style="font-family:Axiforma; color:white;">Popular Products</h2>
  <div class="row">
    <div class="col-xs-8">
      <div class="panel panel-info">
        
        <div class="panel-body">
<?php
$sql = "SELECT * FROM menu WHERE restaurant = '$restaurant'" ;
$result = mysqli_query($conn,$sql);
$n=0;
while($row = mysqli_fetch_array($result)){
  echo '<img src="images/'.$row['imagename'].'" height="100px; width="100px;">' ;
?>
  <div class="row">
            <div class="col-xs-2"></div>
            <div class="col-xs-4"><h4 class="product-name" style="font-family:Axiforma; font-size:11px"><strong><?php echo "$row[item]"; ?></strong></h4></div>
            <div class="col-xs-6">
              <div class="col-xs-6 text-right"><h6><strong>Rs <?php echo "$row[price]"; ?>.00 <span class="text-muted"></span></strong></h6></div>
              <div class="col-xs-6 text-right"><h6><strong>Quantity <input type="number" name="quantity[]" min="1" max="10" value="1"><span class="text-muted"></span></strong></h6></div>
              <div class="col-xs-6 text-right"><h6><strong><span class="text-muted"></span></strong></h6></div>

              <div class="col-xs-6 text-right">
                
                    <input type="checkbox" name="ordered_item[]" value="<?php echo "".$row['sl']."x".$n.""; ?>">
                
              </div>
            </div>
          </div>
          <hr>
          <?php
          $n++;  
}
?>
        </div>
        <div class="panel-footer">
          <div class="row text-center">
            
            <div class="col-xs-3">
              <button name="order" type="submit" class="btn btn-success btn-block">
                Proceed
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</form>


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
<!-- <link href="assets/css/sign_in.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/sign_up.css" rel="stylesheet"> -->