<?php
   
   require_once("db-config.php");

   $userID = $_POST['user_id'];

   $retrieve_query_notif = "SELECT * FROM notification WHERE user_id='$userID'";
   $retrieve_result_notif = mysqli_query($conn, $retrieve_query_notif);

   while($row_notif = mysqli_fetch_assoc($retrieve_result_notif)){ 
      $db_notif_id = $row_notif['notif_id'];

      $db_notif_subject = $row_notif['notif_subject'];
      $db_notif_message = $row_notif['notif_message'];

      $db_notif_type = $row_notif['notif_type'];

      $db_notif_user = $row_notif['user_id'];
      $db_notif_hef = $row_notif['notif_href'];
      $db_notif_img = $row_notif['notif_img'];

      $db_notif_href = "my-book/".$db_notif_hef;


      echo "
         <a href=\"$db_notif_href\" class=\"not_it\">
            <li class=\"notif-item-list\">
               <div class=\"notif-item-img-card\">
                  <img src=\"$db_notif_img\" alt=\"$db_notif_subject\">
               </div>
               <div class=\"notif-item-details\">
                  <h3>$db_notif_subject</h3>
                  <p>$db_notif_message</p>
               </div>
            </li>
         </a>

      ";


   }



?>