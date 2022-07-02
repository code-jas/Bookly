<?php

   require_once("db-config.php");

   $userID = $_POST['user_id'];
   



   $retrieve_query = "SELECT account_user.id_user,
                     account_user.username ,
                     books.title, books.price,
                     purchase_order.datetime_order,
                     purchase_order.ref_id, purchase_order.book_id
                     FROM purchase_order 
                     LEFT JOIN books 
                     ON books.book_id=purchase_order.book_id
                     LEFT JOIN account_user 
                     ON account_user.id_user= purchase_order.user_id 
                     WHERE account_user.id_user='$userID';
                     ";

   $retrieve_result = mysqli_query($conn, $retrieve_query);

   while($row_po = mysqli_fetch_assoc($retrieve_result)){

  
      $db_user_id = $row_po['id_user'];
      $db_user_name = $row_po['username'];

      $db_book_title = $row_po['title'];
      $db_book_price = $row_po['price'];

      $db_order_datetime = $row_po['datetime_order'];
      $db_order_ref_id = $row_po['ref_id'];
      $db_order_book_id = $row_po['book_id'];

      $datetime = new DateTime($db_order_datetime);
      $datetime = $datetime->format('Y-m-d H:i');
      
      // echo $db_user_id . " ";
      // echo $db_user_name  . " ";
      // echo $db_book_title  . " ";
      // echo $db_book_price . " ";
      // echo $datetime . " ";
      // echo $db_order_ref_id . " ";
      // echo $db_order_book_id . " ";
      // echo "<br>";


      // if($db_user_id == $user_id_po){
       echo "
         <div class=\"ph-tbl-body-receipt-item\">
            <span class=\"ph-tbl-body-inline-item\">
               <p>$datetime</p>
            </span>
            <span class=\"ph-tbl-body-inline-item\">
               <p>$db_book_title</p>
            </span>
            <span class=\"ph-tbl-body-inline-item\">
               <p>₱$db_book_price</p>
            </span>
            <span class=\"ph-tbl-body-inline-item\">
               <p>$db_order_ref_id</p>
            </span>
            <span class=\"ph-tbl-body-inline-item\">
               <p><i class=\"fa-solid fa-angle-right view_more\"></i></p>
            </span>
         </div>
         <div class=\"tbl_break_jqe92\"></div>

       ";
      //}

     
   }


   



   


      
    


               

?>