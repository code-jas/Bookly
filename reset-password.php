<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Password Recovery | Bookly </title>
   <link rel="icon" href="./assets/images/illustrations/logo.png">
   <!--google Fonts-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="./assets/css/root.css" />


   <!-- edit profile css -->
   <link rel="stylesheet" href="./assets/css/getstarted.css">
   <link rel="stylesheet" href="./assets/css/toast.css">

   <link rel="stylesheet" type="text/css" href="./assets/css/forgot_password.css" />



</head>

<body>

   <div id="toast" style="align-self:center"></div>

   <div class="pw_container">
      <div class="pw_content">
         <?php
                  
            include('assets/php/db-config.php');
            $error="";
            if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) && ($_GET["action"] == "reset") && !isset($_POST["action"])) {
                $key = $_GET["key"];
                $email = $_GET["email"];
                $curDate = date("Y-m-d H:i:s");
                $query = mysqli_query($conn, "SELECT * FROM `password_reset_temp` WHERE `rkey`='" . $key . "' and `email`='" . $email . "';");
                $row = mysqli_num_rows($query);
                if ($row == "") {
                    $error .= '<h2>Invalid Link</h2>';
                } else {
                    $row = mysqli_fetch_assoc($query);
                    $expDate = empty($row['expDate'])  ? "" : $row['expDate'];
                    if ($expDate >= $curDate) {
                        ?>
         <h2 class="title-fpw">Recovery Password</h2>

         <form class="fpw-form-container" method="post" action="" name="update">

            <input type="hidden" name="action" value="update" class="form-control" />

            <div class="content-wrapper block-1233">
               <label id="new_password" class="pass-label" for="contact">New Password</label>

               <input class="txt-field" id="new_password" name="pass1" type="password"
                  placeholder="Enter your new password" required />
               <span class=" error-inp-field error-pass">
                  <?php //echo $new_passwordErr; ?>
               </span>
               <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->

            </div>
            <div class="content-wrapper block-1233">
               <label id="new_password_confirm" class="pass-label" for="contact">Confirm New Password</label>

               <input class="txt-field" id="new_password_confirm" name="pass2" type="password"
                  placeholder="Confirm your new password" required />
               <span class="error-inp-field error-pass">
                  <?php //echo $new_password_confirmErr; ?>
               </span>
               <input type="hidden" name="email" value="<?php echo $email; ?>" />
               <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->

            </div>
            <div class="save-btn-container">
               <input type="submit" class="save-pw-btn" id="reset-password" name="reset-password"
                  value="Reset Password      " />
            </div>
         </form>
         <?php
                            } else {
                                $error .= "<h2>Link Expired</h2>";
                            }
                        }
                        if ($error != "") {
                            echo "<div class='error'>" . $error . "</div><br />";
                        }
                    }


                    if (isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"] == "update")) {
                        $error = "";
                        $pass1 = mysqli_real_escape_string($conn, $_POST["pass1"]);
                        $pass2 = mysqli_real_escape_string($conn, $_POST["pass2"]);
                        $email = $_POST["email"];
                        $curDate = date("Y-m-d H:i:s");
                        if ($pass1 != $pass2) {
                            $error .= "<p>Password do not match, both password should be same.<br /><br /></p>";
                        }
                        if ($error != "") {
                            echo $error;
                        } else {

                            
                            mysqli_query($conn, "UPDATE `account_user` SET `password` = '$pass1'  WHERE `email` = '$email'");

                            mysqli_query($conn, "DELETE FROM `password_reset_temp` WHERE `email` = '$email'");
                           

                        //     echo '<div class="success-reset-password">
                        //     <p>Your password has been reset successfully.</p>
                        //     <p>You can now <a href="../">login</a> with your new password.</p>
                        //  </div>';

                         echo "<script>window.location.href='home?signin=sign-in-321jkh1jkasd';</script>";
                        }
                    }
                    ?>


      </div>
   </div>


   <script>
   function showResetPasswordToast() {
      toast({
         message: ">Congratulations! Your password has been updated successfully.",
         type: "success",
         duration: 5000
      });
   }
   </script>

   <script src="./assets/javascript/toast.js"></script>




</body>

</html>