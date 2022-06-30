<?php 




include('db-config.php');

$user_id = $firstname = $lastname =  $username = $password = $email = $contact = $birthdate = $address = $barangay = $city = $zipcode = "";
$profile_img = "";

if(isset($_SESSION["username"])){
   $username = $_SESSION["username"];


   $check_username = mysqli_query($conn, "SELECT * FROM account_user WHERE username = '$username'");
   $fetch = mysqli_fetch_assoc($check_username);
   
   $user_id = $fetch['id_user'];
   
   $firstname = $fetch["firstname"];
   $lastname = $fetch["lastname"];
  
   $email = $fetch["email"];
   $contact = $fetch["contact"];
   $birthdate = $fetch["birthdate"];


   $address = $fetch["address"];
   $barangay = $fetch["barangay"];
   $city = $fetch["city"];
   $zipcode = $fetch["zipcode"];
   
   $profile_img_db = $fetch["profile_img"];

   $profile_img = './.' . $profile_img_db;


   


 
}
else{
   echo "<script>window.location.href='home?error=404';</script>";
}



?>