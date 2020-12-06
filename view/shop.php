<?php
include_once (dirname(__FILE__)).'/../settings/core.php';
include_once (dirname(__FILE__)).'/../controllers/product_controller.php';
$products_arr = display_all_products_fxn();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/custom.css">

    <title>Home</title>
  </head>
  <body>
      <div class="header-custom">
      <div class="container-custom">
          <div class="navbar-custom">
              <div class="logo-custom">
                    Navbar

              </div>
              <nav>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Shop</a></li>
                        <li><a href="">Sign Up</a></li>
                        <li><a href="">Login</a></li>
                        <li><a href="">Cart</a></li>

                    </ul>


              </nav>

          </div>
          <div class="row-custom">
              <div class="col-2-custom">
                  <h1 style="color: #fff">Lorem ipsum dolor sint!</h1>
                  <p style="color: #fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                  <a href="" class="btn-custom">Explore Now</a>

              </div>
              <div class="col-2-custom">


              </div>
          </div>


      </div>
      </div>

      <!-- Featured Categories -->

      <!-- Featured Products -->
      <div class="small-container">
            <h2 class="title">Featured Products</h2>
            <div class="row-custom">
                <?php
                 foreach($products_arr as $key => $value){
                     ?>
                <div class="col-4-custom">
                    <div class="img-style"><img src="<?= '../'.$value['product_img']?>"></div>
                    <h4><?= $value['product_name'] ?></h4>
                    <p>GHc<?= $value['product_price'] ?> </p>
                    <div class="row">
                        <div class="col"><a href="<?= "single-product.php?id=".$value['id'] ?>" class="btn-custom" styl="margin: 0">View</a></div>
                        <div class="col"><a href="" class="btn-custom" styl="margin: 0">Cart</a></div>

                    </div>
                </div>

                <?php
                 }
                ?>



            </div>

      </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
