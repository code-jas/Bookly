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
   <link rel="stylesheet" href="../assets/css/toast.css">

   <link rel="stylesheet" href="../assets/css/buy-book-modal.css">
   <link rel="stylesheet" href="../assets/css/check-verified.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>

   <?php
   
   include("navbar.php");
   
?>




   <!-- START | VIEW CART -->
   <div class="sidebar-wrapper-outer">
      <div id="toast" style="align-self:center"></div>

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

         <div class="view_cart_details_container" id="reloader_cart">

            <div class="view_cart_details_header">
               <h1>View Cart</h1>
               <h2>2 items</h2>
            </div>
            <div class="sidebar_line_break"></div>
            <!-- MAIN CONTENT OF  BOOK CART -->
            <div id="book_cart_retriever" class="book_cart_cont">
               <?php
               include("../assets/php/retriever_view_cart.php");
            ?>


            </div>
            <div class="cart_btn_cont">
               <button class="view_cart_delete_btn">Remove</button>
               <button id="view_cart_buy_btn" class="view_cart_buy_btn">Buy</button>
            </div>

         </div>
      </div>

   </div>


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

         <!-- main -->
         <div class="buy-book-body">

            <div class="order-container-flex">
               <div class="order-item-head-between">
                  <h4>ITEMS</h4>
                  <h4>PRICE</h4>
               </div>
               <div class="order-item-body-between" id="order_item_list">
                  <!-- <div class="order-item">
                     <div class="order-short-books-desc">
                        <div class="order-img-card">
                           <img src="/assets/images/feature-books/template-1.png" alt="">
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
               <div class="order-book-br"></div>
               <div class="order-total-om">
                  <h3>TOTAL PRICE: </h3>
                  <h2 id="total_price_order">₱500</h2>
               </div>
               <button type="button" id="order-next-btn" class="submit-btn-osd1" name="button">Continue</button>
               <!-- <input class="next-btn" id="continue1-submit" type="button" value="Continue"> -->

            </div>
         </div>
         <!-- end main -->


         <!-- <button class="btn" id="next" >Next</button> -->

         <div class="summary-body-mod" id="summary_body_list">
            <h4>Delivery Address</h4>
            <div class="summary-user-add" id="user_delivery_address">

               <!-- <div class="summary-user-add-title">
                  <p>Name</p>
                  <p>Contact</p>
                  <p>Address</p>
                  <p>Payment</p>
               </div>
               <div class="summary-user-add-details">
                  <p>Sharina Atienza</p>
                  <p>09562141708</p>
                  <p>813-A Leo St., Sampaloc, Manila Brgy. 752 Zip Code 1008</p>
                  <p>Call of Duty</p>
               </div> -->

            </div>
            <h4>Book Ordered</h4>
            <div class="summary-booklist-buy" id="summary_booklist_buy">
               <!-- <div class="summary-book-item">
                  <div class="summary-img-card">
                     <img src="../assets/images/feature-books/template-1.png" alt="">
                  </div>
                  <div class="summary-book-desc">
                     <h5>Book</h5>
                     <h2>Harry Potter Book Bundle</h2>
                     <h5>Price</h5>
                     <h1>₱250</h1>
                  </div>
               </div> -->

            </div>
            <div class="order-book-br mg-b"></div>
            <div class="order-total-om">
               <h3>TOTAL PRICE: </h3>
               <h2 id="total_price_summary">₱500</h2>
            </div>

            <input type="button" class="submit-btn-osd1 next-btn" id="buy-submit-form-from-viewcart" value="Buy">

            <input class="prev-btn" id="prev-to-body" type="button" value="Back">
         </div>


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
                  3-5 days. See your order status at transaction history. </p>
            </div>

            <input class="submit-btn-osd1 fixed-bottom" id="close-button" type="button" value="Done">


         </div>


      </div>
   </div>




   <!-- END | VIEW CART -->




   <?php
   
   include("footer.php");
   
?>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   <script>
   // let isOnDivViewCart = false;
   // $("#book_cart_retriever").mouseenter(
   //    function() {
   //       isOnDivViewCart = true;
   //    }
   // );

   // $("#book_cart_retriever").mouseleave(
   //    function() {
   //       isOnDivViewCart = false;
   //    }
   // );


   // $('#book_cart_retriever').load('../assets/php/retriever_view_cart.php', {
   //    user_id: <?php //echo $user_id ?>
   // })
   // if ($('#book_cart_retriever').children('#cart-item').length > 0) {
   //    $('#vc_data_empty').hide();
   //    console.log("hide : " + $('#book_cart_retriever').children('.cart_item').length);
   // } else {
   //    $('#vc_data_empty').show();
   //    console.log("hide");

   // }


   function showRemovedCartItemToast() {
      toast({
         message: "Item removed from cart! ",
         type: "success",
         duration: 5000
      });
   }

   function showNoSelectedBooks() {
      toast({
         message: "Sorry, you have not selected any books yet.",
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
   <script src="../assets/javascript/toast.js"></script>
   <script src="../assets/javascript/navbar.js"></script>
   <script src="../assets/javascript/navbar-retriever-inner.js"></script>
   <script src="../assets/javascript/my-books.js"></script>
   <script src="../assets/javascript/buy-book.js"></script>
   <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>



</body>

</html>