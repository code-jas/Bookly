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
         
         
         // $output.='<p>Please click on the following link to reset your password.</p>';
         // //replace the site url
         // $output.='<p><a href="bookly.com/reset-password?key=' . $key . '&email=' . $email . '&action=reset" target="_blank">http://localhost/bookly/reset-password?key=' . $key . '&email=' . $email . '&action=reset</a></p>';
         $output = messageBody($email,$key);
      

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


function messageBody($email, $key) { 
   return "
   
         
      <!DOCTYPE html>
      <html>

      <head>
         <meta charset=\"UTF-8\">
         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
         <title>Email Confirmation</title>
         <!--google Fonts-->
         <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
         <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
         <link
            href=\"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,200;1,300;1,600;1,700;1,800;1,900&display=swap\"
            rel=\"stylesheet\">
         <style>
         body {
            background-color: #FFFFFF;
            font-family: 'Montserrat', sans-serif;

         }

         .box-container {
            border-radius: 10px;
            background-color: #F0F2F7;
            margin: 30px auto;
            height: auto;
            width: 30%;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

         }

         .box-content {
            display: block;
            margin: 0 auto;
            border-radius: 10px;
            height: 100%;
            background-color: #FFFFFF;

         }

         .icon-content {
            border-radius: 10px;
            height: 250px;
            background-color: #FFFFFF;
            padding-top: 50px;
         }

         .mail-svg {
            display: block;
            margin: 0 auto;
            height: 100%;
            object-fit: cover;
         }

         h2 {
            font-weight: 700;
            text-align: center;
         }

         p {
            font-weight: 300;
            margin: 0 auto;
            text-align: center;
            padding: 30px;
            width: 80%;

         }

         .style {
            color: #686D81;
         }

         .btn-confirm {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            display: block;
            margin: auto;
            border: none;
            border-radius: 30px;
            padding: 10px;
            height: 10%;
            width: 30%;
            text-align: center;

            color: #FFFFFF;
            background-color: #FE3152;
            cursor: pointer;

            transition: all 0.2s ease-in-out;

         }

         .btn-confirm:hover {
            transform: scale(1.03);
            opacity: 0.8;

         }

         .btn-confirm:active {
            transform: translateY(2px);
         }

         #confirm {
            margin: 0 auto;
            text-align: center;
            text-decoration: none;
            color: #FFFFFF;
         }
         </style>
      </head>

      <body>
         <div class=\"box-container\">
            <div class=\"box-content\">
               <div class=\"icon-content\">
                  <img class=\"mail-svg\"
                     src=\"https://raw.githubusercontent.com/code-jas/Bookly/master/assets/images/illustrations/mail-svg.jpg\"
                     alt=\"Mail\" />
               </div>

               <h2>Verify your email address</h2>
               <p>Welcome to <a href=\"#\">Bookly</a> <br><br> Please click on the following link to reset your password.</p>
               <a href='bookly.com/reset-password?key=' . $key . '&email=' . $email . '&action=reset' target = '_blank'
               id=\"confirm\">
               <button class=\"btn-confirm\">Reset Password</button>
               </a>

               <p class=\"style\">If you received this in error, simply ignore this email and do not click the button.</p>
            </div>
         </div>
      </body>

      </html>
      ";
         
     
      // $output.='<p>Please click on the following link to reset your password.</p>';
      // //replace the site url
      // $output.='<p><a href="bookly.com/reset-password?key=' . $key . '&email=' . $email . '&action=reset" target="_blank">bookly.com/reset-password?key=' . $key . '&email=' . $email . '&action=reset</a></p>';
}

echo json_encode(array(
   "status" => $emailErr,
));


?>