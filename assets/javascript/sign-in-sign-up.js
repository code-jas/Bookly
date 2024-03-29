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

   $('#sign-in-form-container').on('submit', function(e) {
      e.preventDefault();
      var username = $('#username').val();
      var password = $('#password').val();
      var isEmpty = false;

      if(username == '') {
         $('#si_username_err').html('Username is required');
         isEmpty = true;
      } else { 
         $('#si_username_err').html('');
      }
      if(password == '') {
         $('#si_password_err').html('Password is required');
         isEmpty = true;
      } else { 
         $('#si_password_err').html('');
      }
      if(isEmpty){
         console.log('empty');
      } else {

         var form_data = new FormData(this);
         $.ajax({
            url: './assets/php/login.php',
            method: "POST",
            data: form_data,
            dataType: "JSON",
            processData:false,
            contentType:false,
            beforeSend: function(){
               // $('.sign-up-section').hide();
               // $('.loading-verification').show()
            },
            complete: function(){
               // $('.loading-verification').hide()
            },
            success: function(response) {
               
               
               const messageSignIn = { status: "login success" };
               const notExistUsername = { isExists: "notExists" };
               const passwordInc = "incorect";
               // const existEmail = { password: "exists"};

               
   
               if(JSON.stringify(response.status) == JSON.stringify(messageSignIn.status)){
                  // $('.sign-up-section').hide();
                  // $('.verify-email-section').show();
                  // $('#email-display').html($('#su_email').val());
                  console.log('success');
                  window.location.href = "home";

               }else{
        
               
                  $('.sign-up-section').show();
                  if(JSON.stringify(response.isExists) == JSON.stringify(notExistUsername.isExists)){
                     console.log('not exist');
                     $('#si_username_err').html("We couldn't find your username.");
                  }
                  if(response == passwordInc){
                     console.log('password incorect');
                     $('#si_password_err').html('The password you’ve entered is incorrect.');
                  }
                
               }


            },
            error: function (request, status, error) {
              
               console.log(request.responseText);
            }
         })
      }
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
                  console.log("sign-up")
                  $('.sign-up-section').hide();
                  $('.verify-email-section').show();
                  $('#email-display').html($('#su_email').val());
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

   var pattern = /^[a-zA-Z0-9-_]{5,20}$/;
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
     
      $('#su_password_err').html('Minimum 5 and up to 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character.');
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
   $('.forgot-password-section-container').hide();
   showSuccessToast();
}
const signInForbiddenKey = searchParams.get('error');
if(signInForbiddenKey == '404'){
   $('.sign-up-modal-container-bg').fadeOut('fast');
   $('.sign-in-section-container-bg').fadeIn('fast');
   $('.forgot-password-section-container').hide();
}

const deletedAccountKey = searchParams.get('deleteaccnotif');

if(deletedAccountKey == 'successfullydeletedaccount'){
   showDeletedSuccessToast();
}

// SIGN IN 
$('#sign-in-btn').on('click', function() {
   $('.sign-up-modal-container-bg').fadeOut('fast');
 
    $('.sign-in-section-container-bg').fadeIn('fast');
    $('.sign-in-section-container').show();
    $('.forgot-password-section-container').hide();
});


$('#goto-forgot-password-btn').on('click', function() {
  
   $('.sign-in-section-container').hide();
   $('.forgot-password-section-container').show();
});


$('#forgot-password-submit-btn').on('click', function() {


    showSuccessEmailReset() ;


});

function showSuccessEmailReset() {
   toast({
      message: "An email has been sent to your email address. Please check your email and follow the instructions to reset your password.",
      type: "success",
      duration: 5000
   });

}





$('#forgot-password-form-container').on('submit', function(e) {
   e.preventDefault();
   if($('#fp_email').val() == ''){
      $('#fp_email_err').html('Email is required');
   }else { 
      $('#fp_email_err').html('');
    
      var email = $('#fp_email').val();
      var form_data_fp = new FormData(this);
  
      $.ajax({
         url: './assets/php/reset-password.php',
         method: "POST",                     
         data: form_data_fp,
         dataType: "JSON",
         processData:false,
         contentType:false,
         success: function(response) {

            const fp_existEmail = {
               "status": "emailExist",
            };
   

            if(JSON.stringify(response.status) == JSON.stringify(fp_existEmail.status)){
               // Proceeed to reset password
              
               console.log("Email exist");
            }else{
               $('#fp_email_err').html('Email does not exist');
               console.log("Email does not exist");
            }
         },
         error: function (request, status, error) {
            console.log(request.responseText);
         }
      })
   }

});
