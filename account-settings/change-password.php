<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Change Password | Bookly</title>
   <!-- import icons -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />


   <!-- account-settings css-->
   <link rel="stylesheet" href="../assets/css/account-settings.css">
   <!-- root css -->
   <link rel="stylesheet" href="../assets/css/root.css">
   <!-- navbar css -->
   <link rel="stylesheet" href="../assets/css/navbar.css">
   <!-- footer css -->
   <link rel="stylesheet" href="../assets/css/footer.css">
   <!-- edit profile css -->
   <link rel="stylesheet" href="../assets/css/getstarted.css">

   <!-- Eye icon -->
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<?php

   include("navbar.php");
   // include(".././assets/php/account-overview-display.php");
   include("../assets/php/change-password-validation.php ");
   
?>

<!--  START | CHANGE PASSWORD -->

<div class="sidebar-wrapper-outer">
   <div id="toast" style="top: 8%; z-index= 10"></div>


   <div class="sidebar-wrapper">
      <nav class="my_book_sidebar">
         <h1 class="sidebar-header">Account Settings</h1>
         <div class="sidebar_menu">
            <a href="overview" class="sidebar-link">Account Overview</a>
            <a href="edit-profile" class="sidebar-link">Edit Profile</a>
            <a href="change-password" class="sidebar-link sidebar-active">Change Password</a>
            <a href="delete-account" class="sidebar-link">Delete Account</a>
         </div>
         <div class="topnav_menu icons_menu">
            <a href="account_overview" class="topnav-icons "><i class="fa-solid fa-user"></i></a>
            <a href="edit-profile" class="topnav-icons "><i class="fa-solid fa-user-pen"></i></a>
            <a href="change-password" class="topnav-icons sidebar-active"><i class="fa-solid fa-lock"></i></a>
            <a href="delete-account" class="topnav-icons "><i class="fa-solid fa-trash-can"></i></a>
         </div>
      </nav>
      <div class="change-password-container">
         <div class="edit_profile_details_header">
            <h1>Change Password</h1>
         </div>
         <div class="sidebar_line_break"></div>
         <div class="account-settings-content">
            <form method="POST" id="change-password-container">
               <section style="margin-top: 30px;">
                  <div class="container">

                     <div class="content-wrapper block-1233">
                        <label id="current_password" class="pass-label" for="contact">Current Password</label>

                        <input class="txt-field pass" id="current_password" name="current_password" type="password"
                           placeholder="Enter your current password" value="<?php echo $current_password; ?>" />

                        <span class=" error-inp-field error-pass"><?php echo $current_passwordErr; ?></span>
                        <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->
                     </div>

                     <div class="content-wrapper block-1233">
                        <label id="new_password" class="pass-label" for="contact">New Password</label>

                        <input class="txt-field pass" id="new_password" name="new_password" type="password"
                           placeholder="Enter your new password" value="<?php echo $new_password; ?>" />
                        <span class=" error-inp-field error-pass"><?php echo $new_passwordErr; ?></span>
                        <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->

                     </div>
                     <div class="content-wrapper block-1233">
                        <label id="new_password_confirm" class="pass-label" for="contact">Confirm New Password</label>

                        <input class="txt-field pass" id="new_password_confirm" name="new_password_confirm"
                           type="password" placeholder="Confirm your new password"
                           value="<?php echo $new_password_confirm; ?>" />
                        <span class="error-inp-field error-pass"><?php echo $new_password_confirmErr; ?></span>
                        <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->

                     </div>

                     <div class="btn_wrapper_section">
                        <input type="submit" id="change_password_submit_btn" class="change_password_submit_btn"
                           name="change_password_submit_btn" value="Save Changes"></input>

                     </div>
                  </div>
               </section>
            </form>
         </div>


      </div>


   </div>

</div>


<?php
   
   include("footer.php");
   
   echo $showsuccess;
   ?>


<!-- END | FOOTER -->


<script>
function showSuccessToast() {

   toast({
      message: "Password changed successfully",
      type: "success",
      duration: 10000
   });

}
</script>





<script src="../assets/javascript/toast.js"></script>
<script src="../assets/javascript/navbar.js"></script>
<script src="../assets/javascript/navbar-retriever-inner.js"></script>
<script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>

<body>

</body>

</html>