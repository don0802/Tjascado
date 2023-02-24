window.onscroll = function() {myNavbar()};
var navbar = document.getElementById("home-header");
var sticky = navbar.offsetTop;
function myNavbar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function toggleSearch() {
  const icon = document.querySelector(".icon");
  const search = document.querySelector(".search");
  if (icon) {
    icon.onclick = function(){
      search.classList.toggle("active")
    }
  }
}
toggleSearch();