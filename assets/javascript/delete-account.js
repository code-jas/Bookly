
$('#delete_btn_init').on('click', function() {


});

$('.close').on('click',function(){
   $('.sign-in-section-container-bg').fadeOut('fast');

});




$('#delete_btn_init').on('click', function() {
 
   if( $('#delete').is(':checked')){
      $('.sign-in-section-container-bg').fadeIn('fast');
      $('#delete-account-err').html('');
   }else {
      $('#delete-account-err').html('Confirm to delete your account');     
   }

});

$(document).ready(function(){
   $('#delete-account-form').on('submit', function(e) {
      e.preventDefault();

      var password = $('#del-acc-password').val();


      if(password == '') {
         $('#delete-account-err-modal').html('Password is required');
      } else { 
         $('#delete-account-err-modal').html('');
         var form_data = new FormData(this);
         $.ajax({
            url: '.././assets/php/delete-account.php',
            method: "POST",
            data: form_data,
            dataType: "JSON",
            processData:false,
            contentType:false,
            beforeSend: function(){
            },
            complete: function(){
            },
            success: function(response) {
               
               

               const correctPassword = "match";
  
               console.log(response);
               
   
               if(JSON.stringify(response.status) == JSON.stringify(correctPassword)){
                  // delete account succefully
   
                  window.location.href=`./../home?logout=${response.logout}&v_1=${response.username_md5}&deleteaccnotif=${response.notification}`;
               }else{
                  // delete account failed
                  $('#delete-account-err-modal').html('Password is incorrect');
               }


            },
            error: function (request, status, error) {
              
               console.log(request.responseText);
            }
         })
      }
});
});

