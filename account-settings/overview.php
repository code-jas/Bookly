<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Account Overview | Bookly</title>
   <link rel="icon" href="../assets/images/illustrations/logo.png">
   <!-- import icons -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
   <!-- root css -->
   <link rel="stylesheet" href="../assets/css/root.css">
   <!-- navbar css -->
   <link rel="stylesheet" href="../assets/css/navbar.css">
   <!-- footer css -->
   <link rel="stylesheet" href="../assets/css/footer.css">
   <!-- edit profile css -->
   <link rel="stylesheet" href="../assets/css/getstarted.css">


   <!-- account-settings css-->
   <link rel="stylesheet" href="../assets/css/account-settings.css">


</head>

<?php

   include("navbar.php");
   // include(".././assets/php/account-overview-display.php");
   
?>


<!-- START | Account Overview -->
<div class="sidebar-wrapper-outer">
   <div class="sidebar-wrapper">

      <nav class="my_book_sidebar">
         <h1 class="sidebar-header">Account Settings</h1>

         <div class="sidebar_menu">
            <a href="overview" class="sidebar-link sidebar-active">Account Overview</a>
            <a href="edit-profile" class="sidebar-link">Edit Profile</a>
            <a href="change-password" class="sidebar-link">Change Password</a>
            <a href="delete-account" class="sidebar-link">Delete Account</a>
         </div>

         <div class="topnav_menu icons_menu">
            <a href="overview" class="topnav-icons mob-sidebar-icon-ch sidebar-active"><i
                  class="fa-solid fa-user"></i></a>
            <a href="edit-profile" class="topnav-icons mob-sidebar-icon-ch "><i class="fa-solid fa-user-pen"></i></a>
            <a href="change-password" class="topnav-icons mob-sidebar-icon-ch "><i class="fa-solid fa-lock"></i></a>
            <a href="delete-account" class="topnav-icons mob-sidebar-icon-ch"><i class="fa-solid fa-trash-can"></i></a>
         </div>

      </nav>



      <div class="account-settings-container">

         <div class="edit_profile_details_header">
            <h1>Account Overview</h1>
         </div>
         <div class="sidebar_line_break"></div>
         <div class="account-settings-content">
            <div class="avatar-info-container">
               <div class="profile_pic_231">
                  <img src="<?php echo $profile_img ?>" alt="<?php echo $firstname ?> avatar" />
               </div>

               <section>
                  <h3 id="full_name" class="personal-margin-info">
                     <?php echo ucfirst($firstname) ." ". ucfirst($lastname)?></h3>
                  <span id="uname" class="personal-margin-info uname-header1231 "><?php echo $username ?></span>
               </section>
            </div>

            <section id="personal-info-section">
               <h4 class="personal-margin"> Personal Information</h4>
               <div class="personal-info-container">
                  <div class="content-wrapper">
                     <label id="name-title" for="fname">First Name</label>
                     <input class="txt-field" id="fname" name="firstname" type="text"
                        value="<?php echo ucfirst($firstname)?>" readonly /><br>


                  </div>


                  <div class="content-wrapper">
                     <label id="name-title" for="lname">Last Name</label>
                     <input class="txt-field" id="lname" name="lastname" type="text"
                        value="<?php echo ucfirst($lastname)?>" readonly /><br>

                  </div>

                  <div class="content-wrapper">
                     <label id="name-title" for="uname">Username</label>
                     <input class="txt-field" id="uname" name="username" type="text" value="<?php echo $username;  ?>"
                        readonly /><br>

                  </div>

                  <div class="content-wrapper">
                     <label id="name-title" for="email">Email</label>
                     <input class="txt-field" id="email" name="email" type="email" value="<?php echo $email; ?>"
                        readonly /><br>

                  </div>

                  <div class="content-wrapper">
                     <label id="name-title" for="contact">Contact No.</label>
                     <input class="txt-field" id="contact" name="contact" type="text" value="<?php echo $contact;?>"
                        readonly />
                  </div>

                  <div class="content-wrapper">
                     <label id="name-title" for="birthdate">Birth Date</label>
                     <input type="date" class="txt-field " id="birthdate" name="birthdate"
                        value="<?php echo $birthdate;?>" readonly /><br>
                  </div>
               </div>
            </section>

            <section id="location-info-section">
               <h4 class="personal-margin">Your Location</h4>
               <div class="personal-info-container">
                  <div class="content-wrapper">
                     <label id="name-title" for="address">Address</label>
                     <input class="txt-field" id="address" name="address" type="text" value="<?php echo $address; ?>"
                        readonly /><br>

                  </div>

                  <div class="content-wrapper">
                     <label id="name-title" for="brgy">Barangay</label>
                     <input class="txt-field" id="brgy" name="barangay" type="text" value="<?php echo $barangay; ?>"
                        readonly /><br>

                  </div>

                  <div class="content-wrapper">
                     <label id="name-title" for="city">City</label>
                     <input class="txt-field" id="city" name="city" type="text" value="<?php echo $city; ?>"
                        readonly /><br>

                  </div>

                  <div class="content-wrapper">
                     <label id="name-title" for="zip">Zip Code</label>
                     <input class="txt-field" id="zip" name="zipcode" type="text" value="<?php echo $zipcode; ?>"
                        readonly /><br>

                  </div>
               </div>
            </section>

         </div>
      </div>
   </div>
</div>

<!-- END | Account Overview -->



<?php
   
   include("footer.php");
   
?>



<!-- END | FOOTER -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script src="../assets/javascript/navbar.js"></script>
<script src="../assets/javascript/navbar-retriever-inner.js"></script>
<script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>

<body>

</body>

</html>