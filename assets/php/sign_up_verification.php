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
// $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
$mail->isSMTP(); //Send using SMTP
$mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
$mail->SMTPAuth = true; //Enable SMTP authentication
$mail->Username = 'bookly.corpo@gmail.com'; //SMTP username
$mail->Password = 'aedhyabqmwhzlyjs'; //SMTP password
$mail->SMTPSecure = "tls";
$mail->SMTPAutoTLS = false;
$mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


//Recipients
$mail->setFrom('bookly.corpo@gmail.com', 'Bookly');
$mail->addAddress($recepient); //Add a recipient




$message = "
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
         <p>Welcome to <a href=\"#\">Bookly</a> <br><br> Please click the button below to confirm your email address and
            activate your account.</p>
         <a href='http://localhost/bookly/verify?vkey=$vkey' id=\"confirm\"><button class=\"btn-confirm\">Confirm
               Email</button></a>

         <p class=\"style\">If you received this in error, simply ignore this email and do not click the button.</p>
      </div>
   </div>
</body>

</html>";

//Content
$mail->isHTML(true); //Set email format to HTML
$mail->Subject = 'Email Verification';
$mail->Body = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();

} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}









// $arr = array (
// "username" => $username,
// "password" => $password,
// "confirm_password" => $confirm_password,
// "email" => $email,
// "vkey" => $vkey
// );

// echo json_encode($arr);

?>