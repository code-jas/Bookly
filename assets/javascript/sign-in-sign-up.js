$('#sign-up-btn').on('click', function() {
   $('.sign-in-section-container-bg').fadeOut('fast');
    $('.sign-up-modal-container-bg').fadeIn('fast');
    $('.sign-up-section').show();
    $('.verify-email-section').hide();
    $('.loading-verification').hide()

});


// $('#sign-up-submit-btn').on('click', function(){
//    $('.sign-up-section').hide();
//    $('.verify-email-section').show();

// });

// $('#sign-in-btn').submit(function(e) {
//    e.preventDefault();
//    var email = $('#email').val();
//    var password = $('#password').val();

// }) 



$(document).ready(function() {

   $('#su_username').on('input', function () {
      checkUsername();
   });
   $('#su_password').on('input', function () {
      checkPassword();
   });
   $('#su_confirm_password').on('input', function () {
      checkConfirmPassword();
   });
   $('#su_email').on('input', function () {
      checkEmail();
   });

   

   $('#sign-up-form-container').on('submit', function(e) {
      e.preventDefault();

      
      // !checkUsername() || !checkPassword() || !checkcheckConfirmPasswordmobile() || !checkEmail()

      if (!checkUsername() && !checkPassword() && !checkConfirmPassword() && !checkEmail()) {
         console.log("er1");
 
      } else if (!checkUsername() || !checkPassword() ||  !checkConfirmPassword() || !checkEmail()) {

         console.log("er");
      } else { 

         var form_data = new FormData(this);
         $.ajax({
            url: './assets/php/sign_up_verification.php',
            method: "POST",
            data: form_data,
            dataType: "JSON",
            processData:false,
            contentType:false,
            beforeSend: function(){
               $('.sign-up-section').hide();
               $('.loading-verification').show()
            },
            complete: function(){
               $('.loading-verification').hide()
            },
            success: function(response) {
               
               
               const message = {status: "success"};
               const existUsername = { username: "exists"};
               const existEmail = { email: "exists"};

   
               if(JSON.stringify(response) == JSON.stringify(message)){
                  $('.sign-up-section').hide();
                  $('.verify-email-section').show();
               }else{
                  // console.log(response);
                  $('.sign-up-section').show();
                  if(JSON.stringify(response) == JSON.stringify(existUsername)){
                     $('#su_username_err').html('Username already exists');
                  }
                  if(JSON.stringify(response) == JSON.stringify(existEmail)){
                     $('#su_email_err').html('Email already exists');
                  }
               }


            },
            error: function (request, status, error) {
              
               console.log(request.responseText);
            }
         })
      }

   });
});









function checkUsername(){

   var pattern = /^[a-zA-Z0-9]{3,20}$/;
   var user = $('#su_username').val();
   var validuser = pattern.test(user);
   if($('#su_username').val() == ''){
      $('#su_username_err').html('Username is required');
      return false;
   } else if ($('#su_username').val().length < 4) {
       $('#su_username_err').html('Username length is too short');
       return false;
   } else if (!validuser) {
       $('#su_username_err').html('Invalid username');
       return false;
   } else {
       $('#su_username_err').html('');
       return true;
   }
}


function checkPassword() { 


   var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{5,}$/;
   var pass = $('#su_password').val();
   var validpass = pattern2.test(pass);

   if($('#su_password').val() == ''){
      $('#su_password_err').html('Password is required');   
      return false;
   }  else if (!validpass) {
     
      $('#su_password_err').html('Minimum 5 and up to 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:');
      return false;
   } else {
      $('#su_password_err').html("");
      return true;
   }

}





function checkConfirmPassword() { 

   var pass = $('#su_password').val();
   var cpass = $('#su_confirm_password').val();

   if(cpass == ''){
      $('#su_confirm_password_err').html('Confirm Password is required');
      return false;
   } else if (pass !== cpass) {
      $('#su_confirm_password_err').html('Confirm password did not match');
      return false;
   } else {
      $('#su_confirm_password_err').html('');
      return true;
   }
   

}
function checkEmail() { 

   var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
   var email = $('#su_email').val();
   var validemail = pattern1.test(email);

   if($('#su_email').val() == ''){
      $('#su_email_err').html('Email is Required');
      return false;
   }
   else if (!validemail) {
      $('#su_email_err').html('Invalid email');
      return false;
   } else {
      $('#su_email_err').html('');
      return true;
   }

}

// function signUpBtn(){ 

// }


$('.close').on('click',function(){
   $('.sign-in-section-container-bg').fadeOut('fast');
   $('.sign-up-modal-container-bg').fadeOut('fast');
});

$('#sign-up-done-btn').on('click',function(){   
   $('.sign-up-modal-container-bg').fadeOut('fast');
});




let url = new URL(window.location.href);
let searchParams = new URLSearchParams(url.search);


const signinKey = searchParams.get('signin');
if(signinKey == 'sign-in-321jkh1jkasd'){
   $('.sign-up-modal-container-bg').fadeOut('fast');
 
   $('.sign-in-section-container-bg').fadeIn('fast');
}


// SIGN IN 
$('#sign-in-btn').on('click', function() {
   $('.sign-up-modal-container-bg').fadeOut('fast');
 
    $('.sign-in-section-container-bg').fadeIn('fast');
   //  $('.sign-up-section').show();
   //  $('.verify-email-section').hide();
});



function showSuccessToast() {
   toast({
   
      message: "Congratulations! Your account has been successfully verified.",
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


function toast({ title = "", message = "", type = "info", duration = 3000 }) {
   const main = document.getElementById("toast");
   if (main) {
     const toast = document.createElement("div");
 
     // Auto remove toast
     const autoRemoveId = setTimeout(function () {
       main.removeChild(toast);
     }, duration + 1000);
 
     // Remove toast when clicked
     toast.onclick = function (e) {
       if (e.target.closest(".toast__close")) {
         main.removeChild(toast);
         clearTimeout(autoRemoveId);
       }
     };
 
     const icons = {
       success: "fas fa-check-circle",
       info: "fas fa-info-circle",
       warning: "fas fa-exclamation-circle",
       error: "fas fa-exclamation-circle"
     };
     const icon = icons[type];
     const delay = (duration / 1000).toFixed(2);
 
     toast.classList.add("toast", `toast--${type}`);
     toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;
 
     toast.innerHTML = `
                     <div class="toast__icon">
                         <i class="${icon}"></i>
                     </div>
                     <div class="toast__body">
                         <h3 class="toast__title">${title}</h3>
                         <p class="toast__msg">${message}</p>
                     </div>
                     <div class="toast__close">
                         <i class="fas fa-times"></i>
                     </div>
                 `;
     main.appendChild(toast);
   }
 }

