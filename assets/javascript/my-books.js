  // var list =  document.querySelectorAll('input[type="checkbox"]:checked').length;
var bookCartItems = document.querySelectorAll('.cart_item');
var checkBox = document.querySelectorAll("#vc_check_box");
var buyBtn = document.querySelector(".view_cart_buy_btn");
var list;
// console.log(checkBox.length);

var parentlist = [];
var indexList = [];

// // on change click listener
// checkBox.forEach((item,idx) =>  { 
//    item.addEventListener('change', function(e) {
//        list =  document.querySelectorAll('input[type=checkbox]:checked');
     
//       indexList.push(idx);

//    })
// });



//delete button click listener
$('.view_cart_delete_btn').click(function(){ 
   console.log("delete button clicked");
   var bookList = [];

   $('#book_cart_retriever :checkbox:checked').each(function(i){                         

      //  console.log(($(this).val()));

       bookList[i] = $(this).val();  

   });
  

   if(bookList.length > 0){
      // perform ajax call to buy book verification  from cart

      showRemovedCartItemToast()
      $.ajax({
         type: "POST",
         url: "../assets/php/remove-cart-item.php",
         dataType: "JSON",
         data : {book_list: JSON.stringify(bookList)},
         beforeSend: function(){
            // $('.sign-up-section').hide();
            // $('.loading-verification').show()
          },
          complete: function(){
            // $('.loading-verification').hide()
          },
          success: function(response) {
            console.log(response);
            $('#book_cart_retriever').load('../assets/php/retriever_view_cart.php', {user_id : user_id});
          
          },
          error: function(request, status, error) {
            console.log(request.responseText);
          }
      });

     } else { 
      // show no book selected
      showNoSelectedBooks();
      console.log("no book selected");
     }
  
})

// // buy button click listener
// $('.view_cart_buy_btn').click(function() {

//    var bookList = [];

//    $('#book_cart_retriever :checkbox:checked').each(function(i){                         

//       //  console.log(($(this).val()));

//        bookList[i] = $(this).val();  

//    });

//    console.log(bookList);
//    return false;

  
// });
