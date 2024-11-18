<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.html");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>ecommerce Website</title>
</head>

<body>
    <!-- Header -->
    <header class="header" id="header">
        <!-- Top Nav -->
        <div class="top-nav">
            <div class="container d-flex">
                <p>Order Online Or Call Us: (+91) 8064895329, 8236597581</p>
                <ul class="d-flex">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">FAQ</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="navigation">
            <div class="nav-center container d-flex">
                <a href="index.php" class="logo">
                    <h1>Agri Mart</h1>
                </a>

                <ul class="nav-list d-flex">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="product.php" class="nav-link">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a href="terms.xml" class="nav-link">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
<!--                     <li class="nav-item"> -->
<!--                         <a href="index.php" class="nav-link"><?php echo "Welcome " . $_SESSION['username'] ?></a> -->
<!--                     </li> -->
                </ul>

                <div class="icons d-flex">
                    <a href="login.html" class="icon">
                        <i class="bx bx-user"></i>
                    </a>
                    <a href="search.php" class="icon">
                        <i class="bx bx-search"></i>
                    </a>
                    <div class="icon">
                        <i class="bx bx-heart"></i>
                        <span class="d-flex">0</span>
                    </div>
                    <a href="cart.php" class="icon">
                        <i class="bx bx-cart"></i>
                        <span class="d-flex">0</span>
                    </a>
                    <a href="logout.php" class="icon">
                        <i class="bx bx-log-out"></i>
                    </a>
                </div>

                <div class="hamburger">
                    <i class="bx bx-menu-alt-left"></i>
                </div>
            </div>
        </div>

        <div class="hero">
            <div class="glide" id="glide_1">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="center">
                                <div class="left">
                                    <span class="">New and Improved Formula</span>
                                    <h1 class="">NEW COLLECTION!</h1>
                                    <p>The best quality seeds and agrochemical out there...</p>
                                    <a href="product.php" class="hero-btn">SHOP NOW</a>
                                </div>
                                <div class="right">
                                         <img class="img1" src="./images/plant.png"  alt="">
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="center">
                                <div class="left">
                                    <span>New and Improved Formula</span>
                                    <h1>THE PERFECT CHOICE!</h1>
                                    <p>The best quality seeds and agrochemical out there...</p>
                                    <a href="product.php" class="hero-btn">SHOP NOW</a>
                                </div>
                                <div class="right">
                                         <img class="img1" src="./images/plant.png" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Categories Section -->
    <section class="section category">
        <div class="cat-center">
            <div class="cat">
                <a href="#" ><img src="./images/seeds_cat.jpg" alt="SEEDS" /></a>
                <div>
                    <a href="#" ><p>SEEDS</p></a>
                </div>
            </div>
            <div class="cat">
                <a href="#" ><img src="./images/fertilizer_cat.jpg" alt="" /></a>
                <div>
                    <a href="#" ><p>FERTILIZERS</p></a>
                </div>
            </div>
            <div class="cat">
                <a href="#" ><img src="./images/pesticides_cat.jpg" alt="" /></a>
                <div>
                    <a href="#" ><p>PESTICIDES</p></a>
                </div>
            </div>
        </div>
    </section>

    <!-- New Arrivals -->
    <section class="section new-arrival">
        <div class="title">
            <h1>NEW ARRIVALS</h1>
            <p>All the latest with enhanced formula...</p>
        </div>

        <div class="product-center">

            <div class="product-item">
                <div class="overlay">
                    <a href="RAVK_NPK-DAP_FERTILIZER.php" class="product-thumb">
                        <img src="./images/RAVK_NPK-DAP_FERTILIZER.jpg" alt="RAVK_NPK-DAP_FERTILIZER" />
                    </a>
                    <span class="discount">1 Kg</span>
                </div>
                <div class="product-info">
                    <span>FERTILIZERS</span>
                    <a href="RAVK_NPK-DAP_FERTILIZER.php">RAVK NPK-DAP FERTILIZER</a>
                    <h4>₹349.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><a href="RAVK_NPK-DAP_FERTILIZER.php"><i class="bx bx-search"></a></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
                </a>
                </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="GO_GARDEN_NPK_FERTILIZER.php" class="product-thumb">
                        <img src="./images/GO_GARDEN_NPK_19-19-19.jpg" alt="GO_GARDEN_NPK_19-19-19" />
                    </a>
                    <span class="discount">1 Kg</span>
                </div>

                <div class="product-info">
                    <span>FERTILIZERS</span>
                    <a href="GO_GARDEN_NPK_FERTILIZER.php">GO GARDEN NPK_19-19-19</a>
                    <h4>₹239.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><a href="GO_GARDEN_NPK_FERTILIZER.php"><i class="bx bx-search"></i></a></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="UGAOO_COW_MANURE.php" class="product-thumb">
                        <img src="./images/Ugaoo_cow_manure.jpg" alt="Ugaoo_Cow_manure" />
                    </a>
                    <span class="discount">1 Kg</span>
                </div>
                <div class="product-info">
                    <span>FERTILIZERS</span>
                    <a href="UGAOO_COW_MANURE.php">UGAOO COW MANURE</a>
                    <h4>₹149.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><a href="UGAOO_COW_MANURE.php"><i class="bx bx-search"></i></a></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="TRUST_BASKET_NEEM_POWDER.php" class="product-thumb">
                        <img src="./images/trustbasket_neem_powder.jpg" alt="Trustbasket_neem_powder" />
                    </a>
                    <span class="discount">2 Kg</span>
                </div>
                <div class="product-info">
                    <span>PESTICIDES</span>
                    <a href="TRUST_BASKET_NEEM_POWDER.php">TRUST BASKET NEEM POWDER</a>
                    <h4>₹839.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><a href="TRUST_BASKET_NEEM_POWDER.php"><i class="bx bx-search"></i></a></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="EXFERT_PESTFIX.php" class="product-thumb">
                        <img src="./images/pest_fix.jpg" alt="Pest fix pesticide" />
                    </a>
                    <span class="discount">1 L</span>
                </div>
                <div class="product-info">
                    <span>PESTICIDES</span>
                    <a href="EXFERT_PESTFIX.php">EXFERT PEST FIX</a>
                    <h4>₹649.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><a href="EXFERT_PESTFIX.php"><i class="bx bx-search"></i></a></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="Beauveria_bio_insecticide.php" class="product-thumb">
                        <img src="./images/BEAUVERIA_BIO_INSECTICIDE.jpg" alt="BEAUVERIA BIO INSECTICIDE" />
                    </a>
                    <span class="discount">1 Kg</span>
                </div>
                <div class="product-info">
                    <span>PESTICIDES</span>
                    <a href="Beauveria_bio_insecticide.php">BEAUVERIA_BIO_INSECTICIDE</a>
                    <h4>₹349.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><a href="Beauveria_bio_insecticide.php"><i class="bx bx-search"></i></a></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="countgreen_plus_Sweetcorn.php" class="product-thumb">
                        <img src="./images/countgreen_plus_sweetcorn_seeds.jpg" alt="countgreen_plus_sweetcorn_seeds" />
                    </a>
                    <span class="discount">1 Kg</span>
                </div>
                <div class="product-info">
                    <span>SEEDS</span>
                    <a href="countgreen_plus_Sweetcorn.php">COUNTGREEN PLUS SWEETCORN</a>
                    <h4>₹429.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><a href="countgreen_plus_Sweetcorn.php"><i class="bx bx-search"></i></a></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="Sakshi_Farms_basmati_paddy.php" class="product-thumb">
                        <img src="./images/sakshi_farm_basmati.jpg" alt="Sakshi_farms_basmati_Seeds" />
                    </a>
                    <span class="discount">1 Kg</span>
                </div>
                <div class="product-info">
                    <span>SEEDS</span>
                    <a href="Sakshi_Farms_basmati_paddy.php">SAKSHI FARMS BASMATI PADDY</a>
                    <h4>₹899.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><a href="Sakshi_Farms_basmati_paddy.html"><i class="bx bx-search"></i></a></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Promo -->

    <section class="section banner">
        <div class="left">
            <span class="trend">Exclusive Deal</span>
            <h1>USE CODE : NEW25</h1>
            <p>Get 25% <span class="color">discount</span> upto ₹400</p>
            <a href="product.php" class="btn btn-1">Discover Now</a>
        </div>
        <div class="right">
            <img src="./images/banner.png" height="100%" alt="">
        </div>
    </section>




    <!-- Featured -->

    <section class="section new-arrival">
        <div class="title">
            <h1>Featured</h1>
            <p>All the latest picked with more discount</p>
        </div>

        <div class="product-center">
            <div class="product-item">
                <div class="overlay">
                    <a href="Sakshi_Farms_basmati_paddy.php" class="product-thumb">
                        <img src="./images/sakshi_farm_basmati.jpg" alt="Sakshi_farms_basmati_Seeds" />
                    </a>
                    <span class="discount">30%</span>
                </div>
                <div class="product-info">
                    <span>SEEDS</span>
                    <a href="Sakshi_Farms_basmati_paddy.php">SAKSHI FARMS BASMATI PADDY</a>
                    <h4>₹899.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><a href="Sakshi_Farms_basmati_paddy.php"><i class="bx bx-search"></i></a></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="UGAOO_COW_MANURE.php" class="product-thumb">
                        <img src="./images/Ugaoo_cow_manure.jpg" alt="Ugaoo_Cow_manure" />
                    </a>
                    <span class="discount">1 Kg</span>
                </div>
                <div class="product-info">
                    <span>FERTILIZERS</span>
                    <a href="UGAOO_COW_MANURE.php">UGAOO COW MANURE</a>
                    <h4>₹149.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><a href="UGAOO_COW_MANURE.php"><i class="bx bx-search"></i></a></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="./images/erwon_ssp_fertilizer.jpg" alt="erwon_ssp_fertilizer" />
                    </a>
                    <span class="discount">40%</span>
                </div>
                <div class="product-info">
                    <span>FERTILIZERS</span>
                    <a href="">ERWON SSP</a>
                    <h4>₹849.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><a href=""><i class="bx bx-search"></i></a></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="./images/URBAN_GARDENS_EPSOM_SALT.jpg" alt="URBAN_GARDENS_EPSOM_SALT" />
                    </a>
                    <span class="discount">20%</span>
                </div>
                <div class="product-info">
                    <span>FERTILIZERS</span>
                    <a href="">URBAN GARDENS EPSOM SALT</a>
                    <h4>₹249.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><a href=""><i class="bx bx-search"></i></a></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>

    </section>

    <!-- Contact -->
    <section class="section contact">
        <div class="row">
            <div class="col">
                <h2>EXCELLENT SUPPORT</h2>
                <p>We love our customers and they can reach us any time
                    of day we will be at your service 24/7</p>
                <a href="contact.php" class="btn btn-1">Contact</a>
            </div>
            <div class="col">
                <form action="">
                    <div>
                        <input type="email" placeholder="Email Address">
                        <a href="">Send</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="row">
            <div class="col d-flex">
                <h4>INFORMATION</h4>
                <a href="about.php">About us</a>
                <a href="contact.php">Contact Us</a>
                <a href="terms.xml">Term & Conditions</a>
                <a href="">Shipping Guide</a>
            </div>
            <div class="col d-flex">
                <h4>USEFUL LINK</h4>
                <a href="">Online Store</a>
                <a href="">Customer Services</a>
                <a href="">Promotion</a>
                <a href="">Top Brands</a>
            </div>
            <div class="col d-flex">
                <span><i class='bx bxl-facebook-square'></i></span>
                <span><i class='bx bxl-instagram-alt'></i></span>
                <span><i class='bx bxl-github'></i></span>
                <span><i class='bx bxl-twitter'></i></span>
                <span><i class='bx bxl-pinterest'></i></span>
            </div>
        </div>
    </footer>


    <!-- PopUp -->
<!--     <div class="popup hide-popup"> -->
<!--         <div class="popup-content"> -->
<!--             <div class="popup-close"> -->
<!--                 <i class='bx bx-x'></i> -->
<!--             </div> -->
<!--             <div class="popup-left"> -->
<!--                 <div class="popup-img-container"> -->
<!--                     <img class="popup-img" src="./images/popup.jpg" alt="popup"> -->
<!--                 </div> -->
<!--             </div> -->
<!--             <div class="popup-right"> -->
<!--                 <div class="right-content"> -->
<!--                     <h1>Get Discount <span>50%</span> Off</h1> -->
<!--                     <p>Sign up to our newsletter and save 30% for you next purchase. No spam, we promise! -->
<!--                     </p> -->
<!--                     <form action="#"> -->
<!--                         <input type="email" placeholder="Enter your email..." class="popup-form"> -->
<!--                         <a href="#">Subscribe</a> -->
<!--                     </form> -->
<!--                 </div> -->
<!--             </div> -->
<!--         </div> -->
<!--     </div> -->

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<script src="./js/slider.js"></script>
<script src="./js/index.js"></script>

</html>