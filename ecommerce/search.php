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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Box icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>ALL PRODUCTS</title>
  </head>

  <body>
    <!-- Navigation -->
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
<!--                         <a href="#" class="nav-link"><?php echo "Welcome " . $_SESSION['username'] ?></a> -->
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

    <!-- All Products -->
    <section class="section all-products" id="products">
      <div class="top container">
        <h1>All Products</h1>
        <form>
          <select>
            <option value="1">Defualt Sorting</option>
            <option value="2">Sort By Price</option>
            <option value="3">Sort By Popularity</option>
            <option value="4">Sort By Sale</option>
            <option value="5">Sort By Rating</option>
          </select>
          <span><i class="bx bx-chevron-down"></i></span>
        </form>
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
                    <a href="" class="product-thumb">
                        <img src="./images/BEAUVERIA_BIO_INSECTICIDE.jpg" alt="BEAUVERIA BIO INSECTICIDE" />
                    </a>
                    <span class="discount">1 Kg</span>
                </div>
                <div class="product-info">
                    <span>PESTICIDES</span>
                    <a href="">BEAUVERIA_BIO_INSECTICIDE</a>
                    <h4>₹649.00</h4>
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
                        <img src="./images/countgreen_plus_sweetcorn_seeds.jpg" alt="countgreen_plus_sweetcorn_seeds" />
                    </a>
                    <span class="discount">1 Kg</span>
                </div>
                <div class="product-info">
                    <span>SEEDS</span>
                    <a href="">COUNTGREEN PLUS SWEETCORN</a>
                    <h4>₹429.00</h4>
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
                        <img src="./images/sakshi_farm_basmati.jpg" alt="Sakshi_farms_basmati_Seeds" />
                    </a>
                    <span class="discount">1 Kg</span>
                </div>
                <div class="product-info">
                    <span>SEEDS</span>
                    <a href="">SAKSHI FARMS BASMATI PADDY</a>
                    <h4>₹899.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><a href=""><i class="bx bx-search"></i></a></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="pagination">
      <div class="container">
        <span>1</span> <span>2</span> <span>3</span> <span>4</span>
        <span><i class="bx bx-right-arrow-alt"></i></span>
      </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
      <div class="row">
        <div class="col d-flex">
          <h4>INFORMATION</h4>
          <a href="">About us</a>
          <a href="">Contact Us</a>
          <a href="">Term & Conditions</a>
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
          <span><i class="bx bxl-facebook-square"></i></span>
          <span><i class="bx bxl-instagram-alt"></i></span>
          <span><i class="bx bxl-github"></i></span>
          <span><i class="bx bxl-twitter"></i></span>
          <span><i class="bx bxl-pinterest"></i></span>
        </div>
      </div>
    </footer>
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<script src="./js/slider.js"></script>
    <script src="./js/index.js"></script>
</html>
