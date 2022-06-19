<?php
include("db-config.php");

if(isset($_GET['vkey'])){
   // PROCESS VERIFICATION
   
   $vkey = $_GET['vkey'];

  
   $query = mysqli_query($conn, "SELECT * FROM account_sign_up_verification WHERE verified = 0 AND vkey = '$vkey' LIMIT 1");



  

   if($query->num_rows == 1){ 

      $fetch = mysqli_fetch_assoc($query);


      $username = $fetch['username'];
      $password = $fetch['password'];
      $email = $fetch['email'];


      // Validate the email
      $updateVerificationEmail = mysqli_query( $conn, "UPDATE account_sign_up_verification SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");
   

      if($updateVerificationEmail){ 
       
         // insert the verified user into user account where all accounts are verified

         $account_user_query  = mysqli_query($conn, "INSERT INTO account_user(username, password, email) VALUES('$username', '$password', '$email')") or die(mysqli_error($conn));
  
         echo "<script>window.location.href='get-started?user=$username';</script>";

         

      } else {
         echo $mysqli->error;
      }
   }else { 
      // Invalid email

      echo "This account  invalid or already verified";
   }



} else { 
   die("Something went wrong");
}





?>