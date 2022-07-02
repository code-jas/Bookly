<?php

   require_once("db-config.php");



   if(!empty($_POST['user_id'])){ 
      $userID =$_POST['user_id'];
      echo "<script>console.log('userID_PHP: ".$userID."');</script>";
   } else { 
      $userID = $user_id;
   }
  
   $retrieve_query = "SELECT cart_item.id, books.book_id, books.title, books.author , books.price , books.book_cover, 
                     account_user.id_user, account_user.firstname, account_user.lastname , account_user.contact, account_user.address, account_user.city, account_user.barangay ,account_user.zipcode
                     FROM cart_item
                     LEFT JOIN books
                     ON books.book_id = cart_item.book_id
                     LEFT JOIN account_user 
                     ON account_user.id_user = cart_item.user_id
                     WHERE account_user.id_user = '$userID' AND cart_item.sold = '0'";


   $retrieve_result = mysqli_query($conn, $retrieve_query);

   $retrieve_row = mysqli_num_rows($retrieve_result);

   if($retrieve_row > 0){ 

      while($row_vc = mysqli_fetch_assoc($retrieve_result)) { 
         $cart_item_id = $row_vc['id'];

         $vc_user_id = $row_vc["id_user"];
         $vc_book_id = $row_vc["book_id"];
         $vc_title = $row_vc["title"];
         $vc_author = $row_vc["author"];
         $vc_price = $row_vc["price"];
         $vc_book_cover = $row_vc["book_cover"];
   
         $vc_firstname = $row_vc["firstname"];
         $vc_lastname = $row_vc["lastname"];
         $vc_contact = $row_vc["contact"];
         $vc_address = $row_vc["address"];
         $vc_city = $row_vc["city"];
         $vc_barangay = $row_vc["barangay"];
         $vc_zipcode = $row_vc["zipcode"];
         
         echo "       
       
         <div class=\"cart_item\" id=\"cart-item\">
               <div class=\"cart_item_checkbox\">
                  <div>
                     <label class=\"checkbox bounce\">
                        <input type=\"checkbox\" id=\"vc_check_box\" value=\"$cart_item_id\">
                        <svg viewBox=\"0 0 21 21\">
                           <polyline points=\"5 10.75 8.5 14.25 16 6\"></polyline>
                        </svg>
                     </label>
                  </div>
               </div>
               <div class=\"cart_item_image\">
                  <img src=\"../$vc_book_cover\" alt=\"$vc_title\"
                     class=\"cart_image\">
               </div>
               <div class=\"cart_item_title\">
                  <h3>$vc_title</h3>
                  <h4>$vc_author</h4>
               </div>
               <div class=\"cart_item_price\">
                  <h3>₱$vc_price</h3>
               </div>
            </div>
      
            ";
   
         
   
      }
   
   } else { 
  
      echo "
      <div id=\"vc_data_empty\" class=\"vc_data_empty\">
         <div class=\"vc_data_empty_img_card\">
            <img src=\"../assets/images/illustrations/empty_cart_img.png\" alt=\"cart empty\">
         </div>
            <h1>Your cart is empty</h1>
            <h2>You have no items in your cart</h2>
      </div>
      ";
   }







?>