<?php
  include_once 'css/all-style.php';
  $host = 'localhost';
  $dbname = 'cetax';
  $username = 'root';
  $password = '';
  $pdo = new PDO("mysql: host=$host;dbname=$dbname",$username,$password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

  $sql = "SELECT * FROM table_portfolio WHERE id_portfolioCategory = ?";
  $result = $pdo->prepare($sql);
  $result->execute("1");
  $magazines = $result->fetchAll();
  $result->execute("2");
  $shirts = $result->fetchAll();
  $result->execute("3");
  $autos = $result->fetchAll();
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
              <li><a href="home.php">Home</a></li>
              <li><a href="product.php">Product</a></li>
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="contact-us.php">Contact Us</a></li>
          </ul>
        </div>
        <?php
          if( $_SESSION['role'] != null){
            //nanti masukin yg profile sama log out button disini
          }
          else{
        ?>
          <div class="login">
            <a id="login-btn" href="login.php">Log In</a>
            <a id="sign-btn" href="signup.php">Sign Up</a>
          </div>
        <?   
          }
        ?>
    </nav>

    <!-- Magazine -->
    <h1 id="magazine-title">Magazine Company</h1>
    <div class="magazine">
      <?php foreach($magazines as $key=>$magazine) :?>
        <div class="magazine-box">
            <div class="magazine-img">
                <img src="<?php echo stripslashes($magazine->portfolio_photo) ?>"alt="">
            </div>
        </div>

        <!-- <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/vogue2.jpg" alt="">
            </div>
        </div>

        <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/vogue3.jpg" alt="">
            </div>
        </div> -->
      <?php endforeach ?>
    </div>

    <div id="magazine-btn">
        <a href="portfolio-category.php?category=<?php echo stripslashes($magazines->id_portfolioCategory ) ?>">See More</a>
    </div>

    <!-- Clothing Company -->
    <h1 id="magazine-title">Clothing Company</h1>
    <div class="magazine">
      <?php foreach($shirts as $key=>$shirt) :?>
        <div class="magazine-box">
            <div class="magazine-img">
                <img src="<?php echo stripslashes($shirt->portfolio_photo) ?>" alt="">
            </div> 
        </div>

        <!-- <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/baju2.png" alt="">
            </div>
        </div>

        <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/baju3.png" alt="">
            </div>
        </div> -->
      <?php endforeach ?>
    </div>

    <div id="magazine-btn">
        <a href="portfolio-category.php?category=<?php echo stripslashes($shirts->id_portfolioCategory ) ?>">See More</a>
    </div>

    <!-- Automobile Company -->
    <h1 id="magazine-title">Automobile Company</h1>
    <div class="magazine">
      <?php foreach($autos as $key=>$auto) :?>
        <div class="magazine-box">
            <div class="magazine-img">
                <img src="<?php echo stripslashes($auto->portfolio_photo) ?>" alt="">
            </div>
        </div>

        <!-- <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/compm2.png" alt="">
            </div>
        </div>

        <div class="magazine-box">
            <div class="magazine-img">
                <img src="images/compm3.png" alt="">
            </div>
        </div> -->
      <?php endforeach ?>
    </div>

    <div id="magazine-btn">
        <a href="portfolio-category.php?category=<?php echo stripslashes($autos->id_portfolioCategory) ?>">See More</a>
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