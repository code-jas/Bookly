<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Order Status - MyBook | Bookly</title>
   <!-- import icons -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
   <!-- root css -->
   <link rel="stylesheet" href="../assets/css/root.css">
   <!-- navbar css -->
   <link rel="stylesheet" href="../assets/css/navbar.css">
   <!-- <link rel="stylesheet" href="../assets/css/signup.css"> -->
   <!-- footer css -->
   <link rel="stylesheet" href="../assets/css/footer.css">

   <!-- my-books css -->
   <link rel="stylesheet" href="../assets/css/my-books.css">
   <!-- my-books - ORDER STATUS css -->
   <link rel="stylesheet" href="../assets/css/mybook-order-status.css">


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
            <a href="viewcart" class="sidebar-link">View
               Cart</a>
            <a href="orderstatus" class="sidebar-link">Order Status</a>
            <a href="purchasehistory" class="sidebar-link sidebar-active">Purchase History</a>
         </div>
      </nav>

      <div class="purchase_history_details_container" style="overflow-x: auto;">
         <div class="purchase_history_details_header">
            <h1>Purchase History</h1>
         </div>
         <div class="sidebar_line_break"></div>
         <section class="purchase_history_tbl_cont">
            <div class="ph-tbl-header-cont">
               <span class="ph-tbl-header-item">
                  <p>Time</p>
               </span>
               <span class="ph-tbl-header-item">
                  <p>Book</p>
               </span>
               <span class="ph-tbl-header-item">
                  <p>Price</p>
               </span>
               <span class="ph-tbl-header-item">
                  <p>Reference</p>
               </span>
               <span class="ph-tbl-header-item">
                  <p></p>
               </span>
            </div>

            <div class="ph-tbl-body-cont">
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>Harry Potter Book Bundle and the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p><i class="fa-solid fa-angle-right view_more"></i></p>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>
               <div class="ph-tbl-body-receipt-item">
                  <span class="ph-tbl-body-inline-item">
                     <p>2022-05-01 13:07</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>the Squid Game with StartUp CoreanDrama</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>250</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <p>0xe94a9b7eb3</p>
                  </span>
                  <span class="ph-tbl-body-inline-item">
                     <i class="fa-solid fa-angle-right view_more"></i>
                  </span>
               </div>
               <div class="tbl_break_jqe92"></div>


            </div>

         </section>


      </div>
   </div>
</div>





<!-- END | VIEW CART -->




<?php
   
   include("footer.php");
   
   ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="../assets/javascript/navbar.js"></script>
<script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>

<body>

</body>

</html>