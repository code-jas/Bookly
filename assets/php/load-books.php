<?php 
   require_once('db-config.php');


   if(isset($_GET['book-category'])){

      $book_category = $_GET['book-category'];

      $book_query ="SELECT * FROM books WHERE category = '$book_category' AND sold != '1'";

   } else if(isset($_GET['genre'])){
      
      $genre = $_GET['genre'];

      $book_query ="SELECT * FROM books WHERE genre = '$genre' AND sold != '1'";

   }else{
      $book_query = "SELECT * FROM books WHERE sold != '1'";
   }
   
  
   $book_result = mysqli_query($conn, $book_query);
   $bookContentList = array();
     

         while($row = mysqli_fetch_assoc($book_result)){
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

            
            $bookContentList[] = array(
               "book_id" => $db_book_id,
               "title" => $db_title,
               "description" => $db_description,
               "price" => $db_price,
               "genre" => $db_genre,
               "category" => $db_category,
               "author" => $db_author,
               "publisher" => $db_publisher,
               "length" => $db_length,
               "width" => $db_width,
               "format" => $db_format,
               "book_cover" => $db_book_cover
            );
           

         }
         
         $bookContentList =  json_encode($bookContentList);

         echo "
            <script>
               const bookContentList =  $bookContentList 
               </script>
         ";

   // print_r(json_encode($bookContentList));
//   echo json_encode($bookContentList)

      


   


?>