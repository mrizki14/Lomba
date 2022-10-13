// !TOGGLE MOBILE
const menuToggle = document.querySelector(".menu-toggle input");
const nav = document.querySelector("nav ul");

menuToggle.addEventListener("click", function () {
  nav.classList.toggle("slide");
});

// !SCROLL NAVBAR
const navbar = document.getElementsByTagName("nav")[0];
window.addEventListener("scroll", function () {
  if (this.window.scrollY > 1) {
    navbar.classList.replace("bg-transparent", "nav-color");
  } else if (this.window.scrollY <= 0) {
    navbar.classList.replace("nav-color", "bg-transparent");
  }
});
