<?php
   require_once("db-config.php");





   if($_SESSION["username"]) { 

      $user_id = $_REQUEST["id"];
      $get_book = mysqli_query($conn , "SELECT * FROM books WHERE book_id='$user_id'");

      while($row = mysqli_fetch_assoc($get_book)) { 

         $db_book_id = $row["book_id"];
         $db_title = $row["title"];
         $db_description = $row["description"];
         $db_price = $row["price"];
         $db_genre = $row["genre"];
         $db_category = $row["category"];
         $db_author = $row["author"];
         $db_publisher = $row["publisher"];
         $db_length = $row["length"];
         $db_width =  $row["width"];
         $db_format = $row["format"];
         $db_book_cover = $row["book_cover"];
         $db_sold = $row["sold"];
      }

    

      $username = $_SESSION["username"];


      $get_user = mysqli_query($conn , "SELECT * FROM account_user WHERE username='$username'");

      $row = mysqli_fetch_assoc($get_user);
    

      $db_user_id = $row["id_user"];
      $db_firstname = $row["firstname"];
      $db_lastname = $row["lastname"];
      $db_contact = $row["contact"];
      $db_birthdate = $row["birthdate"];
      $db_username = $row["username"];
      $db_email = $row["email"];
      $db_address = $row["address"];
      $db_barangay = $row["barangay"];
      $db_city = $row["city"];
      $db_profile_img = $row["profile_img"];
      $db_zipcode = $row["zipcode"];


   }




?>