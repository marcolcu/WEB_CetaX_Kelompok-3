<?php
  include_once 'css/all-style.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,500&display=swap" rel="stylesheet">

    <title>Sign Up</title>
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
<!--   
        <div class="login">
          <a id="login-btn" href="login.php">Log In</a>
          <a id="sign-btn" href="signup.php">Sign Up</a>
        </div> -->
    </nav>
  
    <!-- Welcome -->

    <center><h1 id="welcome">Hi! Welcome To CetaX</h1></center>

    <!-- Load Form page -->

    <div class="form">

        <div class="form-box">

            <div class="form-text">

                <h1>Sign up</h1>
                    <form action="php/signup-process.php" method="post">
                        <div class="txt_field">
                            <input type="text" name="email" required>
                            <span></span>
                            <label>Email</label>
                        </div>
                        <div class="txt_field">
                            <input type="text" name="user" required>
                            <span></span>
                            <label>Username</label>
                        </div>

                        <div class="txt_field">
                            <input type="password" name="pw" required>
                            <span></span>
                            <label>Password</label>
                        </div>

                        <div class="select">
                            <select name="format" id="format">
                                <option selected disabled>Choose Role</option>
                                <option value="Member">Member</option>
                                <option value="Mechanic">Admin</option>
                            </select>
                        </div>

                        <div class="forgot-pass">Forgot Password?</div>

                        <input type="submit" value="Sign Up">

                        <div class="signUp-link">
                            You're a member? <a href="login.php">Log in</a>
                        </div>
                    </form>

            </div>

            <div class="img">
                <img src="images/aset.png" alt="">
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

    <!-- Inner JS -->
    <script>
        const loader = document.querySelector('#welcome');
        const form = document.querySelector('.form');

        function init() {
            setTimeout(() => {
                loader.style.opacity = 0;
                loader.style.display = "none";
                form.style.display = "block";
                setTimeout(() => (form.style.opacity = 1) ,50)
            }, 3000);
        }

        init();  
    </script>
</body>
</html>