<?php
include 'db.php';


$sql = "SELECT * FROM shophelmet";
$products = mysqli_query($con , $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
</head>

<body>
  <!-- Navbar -->
  <section id="header">
    <a href="#"><img src="images/logo2.png" alt="" id="logo"></a>

    <div>
      <ul id="navbar">
        <li><a  href="index.html">Home</a></li>
        <li><a class="active" href="shop.php">Shop</a>
          <div class="submenu">
            <ul>
              <li><a href="#">Helmet</a></li>
              <li><a href="shopjacket.php">Jacket</a></li>
              <li><a href="shopgloves.html">Gloves</a></li>
              <li><a href="#">Toolkit</a></li>
              <li><a href="shopbp.html">Backpack</a></li>
              <li><a href="#">Sealants</a></li>
              <li><a href="#">Goggles</a></li>
            </ul>
          </div>
        </li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="about.html">About</a></li>
        <li><a c href="login.php">Sign-in/up</a></li>
        <li><a href="cart.html"><i class="fa-solid fa fa-store"></i></a></li>


      </ul>
    </div>
  </section>
<!-- Middle image -->
  <section id="page-header">
    
    <h2>#Ride Safe</h2>
    
    <p>Save more with coupons!!!!</p>
   
  </section>
  
  

<!--  products -->
  <section id="product1" class="section-p1">
    <div class="pro-container">

      <?php
      while($helmet = mysqli_fetch_assoc($products)):
      ?>

      <div class="pro">
        
        <img src="<?=$helmet['image']?>" alt="">
        <div class="des">
          <span><?=$helmet['pname']?></span>
          <h5><?=$helmet['description']?></h5>
         
         <?php

            for($count = 1; $count<=$helmet['rating']; $count++):
            ?>
            <i class="fas fa-star"></i>

            <?php
            endfor
            ?>
       
          <h4><?=$helmet['price']?></h4>
        </div>
        <a href="#"><i class="fal fa fa-shopping-cart cart"></i></a>
      </div>


      <?php
      endwhile
      ?>
     
      <!-- <div class="pro">
        <img src="images/Shop/hm2.webp" alt="">
        <div class="des">
          <span>AXOR </span>
          <h5>Retro ROGUE Gloss Black Full Face Helmet</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
          </div>
          <h4>$102</h4>
        </div>
        <a href="#"><i class="fal fa fa-shopping-cart cart"></i></a>
      </div>
   
      <div class="pro">
        <img src="images/Shop/hm3.webp" alt="">
        <div class="des">
          <span>SMK</span>
          <h5>Typhoon Matt Black (MA200) Helmet</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>


          </div>
          <h4>$85</h4>
        </div>
        <a href="#"><i class="fal fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/Shop/hm4.jpg" alt="">
        <div class="des">
          <span>SMK</span>
          <h5>Gullwing Tekker Matt Black Grey Blue Modular (MA265) Helmet</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>


          </div>
          <h4>$98</h4>
        </div>
        <a href="#"><i class="fal fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/Shop/hm5.jpg" alt="">
        <div class="des">
          <span>SMK </span>
          <h5>Twister Captain Gloss White Red (GL163) Helmet</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>


          </div>
          <h4>$87</h4>
        </div>
        <a href="#"><i class="fal fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/Shop/hm6.webp" alt="">
        <div class="des">
          <span>SMK</span>
          <h5>Allterra Fulmine Off-road Gloss Helmet (GL651)</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>


          </div>
          <h4>$99</h4>
        </div>
        <a href="#"><i class="fal fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
       
        <img src="images/Shop/hm7.jpg" alt="">
        <div class="des">
          <span>LS2 FF352</span>
          <h5>Rookie Fly Demon Matt Black Red Full Face Helmet</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>


          </div>
          <h4>$45</h4>
        </div>
        <a href="#"><i class="fal fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/Shop/hm8.jpg" alt="">
        <div class="des">
          <span>AXOR</span>
          <h5>RETRO MOTO-X Matt Black Full Face Helmet</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>


          </div>
          <h4>$70</h4>
        </div>
        <a href="#"><i class="fal fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/featuredprod/helmet1.jpg" alt="">
        <div class="des">
          <span>SMK</span>
          <h5>Gullwing Tekker Gloss Black Orange White </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>


          </div>
          <h4>$90</h4>
        </div>
        <a href="#"><i class="fal fa fa-shopping-cart cart"></i></a>
      </div>

      <div class="pro">
        <img src="images/Shop/hm9.jpg" alt="">
        <div class="des">
          <span>LS2 FF320</span>
          <h5>Exo Gloss Black Turquoise Full Face Helmet</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>


          </div>
          <h4>$55</h4>
        </div>
        <a href="#"><i class="fal fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/featuredprod/helmet3.jpg" alt="">
        <div class="des">
          <span>LS2 MX436</span>
          <h5>ioneer Evo Router Matt Black Fluorescent Yellow Dual Sport Helmet</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>


          </div>
          <h4>$119</h4>
        </div>
        <a href="#"><i class="fal fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/Shop/hm10.jpg" alt="">
        <div class="des">
          <span>Royal Enfield </span>
          <h5>MLG Copter Face Long Visior Matt Black White Helmet</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>


          </div>
          <h4>$55</h4>
        </div>
        <a href="#"><i class="fal fa fa-shopping-cart cart"></i></a>
      </div> -->
      
    </div>
  </section>

  <!-- pagination -->
  <section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fal fa fa-long-arrow-alt-right"></i></a>

  </section>
 

  <!-- news letter -->
  <section id="newsletter" class="section-p1 section-m1">
    <div class="newtext">
      <h4>Sign Up for NewsLetters</h4>
      <p>Get E-mail updates about our latest shop and <span>special offers.</span> </p>

    </div>
    <div class="form">
      <input type="text" name="" id="" placeholder="your email address">
      <button class="normal">Signup</button>
    </div>
  </section>

  <!-- footer -->
  <footer class="section-p1">
    <div class="col">
      <img src="images/logob.png" alt=""  id="logo">
      <h4>Contact</h4>
      <p><strong>Address:</strong> 662 Washington DC, street 44, USA</p>
      <p><strong>Phone:</strong> +91-12895736278/ +91-9984927485</p>
      <p><strong>Hours:</strong> 9:00 - 6:00, Mon-Fri</p>
      <div class="follow">
        <h4>Follow us:</h4>
        <div class="icon">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-pinterest"></i>
          <i class="fab fa-youtube"></i>
        </div>
      </div>
    </div>
    <div class="col">
      <h4>About</h4>
      <a href="#">About us</a>
      <a href="#">Delivery Information</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Conditions</a>
      <a href="#">Contact us</a>
    </div>
    <div class="col">
      <h4>My Account</h4>
      <a href="#">Sign In</a>
      <a href="#">View cart</a>
      <a href="#">My wishlist</a>
      <a href="#">track My Order</a>
      <a href="#">Help</a>
    </div>
    <div class="col install">
      <h4>Install App</h4>
      <p>Fromm App Store or Google Play</p>
      <div class="row">
        <img  id="logo" src="https://1000logos.net/wp-content/uploads/2021/07/Google-Play-Logo.png" alt="playsotre" >
        <img id="logo" src="images/appstore.png" alt="">

      </div>
      <p>Seccured Payment Gateways </p>
      <img id="login-play" src="https://static-assets-web.flixcart.com/fk-p-linchpin-web/fk-cp-zion/img/payment-method_69e7ec.svg" alt="secure paymentgayway">
      </div>

      <div class="copyright">
        <p>@Ak Website-- Urban Wheelz</p>
      </div>
  </footer>

  





  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>