$('#sign-up-btn').on('click', function() {
   // $('#check').prop('checked', false);
   // $('#artwork-accepted').hide();
   // $('#close-button').hide();
 
    $('.sign-up-modal-container-bg').fadeIn('fast');
    $('.sign-up-section').show();
    $('.verify-email-section').hide();
   //  $('.set-payment').hide();
   //  $('.verification-product').hide();
   //  $('.done-section').hide();
   //  currentActive = 1;
   //  update();
 
 
 
});


$('#sign-up-submit-btn').on('click', function(){
   $('.sign-up-section').hide();
   $('.verify-email-section').show();

});


$('.close').on('click',function(){
   $('.sign-up-modal-container-bg').fadeOut('fast');
});

$('#sign-up-done-btn').on('click',function(){
   
   $('.sign-up-modal-container-bg').fadeOut('fast');
});