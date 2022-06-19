<?php


include("db-config.php");

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


$username = $password = $confirm_password = $email = "";

$su_usernameErr = $su_passwordErr = $su_confirm_passwordErr = $su_emailErr = "";


// $validateUser = false;
// $validateEmail = false;

if(isset($_POST['su_username'])){

   $username = $_POST["su_username"];
   $password = $_POST["su_password"];
   $confirm_password = $_POST["su_confirm_password"];
   $email = $_POST["su_email"];

   $query = mysqli_query($conn, "SELECT * FROM account_sign_up_verification WHERE username = '$username'");
   
   if(mysqli_num_rows($query) > 0){
      // $su_usernameErr = "Username already exists";
      // echo $su_usernameErr;
      echo json_encode(array(
         "username" => "exists",
      ));
      
   
   } else {

      $queryEmail = mysqli_query($conn, "SELECT * FROM account_sign_up_verification WHERE email = '$email'");


      if(mysqli_num_rows($queryEmail) > 0){
         // $su_emailErr = "Email already exists";
         // echo "Email already exists";

         echo json_encode(array(
            "email" => "exists",
         ));
      } else {

         echo json_encode(array(
            "status" => "success", 
         ));
      
      
        
      
      
      
         $mysqli = new MySQLi('localhost','root','','bookly_db');
      
         //Sanitize form data
         $username = $mysqli->real_escape_string($username);
         $password = $mysqli->real_escape_string($password);
         $confirm_password = $mysqli->real_escape_string($confirm_password);
         $email = $mysqli->real_escape_string($email);
      
      
         //Generate Vkey
         $vkey = md5(time().$username);
      
      
         // $insert = $mysqli->query("INSERT INTO mytbl2(username, password, email, vkey)
         // VALUES('$username','$password','$email','$vkey')");
      
      
      
      
      
      
      
         $insert = mysqli_query($conn, "INSERT INTO account_sign_up_verification(username, password, email, vkey)
         VALUES('$username', '$confirm_password', '$email', '$vkey')");
      
      
         if($insert) { 
            verifyEmail($email, $vkey);
      
         }
      }

   }

   
   
}













function verifyEmail($recepient, $vkey) {

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
           //Server settings
           // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
           $mail->isSMTP();                                               //Send using SMTP
           $mail->Host       = 'smtp.gmail.com';                          //Set the SMTP server to send through
           $mail->SMTPAuth   = true;                                      //Enable SMTP authentication
           $mail->Username   = 'bookly.corpo@gmail.com';                  //SMTP username
           $mail->Password   = 'aedhyabqmwhzlyjs';                        //SMTP password
           $mail->SMTPSecure = "tls";            
           $mail->SMTPAutoTLS = false;
           $mail->Port       = 587;                                            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
   
   
           //Recipients
           $mail->setFrom('bookly.corpo@gmail.com', 'Bookly');
           $mail->addAddress($recepient);     //Add a recipient
   
   
   
           $message = "<a href='http://localhost/bookly/verify?vkey=$vkey'>Register Account</a>";
   
           //Content
           $mail->isHTML(true);                                  //Set email format to HTML
           $mail->Subject = 'Email Verification';
           $mail->Body    = $message;
           $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
   
           $mail->send();
   
        } catch (Exception $e) {
           echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
   
}









// $arr = array (
//    "username" => $username,
//    "password" => $password,
//    "confirm_password" => $confirm_password,
//    "email" => $email,
//    "vkey" => $vkey
// );

// echo json_encode($arr);

?>