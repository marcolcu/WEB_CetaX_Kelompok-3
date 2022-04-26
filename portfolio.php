<?php
  include_once $base.'./css/all-style.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link -->
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,500&display=swap" rel="stylesheet">

    <title>Portfolio</title>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
          <img src="images/cetax 1.png" alt="">
          <h1>Ceta</h1><h1 id="color">X</h1>
        </div>
  
        <div class="kanan">
          <ul class="navbar">
              <li><a href="home.html">Home</a></li>
              <li><a href="product.html">Product</a></li>
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="contact-us.html">Contact Us</a></li>
          </ul>
        </div>
  
        <div class="login">
          <a id="login-btn" href="login.html">Log In</a>
          <a id="sign-btn" href="signup.html">Sign Up</a>
        </div>
    </nav>

    <!-- Magazine -->
    <h1 id="magazine-title">Magazine Company</h1>
    <div class="magazine">
        <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/vogue1.jpeg" alt="">
            </div>
        </div>

        <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/vogue2.jpg" alt="">
            </div>
        </div>

        <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/vogue3.jpg" alt="">
            </div>
        </div>
    </div>

    <div id="magazine-btn">
        <a href="portfolio-category.html">See More</a>
    </div>

    <!-- Clothing Company -->
    <h1 id="magazine-title">Clothing Company</h1>
    <div class="magazine">
        <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/baju1.png" alt="">
            </div>
        </div>

        <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/baju2.png" alt="">
            </div>
        </div>

        <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/baju3.png" alt="">
            </div>
        </div>
    </div>

    <div id="magazine-btn">
        <a href="portfolio-category.html">See More</a>
    </div>

    <!-- Automobile Company -->
    <h1 id="magazine-title">Automobile Company</h1>
    <div class="magazine">
        <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/compm1.png" alt="">
            </div>
        </div>

        <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/compm2.png" alt="">
            </div>
        </div>

        <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/compm3.png" alt="">
            </div>
        </div>
    </div>

    <div id="magazine-btn">
        <a href="portfolio-category.html">See More</a>
    </div>

<!-- Footer -->

    <footer>
        <div class="cetax">
            <h3>CetaX</h3>
            <div class="footer-img">
                <a href="https://www.facebook.com/login/">
                  <img src="images/fb.png" alt="">
                </a>
            
                <a href="https://www.instagram.com/accounts/login/?hl=en">
                  <img src="images/ig.png" alt="">
                </a>
            
                <a href="https://www.youtube.com/">
                  <img src="images/yt.png" alt="">
                </a>
            
                <a href="">
                  <img src="" alt="">
                </a>
            </div>

            <div class="copyright">
              <p>
                &#169 2022 All Right Resource | Kelompok 2
              </p>
            </div>
        </div>

        <div class="location">
          <h3>Location info</h3>
          <p>
            Jl. Scientia Boulevard, Curug Sangereng, 
            Kec. Klp. Dua, Kabupaten Tangerang, Banten 
            15810
          </p>
        </div>

        <div class="contact-us">
          <h3>Contact Us</h3>
          <p>
            Phone 0812-9898-2929 <br>
            Customer Service 021-55231
          </p>
        </div>

        <div class="useful-link">
          <h3>Useful Link</h3>
          <a href="product.html">
            Product
          </a>
          <a href="portfolio.html">
            Portfolio
          </a>
          <a href="about-us.html">
            About Us
          </a>
          <a href="">
            FAQs
          </a>
          <a href="">
            Terms & Condition
          </a>
        </div>
    </footer>

</body>
</html>