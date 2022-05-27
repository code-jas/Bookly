const artworkCategory = ['Digital Art', 'Painting', 'Pixel Art', 'Integrated Art', 'Chibi Art', 'Vector Art'];
const answerEls = document.querySelectorAll(".select");
const alpPriceEl = document.getElementById("alp-price");
const usdPriceEl = document.getElementById("usd-price");

let prodName = undefined;
let prodDesc = undefined;
let prodAmount = undefined;
let prodStartBid = undefined;
let prodEndBid = undefined;
let prodCategory = undefined;
let prodImage = undefined;

function getSelected() { 
  let answer = undefined;
  answerEls.forEach((answerEl,idx) =>{
    if(answerEl.checked){
      answer = idx  ;
    }
  });

  return answer;
}
// function to input image
function readURL(input) {
   if (input.files && input.files[0]) {
 
     var reader = new FileReader();
 
     reader.onload = function(e) {
       $('.image-upload-wrap').hide();
 
       $('.file-upload-image').attr('src', e.target.result);
       $('#summary-img').attr('src', e.target.result);
       $('.file-upload-content').show();
        $('.image-upload-wrap').css('border','none');
        $('.error-msg-1').css('visibility','hidden');
      
 
       $('.image-title').html(input.files[0].name);
       
     };
     
 
     reader.readAsDataURL(input.files[0]);
 
   } else {
     removeUpload();
   }
 }
 var ds= ''
 function removeUpload() {
   $('.file-upload-image').attr('src', ds);
   $('.file-upload-input').replaceWith($('.file-upload-input').clone());
   $('.file-upload-content').hide();
   $('.image-upload-wrap').show();

 }
 $('.image-upload-wrap').bind('dragover', function () {
     $('.image-upload-wrap').addClass('image-dropping');
   });
   $('.image-upload-wrap').bind('dragleave', function () {
     $('.image-upload-wrap').removeClass('image-dropping');
 });

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* head function */
let isRed = undefined;
let progress = document.getElementById("progress");
const prev = document.getElementById("prev-btn");
const next = document.getElementById("continue1-submit");
const circles = document.querySelectorAll(".circle");


let currentActive = 1;

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

function addBidStartAmount() {
 
  summaryBidAlp = parseInt($('#bid-start-amount').val());
  prodAmount = summaryBidAlp;

  let currentBidUsd = summaryBidAlp / .60;
  usdPriceEl.innerHTML = `= $ ${currentBidUsd.toFixed(2)}`;
  alpPriceEl.innerHTML = `${summaryBidAlp} `; 
}
// next.addEventListener("click",() =>{ 
// });
// prev.addEventListener("click",() =>{
// });
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
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// button for add new product (A)
$('#add-button').on('click', function() {
  $('#check').prop('checked', false);
  $('#artwork-accepted').hide();
  $('#close-button').hide();

   $('.buy-book-modal-container').fadeIn('fast');
   $('.buy-book-cont').show();
   $('.buy-book-body').show();
   $('.summary-body-mod').hide();
   $('.verification-product').hide();
   $('.done-section').hide();
   currentActive = 1;
   update();



 });
 // close button on the upper right (B)
 $('.close').on('click',function(){
   $('.buy-book-modal-container').fadeOut('fast');
 });
 $('#close-button').on('click',function(){
  $('#artwork-name').val("");
  $('#artwork-description').val("");
  // $('input[type="radio":checked]').each(function(){
  //  $(this).checked = false;  
  // });
  $('.date-input').val("");
  $('.time-input').val("");
  $('#bid-start-amount').val("");
  $('.buy-book-modal-container').fadeOut('fast');
});



  $('#artwork-name').on('input', function(){
      if(this.value.length > 35){ 
        this.value = this.value.slice(0,35);
      }
      $('.error-msg-2').css('visibility','hidden');
      $('.textbox').css('box-shadow','none');
  });

  $('#artwork-description').on('input', function() {
    $('.error-msg-3').css('visibility','hidden');
    $('.text-area').css('box-shadow','none');
  });
 
  $('#bid-start-amount').on('focus', function(){
    $('.bid-start-price').css('box-shadow','0 0 0 1pt var(--blue)');
  });
  $('#fromDate').on('focus', function(){
    $('#fromDate').css('box-shadow','0 0 0 1pt var(--blue)');
  });
  $('#toDate').on('focus', function(){
    $('#toDate').css('box-shadow','0 0 0 1pt var(--blue)');
  });
  $('#time-start').on('focus', function(){
    $('#time-start').css('box-shadow','0 0 0 1pt var(--blue)');
  });
  $('#time-end').on('focus', function(){
    $('#time-end').css('box-shadow','0 0 0 1pt var(--blue)');
  });
  $('#bid-start-amount, #fromDate, #toDate, #time-start,#time-end').on('focusout', function(){
    $('.bid-start-price').css('box-shadow','none');
    $('#fromDate').css('box-shadow','none');
    $('#toDate').css('box-shadow','none');
    $('#time-start').css('box-shadow','none');
    $('#time-end').css('box-shadow','none');
  });
  $('#bid-start-amount').on('input', function(){
    if (this.value.length > 8) {
      this.value = this.value.slice(0,8);
    }
    invalidAmount();
  });
  

 // first continue button
 $('#continue1-submit').on('click', function(){
    errorDetected();

    if(isRed == false){
  
      nextfunc();
      $('.buy-book-body').hide();
      $('.summary-body-mod').show();

     $('#summary-artwork-name').val($('#artwork-name').val());
     $('#summary-artwork-description').val($('#artwork-description').val());

    }
    isRed= false;
    if($('#bid-start-amount').val() == ""){
      $('#summary-next-btn').prop('disabled', true);
    }

 });
 // first previous button
 $('#prev-to-body').on('click', function(){
   prevfunc();
   $('.buy-book-body').show();
   $('.summary-body-mod').hide();
 });



 
 function errorDetected(){
    if(currentActive == 1) {
      if($('#artwork-name').val() == "" ){
        isRed = true; // check if there is an error in section
        $('.error-msg-2').css('visibility','visible');
        $('.textbox').css('box-shadow','0 0 0 1pt red');
        $('.buy-book-body').show();
        $('.summary-body-mod').hide();
        $('.verification-product').hide();
      }
      if($('#artwork-description').val() == "" || $('#artwork-description').val().length < 20){
        isRed = true;
        $('.error-msg-3').css('visibility','visible');
        $('.text-area').css('box-shadow','0 0 0 1pt red');
      
        $('.buy-book-body').show();
        $('.summary-body-mod').hide();
        $('.verification-product').hide();
      }
      if ($('.file-upload-image').attr('src') == '') {
        isRed = true;
        $('.buy-book-body').show();
        $('.summary-body-mod').hide();
        $('.verification-product').hide();
        $('.image-upload-wrap').css('border','4px dashed red');
        $('.error-msg-1').css('visibility','visible');
      }
    }
    if(currentActive == 2) { 
      if (!$("input[name='select']:checked").val()) {
        isRed = true;
        //alert('Nothing is checked!');
        $('.buy-book-body').hide();
        $('.summary-body-mod').show();
        $('.verification-product').hide();
        $('.error-msg-4').css('visibility','visible');
        
      } else {
        //alert('One of the radio buttons is checked!');
        // console.log("radio button :" + $('input[name="select"]:checked').val());
      }

      if (isNaN(timestamp1)) {
        isRed = true;
        $('#fromDate').css('box-shadow','0 0 0 1pt red');
        $('.buy-book-body').hide();
        $('.summary-body-mod').show();
        $('.verification-product').hide();
        $('.error-msg-4').css('visibility','visible');
      }
      if (isNaN(timestamp2)) {
        isRed = true;
        $('#toDate').css('box-shadow','0 0 0 1pt red');
        $('.buy-book-body').hide();
        $('.summary-body-mod').show();
        $('.verification-product').hide();
        $('.error-msg-4').css('visibility','visible');
      }
      if($('#time-start').val() == '') {
        isRed = true;
        $('#time-start').css('box-shadow','0 0 0 1pt red');   
        $('.error-msg').css('visibility','visible');     
      }
      if($('#time-end').val() == '') {
        isRed = true;
        $('#time-end').css('box-shadow','0 0 0 1pt red');  
        $('.error-msg-4').css('visibility','visible');      
      }
      

    }

  };

  function invalidAmount(){
    // amount error
    if(parseInt($('#bid-start-amount').val()) < 15 || parseInt($('#bid-start-amount').val()) > 15000 || $('#bid-start-amount').val() == ""){
      $('.error-msg-5').css('visibility','visible');
      $('.bid-start-price').css('box-shadow','0 0 0 1pt red');
       $('#summary-next-btn').attr('disabled', true);
    } else {  
      $('.error-msg-5').css('visibility','hidden');
      $('.bid-start-price').css('box-shadow','0 0 0 1pt var(--blue)');
      $('#summary-next-btn').attr('disabled', false);
    }
  }


 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 $(document).ready( function() {
  let from = new Date();

  let day = ("0" + from.getDate()).slice(-2);
  let month = ("0" + (from.getMonth() + 1)).slice(-2);
  let today = (month)+"-"+(day)+"-"+ from.getFullYear();


  $('#fromDate').val(today);
  $('#toDate').val(today);

 });

function testClicked()
{
  timestamp1 = Date.parse($('#fromDate').val());
  timestamp2 = Date.parse($('#toDate').val());

};

var fromDate;
$('#fromDate').on('change', function() {
  fromDate = $(this).val();
  $('#toDate').prop('min',function(){
    return fromDate;
  });
});

var toDate;
$('#toDate').on('change',function(){
  toDate = $(this).val();
  $('#fromDate').prop('max',function(){
    return toDate;  
  });
});
//////////////////////////////////////////////////////////////////////////////////////////////////////

$('#summary-next-btn').on('click', function(){

  testClicked();
  errorDetected();
 
  if(isRed == false){

    nextfunc();
    prodCategory = artworkCategory[getSelected()];
   
    
    $('.buy-book-body').hide();
    $('.summary-body-mod').hide();
    $('.verification-product').show();
    $('#summary-artwork-category').val(prodCategory);
    $('#summary-bid-start-amount').val($('#bid-start-amount').val());
    prodStartBid =  $('#summary-bid-start').val(
      formatDateAndTime($('#time-start').val() ,$('#fromDate').val()).toUTCString()
    );
    prodEndBid = $('#summary-bid-end').val(
      formatDateAndTime($('#time-end').val() , $('#toDate').val()).toUTCString()
    );
    addBidStartAmount();
   
    
  };
  isRed = false;
});

$('#prev-to-pricing').on('click', function(){
  prevfunc();
  $('.buy-book-body').hide();
  $('.summary-body-mod').show();
  $('.verification-product').hide();
  $('.done-section').hide();
});

$('#verify-btn').on('click', function(){
  $('.verification-product').hide();
  $('.done-section').show();
  nextfunc();


  artworkData();

  setTimeout(function(){
    $('#check').prop('checked', true);
    $(".check").addClass("fas fa-check");  
    $('#artwork-accepted').show();
    $('#close-button').show();
  }, 4000);
});
$("#check").click(function() {
  return false;
});

// create Date object from valid string inputs
function formatDateAndTime(times, dates){
  var time = times;
  var hours = Number(time.match(/^(\d+)/)[1]);
  var minutes = Number(time.match(/:(\d+)/)[1]);
  var AMPM = time.match(/\s(.*)$/)[1];
  if(AMPM == "PM" && hours<12) hours = hours+12;
  if(AMPM == "AM" && hours==12) hours = hours-12;
  var sHours = hours.toString();
  var sMinutes = minutes.toString();
  var sSec = 00;
  if(hours<10) sHours = "0" + sHours;
  if(minutes<10) sMinutes = "0" + sMinutes;

var datetime = new Date(Date.parse(dates +' '+sHours + ":" + sMinutes + ":" + sSec));

  return datetime;
}


function artworkData() {
  console.log("artwork name :" + prodName);
  console.log("artwork description :" + prodDesc);
  console.log("artwork price : " + prodAmount);
  console.log("Category of artwork : " + prodCategory);
  console.log("Bid Start At : " + prodStartBid );
  console.log("Bid End at :" + prodEndBid);


}



