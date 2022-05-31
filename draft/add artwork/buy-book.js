let isRed = undefined;
let progress = document.getElementById("progress");
const prev = document.getElementById("prev-btn");
const next = document.getElementById("continue1-submit");
const circles = document.querySelectorAll(".circle");

let currentActive = 1;


$('#vb-buy-book-btn').on('click', function() {
  $('#check').prop('checked', false);
  $('.artwork-accepted').hide();
  $('#close-button').hide();

  $('.buy-book-modal-container').fadeIn('fast');
  $('.buy-book-cont').show();
  $('.buy-book-body').show();
  $('.summary-body-mod').hide();

  $('.done-section').hide();
   //  currentActive = 1;
   //  update();
 
  });
  

  $('#order-next-btn').on('click', function(){
   // errorDetected();

  
     nextfunc();
     $('.buy-book-body').hide();
     $('.summary-body-mod').show();
     $('.done-section').hide();

   //  $('#summary-artwork-name').val($('#artwork-name').val());
   //  $('#summary-artwork-description').val($('#artwork-description').val());

  


});

$('#summary-next-btn').on('click', function(){
  $('.buy-book-body').hide();
    $('.summary-body-mod').hide();
    $('.done-section').show();
   
  nextfunc();


 

  setTimeout(function(){
    $('#check').prop('checked', true);
    $(".check").addClass("fas fa-check");  
    $('.artwork-accepted').show();
    $('#close-button').show();
  }, 4000);
});
$("#check").click(function() {
  return false;
});



   // first previous button
   $('#prev-to-body').on('click', function(){
    prevfunc();
    $('.buy-book-body').show();
    $('.summary-body-mod').hide();
  });
  
  // close button on the upper right (B)
  $('.close').on('click',function(){
    $('.buy-book-modal-container').fadeOut('fast');
  });




  $('#close-button').on('click',function(){

    $('.buy-book-modal-container').fadeOut('fast');
  });
  function nextfunc(){
   currentActive++;
 
   if (currentActive > circles.length) {  
     currentActive = circles.length;
  }
  update();
 }
 

 
function prevfunc() {
  currentActive--;

  if (currentActive <1 ) {
    currentActive = circles.length;
 }
 update();
}
 function update() {
   circles.forEach((circle, idx) => {
      if( idx < currentActive){
         circle.classList.add("active");
          // setTimeout($(".check").addClass("fas fa-check"), 4000);  
     
      } else {
         circle.classList.remove("active");
         $(".check").removeClass("fas fa-check");

      }
   });

   const actives = document.querySelectorAll(".active");
   progress.style.width = ((actives.length - 1 ) / (circles.length  - 1) ) * 100+ "%";


  //  if (currentActive === 1 ) {
  //     prev.disabled = true;
  //  } else if (currentActive === circles.length) {
  //     next.disabled = true;
  //  } else { 
  //     prev.disabled = false;
  //     next.disabled = false;
  //  }
}