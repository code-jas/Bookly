<?php

require_once("db-config.php");

$userID = $_POST['user_id'];
$navbarInner = $_POST['navbar_inner'];

echo "<script>console.log('Debug Objects: " . $navbarInner . "' );</script>";

$retrieve_query = "SELECT cart_item.id, books.book_id, books.title, books.author , books.price , books.book_cover, 
account_user.id_user, account_user.firstname, account_user.lastname
FROM cart_item
LEFT JOIN books
ON books.book_id = cart_item.book_id
LEFT JOIN account_user 
ON account_user.id_user = cart_item.user_id
WHERE account_user.id_user = '$userID' AND cart_item.sold = '0' ORDER BY id DESC";

$retrieve_result = mysqli_query($conn, $retrieve_query);


$retrieve_row = mysqli_num_rows($retrieve_result);


if($retrieve_row > 0){ 
   
   while($row_cart_nav = mysqli_fetch_assoc($retrieve_result)){ 

      $cart_item_id = $row_cart_nav['id'];

      $cart_user_id = $row_cart_nav["id_user"];
      $cart_book_id = $row_cart_nav["book_id"];
      $cart_title = $row_cart_nav["title"];
      $cart_author = $row_cart_nav["author"];
      $cart_price = $row_cart_nav["price"];
      $cart_book_cover = $row_cart_nav["book_cover"];
      
      $cart_firstname = $row_cart_nav["firstname"];
      $cart_lastname = $row_cart_nav["lastname"];
      
      if($navbarInner == "true"){
         $navbarChild = $_POST['navbar_child'];
         if($navbarChild == "user_side"){ 
            echo "
            <a id=\"cart-href\" href=\"../my-book/viewcart\">
               <li class=\"cart-item-list\">
                  <div class=\"cart-item-img-card\">
                     <img src=\"../$cart_book_cover\" alt=\"$cart_title\">
                  </div>
                  <div class=\"cart-item-details\">
                     <h3>Cart Added</h3>
                     <p>$cart_title</p>
                  </div>
               </li>
            </a>
            ";
         } else { 
            echo "
            <a id=\"cart-href\" href=\"viewcart\">
               <li class=\"cart-item-list\">
                  <div class=\"cart-item-img-card\">
                     <img src=\"../$cart_book_cover\" alt=\"$cart_title\">
                  </div>
                  <div class=\"cart-item-details\">
                     <h3>Cart Added</h3>
                     <p>$cart_title</p>
                  </div>
               </li>
            </a>
            ";
         }
      } else { 
         // outer link
         echo "
         <a id=\"cart-href\" href=\"my-book/viewcart\">
            <li class=\"cart-item-list\">
               <div class=\"cart-item-img-card\">
                  <img src=\"$cart_book_cover\" alt=\"$cart_title\">
               </div>
               <div class=\"cart-item-details\">
                  <h3>Cart Added</h3>
                  <p>$cart_title</p>
               </div>
            </li>
         </a>
         ";
      }
    

   }

} else { 
   echo '
   <div id="empty-cart-nav" class="empty-notif">
      <div class="emp_notif_img_card">
         <img src="assets/images/illustrations/empty_cart_img.png" alt="Cart empi">
         <p class="emp_notif_text">Cart Empty</p>
      </div>
   </div>
   
   ';
}

?>