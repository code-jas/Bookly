// Get the button, and when the user clicks on it, execute myFunction


document.getElementById("filter-btn").onclick = function() {myFunction()};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
  document.getElementById("filter-dropdown").classList.toggle("show");
}