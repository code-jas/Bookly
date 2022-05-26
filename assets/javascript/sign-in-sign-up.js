$('#sign-up-btn').on('click', function() {
   $('.sign-in-section-container-bg').fadeOut('fast');
    $('.sign-up-modal-container-bg').fadeIn('fast');
    $('.sign-up-section').show();
    $('.verify-email-section').hide();

 
});


$('#sign-up-submit-btn').on('click', function(){
   $('.sign-up-section').hide();
   $('.verify-email-section').show();

});


$('.close').on('click',function(){
   $('.sign-in-section-container-bg').fadeOut('fast');
   $('.sign-up-modal-container-bg').fadeOut('fast');
});

$('#sign-up-done-btn').on('click',function(){
   
   $('.sign-up-modal-container-bg').fadeOut('fast');
});


$('#sign-in-btn').on('click', function() {
   $('.sign-up-modal-container-bg').fadeOut('fast');
 
    $('.sign-in-section-container-bg').fadeIn('fast');
   //  $('.sign-up-section').show();
   //  $('.verify-email-section').hide();
});



