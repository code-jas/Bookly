<?php
include("db-config.php");

// Path: assets\php\sign_up_verification.php

$firstname = $lastname = $username = $email = $birthdate  = $address = $barangay = $city = $zipcode = "";

$firstnameErr = $lastnameErr = $birthdateErr = $usernameErr = $emailErr = $birthdateErr = $addressErr = $barangayErr = $cityErr = $zipcodeErr = "";
 

if(isset($_GET['user'])){ 

   $username = $_GET['user'];

   $query = mysqli_query($conn , "SELECT * FROM account_user WHERE username = '$username'"); 
   $check_row = mysqli_num_rows($query);
   if($check_row == 1){
     
      $fetch = mysqli_fetch_assoc($query);

      $username = $fetch['username'];
      $email = $fetch['email'];

      
   }else {
      echo "Something went wrong";
   }
}


if(isset($_POST['get_started_btn'])){
   $valid = true;
   if(empty($_POST['firstname'])){
      $firstnameErr = "First Name is required";
   }else{
      $firstname = test_input($_POST['firstname']);
      if(!preg_match("/^[a-zA-Z ]*$/", $firstname)){
         $firstnameErr = "Only letters and white space allowed";
         $valid = false;
      } 
   }

   if(empty($_POST['lastname'])){
      $lastnameErr = "Last Name is required";
   } else{
      $lastname = test_input($_POST['lastname']);
      if(!preg_match("/^[a-zA-Z ]*$/", $lastname)){
         $lastnameErr = "Only letters and white space allowed";
         $valid = false;
      }
   }

   if(empty($_POST['username'])){
      $usernameErr = "Username is required";
   } else{
      $username = test_input($_POST['username']);
      
   }


   if(empty($_POST['email'])){
      $emailErr = "Email is required";
   }  else{
      $email = test_input($_POST['email']);
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $emailErr = "Invalid email format";
         $valid = false;
      }
   }

   if(empty($_POST['birthdate'])){
      $birthdateErr = "Birthdate is required";
   } else{
      $birthdate = test_input($_POST['birthdate']);
   }


   if(empty($_POST['address'])){
      $addressErr = "Address is required";
   } else{
      $address = test_input($_POST['address']);
   }

   if(empty($_POST['barangay'])){
      $barangayErr = "Barangay is required";
   } else{
      $barangay = test_input($_POST['barangay']);
   }

   if(empty($_POST['city'])){
      $cityErr = "City is required";
   } else{
      $city = test_input($_POST['city']);
   }

   if(empty($_POST['zipcode'])){
      $zipcodeErr = "Zipcode is required";
   } else{
      $zipcode = test_input($_POST['zipcode']);
   }

   if($firstname && $lastname && $username && $email && $birthdate && $address && $barangay && $city && $zipcode){
      if($valid){

         // Insert the user into the database
         echo "success";
         echo $firstname;
         echo $lastname;
         echo $username;
         echo $email;
         echo date("Y-m-d", $birthdate);
         echo $address;
         echo $barangay;
         echo $city;
         echo $zipcode;

      } else { 
         echo "error";
      }
   }


}


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }


?>