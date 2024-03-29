<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Email Confirmation</title>
   <link rel="icon" href="./assets/images/illustrations/logo.png">
   <!--google Fonts-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

   <link rel="stylesheet" type="text/css" href="./assets/css/forgot_password.css" />

   <!-- edit profile css -->
   <link rel="stylesheet" href="./assets/css/getstarted.css">


</head>

<body>


   <div class="container-fluid">
      <div class="row">
         <div class="col-md-4"></div>
         <div class="col-md-4">
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
                            $expDate = $row['expDate'];
                            if ($expDate >= $curDate) {
                                ?>
            <h2>Reset Password</h2>
            <form method="post" action="" name="update">

               <input type="hidden" name="action" value="update" class="form-control" />


               <div class="form-group">
                  <label><strong>Enter New Password:</strong></label>
                  <input type="password" name="pass1" value="" class="form-control" required />
               </div>

               <div class="form-group">
                  <label><strong>Re-Enter New Password:</strong></label>
                  <input type="password" name="pass2" value="" class="form-control" required />
               </div>
               <input type="hidden" name="email" value="<?php echo $email; ?>" />
               <div class="form-group">
                  <input type="submit" id="reset" value="Reset Password" class="btn btn-primary" />
               </div>

            </form>
            <?php
                            } else {
                                $error .= "<h2>Link Expired</h2>>";
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

                            echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>';
                        }
                    }
                    ?>

         </div>
         <div class="col-md-4"></div>
      </div>
   </div>


</body>

</html>