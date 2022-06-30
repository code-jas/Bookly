<?php

require_once("db-config.php");
include('notif-class.php');

$response_sucess = "error";

if(isset($_POST["user_id"])){ 

   $book_id = $_POST["book_id"];
   $user_id = $_POST["user_id"];

   // date and time delivered end
   date_default_timezone_set("Asia/Manila");
   // // minutes to add
   // $minutes_to_add = 2;
   // // get current time
   // $current_time = date("Y-m-d H:i:s");
   // $datetime_now = new DateTime($current_time);
   // $datetime_end = $datetime_now->add(new DateInterval('PT' . $minutes_to_add . 'M'));

   // $datetime_end_stamp = $datetime_end->format('Y-m-d H:i:s');

   // $date_now = date("Y-m-d");
   $datetime_now = date("Y-m-d H:i:s");

   $datetime_end = date("Y-m-d H:i:s", strtotime("+2 minutes", strtotime($datetime_now)));





   // echo "date time stamp: $datetime_end";

 
   $ref_id = createRefId();
   $notif = new Notification("order");
  
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
   $notif_query = "INSERT INTO notification (notif_subject, notif_message, notif_type, user_id, notif_href ,notif_img)
    VALUES ('". $notif->getSubject() ."', '". $notif->getMessage() ."', '". $notif->getType() ."', '$user_id', '". $notif->getHref() ."', '$book_img')";
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
   
}


echo json_encode(array(
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