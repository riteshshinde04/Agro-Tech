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
    <title>Your Cart</title>
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

    <!-- Cart Items -->
    <div class="container cart">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="./images/Ugaoo_cow_manure.jpg" alt="" />
              <div>
                <p>Ugaoo cow manure</p>
                <span>Price: ₹149.00</span> <br />
                <a href="#">remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1" /></td>
          <td>₹149.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="./images/GO_GARDEN_NPK_19-19-19.jpg" alt="" />
              <div>
                <p>GO garden NPK</p>
                <span>Price: ₹239.00</span> <br />
                <a href="#">remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1" /></td>
          <td>₹239.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="./images/trustbasket_neem_powder.jpg" alt="" />
              <div>
                <p>TRUST BASKET NEEM POWDER</p>
                <span>Price: ₹839.00</span> <br />
                <a href="#">remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1" /></td>
          <td>₹839.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="./images/pest_fix.jpg" alt="" />
              <div>
                <p>EXPERT PEST FIX</p>
                <span>Price: ₹649.00</span> <br />
                <a href="#">remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1" /></td>
          <td>₹649.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="./images/countgreen_plus_sweetcorn_seeds.jpg" alt="" />
              <div>
                <p>Countgreen plus sweet corn</p>
                <span>Price: ₹429.00</span> <br />
                <a href="#">remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1" /></td>
          <td>₹429.00</td>
        </tr>
      </table>
      <div class="total-price">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>₹2,305</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>₹414.9</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>₹2,719.9</td>
          </tr>
        </table>
        <a href="https://www.paypal.com/ncp/payment/KTPG79M8BCR9E" class="checkout btn">Proceed To Checkout</a>
<!--          checkout.php-->
      </div>
    </div>

    <!-- Latest Products -->
    <section class="section featured">
      <div class="top container">
        <h1>Latest Products</h1>
        <a href="#" class="view-more">View more</a>
      </div>
      <div class="product-center container">
        <div class="product-item">
          <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="./images/GO_GARDEN_NPK_19-19-19.jpg" alt="GO_GARDEN_NPK_19-19-19" />
                    </a>
                    <span class="discount">1 Kg</span>
                </div>

                <div class="product-info">
                    <span>FERTILIZERS</span>
                    <a href="">GO GARDEN NPK_19-19-19</a>
                    <h4>₹239.00</h4>
                </div>
                <ul class="icons">
                    <li><i class="bx bx-heart"></i></li>
                    <li><i class="bx bx-search"></i></li>
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
</html>
