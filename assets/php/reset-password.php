<?php

include("db-config.php");

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';






$email ="";
$emailErr = "";



if(isset($_POST["fp_email"])){

   $email = $_POST["fp_email"];
   
   $sel_query = "SELECT * FROM account_user WHERE email = '$email'";
   $check_email = mysqli_query($conn, $sel_query);
   $row  = mysqli_num_rows($check_email);

   if($row == 0){
      $emailErr = "emailNotExist";  
   } else {

      $output = '';

      $expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d") + 1, date("Y"));
      $expDate = date("Y-m-d H:i:s", $expFormat);
      $key = md5(time());
      $addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
      $key = $key . $addKey;

      // Insert Temp Table
      $insert = mysqli_query($conn, "INSERT INTO `password_reset_temp` (`email`, `rkey`, `expDate`) VALUES ('" . $email . "', '" . $key . "', '" . $expDate . "');");
      
      if($insert) {
         
         $emailErr = "emailExist";  
         //Create an instance; passing `true` enables exceptions
         $mail = new PHPMailer(true);

         try {
         //Server settings
         $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
         $mail->isSMTP(); //Send using SMTP
         $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
         $mail->SMTPAuth = true; //Enable SMTP authentication
         $mail->Username = 'bookly.corpo@gmail.com'; //SMTP username
         $mail->Password = 'biegeyoyespbhnsr'; //SMTP password
         $mail->SMTPSecure = "tls";
         $mail->SMTPAutoTLS = false;
         $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


         //Recipients
         $mail->setFrom('bookly.corpo@gmail.com', 'Bookly');
         $mail->addAddress($email); //Add a recipient

         
         $output.='<p>Please click on the following link to reset your password.</p>';
         //replace the site url
         $output.='<p><a href="bookly.com/reset-password?key=' . $key . '&email=' . $email . '&action=reset" target="_blank">http://localhost/bookly/reset-password?key=' . $key . '&email=' . $email . '&action=reset</a></p>';
      
      

         //Content
         $mail->isHTML(true); //Set email format to HTML
         $mail->Subject = "Password Recovery";
         $mail->Body = $output;
         $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

         $mail->send();

         } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         }


      }


   }
      
}

echo json_encode(array(
   "status" => $emailErr,
));


?>