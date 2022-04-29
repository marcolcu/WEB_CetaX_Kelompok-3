<?php
  include_once $base.'./css/all-style.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,500&display=swap" rel="stylesheet">

    <title>Contact Us</title>
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
              <li><a href="home.php">Home</a></li>
              <li><a href="product.php">Product</a></li>
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="contact-us.php">Contact Us</a></li>
          </ul>
        </div>
  
        <div class="login">
          <a id="login-btn" href="login.php">Log In</a>
          <a id="sign-btn" href="signup.php">Sign Up</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
      <div class="head">
        <div class="head-text">
          <h1>Contact Us</h1>
          <p>
            Have some design? What you waiting for? <br>
            Hit the message up!!
          </p>

          <a href="#information">Hit me!</a>
        </div>
        
        <img src="images/contact-us.jpg" alt="">
      </div>

      <div id="information" class="information">
        <div class="form">
          <h3>Sent your message</h3>
          <form>
            <div class="input-row">
              <div class="input-group">
                <input type="text" required>
                <span></span>
                <label>Name</label>
              </div>

              <div class="input-group">
                <input type="text" required>
                <span></span>
                <label>Phone</label>
              </div>
            </div>

            <div class="input-row">
              <div class="input-group">
                <input type="text" required>
                <span></span>
                <label>Email</label>
              </div>

              <div class="input-group">
                <input type="text" required>
                <span></span>
                <label>Subject</label>
              </div>
            </div>

            <label>Message</label>
            <textarea rows="10" placeholder="Your Message"></textarea>

            <button type="submit">SEND</button>
          </form>
        </div>
        <div class="info">
          <h3>Reach Us</h3>

          <table>
            <tr>
              <td>Email</td>
              <td>cetax@gmail.com</td>
            </tr>
            <tr>
              <td>Phone</td>
              <td>0812-9898-2929</td>
            </tr>
            <tr>
              <td id="address">Address</td>
              <td>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0467677334577!2d106.61613675061027!3d-6.257569895448427!2m3!1f0!
                2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb56b25975f9%3A0x50c7d605ba8542f5!2sMultimedia%20Nusantara%20University!5e0!3m2!1sen!2sid!4v1650260810499
                !5m2!1sen!2sid" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </td>
            </tr>
          </table>

        </div>
      </div>
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
      <a href="product.php">
        Product
      </a>
      <a href="portfolio.php">
        Portfolio
      </a>
      <a href="about-us.php">
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