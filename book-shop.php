<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home | Bookly</title>
   <link rel="icon" href="./assets/images/illustrations/logo.png">
   <!-- import icons -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

   <link rel="stylesheet" href="./assets/css/root.css">

   <!-- global css
   <link rel="stylesheet" href="css/loader.css"> -->

   <!-- navigation bar css -->
   <link rel="stylesheet" href="./assets/css/book-shop.css">
   <link rel="stylesheet" href="./assets/css/bookshop.css">
   <!-- backtotop bar css -->
   <link rel="stylesheet" href="./assets/css/backtotop.css">
   <link rel="stylesheet" href="./assets/css/navbar.css">
   <link rel="stylesheet" href="./assets/css/signup.css">

   <!-- footer css -->
   <link rel="stylesheet" href="./assets/css/footer.css">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>

<body>
   <div class="loading__wrapper">
      <div class="box-wrap">
         <div class="box one"></div>
         <div class="box two"></div>
         <div class="box three"></div>
         <div class="box four"></div>
         <div class="box five"></div>
         <div class="box six"></div>
      </div>
   </div>


   <?php
      include("navbar.php");
   ?>

   <button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>

   <div class="global-fest">
      <div class="gall-title">
         <h1 id="header-title-dynamic">All available books</h1>
         <div class="underline"></div>
      </div>


      <!--START | FILTER DROPDOWN-->

      <div class="filter-search-container">
         <div class="filter-dropdown-container">
            <button id="filter-btn" class="filter "><i class="fa-solid fa-filter filter-btn-lsp"></i>Filter</button>
            <div id="filter-dropdown" class="filter-dropdown-content ">
               <div class="filter-grid-container">
                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">Biographies & Memoirs</h6>
                     <a href="book-shop?genre=Arts and Literature" id="cat1-genre1">Arts & Literature</a>
                     <a href="book-shop?genre=Cultural" id="cat1-genre2">Cultural</a>
                     <a href="book-shop?genre=European" id="cat1-genre3">European</a>
                     <a href="book-shop?genre=Historical" id="cat1-genre4">Historical</a>
                     <a href="book-shop?genre=Leaders and Notable People" id="cat1-genre5">Leaders & Notable
                        People</a>
                     <a href="book-shop?book-category=Biography and Memoirs" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">Children's</h6>
                     <a href="book-shop?genre=Action and Adventure" id="cat1-genre1">Action & Adventure</a>
                     <a href="book-shop?genre=Activity Books" id="cat1-genre2">Activity Books</a>
                     <a href="book-shop?genre=Animals" id="cat1-genre3">Animals</a>
                     <a href="book-shop?genre=Cars and Trucks" id="cat1-genre4">Cars & Trucks</a>
                     <a href="book-shop?genre=Classics" id="cat1-genre5">Classics</a>
                     <a href="book-shop?book-category=Childrens" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">Education and Reference</h6>
                     <a href="book-shop?genre=Catalogs" id="cat1-genre1">Catalogs</a>
                     <a href="book-shop?genre=Colleges" id="cat1-genre2">Colleges</a>
                     <a href="book-shop?genre=Curriculum" id="cat1-genre3">Curriculum</a>
                     <a href="book-shop?genre=Dictionaries" id="cat1-genre4">Dictionaries</a>
                     <a href="book-shop?genre=Education" id="cat1-genre5">Education</a>
                     <a href="book-shop?book-category=Education and Reference" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">History</h6>
                     <a href="book-shop?genre=African" id="cat1-genre1">African</a>
                     <a href="book-shop?genre=Ancient" id="cat1-genre2">Ancient</a>
                     <a href="book-shop?genre=Asian" id="cat1-genre3">Asian</a>
                     <a href="book-shop?genre=Black History" id="cat1-genre4">Black History</a>
                     <a href="book-shop?genre=Canadian" id="cat1-genre5">Canadian</a>
                     <a href="book-shop?book-category=History" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">Literature & Fiction</h6>
                     <a href="book-shop?genre=Classics" id="cat1-genre1">Classics</a>
                     <a href="book-shop?genre=Contemporary" id="cat1-genre2">Contemporary</a>
                     <a href="book-shop?genre=Genre Fiction" id="cat1-genre3">Genre Fiction</a>
                     <a href="book-shop?book-category=LITERATURE AND FICTION" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">Mystery & Suspense</h6>
                     <a href="book-shop?genre=Conspiracy" id="cat1-genre1">Conspiracy</a>
                     <a href="book-shop?genre=Crime" id="cat1-genre2">Crime</a>
                     <a href="book-shop?genre=Detective" id="cat1-genre3">Detective</a>
                     <a href="book-shop?genre=Mysteries" id="cat1-genre4">Mysteries</a>
                     <a href="book-shop?book-category=MYSTERY AND SUSPENSE" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">Religion & Spirituality</h6>
                     <a href="book-shop?genre=Agnosticism" id="cat1-genre1">Agnosticism</a>
                     <a href="book-shop?genre=Astrology" id="cat1-genre2">Astrology</a>
                     <a href="book-shop?genre=Atheism" id="cat1-genre3">Atheism</a>
                     <a href="book-shop?genre=Buddhism" id="cat1-genre4">Buddhism</a>
                     <a href="book-shop?genre=Christianity" id="cat1-genre5">Christianity</a>
                     <a href="book-shop?book-category=Religion and Spirituality" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">More Categories</h6>
                     <a href="book-shop?genre=Romance" id="cat1-genre1">Romance</a>
                     <a href="book-shop?genre=Sci-Fi and Fantasy" id="cat1-genre2">Sci-Fi & Fantasy</a>
                     <a href="book-shop?genre=Science and Math" id="cat1-genre3">Science & Math</a>
                     <a href="book-shop?genre=Teen Young and Adult" id="cat1-genre4">Teen Young and Adult</a>
                     <a href="book-shop?genre=Health, Fitness and Dieting" id="cat1-genre5">Health, Fitness &
                        Dieting</a>
                     <a href="book-shop" id="cat1-all">Shop All</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="search-container">
            <form action="" style="display: flex;">
               <input class="search-field" type="text" id="gsearch" name="gsearch"
                  placeholder="Search for books, authors and prices">
               <i class="magnifying fa-solid fa-magnifying-glass"></i>
            </form>
         </div>
      </div>

      <!-- END | Filter Dropdown-->


      <!-- <div class="gall-btn-cont">

      </div> -->

      <div id="search-result-empty-state" class="search-empty-state">

         <img class="search-empty-icon" alt="Search no result illustration"
            src="assets/images/illustrations/search-empty-icon.png">

         <p class="l-font-size">Sorry we couldn't find any matches for <span class="bold"
               id="search-empty-state-keyword">not found</span></p>

         <p class="m-font-size grey">Please try searching with another term</p>

      </div>
      <main class="fest-gallery-main">


      </main>
      <div class="no-books-available">
         No Books Available
      </div>
   </div>





   <?php
    include("footer.php");
   include("./assets/php/load-books.php");
   
   ?>


   <script>
   window.addEventListener("DOMContentLoaded", () => {
      if (bookContentList.length === 0) {
         document.querySelector(".no-books-available").style.display = "flex";
      } else {
         document.querySelector(".no-books-available").style.display = "none";
      }
      displayFestivalItems(bookContentList);
      // searchButton();
      goingUpBtn();
   });
   </script>

   <script src="./assets/javascript/book-shop.js"></script>
   <script>
   // // Function to display the gallery items
   function displayFestivalItems(bookContentItems) {
      let displayBook = bookContentItems.map((item) => {
         return `
         <div class="grid-content">
            <a id="book-links" href="book-details?id=${item.book_id}">
            <div class="img-box">
               <img src="${item.book_cover}" alt="${item.title}">
            </div>
            <div class="book-content">
               <div class="dispflex-ahxse">
                  <h6 class="book-title">${truncateWords(item.title,20)}</h6> 
                  <p class="authors">${truncateWords(item.author,25)}</p>
               </div>
                  
               <p class="price">₱${item.price}</p>
            </div>
            </a>
         </div>
            `;
      });
      displayBook = displayBook.join('');
      mainEl.innerHTML = displayBook;
   }
   </script>


   <script src="./assets/javascript/sign-in-sign-up.js"></script>
   <script src="./assets/javascript/navbar-retriever.js"></script>
   <script src="./assets/javascript/global.js"></script>
   <script src="./assets/javascript/toast.js"></script>




</body>

</html>