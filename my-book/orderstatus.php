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
   <link rel="stylesheet" href="../assets/css/signup.css">
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
            <a href="orderstatus" class="sidebar-link sidebar-active">Order Status</a>
            <a href="purchasehistory" class="sidebar-link">Purchase History</a>
         </div>
      </nav>
      <div class="order_status_details_container" style="overflow-x:scroll;">
         <div class="order_status_details_header">
            <h1>Order Status</h1>
         </div>
         <div class="sidebar_line_break"></div>
         <section class="order_status_tbl_cont">
            <div class="tbl-header-cont">
               <table cellpadding="0" cellspacing="0" border="0" class="tbl_head">
                  <thead class="thead_os">
                     <tr class="tr_os">
                        <th class="td_os_title">Book</th>
                        <th>Price</th>
                        <th>Date Ordered</th>
                        <th>Status</th>
                        <th>More Info</th>
                     </tr>
                  </thead>
               </table>
            </div>
            <div class="tbl-content-cont">
               <table cellpadding="0" cellspacing="0" border="0" class="tbl_head">
                  <tbody>
                     <tr class="tr_os">
                        <td class="td_os_title">Harry Potter Book Bundle and the Squid Game with StartUp CoreanDrama
                        </td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os success-stats">Sucess</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os pending-stats">Pending</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os error-stats">Error</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os success-stats">Sucess</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os success-stats">Sucess</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os success-stats">Sucess</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os success-stats">Sucess</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os success-stats">Sucess</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os success-stats">Sucess</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os success-stats">Sucess</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os success-stats">Sucess</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os success-stats">Sucess</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os success-stats">Sucess</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os success-stats">Sucess</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>
                     <tr class="tr_os">
                        <td>Harry Potter Book Bundle</td>
                        <td>250Php</td>
                        <td>05/14/2022</td>
                        <td><span class="status_os success-stats">Sucess</span></td>
                        <td><a class="view_more_os" href="#"><span>View</span></a></td>
                     </tr>

                  </tbody>
               </table>
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
<script>
$(window).on("load resize ", function() {

   var scrollWidth = $('.tbl-content-cont').width() - $('.tbl-content-cont table').width();
   $('.tbl-header-cont').css({
      'padding-right': scrollWidth
   });
}).resize();
</script>


<script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>

<body>

</body>

</html>