<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Get Started | Bookly</title>
   <!-- import icons -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
   <!-- root css -->
   <link rel="stylesheet" href="assets/css/root.css">
   <!-- get-started css-->
   <link rel="stylesheet" href="assets/css/getstarted.css">

</head>


<!-- START | NAVIGATION BAR -->

<!-- END | NAVIGATION BAR -->

<!-- START | Create Profile -->

<?php

   include("assets/php/get-started-validation.php");

?>

<div class="get-started-page">
   <div id="toast"></div>

   <div class="get-started-container">
      <div class="edit_profile_container">
         <div class="edit_profile_content">
            <h2 class="edit-profile-margin">Welcome! Let's create your profile</h2>
            <p class="hd-desc">Let others get to know you better! You can do these later</p>
            <form method="POST" enctype="multipart/form-data">
               <h4 class="avatar-label">Add an avatar</h4>

               <div class="file-upload">
                  <div class="image-upload-wrap">
                     <span class="material-symbols-outlined material-icon-g">
                        add_a_photo
                     </span>
                     <input class="file-upload-input" id="file-upload-input" type='file' name="profile_img"
                        onchange="readURL(this);" accept="image/*" />
                  </div>
                  <div class="file-upload-content">
                     <img class="file-upload-image" id="file-upload-image" src="" alt="avatar image" />
                     <span class="image-title">uploaded image</span>
                     <div class="image-title-wrap">
                        <button type="button" onclick="removeUpload()" class="remove-image"><i class="fas fa-times"></i>
                           delete
                        </button>
                     </div>
                  </div>
                  <span class="error-msg-1"><?php echo $uploadErr ?></span>
                  <button class="file-upload-btn" type="button"
                     onclick="$('.file-upload-input').trigger( 'click' )">Upload Image</button>
               </div>


               <section id="personal-info-section">
                  <h4 class="personal-margin">Add Personal Information</h4>
                  <div class="personal-info-container">
                     <div class="content-wrapper">
                        <label id="name-title" for="fname">First Name</label>
                        <input class="txt-field" id="fname" name="firstname" type="text"
                           value="<?php echo $firstname; ?>" /><br>
                        <span class=" error-inp-field"><?php echo $firstnameErr; ?></span>

                     </div>


                     <div class="content-wrapper">
                        <label id="name-title" for="lname">Last Name</label>
                        <input class="txt-field" id="lname" name="lastname" type="text"
                           value="<?php echo $lastname; ?>" /><br>
                        <span class=" error-inp-field"><?php echo $lastnameErr; ?></span>
                     </div>

                     <div class="content-wrapper">
                        <label id="name-title" for="uname">Username</label>
                        <input class="txt-field" id="uname" name="username" type="text"
                           value="<?php echo $username;  ?>" readonly /><br>
                        <span class=" error-inp-field"><?php echo $usernameErr; ?></span>
                     </div>

                     <div class="content-wrapper">
                        <label id="name-title" for="email">Email</label>
                        <input class="txt-field" id="email" name="email" type="email" value="<?php echo $email; ?>"
                           readonly /><br>
                        <span class=" error-inp-field"><?php echo $emailErr; ?></span>
                     </div>

                     <div class="content-wrapper">
                        <label id="name-title" for="bday">Birth Date</label>
                        <input class="txt-field" id="bdate" name="birthdate" type="date"
                           value="<?php echo $birthdate;?> " /><br>
                        <span class=" error-inp-field"><?php echo $birthdateErr; ?></span>
                     </div>
                  </div>
               </section>

               <section id="location-info-section">
                  <h4 class="personal-margin">Add Your Location</h4>
                  <div class="personal-info-container">
                     <div class="content-wrapper">
                        <label id="name-title" for="address">Address</label>
                        <input class="txt-field" id="address" name="address" type="text"
                           value="<?php echo $address; ?>" /><br>
                        <span class=" error-inp-field"><?php echo $addressErr; ?></span>
                     </div>

                     <div class="content-wrapper">
                        <label id="name-title" for="brgy">Barangay</label>
                        <input class="txt-field" id="brgy" name="barangay" type="text"
                           value="<?php echo $barangay; ?>" /><br>
                        <span class=" error-inp-field"><?php echo $barangayErr; ?></span>
                     </div>

                     <div class="content-wrapper">
                        <label id="name-title" for="city">City</label>
                        <input class="txt-field" id="city" name="city" type="text" value="<?php echo $city; ?>" /><br>
                        <span class=" error-inp-field"><?php echo $cityErr; ?></span>
                     </div>

                     <div class="content-wrapper">
                        <label id="name-title" for="zip">Zip Code</label>
                        <input class="txt-field" id="zip" name="zipcode" type="text"
                           value="<?php echo $zipcode; ?>" /><br>
                        <span class=" error-inp-field"><?php echo $zipcodeErr; ?></span>
                     </div>
                  </div>
               </section>

               <div class="btn_wrapper_section">
                  <input type="submit" class="create-acct-btn" name="get_started_btn"></input>
               </div>
            </form>
         </div>
      </div>


   </div>

</div>
<!-- END | Create Profile-->




<!-- <script src="./assets/javascript/global.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
window.addEventListener("DOMContentLoaded", () => {
   showSuccessToast();
});
</script>
<script src="./assets/javascript/toast.js"></script>

<script src="./assets/javascript/get-started.js"></script>

<script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>

<body>

</body>

</html>