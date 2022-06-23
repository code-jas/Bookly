<?php


session_start();

include("db-config.php");


$username = $password = "";
$usernameErr = $passwordErr = "";



if(isset($_POST["username"])){
   
   if(empty($_POST["username"])){
      $usernameErr = "Username is required";
   } else {
      $username = $_POST["username"];
   }

   if(empty($_POST["password"])){
      $passwordErr = "Password is required";
   } else {
      $password = $_POST["password"];
   }

   
   // echo json_encode(array(
   //    "status" => "success", 
   // ));

  
   $username = $conn->real_escape_string($username);
   $password = $conn->real_escape_string($password);


   if($username && $password) { 
      $check_username = mysqli_query($conn, "SELECT * FROM account_user WHERE username = '$username'");
      $check_row = mysqli_num_rows($check_username);

      if($check_row > 0) { 
         $fetch  = mysqli_fetch_assoc($check_username);

         $db_password = $fetch["password"];
         $account_type = $fetch["account_type"];

         if($account_type == 1) { 
            if($db_password == $password){ 
             
               // SUCCESS
               // GO TO ADMIN PAGE 
            
               $_SESSION["username"] = $username;
               
               echo json_encode(array(
                  "status" => "login success", 
               ));

            } else {
               $passwordErr = "The password you’ve entered is incorrect.";
            }
         } else { 
            if($db_password == $password) { 
               // SUCCESS
               // GO TO USER PAGE 
              
               $_SESSION["username"] = $username;

               echo json_encode(array(
                  "status" => "login success", 
               ));
               
             
      
               
            } else {
               echo json_encode("incorect");
               $passwordErr = "The password you’ve entered is incorrect.";
            }
         }

      } else {

         echo json_encode(array(
            "isExists" => "notExists", 
         ));
         $usernameErr = "We couldn't find your username.";
      }

   
   }
}

?>