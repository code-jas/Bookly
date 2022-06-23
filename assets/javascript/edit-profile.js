// $('#birthdate').val('   ');

$(document).ready(function() {


   $('#firstname').on('input', function () {
      checkFirstName();
   });
   $('#lastname').on('input', function () {
      checkLastName();
   });
   $('#username').on('input', function () {
      checkUsername();
   });
   $('#email').on('input', function () {
      checkEmail();
   });
   $('#contact').on('input', function () {
      checkContact();
     
   });
   $('#birthdate').on('input', function () {
      checkBirthdate();
   });
   $('#address').on('input', function () {
      checkAddress();
   });
   $('#barangay').on('input', function () {
      checkBarangay();
   });
   $('#city').on('input', function () {
      checkCity();
   });
   $('#zipcode').on('input', function () {
      checkZipcode();
   });


   


   $('#edit-profile-form').on('submit', function(e) {
      e.preventDefault();
 
      if(checkFirstName() && checkLastName() && checkUsername() && checkEmail() && checkContact() && checkBirthdate() && checkAddress() && checkBarangay() && checkCity() && checkZipcode()){
         var edit_profile_form_data = new FormData(this);
         $.ajax({
            url: '.././assets/php/update-profile.php',
            method: "POST",
            data: edit_profile_form_data,
            dataType: "JSON",
            processData:false,
            contentType:false,
            beforeSend: function(){

            },
            complete: function(){
    
            },
            success: function(response) {
               // successfully connected to php file
               
               const usernameExists = "true";
               const emailExists = "true";

               const validateResponse = {
                  status : "success",
               }

               
               console.log("response " + JSON.stringify(response));

               // const messageSignIn = { status: "login success" };
               // const notExistUsername = { isExists: "notExists" };
               // const passwordInc = "incorect";
               // const existEmail = { password: "exists"};

               

               if(JSON.stringify(response.status) == JSON.stringify(validateResponse.status)){
                  // $('.sign-up-section').hide();
                  // $('.verify-email-section').show();
                  // $('#email-display').html($('#su_email').val());
                  
                 location.href = "#toast";
                  showSuccessToast();        

               }else{
                  console.log(JSON.stringify(response.usernameErr));

                  if(JSON.stringify(response.usernameErr) !== JSON.stringify("empty")){
                     $('#username_err').html('Username already exists.');
                  }

                  if(JSON.stringify(response.emailErr) !== JSON.stringify("empty")){
                     $('#email_err').html('Email already exists.');
                  }
                  
      
               }

            },
            error: function (request, status, error) {
             
               console.log(request.responseText);
            }
         });
      } else {
         console.log("error");
        
      }
      
   });
});



function checkFirstName() { 
   var firstname = $('#firstname').val();

   if(firstname == ''){
    
      $('#firstname_err').html('First name is required.');
      return false;
   } else if (firstname.length < 2) {
      $('#firstname_err').html('First name must be at least 2 characters.');
      return false;
   } else if(!/^[a-zA-Z ]*$/g.test(firstname)){
      $('#firstname_err').html('First name must be alphabetical.');
      return false;  // if it is not alphabetical

   } else  {
      $('#firstname_err').html('');
      return true;
   }
}

function checkLastName(){
   var lastname = $('#lastname').val();
   if(lastname == ''){
     
      $('#lastname_err').html('Last name is required.');
      return false;
   } else if (lastname.length < 2) {
      $('#lastname_err').html('First name must be at least 2 characters.');
      return false;
   } else if(!/^[a-zA-Z ]*$/g.test(lastname)){
      $('#lastname_err').html('First name must be alphabetical.');
      return false;  // if it is not alphabetical

   } else  {
      $('#lastname_err').html('');
      return true;
   }
}

function checkUsername(){
   var pattern = /^[a-zA-Z0-9-_]{5,20}$/;
   var username = $('#username').val();
   var validuser = pattern.test(username);

   if(username == ''){  
      $('#username_err').html('Username is required.');
      return false;
   } else if(username.length < 5){
      $('#username_err').html('Username must be at least 5 characters.');
      return false;
   }  else if(!validuser){
      $('#username_err').html('Invalid username.');
      return false;
   }else  {
      $('#username_err').html('');
      return true;
   }
}

function checkEmail() { 
   var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/
   var email = $('#email').val();
   var validemail = pattern1.test(email);

   if(email == ''){

      $('#email_err').html('Email is required.');
      return false;
   }  else if(!validemail){
      $('#email_err').html('Invalid email');
      return false;
   } else  {
      $('#email_err').html('');
      return true;
   }
}

// function checkPassword() { 
//    var password = $('#password').val();
//    if(password == ''){
//       console.log('Password is required.');
//       $('#password_err').html('Password is required.');
//       return false;
//    } else  {
//       $('#password_err').html('');
//       return true;
//    }
// }




function checkContact(){ 
   var contact = $('#contact').val();
   
   if(contact == ''){
      $('#contact_err').html('Contact number is required.');
      return false;
   }
   else if(contact.length < 11){
      $('#contact_err').html('Contact number must be at least 11 characters.');
      return false;
   }
   else if(!/^[0-9]*$/g.test(contact)){
      $('#contact_err').html('Contact number must be numeric.');
      return false;
   }
   else  {
      $('#contact_err').html('');
      return true;
   }

}


function checkBirthdate() {
   var birthdate = $('#birthdate').val();
   if(birthdate == ''){

      $('#birthdate_err').html('Birthdate is required.');
      return false;
   } else  {
      $('#birthdate_err').html('');
      return true;
   }
}


function checkAddress() { 
   var address = $('#address').val();
   if(address == ''){

      $('#address_err').html('Address is required.');
      return false;
   } else  {
      $('#address_err').html('');
      return true;
   }
}


function checkBarangay() {
   var barangay = $('#barangay').val();
   if(barangay == ''){

      $('#barangay_err').html('Barangay is required');
      return false;
   } else  {
      $('#barangay_err').html('');
      return true;
   }
}



function checkCity() { 
   var city = $('#city').val();
   if(city == ''){

      $('#city_err').html('City is required.');
      return false;
   } else  {
      $('#city_err').html('');
      return true;
   }

}


function checkZipcode() { 
   var zipcode = $('#zipcode').val();
   if(zipcode == ''){
      
      $('#zipcode_err').html('Zipcode is required.');
      return false;
   } else  {
      $('#zipcode_err').html('');
      return true;
   }
}




