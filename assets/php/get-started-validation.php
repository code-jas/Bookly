<?php
include("db-config.php");

// Path: assets\php\sign_up_verification.php

$firstname = $lastname = $username = $email = $contact = $birthdate  = $address = $barangay = $city = $zipcode = "";

$firstnameErr = $lastnameErr = $birthdateErr = $contactErr = $usernameErr = $emailErr = $birthdateErr = $addressErr = $barangayErr = $cityErr = $zipcodeErr = $uploadErr =  "";
 



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



$target_dir = "./assets/images/profile_imgs/";
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

   if(empty($_POST['contact'])){
      $contactErr = "Contact Number is required";
   } else{
      $contact = test_input($_POST['contact']);
      if(!preg_match("/^[0-9]*$/", $contact)){
         $contactErr = "Only numbers allowed";
         $valid = false;
      }
      if(strlen($contact) != 11){
         $contactErr = "Contact number must be 11 digits";
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

         $target_file  = $target_dir . basename($_FILES["profile_img"]["name"]);
 
  
         $uploadOk = 1;
      
         if(file_exists($target_file)){
           $target_file = $target_dir . rand(1,9) . rand(1,9) . rand(1,9) . rand(1,9) . "_" . basename($_FILES["profile_img"]["name"]);
      
            $uploadOk = 1;
          
         }
      
         $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
         if($_FILES["profile_img"]["size"] > 5000000) {
            $uploadErr =  "Sorry, your file is too large.";
            $uploadOk = 0;
         }
         
         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $uploadErr =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
         }
      
         if($uploadOk == 1) { 
            if(move_uploaded_file($_FILES["profile_img"]["tmp_name"], $target_file)) {
               // echo "<font color=green> The file ". basename( $_FILES["profile_pic"]["name"]). " has been uploaded.  </font>";
      
               mysqli_query($conn, "UPDATE account_user SET 
            
               firstname = '$firstname',
               lastname = '$lastname',
               contact  = '$contact',
               birthdate = '$birthdate',
              
               address = '$address',
               barangay = '$barangay',
               city = '$city',
               zipcode = '$zipcode',
               profile_img='$target_file'
               WHERE username='$username'
               "); 
      
               $notify = "<font color=green> The file ". basename($_FILES["profile_img"]["name"]) ." has been uploaded.</font>";
               

               echo "<script>window.location.href='home?signin=sign-in-321jkh1jkasd';</script>";
    
             
            } else {
               echo "Sorry, there was an error uploading your file.";
            }
         }
   

      } else { 
         echo "error";
      }
   }


}



// if(empty($_GET["notify"])) { 
//    //do nothing
// } else { 
//   echo "<center>". $_GET["notify"] ."</center>";
// }


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }




?>