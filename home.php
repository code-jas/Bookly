<?php
 //  include("assets/php/db-config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home | Bookly</title>
   <!-- import icons -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
   <!-- root css -->
   <link rel="stylesheet" href="./assets/css/root.css">
   <link rel="stylesheet" href="./assets/css/navbar.css">
   <link rel="stylesheet" href="./assets/css/signup.css">
   <!-- home css -->
   <link rel="stylesheet" href="./assets/css/home.css">
   <!-- footer css -->
   <link rel="stylesheet" href="./assets/css/footer.css">
   <!-- feature-books css -->
   <link rel="stylesheet" href="./assets/css/feature-books.css">

</head>


<body>

   <!-- START | NAVIGATION BAR -->
   <?php
      include("navbar.php");
   ?>



   <div class="home">
      <div class="home-content">

         <div class="home-text">

            <p class="home-parag">Let’s make the best investements</p>
            <h1 class="home-header">Giving used books a new lease of life</h1>
            <p class="home-parag">Browse our assortment of pre-loved books to find
               your next favorite.</p>

            <button class="btn-get-started">Get Started</button>
         </div>
         <div class="home-image">
            <img src="./assets/images/illustrations/bundle-books-without-shadow.png" alt="bundle books"
               class="bundle-books-img" />
         </div>
      </div>
   </div>

   <div class="featured-books">
      <h1 class="featured-books-header">
         Featured Books for you
      </h1>
      <div class="feature-books-container">
         <button type="button" id="moveLeft" class="btn-nav">
            <span class="material-symbols-outlined left-btn">
               arrow_back_ios
            </span>
         </button>
         <!-- <div class="container-indicators">
            <div class="indicator active" data-index=0></div>
            <div class="indicator" data-index=1></div>
            <div class="indicator" data-index=2></div>
         </div> -->
         <div class="slider" id="mySlider">
            <div class="ft-books" id="ft-book0">
               <img src="./assets/images/feature-books/template-1.png" alt="" srcset="">
               <div class="description">

                  <div class="description__text-container">
                     <h2 class="description__title truncated">Other London Book One</h2>
                     <p class="description__author truncated">Angelo Silvestre</p>
                     <span class="description__price truncated">₱250</span>
                     <br>
                     <div class="cat-s truncated">
                        <span>Explosive</span>
                        <span>&middot;</span>
                        <span>Exciting</span>
                        <span>&middot;</span>
                        <span>Family</span>
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <button type="button" id="moveRight" class="btn-nav">
            <span class="material-symbols-outlined right-btn">
               arrow_forward_ios
            </span>
         </button>
      </div>



   </div>

   <div class="how-it-works">
      <h1 class="how-it-works-header">
         How Bookly goes from your online store to customer door.
      </h1>
      <div class="how-it-works-content">
         <div class="how-it-works-item">
            <div class="how-it-works-image-wrapper">

               <img src="./assets/images/illustrations/ai-create-account.svg" alt="book icon"
                  class="how-it-works-image" />
            </div>
            <div class="how-it-work-text-content">
               <h2 class="how-it-works-item-header">
                  CREATE ACCOUNT
               </h2>
               <p class="how-it-works-parag">
                  Browse our books and find the one that suits you best.
               </p>
            </div>

         </div>
         <div class="how-it-works-item">
            <div class="how-it-works-image-wrapper">
               <img src="./assets/images/illustrations/ai-wide-selection.svg" alt="book icon"
                  class="how-it-works-image" />
            </div>
            <div class="how-it-work-text-content">
               <h2 class="how-it-works-item-header">
                  WIDE SELECTION
               </h2>
               <p class="how-it-works-parag">
                  Find the cheapest book price that fits on your budget.
               </p>
            </div>

         </div>
         <div class="how-it-works-item">
            <div class="how-it-works-image-wrapper">
               <img src="./assets/images/illustrations/ai-mode-of-payment.svg" alt="book icon"
                  class="how-it-works-image" />
            </div>
            <div class="how-it-work-text-content">
               <h2 class="how-it-works-item-header">
                  MODE OF PAYMENT
               </h2>
               <p class="how-it-works-parag">
                  We only offers cash on delivery payment.
               </p>
            </div>

         </div>
         <div class="how-it-works-item">
            <div class="how-it-works-image-wrapper">
               <img src="./assets/images/illustrations/ai-delivery.svg" alt="book icon" class="how-it-works-image" />
            </div>
            <div class="how-it-work-text-content">
               <h2 class="how-it-works-item-header">
                  DELIVERY
               </h2>
               <p class="how-it-works-parag">
                  Buy it and get it delivered to your door.
               </p>
            </div>

         </div>
      </div>
   </div>

   <!-- START | FOOTER -->
   <footer class="footer-wrapper">
      <div class="footer-content">
         <div class="footer-text">
            <h1 class="footer-header">
               Stay Connected
            </h1>
            <p class="footer-parag">
               Books lists, affordable prices, special offers, and more - right in your
               inbox!
            </p>
         </div>

         <div class="footer-menu-container">

            <div class="footer-menu-item">
               <p class="footer-menu-item-header">ABOUT</p>
               <ul class="footer-list">
                  <li class="footer-item"><a href="#" class="footer-link">Contact Us</a></li>
                  <li class="footer-item"><a href="#" class="footer-link">Team</a></li>
                  <li class="footer-item"><a href="#" class="footer-link">Policy </a></li>
               </ul>
            </div>

            <div class="footer-menu-item">
               <p class="footer-menu-item-header">EXPLORE</p>
               <ul class="footer-list">
                  <li class="footer-item"><a href="#" class="footer-link">Home</a></li>
                  <li class="footer-item"><a href="#" class="footer-link">Book Shop</a></li>
                  <li class="footer-item"><a href="#" class="footer-link">About Us </a></li>
               </ul>
            </div>

            <div class="footer-menu-item">
               <p class="footer-menu-item-header">ACCOUNT</p>
               <ul class="footer-list">
                  <li class="footer-item"><a href="#" class="footer-link">Account Overview</a></li>
                  <li class="footer-item"><a href="#" class="footer-link">Edit Profile</a></li>
                  <li class="footer-item"><a href="#" class="footer-link">Change Password</a></li>
               </ul>
            </div>
         </div>

      </div>
      <div class="line-break"></div>

      <div class="footer-socmed-link">
         <a href="https://www.facebook.com/angelo.silvestre.315">
            <div class="icon facebook">

               <div class="tooltip">Facebook</div>
               <span><i class="fab fa-facebook-f"></i></span>

            </div>
         </a>
         <a href="https://twitter.com/CodeJs04">
            <div class="icon twitter">
               <div class="tooltip">Twitter</div>
               <span><i class="fab fa-twitter"></i></span>
            </div>
         </a>
         <a href="https://www.instagram.com/iamgroot04/">
            <div class="icon instagram">
               <div class="tooltip">Instagram</div>
               <span><i class="fab fa-instagram"></i></span>
            </div>
         </a>
      </div>

      <div class="footer-copyright">
         <p class="footer-copyright-text">
            © 2020 Bookly, Inc. All rights reserved.
         </p>
      </div>



   </footer>


   <!-- END | FOOTER -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="./assets/javascript/sign-in-sign-up.js"></script>
   <script src="./assets/javascript/global.js"></script>

   <script src="./assets/javascript/feature-books.js"></script>




</body>

</html>