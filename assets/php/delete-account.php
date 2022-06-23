<?php
session_start();
include("db-config.php");

$verify_password = "";
$verify_passwordErr = "";





if(isset($_SESSION["username"])){
  
   $username  = $_SESSION["username"];

   $verify_password = $_POST["password"];

   $sql = "SELECT * FROM account_user WHERE username = '$username'";
   $query = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($query);
   $db_password = $row['password'];

   if($db_password == $verify_password){
      // remove the session variable and delete the account
      $sql = "DELETE FROM account_user WHERE username = '$username'";
      $query = mysqli_query($conn, $sql);
      $logout = md5($_SESSION['username']);
      $username_md5 = md5($logout);

      unset($_SESSION['username']);


      session_unset();
      session_destroy();



      echo json_encode(array(
         "status" => "match", 
         "logout" => $logout,
         "username_md5" => $username_md5,
         "notification" => "successfullydeletedaccount",
      ));
      
   } else {
      echo json_encode(array(
         "status" => "nomatch", 
      ));
   }

}

?>