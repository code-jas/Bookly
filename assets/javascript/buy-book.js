let isRed = undefined;
let progress = document.getElementById("progress");
const prev = document.getElementById("prev-btn");
const next = document.getElementById("continue1-submit");
const circles = document.querySelectorAll(".circle");

let currentActive = 1;



function isThisBookSold(sold){ 

  let isSold = false;
  if(sold == "1" ){
    isSold = true;
  
  }

  console.log("sold :" + isSold);

  return isSold;
  
}

$('#vb-buy-book-btn').on('click', function() {
  if(!isThisBookSold(isSold)){
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
  } else { 
     // show sold();
 
     showDeletedSuccessToast();
  }
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
   if(currentActive === 2)
    prevfunc();
    if(currentActive === 3){
      prevfunc();
      prevfunc();
    }
    $('.buy-book-modal-container').fadeOut('fast');
  });


  $('#buy-submit-form').on('submit', function(e){
    e.preventDefault();

    

    var form_data_buy_book = new FormData(this);

    $.ajax({
      url: './assets/php/purchase-order-func.php',
      method: "POST",
      data: form_data_buy_book,
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
        const purchaseResponse = { purchaseStatus : "success"};

        if( JSON.stringify(response.purchaseStatus) === JSON.stringify("success")){
          console.log("Successfully purchased");
          isSold = response.isSold;
          isThisBookSold(isSold);
        } else { 
          console.log("There's an error in the purchase order");
        }

      },
      error: function(request, status, error) {
        console.log(request.responseText);
      }

    });

  });

 



  $('#close-button').on('click',function(){
    
    prevfunc();
    prevfunc();
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