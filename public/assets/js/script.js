// !SCROLL NAVBAR
const navbar = document.getElementsByTagName("nav")[0];
window.addEventListener("scroll", function () {
  console.log(this.window.scrollY);
  if (this.window.scrollY > 1) {
    navbar.classList.replace("bg-transparent", "nav-color");
  } else if (this.window.scrollY <= 0) {
    navbar.classList.replace("nav-color", "bg-transparent");
  }
});
window.addEventListener("scroll", function () {
  console.log(this.window.scrollY);
  if (this.window.scrollY > 1) {
    navbar.classList.replace("bg-transparent-2", "nav-color-2");
  } else if (this.window.scrollY <= 0) {
    navbar.classList.replace("nav-color-2", "bg-transparent-2");
  }
});

document.getElementById('all').addEventListener('click', allShow);
document.getElementById('top').addEventListener('click', topShow);
document.getElementById('terdekat').addEventListener('click', closeShow);

var lokasi = document.getElementsByClassName("location");
var model = document.getElementsByClassName("hospital");

function allShow() {
  var searchValue = "Indonesia";
  for(var i = 0; i < lokasi.length; i++){
    if(lokasi[i].innerHTML.indexOf(searchValue) > -1){
      model[i].classList.add("d-block");
      model[i].classList.remove("d-none");
      // alert('found');
    }else{
      model[i].classList.add("d-none");
    }
  }
}

function topShow() {
  var searchValue = "Indonesia";
  for(var i = 0; i < lokasi.length; i++){
    if(lokasi[i].innerHTML.indexOf(searchValue) > -1){
      model[i].classList.add("d-block");
      model[i].classList.remove("d-none");
      // alert('found');
    }else{
      model[i].classList.add("d-none");
    }
  }
}

function closeShow() {
  var searchValue = "Bandung";
  for(var i = 0; i < lokasi.length; i++){
    if(lokasi[i].innerHTML.indexOf(searchValue) > -1){
      model[i].classList.add("d-block");
      model[i].classList.remove("d-none");
      // alert('found');
    }else{
      model[i].classList.add("d-none");
    }
  }
}