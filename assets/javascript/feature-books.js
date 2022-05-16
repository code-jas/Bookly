const slider = document.querySelector(".slider");
const btnLeft = document.getElementById("moveLeft");
const btnRight = document.getElementById("moveRight");
const indicators = document.querySelectorAll(".indicator");


// const descGenre = document.querySelector(".description__genre");




let baseSliderWidth = slider.offsetWidth;
let activeIndex = 0; // the current page on the slider

const urlImagePath = "./assets/images/feature-books/";

let movies = [
  {
    src:
    urlImagePath + "template-1.png",
    title: "The Matrix",
    author: "The Wachowski Brothers",
    price: "$10.99",
    genre: "Sci-Fi",
  },
  {
    src:
      "./assets/images/feature-books/template-2.png",
      title: "The Siderman",
      author: "The SPidermean Brothers",
      price: "$12.99",
      genre: "Sci-Fi",
  },
  {
    src:
      "./assets/images/feature-books/template-3.png",
      title: "The Siderman",
      author: "The SPidermean Brothers",
      price: "$12.99",
      genre: "Sci-Fi",
  },
  {
    src:
    urlImagePath + "template-1.png",
    title: "The Matrix",
    author: "The Wachowski Brothers",
    price: "$10.99",
    genre: "Sci-Fi",
  },
  {
    src:
      "./assets/images/feature-books/template-2.png",
      title: "The Siderman",
      author: "The SPidermean Brothers",
      price: "$12.99",
      genre: "Sci-Fi",
  },
  {
    src:
      "./assets/images/feature-books/template-3.png",
      title: "The Siderman",
      author: "The SPidermean Brothers",
      price: "$12.99",
      genre: "Sci-Fi",
  },
  {
    src:
    urlImagePath + "template-1.png",
    title: "The Matrix",
    author: "The Wachowski Brothers",
    price: "$10.99",
    genre: "Sci-Fi",
  },
  {
    src:
      "./assets/images/feature-books/template-2.png",
      title: "The Siderman",
      author: "The SPidermean Brothers",
      price: "$12.99",
      genre: "Sci-Fi",
  },
  {
    src:
      "./assets/images/feature-books/template-3.png",
      title: "The Siderman",
      author: "The SPidermean Brothers",
      price: "$12.99",
      genre: "Sci-Fi",
  },
  // {
  //   src:
  //     "https://images.unsplash.com/photo-1579156412503-f22426cc6386?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1352&q=80",
  // },
  // {
  //   src:
  //     "https://images.unsplash.com/photo-1514068574489-503a8eb91592?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1390&q=80",
  // },
  // {
  //   src:
  //     "https://images.unsplash.com/photo-1521714161819-15534968fc5f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
  // },
  // {
  //   src:
  //     "https://images.unsplash.com/photo-1572188863110-46d457c9234d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
  // },
  // {
  //   src:
  //     "https://images.unsplash.com/photo-1579702455224-c0dd4ac78234?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1369&q=80",
  // },

  // {
  //   src:
  //     "https://images.unsplash.com/photo-1575470180257-7183ddca844f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80",
  // },
  // {
  //   src:
  //     "https://images.unsplash.com/photo-1584253660192-de72b033c220?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80",
  // },
  // {
  //   src:
  //     "https://images.unsplash.com/photo-1611523792722-16952e48cffa?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80",
  // },
  // {
  //   src:
  //     "https://images.unsplash.com/photo-1536300007881-7e482242baa5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
  // },
];

const descContainer = document.querySelectorAll(".description__text-container");
const descTitle = document.querySelectorAll(".description__title");
const descAuthor = document.querySelectorAll(".description__author");
const descPrice = document.querySelectorAll(".description__price");
const newMovie = document.getElementById("ft-book0");
let iterate = 0;


// Fill the slider with all the movies in the "movies" array
function populateSlider() {
  movies.forEach((image) => {
    // Clone the initial movie thats included in the html, then replace the image with a different one
    const newMovie = document.getElementById("ft-book0");
    const newTextCont = newMovie.querySelector(".description");
   
    let clone = newMovie.cloneNode(true);
  
    let img = clone.querySelector("img");

    img.src = image.src;


    slider.insertBefore(clone, slider.childNodes[slider.childNodes.length -1]);

  });



}






populateSlider();
populateSlider();

// delete the initial movie in the html
const initialBooks = document.getElementById("ft-book0");
initialBooks.remove();

featureTextContent()

function featureTextContent() { 

  movies.forEach((item,index) => {
    
    console.log("index: " + index);
    // descTitle[item.length].innerHTML = item.title;
    let descContainer = document.querySelectorAll('.description__text-container')[index + iterate];
    let descTitle = document.querySelectorAll(".description__title")[index + iterate];
    let descAuthor = document.querySelectorAll(".description__author")[index + iterate];
    let descPrice = document.querySelectorAll(".description__price")[index + iterate];
  
    // iteratate = iteratate % movies.length == 0 ? iteratate  = 1 : iteratate;
   
    
    descTitle.innerHTML = movies[index].title;
    descAuthor.innerHTML = movies[index].author;
    descPrice.innerHTML = movies[index].price;
    index++;
  })
}




// Update the indicators that show which page we're currently on
function updateIndicators(index) {
  indicators.forEach((indicator) => {
    indicator.classList.remove("active");
  });
  let newActiveIndicator = indicators[index];
  newActiveIndicator.classList.add("active");
}

// Scroll Left button
btnLeft.addEventListener("click", (e) => {
  let movieWidth = document.querySelector(".ft-books").getBoundingClientRect()
    .width;
  let scrollDistance = movieWidth * 5; // Scroll the length of 6 movies. TODO: make work for mobile because (4 movies/page instead of 6)

  slider.scrollBy({
    top: 0,
    left: -scrollDistance,
    behavior: "smooth",
  });
  activeIndex = (activeIndex - 1) % 3;
  console.log(activeIndex);
  // updateIndicators(activeIndex);
});

// Scroll Right button
btnRight.addEventListener("click", (e) => {
  let movieWidth = document.querySelector(".ft-books").getBoundingClientRect()
    .width;
  let scrollDistance = movieWidth * 5; // Scroll the length of 6 movies. TODO: make work for mobile because (4 movies/page instead of 6)

  console.log(`movieWidth = ${movieWidth}`);
  console.log(`scrolling right ${scrollDistance}`);

  // if we're on the last page
  if (activeIndex == 2) {
    // duplicate all the items in the slider (this is how we make 'looping' slider)
    populateSlider();
    iterate += movies.length;
    featureTextContent();
    slider.scrollBy({
      top: 0,
      left: +scrollDistance,
      behavior: "smooth",
    });
    activeIndex = 0;
    // updateIndicators(activeIndex);
  } else {
    slider.scrollBy({
      top: 0,
      left: +scrollDistance,
      behavior: "smooth",
    });
    activeIndex = (activeIndex + 1) % 3;
    console.log(activeIndex);
    // updateIndicators(activeIndex);
  }
});

// slider.addEventListener("scroll", (e) => {
//   console.log(slider.scrollLeft);
//   console.log(slider.offsetWidth);
// });
