<?php
    //include auth_session.php file on all user panel pages
    include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>KapeTann Brewed Coffee Shop</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2Hhh_14Uam62GXGaTMcXWhhVkYg0EbDY&callback=initMap" async defer></script>

        <!-- Custom CSS File Link -->
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/convo.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"><!-- font awesome cdn link -->
        <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico"><!-- Favicon / Icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- Google font cdn link -->
    </head>
<body>

     <!-- HEADER SECTION -->
     <?php 
    include('header.php');
    ?> 
<!-- Menu Section -->
<section class="menu" id="menu" style="padding: 8rem 7%; width: initial;">
      <h1 class="heading">You May Also <span>Like</span></h1>
      <div class="box-container">
        <div class="product-cont">
          <div class="row">
            <div class="col-md-4">
              <a href="Details Files/Americano.html" class="Details">
                <div class="box">
                  <img src="../assets/images/cart-item-1.png" alt="" class="product-img" />
                  <h3 class="product-title">
                    Americano - Hot Espresso (12 OZ)
                  </h3>
                  <div class="price">₱45.00</div>
                  <a class="add-cart" onclick="redirectCart()">Add to Cart</a>
                </div>
              </a>
            </div>
            <br />
            <div class="col-md-4">
              <a href="index.php" class="Details">
                <div class="box">
                  <img src="../assets/images/cart-item-2.png" alt="" class="product-img" />
                  <h3 class="product-title">Colombian Supremo Cup (12 OZ)</h3>
                  <div class="price">₱40.00</div>
                  <a class="add-cart" onclick="redirectCart()">Add to Cart</a>
                </div>
              </a>
            </div>
            <br />
            <div class="col-md-4">
              <a href="index.php" class="Details">
                <div class="box">
                  <img src="../assets/images/cart-item-3.png" alt="" class="product-img" />
                  <h3 class="product-title">
                    Nitro Cold Brew w/ Straw (12 OZ)
                  </h3>
                  <div class="price">₱50.00</div>
                  <a class="add-cart" onclick="redirectCart()">Add to Cart</a>
                </div>
              </a>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-4">
              <a href="index.php" class="Details">
                <div class="box">
                  <img src="../assets/images/cart-item-4.png" alt="" class="product-img" />
                  <h3 class="product-title">Seasonal Single-Origin (12 OZ)</h3>
                  <div class="price">₱30.00</div>
                  <a class="add-cart" onclick="redirectCart()">Add to Cart</a>
                </div>
              </a>
            </div>
            <br />
            <div class="col-md-4">
              <a href="index.php" class="Details">
                <div class="box">
                  <img src="../assets/images/cart-item-5.png" alt="" class="product-img" />
                  <h3 class="product-title">
                    Indonesian Sumatra Mandheling (12 OZ)
                  </h3>
                  <div class="price">₱40.00</div>
                  <a class="add-cart" onclick="redirectCart()">Add to Cart</a>
                </div>
              </a>
            </div>
            <br />
            <div class="col-md-4">
              <a href="index.php" class="Details">
                <div class="box">
                  <img src="../assets/images/cart-item-6.png" alt="" class="product-img" />
                  <h3 class="product-title">Mint Mojito Iced Coffee (12 OZ)</h3>
                  <div class="price">₱55.00</div>
                  <a class="add-cart" onclick="redirectCart()">Add to Cart</a>
                </div>
              </a>
            </div>
          </div>
          <br />
          <div class="row row-to-hide">
            <div class="col-md-4">
              <a href="index.php" class="Details">
                <div class="box">
                  <img src="../assets/images/cart-item-7.png" alt="" class="product-img" />
                  <h3 class="product-title">Iced Americano (12 OZ)</h3>
                  <div class="price">₱35.00</div>
                  <a class="add-cart" onclick="redirectCart()">Add to Cart</a>
                </div>
              </a>
            </div>
            <br />
            <div class="col-md-4">
              <a href="index.php" class="Details">
                <div class="box">
                  <img src="../assets/images/cart-item-8.png" alt="" class="product-img" />
                  <h3 class="product-title">Specialty Brews (12 OZ)</h3>
                  <div class="price">₱85.00</div>
                  <a class="add-cart" onclick="redirectCart()">Add to Cart</a>
                </div>
              </a>
            </div>
            <br />
            <div class="col-md-4">
              <a href="index.php" class="Details">
                <div class="box">
                  <img src="../assets/images/cart-item-9.png" alt="" class="product-img" />
                  <h3 class="product-title">Seasonal Origin (12 OZ)</h3>
                  <div class="price">₱80.00</div>
                  <a class="add-cart" onclick="redirectCart()">Add to Cart</a>
                </div>
              </a>
            </div>
          </div>
          <br />
          <div class="row row-to-hide">
            <div class="col-md-4">
              <a href="index.php" class="Details">
                <div class="box">
                  <img src="../assets/images/cart-item-10.png" alt="" class="product-img" />
                  <h3 class="product-title">
                    Ethiopian Yirgacheffe Cup (12 OZ)
                  </h3>
                  <div class="price">₱55.00</div>
                  <a class="add-cart" onclick="redirectCart()">Add to Cart</a>
                </div>
              </a>
            </div>
            <br />
            <div class="col-md-4">
              <a href="index.php" class="Details">
                <div class="box">
                  <img src="../assets/images/cart-item-11.png" alt="" class="product-img" />
                  <h3 class="product-title">
                    Cold Brew Tonic In a Cup (12 OZ)
                  </h3>
                  <div class="price">₱35.00</div>
                  <a class="add-cart" onclick="redirectCart()">Add to Cart</a>
                </div>
              </a>
            </div>
            <br />
            <div class="col-md-4">
              <a href="index.php" class="Details">
                <div class="box">
                  <img src="../assets/images/cart-item-12.png" alt="" class="product-img" />
                  <h3 class="product-title">
                    Caramel Cold Foam Cold Brew (12 OZ)
                  </h3>
                  <div class="price">₱55.00</div>
                  <a class="add-cart" onclick="redirectCart()">Add to Cart</a>
                </div>
              </a>
            </div>
          </div>
          <br />
          <center>
                    <button id="showHideBtn" class="btn btn-dark">SHOW MORE</button>
                </center>
        </div>
      </div>
    </section>

     <!-- FOOTER SECTION -->
     <?php 
    include('footer.php');
    ?>
     <!-- CHAT BAR BLOCK -->
     <?php 
    include('chatboot.php');
    ?>
   <!-- JS File Link -->
   <script src="../assets/js/googleSignIn.js"></script>
        <script src="../assets/js/script.js"></script>
        <script src="../assets/js/responses.js"></script>
        <script src="../assets/js/convo.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
            // CODE FOR THE FORMSPREE
            window.onbeforeunload = () => {
                for(const form of document.getElementsByTagName('form')) {
                    form.reset();
                }
            }

            // CODE FOR THE GOOGLE MAPS API
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 14.99367271992383, lng: 120.17629231186626},
                    zoom: 9
                });

                var marker = new google.maps.Marker({
                    position: {lat: 14.99367271992383, lng: 120.17629231186626},
                    map: map,
                    title: 'Your Location'
                });
            }

            // CODE FOR THE SHOW MORE & SHOW LESS BUTTON IN MENU
            $(document).ready(function() {
                $(".row-to-hide").hide();
                $("#showHideBtn").text("SHOW MORE");
                $("#showHideBtn").click(function() {
                    $(".row-to-hide").toggle();
                    if ($(".row-to-hide").is(":visible")) {
                        $(this).text("SHOW LESS");
                    } else {
                        $(this).text("SHOW MORE");
                    }
                });
            });

            // CODE FOR THE SHOW MORE & SHOW LESS BUTTON IN GALLERY
            $(document).ready(function() {
                $(".pic-to-hide").hide();
                $("#showBtn").text("SHOW MORE");
                $("#showBtn").click(function() {
                    $(".pic-to-hide").toggle();
                    if ($(".pic-to-hide").is(":visible")) {
                        $(this).text("SHOW LESS");
                    } else {
                        $(this).text("SHOW MORE");
                    }
                });
            });
        </script> 
</body>
</html>