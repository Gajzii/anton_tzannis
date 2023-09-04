// BURGER MENU
function onClickMenu() {
  document.getElementById("dropdownmenu").classList.toggle("change");
  document.querySelector(".top-menu").classList.toggle("change");
}

// MODAL
const readMoreBtns = document.querySelectorAll(".openModal");
const closeBtns = document.querySelectorAll(".closeModal");
var cardCount = 0;

readMoreBtns.forEach((btn) => {
  let productsPopupModal = "card-" + cardCount;
  let productsPopup = "cards-" + cardCount;

  btn.addEventListener("click", () => {
    document.querySelector("#" + productsPopupModal).style.display = "block";
    document.querySelector("#" + productsPopup).style.display = "block";
  });

  closeBtns.forEach((btn) => {
    let productsPopupModal = "card-" + cardCount;
    let productsPopup = "cards-" + cardCount;

    btn.addEventListener("click", () => {
      document.querySelector("#" + productsPopupModal).style.display = "none";
      document.querySelector("#" + productsPopup).style.display = "none";
    });
  });

  cardCount += 1;
});

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
