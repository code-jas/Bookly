<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Delete Account | Bookly</title>
   <!-- import icons -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

   <!-- verify passowrd css
   <link rel="stylesheet" type="text/css" href="../assets/css/del-acct-verifypw.css"> -->
   <!-- root css -->
   <link rel="stylesheet" href="../assets/css/root.css">
   <!-- navbar css -->
   <link rel="stylesheet" href="../assets/css/navbar.css">
   <!-- verify css -->
   <link rel="stylesheet" href="../assets/css/signup.css">
   <!-- footer css -->
   <link rel="stylesheet" href="../assets/css/footer.css">


   <!-- account-settings css-->
   <link rel="stylesheet" href="../assets/css/account-settings.css">
</head>

<?php

   include("navbar.php");
   // include(".././assets/php/account-overview-display.php");
   
?>

<!-- START | Account Settings-Delete Account -->
<div class="sidebar-wrapper-outer">
   <div class="sidebar-wrapper">

      <nav class="my_book_sidebar">
         <h1 class="sidebar-header">Account Settings</h1>
         <div class="sidebar_menu">
            <a href="overview" class="sidebar-link ">Account Overview</a>
            <a href="edit-profile" class="sidebar-link">Edit Profile</a>
            <a href="change-password" class="sidebar-link">Change Password</a>
            <a href="Delete" class="sidebar-link sidebar-active">Delete Account</a>
         </div>
         <div class="topnav_menu icons_menu">
            <a href="account_overview" class="topnav-icons "><i class="fa-solid fa-user"></i></a>
            <a href="edit-profile" class="topnav-icons "><i class="fa-solid fa-user-pen"></i></a>
            <a href="change-password" class="topnav-icons "><i class="fa-solid fa-lock"></i></a>
            <a href="delete-account" class="topnav-icons sidebar-active"><i class="fa-solid fa-trash-can"></i></a>
         </div>
      </nav>

      <div class="change-password-container">

         <div class="edit_profile_details_header">
            <h1>Delete Account</h1>
         </div>
         <div class="sidebar_line_break"></div>

         <div class="account-settings-content">

            <h2 class="delete-account-header2">Please read this carefully.</h2>
            <p class="delete-account-parag1">You’re trying to delete your Bookly Account, which provides you to
               access
               online bookstore.</p>
            <p class="delete-account-parag2">You’ll no longer be able to use any services from our websites, and your
               account and data will be permanentaly lost.</p>
            <div class="delete-account-line-break-policy"></div>
            <p class="delete-account-parag3">If you're decide to permantly deleted your account, we are not
               responsible
               on all date have been delete from your choice</p>
            <input type="checkbox" class="delete-checkbox-btn" id="delete" name="delete" /><label
               class="delete-account-parag4" for="delete">Yes, I
               want to permanently delete this Account and all its data.</label>
            <p class="error" id="delete-account-err"></p>

            <section class="btn_wrapper_section">
               <button id="delete_btn_init" class="delete-btn">Delete
                  Account</button>
            </section>
         </div>
      </div>
   </div>
</div>
<!-- END | Account Settings-Delete Account -->


<div class="sign-in-section-container-bg">
   <div class="delete-account-section-container ">
      <span tabIndex="0" class="close"><i class="fas fa-times"></i></span>

      <h2 class="title verify-pass-angelogwapo">Verify Password</h2>
      <h5 class="title-2">Enter your password to verify if it's you.</h5>
      <form method="POST" id="delete-account-form" class="su_form_cont">

         <div class="su-input-item wks31">
            <label for="password">Password</label>
            <input class="txt-field wks231" id="del-acc-password" name="password" type="password" />
            <p class="error" id="delete-account-err-modal"></p>
         </div>

         <input type="submit" id="sign-in-submit-btn" class="delete-account-submit" name="sign_in_submit"
            value="Confirm"></input></a>
      </form>
   </div>
</div>


<!--END | Verify Password MODAL -->
<?php
   
   include("footer.php");
   
   ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../assets/javascript/navbar.js"></script>
<script src="../assets/javascript/delete-account.js"></script>
<script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>

<body>

</body>

</html>