<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book Details | Bookly</title>
   <link rel="icon" href="./assets/images/illustrations/logo.png">

   <!-- import icons -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



   <!-- root css -->
   <link rel="stylesheet" href="./assets/css/root.css">
   <!-- navbar css -->
   <link rel="stylesheet" href="./assets/css/navbar.css">
   <link rel="stylesheet" href="./assets/css/signup.css">
   <!-- footer css -->
   <link rel="stylesheet" href="./assets/css/footer.css">
   <!--BOOK SHOP CSS-->
   <link rel="stylesheet" href="./assets/css/bookdescription.css">

   <link rel="stylesheet" href="./assets/css/buy-book-modal.css">
   <link rel="stylesheet" href="./assets/css/check-verified.css">
   <link rel="stylesheet" href="./assets/css/toast.css">

</head>

<body>
   <!-- START | NAVIGATION BAR -->
   <?php
      include("navbar.php");

      include("assets/php/load-book-description.php");
   ?>




   <!--START | BOOK DESCRIPTION-->
   <section id="description-section" class="book-description-section">

      <div id="toast" style="align-self:center"></div>
      <a href="javascript:history.back()">
         <div class="ic-arrow-left">
            <i class="fa-solid fa-arrow-left-long"></i>
         </div>
      </a>

      <div class="book-description-container">
         <div class="book-content-img">
            <img class="cover-img" src="<?php echo $db_book_cover ?>" alt="<?php echo $db_title ?>" />
         </div>

         <div class="description-content">
            <div class="desc-scroll">
               <h3 class="book-title-heading"><?php echo $db_title ?></h3>
               <div class="book-content-details">
                  <h6 class="description-txt">Synopsis</h6>

                  <p class="book-sypnosis"> <?php echo $db_description ?> </p>
               </div>



            </div>
            <h6 style="padding-left: 10px" class="description-txt2">Price</h6>
            <h2 style="padding-left: 10px" class="book-price">₱<?php echo $db_price?></h2>
            <div class="button-container">
               <button id="add-to-cart-btn">Add to cart</button>
               <button class="buy-btn" id="vb-buy-book-btn">Buy</button>
            </div>
         </div>
      </div>




      <section id="more-info-section">
         <h1 class="heading">More Information</h1>
         <div class="more-info-container">
            <div class="more-info-title">
               <p id="info-title">Genre</p>
               <p id="info-title">Author</p>
               <p id="info-title">Publisher</p>
               <p id="info-title">Book Pages</p>
               <p id="info-title">Weight</p>
               <p id="info-title">Format</p>
            </div>

            <div class="more-info-title-content">
               <p id="genre-content"><?php echo $db_genre ?></p>
               <p id="author-content"><?php echo $db_author ?></p>
               <p id="publisher-content"><?php echo $db_publisher ?></p>
               <p id="length"><?php echo $db_length ?></p>
               <p id="width"><?php echo $db_width ?></p>
               <p id="format"><?php echo $db_format ?></p>
            </div>
         </div>
      </section>

   </section>


   <!-- END | BOOK DESCRIPTION-->


   <div class="buy-book-modal-container">

      <div class="buy-book-cont">
         <!-- header -->

         <div class="buy-book-head">

            <span tabIndex="0" class="close"><i class="fas fa-times"></i></span>
            <!-- radio button -->
            <div class="pro-container">

               <div class="progress-container">

                  <div class="circle active">
                     <li class="b1">ORDER</li><i class="check"></i>
                  </div>
                  <!-- <div class="circle">
                     <li class="b1">PRICING</li><i class="check"></i>
                  </div> -->
                  <div class="circle">
                     <li class="b1">SUMMARY</li><i class="check"></i>
                  </div>
                  <div class="circle">
                     <li class="b1">DONE</li><i class="check"></i>
                  </div>
                  <div class="progress" id="progress"></div>
               </div>



            </div>
         </div>
         <!--START | 1: ORDER MODAL-->
         <!-- main -->
         <div class="buy-book-body">

            <div class="order-container-flex-column">
               <p class="modal-buy-section-book-char">Book</p>
               <div class="order-img-card-buy">
                  <img src="<?php echo $db_book_cover?>" alt="<?php echo $db_title?>">
               </div>
               <p class="modal-buy-book-title"><?php echo $db_title?></p>

               <p class="modal-buy-section-book-char">Price</p>
               <p class="modal-buy-book-price">₱<?php echo $db_price?></p>

               <button id="order-next-btn" class="modal-book-submit-btn-osd1">Continue</button>
               <!-- <div class="order-item-head-between">
                  <h4>ITEMS</h4>
                  <h4>PRICE</h4>
               </div>
               <div class="order-item-body-between">
                  <div class="order-item">
                     <div class="order-short-books-desc">
                        <div class="order-img-card">
                           <img src="assets/images/feature-books/template-1.png" alt="">
                        </div>
                        <div class="order-book-desc">
                           <h5>Harry Potter Book Bundle</h5>
                           <p>Fiction</p>
                        </div>
                     </div>
                     <div class="order-price">
                        <p>₱250</p>
                     </div>
                  </div>
                  <div class="order-item">
                     <div class="order-short-books-desc">
                        <div class="order-img-card">
                           <img src="assets/images/feature-books/template-2.png" alt="">
                        </div>
                        <div class="order-book-desc">
                           <h5>Harry Potter Book Bundle</h5>
                           <p>Fiction</p>
                        </div>
                     </div>
                     <div class="order-price">
                        <p>₱250</p>
                     </div>
                  </div> -->

            </div>


            <!-- <input class="next-btn" id="continue1-submit" type="button" value="Continue"> -->

         </div>

         <!-- end main -->
         <!--END | 1: ORDER MODAL-->

         <!--START | 2: CHECKOUT MODAL-->

         <div class="summary-body-mod">
            <h4>Delivery Address</h4>
            <div class="summary-user-add">

               <div class="summary-user-add-title">
                  <p>Name</p>
                  <p>Contact</p>
                  <p>Address</p>
                  <p>Payment</p>
               </div>
               <div class="summary-user-add-details">
                  <p><?php echo ucfirst($db_firstname) ." ". ucfirst($db_lastname)?></p>
                  <p><?php echo $db_contact?></p>

                  <p> <?php echo $db_address .", ". $db_city ." Brgy. ". $db_barangay ." Zip Code " . $db_zipcode?></p>
                  <p>Cash on Delivery</p>
               </div>

            </div>
            <h4>Book Ordered</h4>
            <div class="summary-booklist-buy">
               <div class="summary-book-item book-buy-summarized-item_par">
                  <div class="summary-img-card book-buy-summarized-item">
                     <img src="<?php echo $db_book_cover?>" alt="<?php echo $db_title?>">
                  </div>
                  <div class="summary-book-desc">
                     <h5>Book</h5>
                     <h2><?php echo $db_title?></h2>
                     <h5>Price</h5>
                     <h1>₱<?php echo $db_price?></h1>
                  </div>
               </div>

            </div>
            <div class="order-book-br mg-b"></div>
            <div class="order-total-om">
               <h3>TOTAL PRICE: </h3>
               <h2>₱<?php echo $db_price?></h2>
            </div>

            <form method="POST" id="buy-submit-form">
               <input type="hidden" id="book_id " name="book_id" value="<?php echo $db_book_id?>">
               <input type="hidden" id="user_id" name="user_id" value="<?php echo $db_user_id?>">
               <input type="submit" class="submit-btn-osd1 next-btn" id="summary-next-btn" value="Buy">
            </form>

            <input class="prev-btn" id="prev-to-body" type="button" value="Back">
         </div>
         <!--END | 2: CHECKOUT MODAL-->
         <!-- START | 3: DELIVERY MODAL-->
         <div class="done-section">

            <div class="check-container">
               <input type="checkbox" id="check">
               <label for="check" class="check-es">
                  <div class="check-icon"></div>
               </label>
            </div>
            <div class="artwork-accepted">
               <h1>Thank you for ordering!</h1>
               <p>Your order has been processed. Items will be shipped within
                  3-5 minutes. See your order status at transaction history. </p>
            </div>

            <input class="submit-btn-osd1 fixed-bottom" id="close-button" type="button" value="Done">


         </div>
         <!-- END | 3: DELIVERY MODAL-->
      </div>

   </div>
   </div>







   <?php
      include("footer.php");
      // include("./assets/php/load-books.php");
   
   ?>


   <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>

   <script src="./assets/javascript/sign-in-sign-up.js"></script>
   <script src="./assets/javascript/navbar-retriever.js"></script>
   <script src="./assets/javascript/toast.js"></script>

   <script>
   let isSold = "<?php echo $db_sold?>";
   let cart_book_id = <?php echo $db_book_id?>;
   let cart_user_id = <?php echo $db_user_id ?>;

   function showSuccessToast() {
      toast({
         message: "You have successfully added this book to your cart!",
         type: "success",
         duration: 5000
      });
      // console.log("success");
   }

   function showDeletedSuccessToast() {
      toast({
         message: "Sorry, this book is no longer available.",
         type: "error",
         duration: 5000
      });
   }

   function showDeletedSuccessToastAlreadyAdded() {
      toast({
         message: "Sorry, this book is already in your cart.",
         type: "error",
         duration: 5000
      });
   }
   </script>

   <script src="./assets/javascript/buy-book.js"></script>
   <script src="./assets/javascript/global.js"></script>



</body>

</html>