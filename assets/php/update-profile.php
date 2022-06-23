<?php 


include_once("db-config.php");
session_start();
$status = $firstname = $lastname = $username = $password = $email = $contact = $birthdate = $address = $barangay = $city = $zipcode = $profile_img = "";

$firstnameErr = $lastnameErr = $usernameErr = $passwordErr = $emailErr = $contactErr = $birthdateErr = $addressErr = $barangayErr = $cityErr = $zipcodeErr = $profile_imgErr = "";

$usernameErr =$emailErr = "empty";


$target_dir = "../../assets/images/profile_imgs/";


if(isset($_SESSION["username"])){
   $username = $_SESSION["username"];



  
   $query = mysqli_query($conn , "SELECT * FROM account_user WHERE username = '$username'"); 
   $check_row = mysqli_num_rows($query);
   if($check_row == 1){
      $fetch = mysqli_fetch_assoc($query);
      $db_username = $fetch["username"];
      $db_email = $fetch["email"];
   }
   else{
      echo "Something went wrong";
   }
 
   $firstname = test_input($_POST['firstname']);
   $lastname = test_input($_POST['lastname']);
   $username = $_POST['username'];
   $email = test_input($_POST['email']);
   $contact = test_input($_POST['contact']);
   $birthdate = test_input($_POST['birthdate']);
   $address = test_input($_POST['address']);
   $barangay = test_input($_POST['barangay']);
   $city = test_input($_POST['city']);
   $zipcode = test_input($_POST['zipcode']);


   



   $check_username = mysqli_query($conn , "SELECT * FROM account_user WHERE username = '$username'"); 
   $check_row = mysqli_num_rows($check_username);
  
   
   
   if($check_row > 0 && $username != $db_username){
      $status = "error";
      $usernameErr = "Username already exists";
   }
   else{
   
      $check_email = mysqli_query($conn, "SELECT * FROM account_user WHERE email = '$email'");
      $check_row = mysqli_num_rows($check_email);
  
      if($check_row > 0 && $email != $db_email){
         $status = "error";
         $emailErr = "Email already exists";
      }
      else{
         $status = "success";

         if(empty($_FILES['profile_img']['name'])){

            $birthdate=date("Y-m-d",strtotime($birthdate));
               
            mysqli_query($conn, "UPDATE account_user SET 
         
            firstname = '$firstname',
            lastname = '$lastname',
            username = '$username',
            email = '$email',
            contact = '$contact',
            birthdate = '".$birthdate."',

            address = '$address',
            barangay = '$barangay',
            city = '$city',
            zipcode = '$zipcode'
            WHERE username='$db_username'
            "); 
         }
         else{
         
         
         

      
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
         
                  $profile_img_file = substr($target_file, 4);
            
                  $birthdate=date("Y-m-d",strtotime($birthdate));
                  
                  mysqli_query($conn, "UPDATE account_user SET 
            
                  firstname = '$firstname',
                  lastname = '$lastname',
                  username = '$username',
                  email = '$email',
                  contact = '$contact',
                  birthdate = '".$birthdate."',

                  address = '$address',
                  barangay = '$barangay',
                  city = '$city',
                  zipcode = '$zipcode',
                  profile_img='$profile_img_file'
                  WHERE username='$db_username'
                  "); 
         
                  $notify = "<font color=green> The file ". basename($_FILES["profile_img"]["name"]) ." has been uploaded.</font>";
                  

                  // echo "<script>window.location.href='home?signin=sign-in-321jkh1jkasd';</script>";
      
               
               } else {
                  echo "Sorry, there was an error uploading your file.";
               }
            
            }
            
         }
      }
  
   }

 






   echo json_encode(array(
      "status" => $status,
      "usernameErr" => $usernameErr,
      "emailErr" => $emailErr,
   ));
}




// $data = array();
// $data['error'] = $error;
// $data['success'] = $success;
// if (!empty($data)) {
//     echo json_encode($data);
// }


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

?>