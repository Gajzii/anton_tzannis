// burger menu
function onClickMenu() {
  document.getElementById("dropdownmenu").classList.toggle("change");
  document.querySelector(".top-menu").classList.toggle("change");
}

// MODAL
function openForm() {
  document.getElementById("productsPopupModal").style.display = "block";
  document.getElementById("productsPopup").style.display = "block";
}

function closeForm() {
  document.getElementById("productsPopupModal").style.display = "none";
  document.getElementById("productsPopup").style.display = "none";
}
// SLIDESHOW
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs((slideIndex += n));
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("productsSlideImg");
  if (n > x.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = x.length;
  }
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex - 1].style.display = "block";
}
