<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Cart - MyBooks | Bookly</title>
   <!-- import icons -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
   <!-- root css -->
   <link rel="stylesheet" href="../assets/css/root.css">
   <!-- navbar css -->
   <link rel="stylesheet" href="../assets/css/navbar.css">
   <!-- footer css -->
   <link rel="stylesheet" href="../assets/css/footer.css">
   <!-- my-books css -->
   <link rel="stylesheet" href="../assets/css/my-books.css">

</head>



<?php
   
   include("navbar.php");
   
?>




<!-- START | VIEW CART -->
<div class="sidebar-wrapper-outer">


   <div class="sidebar-wrapper">

      <nav class="my_book_sidebar">
         <h1 class="sidebar-header">My Book</h1>
         <div class="sidebar_menu">
            <a href="viewcart" class="sidebar-link sidebar-active">View
               Cart</a>
            <a href="orderstatus" class="sidebar-link">Order Status</a>
            <a href="purchasehistory" class="sidebar-link">Purchase History</a>
         </div>

      </nav>

      <div class="view_cart_details_container">
         <div class="view_cart_details_header">
            <h1>View Cart</h1>
            <h2>2 items</h2>
         </div>
         <div class="sidebar_line_break"></div>

         <div class="book_cart_cont">
            <!-- item 1 -->
            <div class="cart_item" id="cart-item">
               <div class="cart_item_checkbox">
                  <div>
                     <label class="checkbox bounce">
                        <input type="checkbox" id="vc_check_box">
                        <svg viewBox="0 0 21 21">
                           <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                        </svg>
                     </label>
                  </div>
               </div>
               <div class="cart_item_image">
                  <img src="../assets/images/bookshop-gallery/The_Dictionary_of_Lost_Words.jpg" alt="book-1"
                     class="cart_image">
               </div>
               <div class="cart_item_title">
                  <h3>The Alchemist</h3>
                  <h4>Paulo Coelho</h4>
               </div>
               <div class="cart_item_price">
                  <h3>$15.99</h3>
               </div>
            </div>

            <!-- item 2 -->
            <div class="cart_item" id="cart-item">
               <div class="cart_item_checkbox">
                  <div>
                     <label class="checkbox bounce">
                        <input type="checkbox" id="vc_check_box">
                        <svg viewBox="0 0 21 21">
                           <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                        </svg>
                     </label>
                  </div>
               </div>
               <div class="cart_item_image">
                  <img src="../assets/images/bookshop-gallery/The_Dictionary_of_Lost_Words.jpg" alt="book-1"
                     class="cart_image">
               </div>
               <div class="cart_item_title">
                  <h3>The Alchemist</h3>
                  <h4>Paulo Coelho</h4>
               </div>
               <div class="cart_item_price">
                  <h3>$15.99</h3>
               </div>
            </div>
            <div class="cart_btn_cont">

               <button class="view_cart_delete_btn">Remove</button>
               <button class="view_cart_buy_btn">Buy</button>
            </div>


         </div>
      </div>
   </div>

</div>




<!-- END | VIEW CART -->




<?php
   
   include("../footer.php");
   
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="../assets/javascript/navbar.js"></script>
<script src="../assets/javascript/my-books.js"></script>
<script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>

<body>

</body>

</html>