/****************  hamburger (mobile view) - start     *********************/

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const navLinks = document.querySelectorAll(".nav-link");

clickCount = 0;
hamburger.addEventListener("click", () => {
   hamburger.classList.toggle("navbar-active");
   navMenu.classList.toggle("navbar-active");
   ++clickCount;
   console.log(clickCount);
   if (clickCount % 2 === 0) {
      document.querySelector("body").style.overflow = "auto";
   

   } else {

      document.querySelector("body").style.overflow = "hidden";
   }
})

navLinks.forEach(n => n.addEventListener("click", () => {
   hamburger.classList.remove("navbar-active");
   navMenu.classList.toggle("navbar-active");
   document.querySelector("body").style.overflow = "auto";
}))

/****************  hamburger (mobile view) - end     *********************/


/****************  change bg navbar when scroll - start     *********************/
const header = document.querySelector("header");

window.addEventListener("scroll", () =>
   header.classList.toggle("sticky", window.scrollY > 0)
)
/****************  change bg navbar when scroll - start     *********************/


const ddProfMain = document.querySelector(".prof_dd_main");
const ddNotifMain = document.querySelector(".notif_dd_main");
const ddCartMain = document.querySelector(".cart_dd_main");

   ddProfMain.addEventListener("click", function () {
      ddCartMain.classList.toggle("active", false);
      ddNotifMain.classList.toggle("active", false);
      this.classList.toggle("active");
   })

   ddNotifMain.addEventListener("click", function () {
      ddProfMain.classList.toggle("active", false);
      ddCartMain.classList.toggle("active", false);
      this.classList.toggle("active");
   })
   ddCartMain.addEventListener("click", function () {
      ddProfMain.classList.toggle("active", false);
      ddNotifMain.classList.toggle("active", false);
      this.classList.toggle("active");
   })