

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
            user_id: user_id
         })

         if($('#notif-retriever').children('.not_it').length > 0){
            $('#empty-notif-nav').hide();
         } else { 
            $('#empty-notif-nav').show();
         }
      }
   },500);
});