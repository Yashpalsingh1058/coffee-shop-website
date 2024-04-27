<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Coffee Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2Hhh_14Uam62GXGaTMcXWhhVkYg0EbDY&callback=initMap"
        async defer></script>

    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/convo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- font awesome cdn link -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico"><!-- Favicon / Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- Google font cdn link -->
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap");

    .footer .support,
    .footer .company,
    .footer .newsletters {
        flex: 0 0 calc(20% - 30px);
    }

    /* .carousel {
       
    } */

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
        height: 59rem;
    }

    .carousel-inner .carousel-item {
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
    }

    .carousel-inner .carousel-item {
        background-size: cover;
        width: 100%;
    }

    .carousel-item {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: fill;
        border-top-right-radius: 9rem;
    border-bottom-left-radius: 9rem;
    }

    .carousel-control-prev {
    position: absolute;
    top: 42rem;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    padding: 0;
    color: #fff;
    text-align: center;
    background: 0 0;
    /* border: 0; */
    transition: opacity .15s ease;
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 1.25rem;
    left: 15%;
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
    color: #fff;
    text-align: center;
    top: 16rem;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(4, 9, 30, 0.3);
    border: 4px solid #ff6e00a3;
    border-top-right-radius: 9rem;
    border-bottom-left-radius: 9rem;
}

.highlight{
    color: #ff6b00;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-family: 'FontAwesome';
}

    </style>
</head>

<body>

    <!-- HEADER SECTION -->
    <?php 
    include('header.php');
    ?>

  

    <section class="home" id="home" style="padding: initial; margin-top: 8rem;">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="firstimg.jpg" class="d-block w-100" alt="first-img">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <div class="content">
                    <h3><span class="highlight">Welcome</span> to Coffee Shop</h3>
                    <p>
                        <strong>We are open 4:00 PM to 9:00 PM.</strong>
                    </p>
                    <a href="menu.php" class="btn btn-dark text-decoration-none">Order Now!</a>
                </div>
            </div>

            </div>
        <div class="carousel-item">
            <img src="second.jpg" class="d-block w-100" alt="next-img">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <div class="content">
                    <h3><span class="highlight">Join</span> Us for Happy Treet!</h3>
                    <p>
                        <strong>Enjoy our favorite drinks.</strong>
                    </p>
                    <a href="users/registeration.php" class="btn btn-dark text-decoration-none">Register Now</a>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img src="second.jpg" class="d-block w-100" alt="first-img">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <div class="content">
                    <h3><span class="highlight">Discover</span> Our Delicious Menu!</h3>
                    <p>
                        <strong>Try our special brews and treats.</strong>
                    </p>
                    <a href="#menu" class="btn btn-dark text-decoration-none">View Menu</a>
                </div>
            </div>
        </div>
    </div>
</div>

    </section>


    <!-- ABOUT US SECTION -->
    <section class="about" id="about">
        <h1 class="heading"> <span>About</span> Us</h1>
        <div class="row g-0">
            <div class="image">
                <img src="assets/images/about-img.png" alt="" class="img-fluid">
            </div>
            <div class="content">
                <h3>Welcome to KapeTann!</h3>
                <p>
                    At KapeTann Coffee Shop, we are passionate about coffee and believe
                    that every cup tells a story. We are a cozy coffee shop located
                    in the heart of the city, dedicated to providing an exceptional
                    coffee experience to our customers. Our love for coffee has led
                    us on a voyage of exploration and discovery, as we travel the
                    world in search of the finest coffee beans, carefully roasted
                    and brewed to perfection.
                </p>
                <p>
                    But coffee is not just a drink, it's an experience. Our warm and
                    inviting atmosphere at KapeTann is designed to be a haven
                    for coffee lovers, where they can relax, connect, and embark
                    on their own coffee voyages.
                </p>
                <a href="#" class="btn btn-dark text-decoration-none">Learn More</a>
            </div>
        </div>
    </section>

    <!-- MENU SECTION -->
    <section class="menu" id="menu" style="width: initial;">
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
                        <a href="index.php" class="Details">
                            <div class="box">
                                <img src="assets/images/cart-item-9.png" alt="" class="product-img" />
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




    <!-- GALLERY SECTION -->
    <section class="gallery" id="gallery">
        <h1 class="heading">The <span>Gallery</span></h1>
        <div class="box-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/gallery1.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <h3 class="gallery-title">Picture 1</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/gallery2.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <h3 class="gallery-title">Picture 2</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/gallery3.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <h3 class="gallery-title">Picture 3</h3>
                            </div>
                        </div>
                    </div>
                </div><br />
                <div class="row pic-to-hide">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/gallery4.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <h3 class="gallery-title">Picture 4</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/gallery4.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <h3 class="gallery-title">Picture 4</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/gallery5.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <h3 class="gallery-title">Picture 5</h3>
                            </div>
                        </div>
                    </div>
                </div><br />
                <center>
                    <button id="showBtn" class="btn btn-dark">SHOW MORE</button>
                           
                </center>
            </div>
        </div>
    </section>

    <!-- BLOGS SECTION -->
    <section class="blogs" id="blogs">
        <h1 class="heading">Our <span>Blogs</span></h1>
        <div class="box-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/pour.jpg" alt="">
                            </div>
                            <div class="content">
                                <a href="https://www.thewaytocoffee.com/batch-brew-vs-pour-over/" target="_blank"
                                    class="title text-decoration-none">Batch Brew vs. Pour Over | The Pros and Cons
                                    Experienced by Coffee Professionals</a>
                                <span>by The Way to Coffee</span>
                                <p>Thinking back 15-20 years, I remember my parents going about their morning ritual of
                                    brewing coffee on weekends before burying...</p>
                                <center>
                                    <a href="https://www.thewaytocoffee.com/batch-brew-vs-pour-over/" target="_blank"
                                        class="btn">Read More</a>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/carbon.webp" alt="">
                            </div>
                            <div class="content">
                                <a href="https://www.taylorsofharrogate.co.uk/news/carbon-neutral-tea-and-coffee"
                                    target="_blank" class="title text-decoration-none">Carbon Neutral Tea and Coffee</a>
                                <span>by Taylors editorial team</span>
                                <p>All our tea and coffee is carbon neutral – but what does that actually mean? Here’s
                                    an explanation of how we’ve lowered our carbon footprint, and the three projects in
                                    Kenya, Malawi and Uganda which have reduced the emissions of our products to...</p>
                                <center>
                                    <a href="https://www.taylorsofharrogate.co.uk/news/carbon-neutral-tea-and-coffee"
                                        target="_blank" class="btn">Read More</a>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/coffeemaker.jpg" alt="">
                            </div>
                            <div class="content">
                                <a href="https://coffeestylish.com/best-drip-coffee-makers/" target="_blank"
                                    class="title text-decoration-none">BEST DRIP COFFEE MAKERS 2020</a>
                                <span>by CoffeeStylish.com</span>
                                <p>What is a good coffee maker? A good home coffee maker should have removable parts so
                                    it can be cleaned completely because you don’t want mold or buildups in your
                                    machine. It should be fast. It...</p>
                                <center>
                                    <a href="https://coffeestylish.com/best-drip-coffee-makers/" target="_blank"
                                        class="btn">Read More</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="review" id="review">
        <h1 class="heading"><span>Testimo</span>nials</h1>
        <div class="box-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/quote-img.png" alt="" class="quote">
                            <p>
                                As a coffee aficionado, I'm always on the hunt for the perfect brew. I found it here.
                                The baristas are true artisans, crafting each cup with precision and passion. Whether
                                it's a quick espresso or a leisurely pour-over, this place never disappoints.
                            </p>
                            <img src="assets/images/pic-1.png" alt="" class="user">
                            <h3>Jane Doe</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/quote-img.png" alt="" class="quote">
                            <p>
                                This coffee shop isn't just about great coffee; it's about community. I've met some of
                                my closest friends here over a shared love for caffeine and conversation. The cozy
                                atmosphere and friendly staff make it feel like a home away from home.
                            </p>
                            <img src="assets/images/pic-2.png" alt="" class="user">
                            <h3>Mark</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/quote-img.png" alt="" class="quote">
                            <p>
                                The aroma of freshly brewed coffee hits you the moment you step in. Every sip is a
                                journey through rich flavors and comforting warmth. This coffee shop has become my
                                sanctuary, where I can unwind and indulge in the perfect cup.
                            </p>
                            <img src="assets/images/pic-3.png" alt="" class="user">
                            <h3>Sarah</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT US SECTION -->
    <section class="contact" id="contact">
        <h1 class="heading"><span>Cont</span>act Us</h1>
        <div class="row">
            <div id="map" class="map pull-left"></div>
            <form name="contact" method="POST" action="https://formspree.io/f/xayzavgb">
                <h3> Get in touch with us!</h3>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" name="email" placeholder="Email Address">
                </div>
                <div class="inputBox">
                    <textarea name="message" placeholder="Enter your message..."></textarea>
                </div>
                <button type="submit" class="btn">Contact Now</button>
            </form>
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
        for (const form of document.getElementsByTagName('form')) {
            form.reset();
        }
    }

    // Define a function to set a new position for the marker
    function setNewPosition(newPosition) {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: newPosition,
            zoom: 9
        });

        var marker = new google.maps.Marker({
            position: newPosition,
            map: map,
            title: 'UT MARKET'
        });
    }

    // Call the setNewPosition function with the new coordinates
    var newPosition = {
        lat: 31.6381,
        lng: 74.83883
    };
    setNewPosition(newPosition);

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
</body>

</html>
