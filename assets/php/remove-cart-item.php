<?php

require_once("db-config.php");

// $userID =$_POST['user_id'];



// $book_list = $_POST['book_list'];
// $book_list = explode(',', $book_list);
$book_list=json_decode($_POST['book_list']);



while(count($book_list)>0){
   $cart_id = array_pop($book_list);
   $remove_cart_query = "DELETE FROM cart_item WHERE id='$cart_id' ";
   $remove_cart_result = mysqli_query($conn, $remove_cart_query);
}

echo json_encode(array(
   "book_list" => join(',', $book_list),
   "count" => count($book_list),

));

?>