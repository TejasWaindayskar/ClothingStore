<?php 
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clothing Ecommerce Website</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
      

        <link rel="stylesheet" href="style-test.css">
        <script src="store.js"></script>

      <!-------------------------Font Awesome Icons --------------->  
  <!-- <script src="https://kit.fontawesome.com/dad03e859c.js" crossorigin="anonymous"></script> -->
  
  <!----------x---------------Font Awesome Icons --------x------->

  <!----------x---------------Google font --------x------->
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Berkshire+Swash&family=Comic+Neue:wght@700&family=Gentium+Book+Plus:wght@400;700&family=Lato:ital,wght@0,400;0,700;0,900;1,700&family=Lexend+Deca:wght@500&family=Lexend:wght@500&family=Montserrat:wght@500&family=Open+Sans:wght@500;800&family=Roboto:wght@100;400&family=Sue+Ellen+Francisco&family=Work+Sans:wght@400;700;900&display=swap" rel="stylesheet">
      
      <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900;&display:swap">

       <!----------x---------------Google font --------x----------------->
   </head>
   <body>
    <section id="header">
               <a href="#"><img src="https://i.postimg.cc/x8ncvFjr/logo.png"></a>
               <div>
         <ul id="navbar">

    <?php if(isset($user_data['name'])): ?>
    <li>Welcome, <?php echo $user_data['name']; ?></li>
    <?php endif; ?>

    <li><a href="store.php" class="active">Home</a></li>
    <li><a href="contact.php">About Us</a></li>
    <li><a href="logout.php">Logout</a></li>
    
    </section>
   
     <section id="hero">
     <h4>Trade-in-fair</h4>
     <h2>Super value deals</h2>
     <h1>On all Products</h1>
     <p>Save more with coupons and up to 70% off!</p>
     <button>Shop Now</button>
     
   </section>
   
   <section id="feature" class="section-p1">
     <div class="fe-box">
       <img src="https://i.postimg.cc/PrN2Y6Cv/f1.png" alt="">
       <h6>Free Shipping</h6>
     </div>
     
     <div class="fe-box">
       <img src="https://i.postimg.cc/qvycxW4q/f2.png" alt="">
       <h6>Online Order</h6>
     </div>
     
     <div class="fe-box">
       <img src="https://i.postimg.cc/1Rdphyz4/f3.png" alt="">
       <h6>Save Money</h6>
     </div>
     
     <div class="fe-box">
       <img src="https://i.postimg.cc/GpYc2JFZ/f4.png" alt="">
       <h6>Promotions</h6>
     </div>
     
     <div class="fe-box">
       <img src="https://i.postimg.cc/4yFCwmv6/f5.png" alt="">
       <h6>Happy Sell</h6>
     </div>
     
     <div class="fe-box">
       <img src="https://i.postimg.cc/gJN1knTC/f6.png" alt="">
       <h6>F24/7 Support</h6>
     </div>
     
   </section>

        <section class="container content-section">
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Dark Fine Art Shirt</span>
                    <img class="shop-item-image" src="Imgs/Dark Fine Art Shirt.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">999</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Blow City Building Shirt</span>
                    <img class="shop-item-image" src="Imgs/Blow City Building New Banksy Shirt.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">1499</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Planet Printed Shirt</span>
                    <img class="shop-item-image" src="Imgs/Planet Printed Shirt.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">1099</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Humans Star Shirt</span>
                    <img class="shop-item-image" src="Imgs/Humans Star Shirt.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">1999</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Humans Sun Shirt</span>
                    <img class="shop-item-image" src="Imgs/Humans Sun Shirt.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">999</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Planet & Slogan Tee</span>
                    <img class="shop-item-image" src="Imgs/Planet & Slogan Graphic Tee.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">1499</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Humans Abstract Nature Shirt</span>
                    <img class="shop-item-image" src="Imgs/Humans Abstract Nature Shirt.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">799</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Humans Black Hole In One Shirt</span>
                    <img class="shop-item-image" src="Imgs/Humans Black Hole In One Shirt.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">2799</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Humans Eclipse Shirt</span>
                    <img class="shop-item-image" src="Imgs/Humans Eclipse Shirt.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">1799</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Humans Highest peak Shirt</span>
                    <img class="shop-item-image" src="Imgs/Humans Highest peak Shirt.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">799</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Humans Summer Sunrise Shirt</span>
                    <img class="shop-item-image" src="Imgs/Humans Summer Sunrise Shirt.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">1299</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Tako T-Shirt</span>
                    <img class="shop-item-image" src="Imgs/Tako T-Shirt.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">3799</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="container content-section">
        <h2 class="section-header" style="text-align: center">Checkout</h2>
        <div class="user-details" style="text-align: center; ">
        <div style="display: inline-block; margin-bottom: 20px;">
        <h3>User Details:</h3>
        <?php if(isset($user_data['name'])): ?>
            <p>Name: <?php echo $user_data['name']; ?></p>
            <p>Email: <?php echo $user_data['user_name']; ?></p>
            <p>Phone: <?php echo $user_data['phone']; ?></p>
            <!-- Add more user details as needed -->
        <?php else: ?>
            <p>User details not available.</p>
        <?php endif; ?>
         </div>
    <div style="display: inline-block; margin-bottom: 20px; margin-left: 80px;">
        <?php if(isset($user_data['address'])): ?>
            <h3>Address:</h3>
            <p><?php echo $user_data['address']; ?></p>
            <p><?php echo $user_data['city']; ?>, <?php echo $user_data['state']; ?></p>
        <?php endif; ?>
    </div>
</div>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">₹0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button" >PURCHASE</button>


            <footer class="section-p1">
  
                <div class="col">
                <a href="#"><img class="logo" src="https://i.postimg.cc/x8ncvFjr/logo.png"></a>
                    <h4>Contact</h4>
                     <p><strong>Address:<strong>Lane 6, Koregaon Park - Pune 411001</p>
                    <p><strong>Phone:</strong>+91 899-996-4670, +91 962-354-0820</p>
                    <p><strong>Hours:</strong>10.00 - 18.00, Mon - Sat</p>
                       <div class="follow">
                         <h4>Follow Us</h4>
                         <div class="icon">
                           <i class="fab fa-facebook-f"></i>
                           <i class="fab fa-instagram"></i>
                           <i class="fab fa-twitter"></i>
                           <i class="fab fa-youtube"></i>
                           <i class="fab fa-pinterest-p"></i>
                            </div>
                       </div>
                       </div>
                      
                    <div class="sec">   
                    <div class="col">
                      <h4>About</h4>
                      <a href="contact.php">About Us</a>
                      <a href="#">Delivery Information</a>
                      <a href="#">Privacy Policy</a>
                      <a href="#">Terms and Condition</a>
                      <a href="#">Contact Us</a>
                   </div>
                    
                    <div class="col install">
                      <h4>Install App</h4>
                      <p>From App Store or Google Play</p>
                 
                      <div class="row">
                      <img src="https://i.postimg.cc/Y2s5mLdR/app.jpg" alt="">
                      <img src="https://i.postimg.cc/7YvyWTS6/play.jpg" alt="">
                    </div>
                    <p>Secured Payment Gateways</p>
                    <img src="https://i.postimg.cc/kgfzqVRW/pay.png" alt="">
                       </div>
                  </div>
                  
                  <div class="coypright">
                      <p> © 2023 All rights reserved! made by Tejas and Elijah</p>
                    </div>
                  
                 </footer>
                
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                   
         </body>
</html>