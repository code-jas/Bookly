<?php


   require_once("db-config.php");

   $status="";
   $userID = $_POST['user_id'];

   date_default_timezone_set("Asia/Manila");
   $time_now = date("H:i:s");
   $new_time = strtotime($time_now);

   $retrieve_query = "SELECT account_user.id_user,
                     account_user.username ,
                     books.title, books.price,
                     purchase_order.datetime_order,
                     purchase_order.delivery_time,
                     purchase_order.status,
                     purchase_order.ref_id, purchase_order.book_id
                     FROM purchase_order 
                     LEFT JOIN books 
                     ON books.book_id=purchase_order.book_id
                     LEFT JOIN account_user 
                     ON account_user.id_user= purchase_order.user_id 
                     WHERE account_user.id_user='$userID';
                     ";


   $retrieve_result = mysqli_query($conn, $retrieve_query);

   while($row_os = mysqli_fetch_assoc($retrieve_result)){


      $db_user_id = $row_os['id_user'];
      $db_user_name = $row_os['username'];

      $db_book_title = $row_os['title'];
      $db_book_price = $row_os['price'];
      
      $db_order_datetime = $row_os['datetime_order'];
    
      $db_order_delivery_time = strtotime($row_os['delivery_time']);
      $db_order_status = $row_os['status'];
      $db_order_ref_id = $row_os['ref_id'];
      $db_order_book_id = $row_os['book_id'];

      $datetime = new DateTime($db_order_datetime);
      $datetime = $datetime->format('Y-m-d');

      if( $db_order_delivery_time <= $new_time ){
         // your book has been delivered.
         // notif user
         $status = "success";
         mysqli_query($conn, "UPDATE purchase_order SET status='$status',delivery_time='' WHERE ref_id='$db_order_ref_id'");
      }



      echo "
         <tr class=\"tr_os\">
            <td class=\"td_os_title\">$db_book_title</td>
            <td>₱$db_book_price</td>
            <td>$datetime</td>
            <td><span class=\"status_os $db_order_status-stats\">$db_order_status</span></td>
            <td><a class=\"view_more_os\" href=\"#\"><span>View</span></a></td>
         </tr>
      ";
   }


?>