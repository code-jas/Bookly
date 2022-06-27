<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home | Bookly</title>
   <link rel="icon" href="img/logo/Festival Ph - Logo 46x46.png">
   <!-- import icons -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

   <link rel="stylesheet" href="./assets/css/root.css">
   <link rel="stylesheet" href="./assets/css/navbar.css">
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
         <h1>All available books</h1>
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
                     <a href="book-shop?book-category=Arts & Literature" id="cat1-genre1">Arts & Literature</a>
                     <a href="book-shop?book-category=Cultural" id="cat1-genre2">Cultural</a>
                     <a href="book-shop?book-category=European" id="cat1-genre3">European</a>
                     <a href="book-shop?book-category=Historical" id="cat1-genre4">Historical</a>
                     <a href="book-shop?book-category=Leaders & Notable People" id="cat1-genre5">Leaders & Notable
                        People</a>
                     <a href="book-shop?book-category=Shop All" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">Children's</h6>
                     <a href="book-shop?book-category=Action & Adventure" id="cat1-genre1">Action & Adventure</a>
                     <a href="book-shop?book-category=Activity Books" id="cat1-genre2">Activity Books</a>
                     <a href="book-shop?book-category=Animals" id="cat1-genre3">Animals</a>
                     <a href="book-shop?book-category=Cars & Trucks" id="cat1-genre4">Cars & Trucks</a>
                     <a href="book-shop?book-category=Classics" id="cat1-genre5">Classics</a>
                     <a href="book-shop?book-category=Shop All" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">Education & Reference</h6>
                     <a href="book-shop?book-category=Catalogs" id="cat1-genre1">Catalogs</a>
                     <a href="book-shop?book-category=Colleges" id="cat1-genre2">Colleges</a>
                     <a href="book-shop?book-category=Curriculum" id="cat1-genre3">Curriculum</a>
                     <a href="book-shop?book-category=Dictonaries" id="cat1-genre4">Dictonaries</a>
                     <a href="book-shop?book-category=Education" id="cat1-genre5">Education</a>
                     <a href="book-shop?book-category=Shop All" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">History</h6>
                     <a href="book-shop?book-category=African" id="cat1-genre1">African</a>
                     <a href="book-shop?book-category=Ancient" id="cat1-genre2">Ancient</a>
                     <a href="book-shop?book-category=Asian" id="cat1-genre3">Asian</a>
                     <a href="book-shop?book-category=Black History" id="cat1-genre4">Black History</a>
                     <a href="book-shop?book-category=Canadian" id="cat1-genre5">Canadian</a>
                     <a href="book-shop?book-category=Shop All" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">Literature & Fiction</h6>
                     <a href="book-shop?book-category=" id="cat1-genre1">Classics</a>
                     <a href="book-shop?book-category=" id="cat1-genre2">Contemporary</a>
                     <a href="book-shop?book-category=" id="cat1-genre3">Genre Fiction</a>
                     <a href="book-shop?book-category=" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">Mystery & Suspense</h6>
                     <a href="book-shop?book-category=Conspiracy" id="cat1-genre1">Conspiracy</a>
                     <a href="book-shop?book-category=Crime" id="cat1-genre2">Crime</a>
                     <a href="book-shop?book-category=Detective" id="cat1-genre3">Detective</a>
                     <a href="book-shop?book-category=Mysteries" id="cat1-genre4">Mysteries</a>
                     <a href="book-shop?book-category=Shop All" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">Religion & Spirituality</h6>
                     <a href="book-shop?book-category=Agnosticism" id="cat1-genre1">Agnosticism</a>
                     <a href="book-shop?book-category=Astrology" id="cat1-genre2">Astrology</a>
                     <a href="book-shop?book-category=Atheism" id="cat1-genre3">Atheism</a>
                     <a href="book-shop?book-category=Buddhism" id="cat1-genre4">Buddhism</a>
                     <a href="book-shop?book-category=Christian" id="cat1-genre5">Christian</a>
                     <a href="book-shop?book-category=Shop All" id="cat1-all">Shop All</a>
                  </div>

                  <div class="filter-grid-content">
                     <h6 id="category-1" style="padding-left: 5px; padding-right: 5px">More Categories</h6>
                     <a href="book-shop?book-category=Romance" id="cat1-genre1">Romance</a>
                     <a href="book-shop?book-category=Sci-Fi & Fantasy" id="cat1-genre2">Sci-Fi & Fantasy</a>
                     <a href="book-shop?book-category=Science & Math" id="cat1-genre3">Science & Math</a>
                     <a href="book-shop?book-category=Teen & Young Adult" id="cat1-genre4">Teen & Young Adult</a>
                     <a href="book-shop?book-category=Health, Fitness & Dieting" id="cat1-genre5">Health, Fitness &
                        Dieting</a>
                     <a href="book-shop?book-category=Shop All" id="cat1-all">Shop All</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="search-container">
            <form action="" style="display: flex;">
               <input class="search-field" type="search" id="gsearch" name="gsearch" placeholder="Search for books">
               <i class="magnifying fa-solid fa-magnifying-glass"></i>
            </form>
         </div>
      </div>

      <!-- END | Filter Dropdown-->


      <!-- <div class="gall-btn-cont">

      </div> -->

      <!-- <div id="search-result-empty-state" class="search-empty-state">

                  <img class="search-empty-icon" alt="Search no result illustration" src="./img/search-empty-icon.svg">

                  <p class="l-font-size">Sorry we couldn't find any matches for <span class="bold"
                        id="search-empty-state-keyword">not found</span></p>

                  <p class="m-font-size grey">Please try searching with another term</p>

               </div> -->
      <main class="fest-gallery-main">

      </main>
   </div>





   <?php
    include("footer.php");
  // include("./php/fetch_festival_details.php");
   
   ?>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script>
   const festivalContent = [{
         id: 1,
         title: "bookly",
         description: "lorem ipsum",
         price: 250,
         genre: "Bookshop",
         category: "History",
         author: "John Doe",
         publisher: "John Doe",
         length: "25cm",
         width: "25cm",
         format: "Paperback",
         cover: "assets/images/bookshop-gallery/Sell1.jpg",
      },
      {
         id: 1,
         title: "The Matrix Reloaded Matrixes",
         description: "lorem ipsum",
         price: 250,
         genre: "Bookshop",
         category: "History",
         author: "John Doe",
         publisher: "John Doe",
         length: "25cm",
         width: "25cm",
         format: "Paperback",
         cover: "assets/images/bookshop-gallery/Sell1.jpg",
      },
      {
         id: 1,
         title: "bookly",
         description: "lorem ipsum",
         price: 250,
         genre: "Bookshop",
         category: "History",
         author: "John Doe",
         publisher: "John Doe",
         length: "25cm",
         width: "25cm",
         format: "Paperback",
         cover: "assets/images/bookshop-gallery/Sell1.jpg",
      },
      {
         id: 1,
         title: "bookly",
         description: "lorem ipsum",
         price: 250,
         genre: "Bookshop",
         category: "History",
         author: "John Doe",
         publisher: "John Doe",
         length: "25cm",
         width: "25cm",
         format: "Paperback",
         cover: "assets/images/bookshop-gallery/Sell1.jpg",
      },

   ]

   console.log(festivalContent);

   //  console.log(festivalContent);
   window.addEventListener("DOMContentLoaded", () => {

      displayFestivalItems(festivalContent);
      // searchButton();
      goingUpBtn();
   });
   </script>

   <script src="./assets/javascript/book-shop.js"></script>
   <script>
   // // Function to display the gallery items
   function displayFestivalItems(festivalItems) {
      let displayFestival = festivalItems.map((item) => {
         return `
         <div class="grid-content">
            <a id="book-links" href="#">
            <div class="img-box">
               <img src="${item.cover}" alt="${item.title}">
            </div>
            <div class="book-content">
               <div class="dispflex-ahxse">
                  <h6 class="book-title">${item.title}</h6> 
                  <p class="authors">${item.author}</p>
               </div>
                  
               <p class="price">₱${item.price}</p>
            </div>
            </a>
         </div>
            `;
      });
      displayFestival = displayFestival.join('');
      mainEl.innerHTML = displayFestival;
   }
   </script>


   <script src="./assets/javascript/sign-in-sign-up.js"></script>
   <script src="./assets/javascript/global.js"></script>
   <script src="./assets/javascript/toast.js"></script>



</body>

</html>