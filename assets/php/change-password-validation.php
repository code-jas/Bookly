<?php

include("db-config.php");

$current_password = $new_password = $new_password_confirm =  "";
$showsuccess = "";

$current_passwordErr = $new_passwordErr = $new_password_confirmErr = "";


if(isset($_POST['change_password_submit_btn'])){
   
   if(empty($_POST['current_password'])){
      $current_passwordErr = "Current Password is required";
   }else{
      $current_password = $_POST['current_password'];
   }

   if(empty($_POST['new_password'])){
      $new_passwordErr = "New Password is required";
   }  
   else{
      $new_password = $_POST['new_password'];
   }

   if(empty($_POST['new_password_confirm'])){
      $new_password_confirmErr = "Confirm New Password is required";
   }else{
      $new_password_confirm = $_POST['new_password_confirm'];
   }
   

   if($current_password && $new_password && $new_password_confirm){
      if(validateNewPassword($new_password)){
         $username =  $_SESSION["username"];
         if($new_password == $new_password_confirm){
            $sql = "SELECT * FROM account_user WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $db_password = $row['password'];
    
            if($db_password == $current_password){
               $sql = "UPDATE account_user SET password = '$new_password' WHERE username = '$username'";
               if(mysqli_query($conn, $sql)){
                  
                  $showsuccess = '<script>
                  $(document).ready(function() {
                     showSuccessToast();
                  });
                  </script>   ';
                  // echo "<script>showSuccessToast();</script>";
               }else{
                  echo "<script>alert('Error changing password');</script>";
               }
            }else{
               $current_passwordErr = "Current Password is incorrect";
            }
         }else{
            $new_password_confirmErr = "New Password and Confirm Password do not match";
         }


      }
      else {
         $new_passwordErr = "Password must be at least 5 characters long and contain at least one number, one uppercase letter and one lowercase letter";
      }

      
   }

}

function validateNewPassword($password){
   $valid = true ; 
   $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,}$/";
 
    if (!preg_match($pattern, $password)){
     
      $valid = false;
   }
   else {
      $new_passwordErr = "";
      $valid = true;
   }

   return $valid;
   

}
?>