
if(session_username){ 
   let isOnDiv = false;
   $("#notif-retriever").mouseenter(
      function() {
         isOnDiv = true;
      }
   );
  
   $("#notif-retriever").mouseleave(
      function() {
         isOnDiv = false;
      }
   );
  
  $(document).ready(function() {
     setInterval(() => {
      
        if (!isOnDiv) {
           $('#notif-retriever').load('assets/php/notification-retriever.php', {
              user_id: user_id,
              navbar_inner: false
           })
  
           if($('#notif-retriever').children('.not_it').length > 0){
              $('#empty-notif-nav').hide();
           } else { 
              $('#empty-notif-nav').show();
           }
        }
     },500);
  });
  
  
  
  
  let isOnDivH = false;
  $("#cart-retriever").mouseenter(
     function() {
        isOnDivH = true;
     }
  );
  
  $("#cart-retriever").mouseleave(
     function() {
        isOnDivH = false;
     }
  );
  
  
  $(document).ready(function() {
     setInterval(() => {
      
        if (!isOnDivH) {
           $('#cart-retriever').load('assets/php/cart-retriever.php', {
              user_id: user_id,
              navbar_inner: false
           })
  
           if($('#cart-retriever').children('#cart-href').length > 0){
              $('#empty-cart-nav').hide();
           } else { 
              $('#empty-cart-nav').show();
           }
        }
     },500);
  });
}
