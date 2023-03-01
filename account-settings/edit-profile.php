<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Profile | Bookly</title>
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
<!-- END | NAVIGATION BAR -->

<!-- START | Account Settings-Delete Account -->

<div class="sidebar-wrapper-outer">
   <!-- START | NAVIGATION BAR -->
   <div id="toast" style="top: 8%; z-index= 10"></div>

   <div class="sidebar-wrapper">

      <nav class="my_book_sidebar">
         <h1 class="sidebar-header">Account Settings</h1>
         <div class="sidebar_menu">
            <a href="overview" class="sidebar-link">Account Overview</a>
            <a href="edit-profile" class="sidebar-link sidebar-active">Edit Profile</a>
            <a href="change-password" class="sidebar-link">Change Password</a>
            <a href="delete-account" class="sidebar-link">Delete Account</a>
         </div>
         <div class="topnav_menu icons_menu">
            <a href="account_overview" class="topnav-icons "><i class="fa-solid fa-user"></i></a>
            <a href="edit-profile" class="topnav-icons sidebar-active"><i class="fa-solid fa-user-pen"></i></a>
            <a href="change-password" class="topnav-icons "><i class="fa-solid fa-lock"></i></a>
            <a href="delete-account" class="topnav-icons "><i class="fa-solid fa-trash-can"></i></a>
         </div>

      </nav>



      <div class="account-settings-container">




         <div class="edit_profile_details_header">
            <h1>Edit Profile</h1>
         </div>
         <div class="sidebar_line_break"></div>
         <div class="account-settings-content">
            <form method="POST" enctype="multipart/form-data" id="edit-profile-form">
               <h4 class="avatar-label">Add an avatar</h4>

               <div class="file-upload">
                  <div class="image-upload-wrap">
                     <span class="material-symbols-outlined material-icon-g">
                        add_a_photo
                     </span>
                     <input class="file-upload-input" id="file-upload-input" type='file' name="profile_img"
                        onchange="readURL(this);" accept="image/*" value="<?php echo $profile_img_inp;?>" />
                  </div>
                  <div class="file-upload-content">
                     <img class="file-upload-image" id="file-upload-image" src="<?php echo $profile_img; ?>"
                        alt="avatar image" />
                     <span class="image-title">uploaded image</span>
                     <div class="image-title-wrap">
                        <button type="button" onclick="removeUpload()" class="remove-image"><i class="fas fa-times"></i>
                           delete
                        </button>
                     </div>
                  </div>
                  <span class="error-msg-1">
                     <?php //echo $uploadErr ?>
                  </span>
                  <button class="file-upload-btn" type="button"
                     onclick="$('.file-upload-input').trigger( 'click' )">Upload Image</button>
               </div>


               <section id="personal-info-section">
                  <h4 class="personal-margin">Add Personal Information</h4>
                  <div class="personal-info-container">
                     <div class="content-wrapper">
                        <label id="name-title" for="firstname">First Name</label>
                        <input class="txt-field" id="firstname" name="firstname" type="text"
                           value="<?php echo  ucfirst($firstname); ?>" /><br>
                        <span class="error-inp-field" id="firstname_err">

                        </span>

                     </div>


                     <div class="content-wrapper">
                        <label id="name-title" for="lastname">Last Name</label>
                        <input class="txt-field" id="lastname" name="lastname" type="text"
                           value="<?php echo ucfirst($lastname); ?>" /><br>
                        <span class=" error-inp-field" id="lastname_err">

                        </span>
                     </div>

                     <div class="content-wrapper">
                        <label id="name-title" for="username">Username</label>
                        <input class="txt-field" id="username" name="username" type="text"
                           value="<?php echo $username;  ?>" /><br>
                        <span class=" error-inp-field" id="username_err">

                        </span>
                     </div>

                     <div class="content-wrapper">
                        <label id="name-title" for="email">Email</label>
                        <input class="txt-field" id="email" name="email" type="email"
                           value="<?php echo $email; ?>" /><br>
                        <span class=" error-inp-field" id="email_err">

                        </span>
                     </div>

                     <div class="content-wrapper">
                        <label id="name-title" for="contact">Contact No.</label>
                        <input class="txt-field" id="contact" name="contact" type="text" maxlength="11"
                           value="<?php echo $contact;?>" /><br>
                        <span class=" error-inp-field" id="contact_err">

                        </span>
                     </div>

                     <div class="content-wrapper">
                        <label id="name-title" for="birthdate">Birth Date</label>
                        <input class="txt-field" id="birthdate" name="birthdate" type="date"
                           value="<?php echo $birthdate ?>" /><br>
                        <span class=" error-inp-field" id="birthdate_err">

                        </span>
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
                        <span class=" error-inp-field" id="address_err">

                        </span>
                     </div>

                     <div class="content-wrapper">
                        <label id="name-title" for="barangay">Barangay</label>
                        <input class="txt-field" id="barangay" name="barangay" type="text"
                           value="<?php echo $barangay; ?>" /><br>
                        <span class=" error-inp-field" id="barangay_err">

                        </span>
                     </div>

                     <div class="content-wrapper">
                        <label id="name-title" for="city">City</label>
                        <input class="txt-field" id="city" name="city" type="text"
                           value="<?php echo ucfirst($city); ?>" /><br>
                        <span class=" error-inp-field" id="city_err">

                        </span>
                     </div>

                     <div class="content-wrapper">
                        <label id="name-title" for="zipcode">Zip Code</label>
                        <input class="txt-field" id="zipcode" name="zipcode" type="text"
                           value="<?php echo $zipcode; ?>" /><br>
                        <span class=" error-inp-field" id="zipcode_err">

                        </span>
                     </div>
                  </div>
               </section>

               <div class="btn_wrapper_section">
                  <input type="submit" class="create-acct-btn" name="get_started_btn" value="Save Changes"></input>
               </div>
            </form>

         </div>


      </div>

   </div>


   <!-- END | Account Settings-Delete Account -->
</div>

<?php
   
   include("footer.php");
   
   ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../assets/javascript/edit-profile.js"></script>
<script src="../assets/javascript/get-started.js"></script>
<script src="../assets/javascript/toast.js"></script>
<script>
// var imgVal = $('#file-upload-input').val();

// readURL(imgVal);
if ($('#file-upload-image').attr('src') == '') {
   console.log('empty');
} else {
   $('.image-upload-wrap').hide();
   $('.remove-image').hide();
   $('.image-title').hide();

   $('.file-upload-content').show();
}





function showSuccessToast() {

   toast({
      message: "Profile Updated Successfully!",
      type: "success",
      duration: 10000
   });

}

function showErrorToast() {
   toast({
      title: "Thất bại!",
      message: "Có lỗi xảy ra, vui lòng liên hệ quản trị viên.",
      type: "error",
      duration: 5000
   });
}
</script>
<script src="../assets/javascript/navbar.js"></script>
<script src="../assets/javascript/navbar-retriever-inner.js"></script>

<script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>

<body>

</body>

</html>