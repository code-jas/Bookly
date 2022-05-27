  // var list =  document.querySelectorAll('input[type="checkbox"]:checked').length;
var bookCartItems = document.querySelectorAll('.cart_item');
var checkBox = document.querySelectorAll("#vc_check_box");
var buyBtn = document.querySelector(".view_cart_buy_btn");
var list;
console.log(checkBox.length);

var parentlist = [];

// on change click listener
checkBox.forEach((item) =>  { 
   item.addEventListener('change', function(e) {
       list =  document.querySelectorAll('input:checked');
    
       


   })
});



// for buy button
buyBtn.addEventListener('click', (e) => {

   for (var i = 0; i < list.length; i++) {
      // console.log();
      parentlist.push(i);
    
    }
    console.log(parentlist);
    parentlist = [];
});



 console.log(parentlist.length);
