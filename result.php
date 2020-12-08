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



    

     

    <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 style="font-family:Axiforma; padding-top:42px; padding-left:352px; color:white;">Search Results</h1>
            
           

        </div>

        <br/>
        


          <?php
                if(isset($_POST['search']) != 0 ){
                  $location = $_POST['area'];

                  if ($location==NULL) {
                    echo '<script type="text/javascript">'; 
                    echo 'alert("Uh-Oh. Please enter a valid location.");'; 
                    echo 'window.location.href = "index.php";';
                    echo '</script>';
                   
                   
                    
                  }
                  else{
                    
                    $search = mysqli_real_escape_string($conn, trim($location));
                    $sql = "SELECT * FROM restaurant WHERE location LIKE '%$search%'";
                    $fetch = mysqli_query($conn,$sql);
                    $restaurant = mysqli_fetch_assoc($fetch);
                    
                    if ($restaurant!=0) {
                      $sql = "SELECT * FROM restaurant WHERE location LIKE '%$search%'";
                      $result = mysqli_query($conn,$sql);
                      $response = array();
                      
                      while($row = mysqli_fetch_array($result))
                      {
                      
                        echo '<img src="images/'.$row['imagename'].'" height="250px; width="270px;>' ;
                        echo "<br><a href=\"restaurant.php?id=$row[0]\">";
                        
                        
                        ?>
                        <br><br>
                      <div style="font-family:Axiforma; font-size:20px; margin-left: -142px; padding-top: 223px; left:89px; color:red; ">
                        <?php
                      echo "<p>".$row['name']."</p>";
                      ?>
                      </div> 
                   
                       </a>
                      <?php
                      }
                    
                    }
                    
                    else{
                      echo '<script type="text/javascript">'; 
                      echo 'alert("We are sorry. We dont have restaurants nearby. :(");'; 
                      echo 'window.location.href = "index.php";';
                      echo '</script>';
                      
                    }
                  }                  
                }
              ?>  
            
            
           
            
        </div>
    </div>





    

  </body>

</html>


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