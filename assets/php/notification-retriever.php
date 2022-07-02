<?php
   
   require_once("db-config.php");

   $userID = $_POST['user_id'];
   $navbarInner = $_POST['navbar_inner'];
 

   $retrieve_query_notif = "SELECT * FROM notification WHERE user_id='$userID' ORDER BY notif_id DESC";
   $retrieve_result_notif = mysqli_query($conn, $retrieve_query_notif);

   while($row_notif = mysqli_fetch_assoc($retrieve_result_notif)){ 
      $db_notif_id = $row_notif['notif_id'];

      $db_notif_subject = $row_notif['notif_subject'];
      $db_notif_message = $row_notif['notif_message'];

      $db_notif_type = $row_notif['notif_type'];

      $db_notif_user = $row_notif['user_id'];
      $db_notif_hef = $row_notif['notif_href'];
      $db_notif_img = $row_notif['notif_img'];

      $db_notif_href_o = "my-book/".$db_notif_hef;
      $db_notif_href_us = "../my-book/".$db_notif_hef;

      $db_notif_overview_o = "account-settings/".$db_notif_hef;
      $db_notif_overview_mb = "../account-settings/".$db_notif_hef;


      if($navbarInner == "true"){
         $navbarChild = $_POST['navbar_child'];
         if($navbarChild == "user_side"){ 
            if($db_notif_type == "update_prof"){
               echo "
               <a href=\"$db_notif_hef\" class=\"not_it\">
                  <li class=\"notif-item-list\">
                     <div class=\"notif-item-img-card\">
                        <img src=\"../$db_notif_img\" alt=\"$db_notif_subject\">
                     </div>
                     <div class=\"notif-item-details\">
                        <h3>$db_notif_subject</h3>
                        <p>$db_notif_message</p>
                     </div>
                  </li>
               </a>
               ";
            } else { 
               echo "
               <a href=\"$db_notif_href_us\" class=\"not_it\">
                  <li class=\"notif-item-list\">
                     <div class=\"notif-item-img-card\">
                        <img src=\"../$db_notif_img\" alt=\"$db_notif_subject\">
                     </div>
                     <div class=\"notif-item-details\">
                        <h3>$db_notif_subject</h3>
                        <p>$db_notif_message</p>
                     </div>
                  </li>
               </a>
               ";
            }
         
         }else { 
            if($db_notif_type == "update_prof"){
               echo "
               <a href=\"$db_notif_overview_mb\" class=\"not_it\">
                  <li class=\"notif-item-list\">
                     <div class=\"notif-item-img-card\">
                        <img src=\"../$db_notif_img\" alt=\"$db_notif_subject\">
                     </div>
                     <div class=\"notif-item-details\">
                        <h3>$db_notif_subject</h3>
                        <p>$db_notif_message</p>
                     </div>
                  </li>
               </a>
               ";
            } else { 
               echo "
               <a href=\"$db_notif_hef\" class=\"not_it\">
                  <li class=\"notif-item-list\">
                     <div class=\"notif-item-img-card\">
                        <img src=\"../$db_notif_img\" alt=\"$db_notif_subject\">
                     </div>
                     <div class=\"notif-item-details\">
                        <h3>$db_notif_subject</h3>
                        <p>$db_notif_message</p>
                     </div>
                  </li>
               </a>
               ";
            }
           
         }
     
      } else {
         if($db_notif_type == "update_prof"){
            echo "
            <a href=\"$db_notif_overview_o\" class=\"not_it\">
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
         } else {
            echo "
            <a href=\"$db_notif_href_o\" class=\"not_it\">
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
      //    echo "
      //    <a href=\"$db_notif_href_o\" class=\"not_it\">
      //       <li class=\"notif-item-list\">
      //          <div class=\"notif-item-img-card\">
      //             <img src=\"$db_notif_img\" alt=\"$db_notif_subject\">
      //          </div>
      //          <div class=\"notif-item-details\">
      //             <h3>$db_notif_subject</h3>
      //             <p>$db_notif_message</p>
      //          </div>
      //       </li>
      //    </a>

      // ";

      }
 

   }



?>