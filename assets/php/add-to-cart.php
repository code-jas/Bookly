<?php

require_once("db-config.php");

$userID = $_POST['user_id'];
$bookID = $_POST['book_id'];
$statusCart = "";


$exist_in_cart_query =  "SELECT * FROM cart_item WHERE user_id='$userID' AND book_id='$bookID'";
$exist_in_cart_result = mysqli_query($conn, $exist_in_cart_query);
$exist_in_cart_row = mysqli_num_rows($exist_in_cart_result);

if($exist_in_cart_row > 0){
   $statusCart = "existed";
} else {
   $insert_cart_query = "INSERT INTO cart_item (user_id, book_id,sold) VALUES ('$userID', '$bookID', '0')";
   $insert_cart_result = mysqli_query($conn, $insert_cart_query);
   $statusCart = "inserted";
}


// $add_cart_query = "INSERT INTO cart_item (book_id, user_id) VALUES ('$bookID', '$userID')";
// $add_cart_result = mysqli_query($conn, $add_cart_query);

echo json_encode(array("userID" => $userID, "bookID" => $bookID, "status_cart"=> $statusCart));
?>