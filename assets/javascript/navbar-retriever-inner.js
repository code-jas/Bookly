
let isOnDivNotif = false;
 $("#notif-retriever").mouseenter(
    function() {
      isOnDivNotif = true;
    }
 );

 $("#notif-retriever").mouseleave(
    function() {
      isOnDivNotif = false;
    }
 );

$(document).ready(function() {
   setInterval(() => {

      if (!isOnDivNotif) {
         $('#notif-retriever').load('../assets/php/notification-retriever.php', {
            user_id: user_id,
            navbar_child : navbar_child,
            navbar_inner: true

         })

         if($('#notif-retriever').children('.not_it').length > 0){
            $('#empty-notif-nav').hide();
         } else { 
            $('#empty-notif-nav').show();
         }
      }
   },500);
});



let isOnDivCart = false;
$("#cart-retriever").mouseenter(
   function() {
      isOnDivCart = true;
   }
);

$("#cart-retriever").mouseleave(
   function() {
      isOnDivCart = false;
   }
);


$(document).ready(function() {
   setInterval(() => {
      console.log("cart-retriever");
      if (!isOnDivCart) {
         $('#cart-retriever').load('../assets/php/cart-retriever.php', {
            user_id: user_id,
            navbar_child : navbar_child,
            navbar_inner: true
         })

         if($('#cart-retriever').children('#cart-href').length > 0){
            $('#empty-cart-nav').hide();
         } else { 
            $('#empty-cart-nav').show();
         }
      }
   },500);
});