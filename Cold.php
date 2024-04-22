<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- font awesome cdn link -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico"><!-- Favicon / Icon -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- Google font cdn link -->
    <title>Product Page</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap");

      * {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
        transition: 0.2s linear;
      }

      a{
        text-decoration: none;
      }

      html {
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-padding-top: 9rem;
        scroll-behavior: smooth;
      }

      html::-webkit-scrollbar {
        width: 0.8rem;
      }

      html::-webkit-scrollbar-track {
        background: transparent;
      }

      html::-webkit-scrollbar-thumb {
        background: #fff;
        border-radius: 5rem;
      }

      body {
        background-color: var(--bg);
      }

      section {
        padding: 2rem 7%;
      }

      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background-color: #13131a;
        color: #333;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        flex-direction: column;
      }

      .container {
        margin: 124px 0 71px 0;        
        background-color: #000000;
        color: #f7f7f7;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 10px 94px 10px 94px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        border: 1px solid #ffff;
        box-shadow: 3px 2px 11px #df7d32;
      }

      .product-image {
        max-width: 50%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .product-details {
        padding: 19px 0 19px 0;
        max-width: 50%;
        text-align: left;
        line-height: 43px;
      }

      .product-details h2 {
        font-size: 30px;
      }

      .description {
        font-size: 16px;
        line-height: 1.6;
        text-align: justify;
      }

      .cart-but{
        text-decoration: none;
        transition: all 0.25s ease-in;
        margin: 5px;
        display: inline-block;
        padding: 0 8px 0 8px;
        font-size: 16px;
        color: #fff;
        background-color: #9f5c44;
        cursor: pointer;
        border-radius: 5px;
        margin: 13px 14px -18px 0px;
      }

      .buy-but {
        text-decoration: none;
        padding: 5px;
        transition: all 0.25s ease-in;
        margin: 5px;
        display: inline-block;
        padding: 0 20px 0 20px;
        font-size: 16px;
        color: #fff;
        background-color: #9f5c44;
        cursor: pointer;
        border-radius: 5px;
        margin-right: 16px;
      }

      .btn-right:hover {
        box-shadow: 1px 1px 8px #fff;
      }

      .btn:hover {
        letter-spacing: 0.5px;
        font-weight: 400;
      }

     
 

      /* Footer Css */

      .footer {
        background-color: #13131a;
        width: 100%;
        padding: 30px;
      }

      .footer .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .footer .logo img {
        border-radius: 10px;
        width: 160px;
        margin-left: 40px;
      }

      .footer .logo h3 {
        font-size: 4rem;
        color: #9f5c44;
      }

      .footer .logo i {
        font-size: 2rem;
        color: #9f5c44;
        margin-right: 5px;
        margin-top: 1rem;
      }

      .footer .logo p {
        display: inline-block;
        margin: 0;
        font-size: 1.5rem;
        color: #9f5c44;
        vertical-align: middle;
        text-transform: none;
      }

      .footer .support,
      .footer .company,
      .footer .newsletters {
        flex: 0 0 calc(25% - 30px);
      }

      .footer .support h2,
      .footer .company h2,
      .footer .newsletters h2 {
        font-size: 2.5rem;
        color: #fff;
      }

      .footer .support a,
      .footer .company a,
      .footer .newsletters a {
        display: block;
        margin-bottom: 8px;
        color: #fff;
        text-decoration: none;
        font-size: 1.7rem;
      }

      .footer .support a:hover,
      .footer .company a:hover,
      .footer .newsletters a:hover {
        color: #9f5c44;
      }

      .footer .newsletters p {
        width: 100%;
        margin-bottom: 1rem;
        color: #fff;
        font-size: 1.7rem;
      }

      .footer .newsletter {
        width: 100%;
        border-radius: 2.5rem;
        padding: 1.8rem;
        color: #fff;
        background-color: #9f5c44;
        padding-right: 30px;
      }

      .newsletter::placeholder {
        color: #bdbdbd;
      }

      .footer .input-wrapper {
        position: relative;
      }

      .fas.fa-paper-plane {
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
        color: #ececec;
        font-size: 1.8rem;
        cursor: pointer;
      }

      .footer .credit {
        font-size: 2rem;
        color: #fff;
        font-weight: lighter;
        margin-top: 30px;
        padding: 1rem;
        flex: 0 0 100%;
        text-align: center;
      }

      .footer .credit h2 {
        font-weight: lighter;
        font-size: 1.7rem;
        margin-top: 1rem;
      }

      .footer .credit span {
        color: #9f5c44;
      }

      .footer .credit hr {
        border-bottom: 1px solid #9f5c44;
      }
      
    </style>
  </head>

  <body>

      <!-- HEADER SECTION -->
    <?php 
    include('header.php');
    ?>


    <div class="container">
      <img class="product-image" src="firstimage.jpeg" alt="Product Image" />
      <div class="product-details">
        <h2> Cold Brew Tonic In a Cup (12 oz)</h2>
        <p class="description">
          <b style="color: #df7d32; font-size: 20px">Description:</b> The concept is just as it sounds — cold brew concentrate is served over ice, topped with bubbly tonic water, and garnished with a slice of lemon or orange. We've seen various versions made with espresso too, but I have to say that I definitely prefer the smoother, non-acidic flavor of cold brew in this drink.
        </p>
        <p><b style="color: #df7d32; font-size: 20px"> Price:</b><span> $35.00</span></p>
        <a class="cart-but" onclick="redirectCart()">Add to Cart</a>
        <a class="buy-but" onclick="redirectCart()">Buy Now</a>
      </div>
    </div>

    <section class="menu" id="menu">
      <h1 class="heading">You May Also <span>Like</span></h1>
      <div class="box-container">
        <div class="product-cont">
          <div class="row">
            <div class="col-md-4">
              <a href="Americano.php" class="Details">
                <div class="box">
                  <img src="assets/images/cart-item-1.png" alt="" class="product-img" />
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
                  <img src="assets/images/cart-item-2.png" alt="" class="product-img" />
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
                  <img src="assets/images/cart-item-3.png" alt="" class="product-img" />
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
                  <img src="assets/images/cart-item-4.png" alt="" class="product-img" />
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
                  <img src="assets/images/cart-item-5.png" alt="" class="product-img" />
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
                  <img src="assets/images/cart-item-6.png" alt="" class="product-img" />
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
                  <img src="assets/images/cart-item-7.png" alt="" class="product-img" />
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
                  <img src="assets/images/cart-item-8.png" alt="" class="product-img" />
                  <h3 class="product-title">Specialty Brews (12 OZ)</h3>
                  <div class="price">₱85.00</div>
                  <a class="add-cart" onclick="redirectCart()">Add to Cart</a>
                </div>
              </a>
            </div>
            <br />
            <div class="col-md-4">
              <a href="Cappuccino.php" class="Details">
                <div class="box">
                  <img src="assets/images/cart-item-9.png" alt="" class="product-img" />
                  <h3 class="product-title">Cappuccino</h3>
                  <div class="price">₱10.00</div>
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
                  <img src="assets/images/cart-item-10.png" alt="" class="product-img" />
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
                  <img src="assets/images/cart-item-11.png" alt="" class="product-img" />
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
                  <img src="assets/images/cart-item-12.png" alt="" class="product-img" />
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
    <section class="footer">
      <div class="footer-container">
        <div class="logo">
          <img src="logo.png" class="img" /><br />
          <i class="fas fa-envelope"></i>
          <p>abfiguerrez18@gmail.com</p>
          <br />
          <i class="fas fa-phone"></i>
          <p>+63 917-134-1422</p>
          <br />
          <i class="fab fa-facebook-messenger"></i>
          <p>@kapetanncoffee</p>
          <br />
        </div>
        <div class="support">
          <h2>Support</h2>
          <br />
          <a href="#">Contact Us</a>
          <a href="#">Customer Service</a>
          <a href="#">Chatbot Inquiry</a>
          <a href="#">Submit a Ticket</a>
        </div>
        <div class="company">
          <h2>Company</h2>
          <br />
          <a href="#">About Us</a>
          <a href="#">Affiliates</a>
          <a href="#">Resources</a>
          <a href="#">Partnership</a>
          <a href="#">Suppliers</a>
        </div>
        <div class="newsletters">
          <h2>Newsletters</h2>
          <br />
          <p>Subscribe to our newsletter for news and updates!</p>
          <div class="input-wrapper">
            <input
              type="email"
              class="newsletter"
              placeholder="Your email address"
            />
            <i id="paper-plane-icon" class="fas fa-paper-plane"></i>
          </div>
        </div>
        <div class="credit">
          <hr />
          <br />
          <h2>Coffee © 2023 | All Rights Reserved.</h2>
          <h2>
            Designed by <span>YASHPAL SINGH & RAJDEEP KAUR</span> | BSc IT
          </h2>
        </div>
      </div>
    </section>
  </body>
</html>
