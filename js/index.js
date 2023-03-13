function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

window.onscroll = function() {myScroll()};
var navbar = document.getElementById("home-header");
var sticky = navbar.offsetTop;
function myScroll() {
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