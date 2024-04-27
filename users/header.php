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
        <script>
    document.addEventListener("DOMContentLoaded", function() {
        const pathName = window.location.pathname;
        const pageName = pathName.split("/").pop();

        if (pageName.toLowerCase() === "index.php") {
            document.querySelector(".home").classList.add("activeLink");
        }

        if (pageName.toLowerCase() === "about.php") {
            document.querySelector(".about").classList.add("activeLink");
        }

        if (pageName.toLowerCase() === "menu.php") {
            document.querySelector(".mnu").classList.add("activeLink");
        }

        if (pageName.toLowerCase() === "gallery.php") {
            document.querySelector(".gallery").classList.add("activeLink");
        }

        if (pageName.toLowerCase() === "blogs.php") {
            document.querySelector(".blogs").classList.add("activeLink");
        }

        if (pageName.toLowerCase() === "contact.php") {
            document.querySelector(".contact").classList.add("activeLink");
        }

     
    });
    </script>
    <style>
   .activeLink {
        color: #ff6b00 !important;
        background: #392414;
        padding: 2vmin 2vmin;
        font-weight: 900;
        border-radius: 3px;
    }

    .add-to-cart-notification {
        position: absolute;
    top: 15px;
    right: 86px;
    background-color: #ff6b00;
    color: #392414 !important;
    width: 24px;
    height: 22px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    /* padding: 8px; */
    font-size: 22px !important;
    text-align: center;
        }
    </style>
    </head>

<body>
<!-- HEADER SECTION -->
<header class="header">
        <a href="index.php" class="logo">
            <img src="../assets/images/logo.png" class="img-logo" alt="KapeTann Logo">
        </a>

        <!-- MAIN MENU FOR SMALLER DEVICES -->
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="index.php"  aria-current="page" class="text-decoration-none home">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="text-decoration-none about">About</a>
                </li>
                <li class="nav-item">
                    <a href="menu.php" class="text-decoration-none mnu">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="gallery.php" class="text-decoration-none gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="blogs.php" class="text-decoration-none blogs">Blogs</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="text-decoration-none contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="text-decoration-none">Logout</a>
                </li>
            </ul>
            </div>
        </nav>
        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn">
                 <!-- Notification Bubble -->
                <div class="add-to-cart-notification">0</div>
            </div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <!-- SEARCH TEXT BOX -->
        <div class="search-form">
            <input type="search" id="search-box" class="form-control" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <!-- CART SECTION -->
        <div class="cart">
            <h2 class="cart-title">Your Cart:</h2>
            <div class="cart-content"></div>
            <div class="total">
                <div class="total-title">Total: </div>
                <div class="total-price">₱0</div>
            </div>
         
            <!-- BUY BUTTON -->
            <a href="order_placed.php" style="text-decoration: none;"><button type="button" class="btn-buy">Checkout Now</button></a>
        </div>
    </header>
     <!-- JS File Link -->
     <script src="assets/js/responses.js"></script>
    <script src="assets/js/convo.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
    var currentPageUrl = window.location.pathname;

    // Find the corresponding menu item and add 'active' class
    var navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(function(link) {
        if (link.getAttribute('href') === currentPageUrl) {
            link.classList.add('active');
        }
    });
});
    // CODE FOR THE FORMSPREE
    window.onbeforeunload = () => {
        for (const form of document.getElementsByTagName('form')) {
            form.reset();
        }
    }

    // CODE FOR THE GOOGLE MAPS API
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 14.99367271992383,
                lng: 120.17629231186626
            },
            zoom: 9
        });

        var marker = new google.maps.Marker({
            position: {
                lat: 14.99367271992383,
                lng: 120.17629231186626
            },
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

    // CODE FOR THE REDIRECT CART
    function redirectCart() {
        // Check if the user is logged in
        if (!"<?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : '' ?>") {
            // Redirect the user to the login page
            alert("You are not logged in. Please log into your account and try again.");
            window.location.href = "users/login.php";
        }
    }
    </script>
<!-- Add this script block at the end of your HTML body -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to update the cart notification bubble
        function updateCartNotification() {
            var cartItemsCount = document.querySelectorAll('.cart-box').length;
            var cartNotification = document.querySelector('.add-to-cart-notification');
            cartNotification.textContent = cartItemsCount;
            cartNotification.style.display = cartItemsCount > 0 ? 'block' : 'none';
        }

        // Function to add a product to the cart
        function addProductToCart(title, price, productImg) {
            // Your existing code to add product to cart goes here
            
            // After adding product to cart, update the cart notification
            updateCartNotification();
        }

        // Function to show the cart section
        function showCart() {
            cartItem.classList.add('active');
            navbar.classList.remove('active');
            searchForm.classList.remove('active');
        }

        // Add event listener to all 'Add to Cart' buttons
        var addToCartButtons = document.querySelectorAll('.add-cart');
        addToCartButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                var shopProducts = event.target.parentElement;
                var title = shopProducts.querySelector(".product-title").innerText;
                var price = shopProducts.querySelector(".price").innerText;
                var productImg = shopProducts.querySelector(".product-img").src;
                addProductToCart(title, price, productImg);
                showCart(); // Show the cart section after adding product
            });
        });

        // Initially hide the cart notification bubble
        var cartNotification = document.querySelector('.add-to-cart-notification');
        cartNotification.style.display = 'none';
    });
</script>



    </body>

</html>
