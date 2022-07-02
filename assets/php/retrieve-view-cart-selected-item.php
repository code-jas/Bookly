<?php
   require_once("db-config.php");

   $cart_id_list=json_decode($_POST['book_list']);

   $order_modal = $summary_modal = $user_address_modal= "";
   $total_price = 0;

   if(count($cart_id_list)>0){   
    
   

      $select_checked_cart_query = "SELECT cart_item.id, books.book_id, books.title, books.author , books.price , books.book_cover, books.genre,
                                    account_user.id_user, account_user.firstname, account_user.lastname , account_user.contact, 
                                    account_user.address, account_user.city, account_user.barangay ,account_user.zipcode
                                    FROM cart_item
                                    LEFT JOIN books
                                    ON books.book_id = cart_item.book_id
                                    LEFT JOIN account_user 
                                    ON account_user.id_user = cart_item.user_id
                                    WHERE  id IN (".implode(',',$cart_id_list).")";

      $select_checked_cart_result = mysqli_query($conn, $select_checked_cart_query);
      
      while($row_selected = mysqli_fetch_assoc($select_checked_cart_result)){
         $cart_item_id = $row_selected['id'];
         
     
         $cart_item_book_id = $row_selected["book_id"];
         $cart_item_title = $row_selected["title"];
         $cart_item_author = $row_selected["author"];
         $cart_item_price = $row_selected["price"];
         $cart_item_book_cover = $row_selected["book_cover"];
         $cart_item_genre = $row_selected["genre"];

         
         $cart_item_user_id = $row_selected["id_user"];
         $cart_item_firstname = $row_selected["firstname"];
         $cart_item_lastname = $row_selected["lastname"];
         $cart_item_contact = $row_selected["contact"];
         $cart_item_address = $row_selected["address"];
         $cart_item_city = $row_selected["city"];
         $cart_item_barangay = $row_selected["barangay"];
         $cart_item_zipcode = $row_selected["zipcode"];

         $cart_item_book_cover = "../" . $cart_item_book_cover;
         $order_modal .= "
         <div class=\"order-item\">
            <div class=\"order-short-books-desc\">
               <div class=\"order-img-card\">
                  <img src=\"$cart_item_book_cover\" alt=\"$cart_item_title\">
               </div>
               <div class=\"order-book-desc\">
                  <h5>$cart_item_title</h5>
                  <p>$cart_item_author</p>
               </div>
           
            </div>   
            <div class=\"order-price\">
               <p>₱$cart_item_price</p>
            </div>
            
         </div>
         
         
         
         ";
         $total_price = $total_price + $cart_item_price;

         $summary_modal .= "
         <div class=\"summary-book-item\">
            <div class=\"summary-img-card\">
               <img src=\"$cart_item_book_cover\" alt=\"$cart_item_title\">
            </div>
            <div class=\"summary-book-desc\">
               <h5>Book</h5>
               <h2>$cart_item_title</h2>
               <h5>Price</h5>
               <h1>₱$cart_item_price</h1>
            </div>
         </div>
         ";

        
       
      } 

       
      $user_address_modal = "        
      <div class=\"summary-user-add-title\">
         <p>Name</p>
         <p>Contact</p>
         <p>Address</p>
         <p>Payment</p>
      </div>
      <div class=\"summary-user-add-details\">
         <p>". ucfirst($cart_item_firstname) ." ". ucfirst($cart_item_lastname). "</p>
         <p>$cart_item_contact</p>
         <p>".$cart_item_address .", ". $cart_item_city ." Brgy. ". $cart_item_barangay ." Zip Code " . $cart_item_zipcode. "</p>
         <p>Cash on Delivery</p>
      </div>
      ";
      
   }


   echo json_encode(array(
      "order_modal" => $order_modal,
      "summary_modal" => $summary_modal,
      "user_address" => $user_address_modal,
      "total_price" => $total_price,
      "count" => count($cart_id_list),
   ));
   

   // while(count($book_list)>0){
   //    $cart_id = array_pop($book_list);
   //    $remove_cart_query = "DELETE FROM cart_item WHERE id='$cart_id' ";
   //    $remove_cart_result = mysqli_query($conn, $remove_cart_query);
   // }


//    echo "cart_item_id: ".$cart_item_id ."\n";

// echo "cart_item_book_id: ".$cart_item_book_id ."\n";
// echo "cart_item_title: ".$cart_item_title ."\n";
// echo "cart_item_author: ".$cart_item_author ."\n";
// echo "cart_item_price: ".$cart_item_price ."\n";
// echo "cart_item_book_cover: ".$cart_item_book_cover ."\n";

// echo "cart_item_user_id: ".$cart_item_user_id ."\n";
// echo "cart_item_firstname: ".$cart_item_firstname ."\n";
// echo "cart_item_lastname: ".$cart_item_lastname ."\n";
// echo "cart_item_contact: ".$cart_item_contact ."\n";
// echo "cart_item_address: ".$cart_item_address ."\n";
// echo "cart_item_city: ".$cart_item_city ."\n";
// echo "cart_item_barangay: ".$cart_item_barangay ."\n";
// echo "cart_item_zipcode: ".$cart_item_zipcode ."\n";

// echo "\n";
// echo "\n";
// echo "\n"; 
?>