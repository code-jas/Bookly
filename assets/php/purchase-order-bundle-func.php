<?php

require_once("db-config.php");
include('notif-class.php');

$response_sucess = "error";


$buycart_id_list=json_decode($_POST['book_listed']);


if(count($buycart_id_list)>0){  
   
   
   
   $select_checked_cart_query = "SELECT * FROM cart_item WHERE id IN (".implode(',',$buycart_id_list).")";
   
   $select_checked_cart_result = mysqli_query($conn, $select_checked_cart_query);


   
   while($row_selected = mysqli_fetch_assoc($select_checked_cart_result)){
      $cart_item_id = $row_selected['id'];
      $book_id = $row_selected['book_id'];
      $user_id = $row_selected['user_id'];
      
      // set the default time to Asia Manila 
      date_default_timezone_set("Asia/Manila");
      // Date time now
      $datetime_now = date("Y-m-d H:i:s");
      // Estimation to delivery
      $datetime_end = date("Y-m-d H:i:s", strtotime("+2 minutes", strtotime($datetime_now)));
   
      $ref_id = createRefId();
      $notif = new Notification("order", $ref_id);

      $notif->checkType();

      // QUERY TO GET THE IMAGE OF BOOKS TABLE
      $get_img_query = "SELECT * FROM books WHERE book_id = '$book_id'";
      $get_img_result = mysqli_query($conn, $get_img_query);
      $get_img_row = mysqli_fetch_assoc($get_img_result);
      $book_img = $get_img_row['book_cover'];

       // QUERY INSERT TO PURCHASE ORDER TABLE 
      $po_query = "INSERT INTO purchase_order (datetime_order, status, payment_method, book_id, user_id,ref_id ,delivery_time)
      VALUES (NOW(), 'pending', 'COD', '$book_id', '$user_id', '$ref_id', '$datetime_end')";

      // INSERT TO PURCHASE ORDER TABLE 
      $po_result = mysqli_query($conn, $po_query);

       // QUERY TO INSERT NOTIF TABLE
      $notif_query = "INSERT INTO notification (notif_subject, notif_message, notif_type, user_id, notif_href ,notif_img,datetime_added)
      VALUES ('". $notif->getSubject() ."', '". $notif->getMessage() ."', '". $notif->getType() ."', '$user_id', '". $notif->getHref() ."', '$book_img',NOW())";
      // INSERT TO NOTIF TABLE
      $notif_result = mysqli_query($conn, $notif_query);

      // QUERY UPDATE BOOK SELECTED TO SOLD
      $set_sold_query = "UPDATE books SET sold = '1' WHERE book_id = '$book_id'";
      // UPDATE BOOK SELECTED TO SOLD
      $set_sold_result = mysqli_query($conn, $set_sold_query);
      $response_sucess = "success";

       // QUERY TO GET THE VALUE OF SOLD TO DB
      $get_sold_query = "SELECT * FROM books WHERE book_id = '$book_id'";
      $get_sold_result = mysqli_query($conn, $get_sold_query);
      $row_sold = mysqli_fetch_assoc($get_sold_result);
      // GET THE SOLD VALUE FROM BOOKS
      $db_sold = $row_sold["sold"];

      $set_sold_query_cart = "UPDATE cart_item SET sold = '1' WHERE id = '$cart_item_id'";
      // UPDATE BOOK SELECTED TO SOLD
      $set_sold_result_cart = mysqli_query($conn, $set_sold_query_cart);


  

   }

   


}

 
echo json_encode(array(
"book_list_buy" => $buycart_id_list,
"count" => count($buycart_id_list),
"purchaseStatus" =>  $response_sucess,
"isSold" => $db_sold

));




function createRefId(){ 
   $brand = '#ref0x';
   $cur_date = date('d').date('m').date('y');
   $invoice = $brand.$cur_date;
   $customer_id = rand(00000 , 99999);
   $uRefNo = $invoice.'x'.$customer_id;
   return $uRefNo;
}








?>