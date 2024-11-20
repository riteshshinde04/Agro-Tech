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
    <link rel="stylesheet" href="./css/about.css">
    <title>ecommerce Website</title>
</head>

<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="top-nav">
            <div class="container d-flex">
                <p>Order Online Or Call Us:(+91) 8081886430,7376550891</p>
                <ul class="d-flex">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="terms.xml">FAQ</a></li>
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
                    <a href="logout.php" class ="icon">
                       <i class="bx bx-log-out"></i>
                    </a>
                  </div>
            </div>
            <div class="about-section">
                <h1><p style="color:#260033">Welcome to Agri Mart:</p> <p style="color:#003333"> Your One-Stop Shop for Agricultural Essentials</p></h1>
                <p style="text-align:justify;line-height: 1.7" >At Agri Mart, we believe in nurturing the roots of agriculture with care and dedication. As an ecommerce platform dedicated to serving farmers and agricultural enthusiasts, we offer a comprehensive range of pesticides, insecticides, seeds, and fertilizers to support healthy crop growth and yield optimization. With a commitment to quality, sustainability, and customer satisfaction, Agri Mart strives to be your trusted partner in cultivating success in the fields.</p>
                <p style="text-align:left"><b>Our Mission</b></p>
                <p style="text-align:justify;line-height: 1.7" >Our mission at Agri Mart is to empower farmers with access to high-quality agricultural products that enhance productivity, promote sustainability, and drive prosperity in rural communities. We aim to foster long-term relationships built on trust, reliability, and integrity while contributing positively to the agricultural ecosystem.</p>
                <p style="text-align:left"><b>Wide Range of Products</b></p>
                <p style="text-align:justify;line-height: 1.7" >At Agri Mart, we understand the diverse needs of farmers and gardeners alike. That's why we offer a wide range of products tailored to meet the unique requirements of various crops and farming practices:<br>
                <ul>
                    <li><b><p style="text-align:left;line-height: 1.7">Pesticides:</b> Safeguard your crops against harmful pests and diseases with our selection of effective pesticides. From organic solutions to conventional formulations, we have products suitable for every pest management strategy.
                    </p></li><li><b><p style="text-align:left;line-height: 1.7">Insecticides:</b> Combat insect infestations and protect your plants from damage with our range of insecticides. Whether you're dealing with aphids, caterpillars, or mites, we have solutions to help you maintain healthy crops.
                    </p></li><li><b><p style="text-align:left;line-height: 1.7">Seeds:</b> Lay the foundation for a successful harvest with our premium quality seeds. Choose from a variety of crop seeds, including grains, vegetables, fruits, and herbs, selected for their superior genetics and performance.
                    </p></li><li><b><p style="text-align:left;line-height: 1.7">Fertilizers:</b> Nourish your soil and promote robust plant growth with our nutrient-rich fertilizers. Our range includes organic and synthetic fertilizers designed to meet the nutritional needs of different crops at various growth stages.</p>
            </p></li>
            </ul>
                <p style="text-align:left"><b>Quality Assurance</b></p>
                <p style="text-align:justify;line-height: 1.7" >At Agri Mart, quality is our top priority. We source our products from reputable manufacturers and suppliers known for their adherence to stringent quality standards and best practices. Before reaching our customers, each product undergoes rigorous testing and inspection to ensure purity, efficacy, and safety.</p>
                <p style="text-align:left"><b>Customer Service Excellence</b></p>
                <p style="text-align:justify;line-height: 1.7" >Our commitment to customer satisfaction extends beyond offering superior products. At Agri Mart, we strive to provide exceptional service at every step of your shopping journey. Our knowledgeable team is dedicated to assisting you with product selection, answering your queries, and addressing any concerns you may have. We value your feedback and continuously work to improve our services to better serve your needs.</p>
                <p style="text-align:left"><b>Sustainable Practices</b></p>
                <p style="text-align:justify;line-height: 1.7" >As stewards of the environment, we recognize the importance of sustainable agriculture in preserving natural resources and promoting ecological balance. That's why Agri Mart is committed to promoting sustainable farming practices and offering eco-friendly products that minimize environmental impact.</p>
                <p style="text-align:left"><b>Shop with Confidence</b></p>
                <p style="text-align:justify;line-height: 1.7" >Experience the convenience of online shopping with Agri Mart. Browse our extensive product catalog, place your order with ease, and enjoy doorstep delivery anywhere in the country. With secure payment options and hassle-free returns, shopping with us is safe, convenient, and reliable.</p>
                <p style="text-align:left"><b>Join the Agri Mart Family</b></p>
                <p style="text-align:justify;line-height: 1.7" >Whether you're a seasoned farmer, a gardening enthusiast, or someone passionate about agriculture, Agri Mart welcomes you to join our community. Explore our website, discover top-quality products, and embark on a journey towards bountiful harvests and sustainable farming practices with Agri Mart by your side.</p>
                <h3><p><b>Thank you for choosing Agri Mart—where growth begins, and success thrives!</b></p></h3>

            </div>
            
</body>

</html>