// BURGER MENU
function onClickMenu() {
  document.getElementById("dropdownmenu").classList.toggle("change");
  document.querySelector(".top-menu").classList.toggle("change");
}

// MODAL
const readMoreBtns = document.querySelectorAll(".openModal");
const closeBtns = document.querySelectorAll(".closeModal");

readMoreBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    let productsPopupModal = "card-" + index;
    let productsPopup = "cards-" + index;

    // Initialize slideIndex for this modal and set it as an attribute to 1
    const modalElement = document.querySelector("#" + productsPopup);
    modalElement.setAttribute("data-slide-index", 1); // Initialize to 1
    showDivs(modalElement); // Show the first image

    document.querySelector("#" + productsPopupModal).style.display = "block";
    document.querySelector("#" + productsPopup).style.display = "block";

    // Attach event listeners for navigation within this modal
    document.querySelector("#" + productsPopup + " .slideshow-arrow-left").addEventListener("click", () => {
      decrementSlideIndex(modalElement);
      showDivs(modalElement);
    });

    document.querySelector("#" + productsPopup + " .slideshow-arrow-right").addEventListener("click", () => {
      incrementSlideIndex(modalElement);
      showDivs(modalElement);
    });
  });
});

closeBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    let productsPopupModal = "card-" + index;
    let productsPopup = "cards-" + index;

    document.querySelector("#" + productsPopupModal).style.display = "none";
    document.querySelector("#" + productsPopup).style.display = "none";
  });
});

function incrementSlideIndex(modalElement) {
  const currentSlideIndex = parseInt(modalElement.getAttribute("data-slide-index"));
  const slideCount = modalElement.querySelectorAll(".productsSlideImg").length;
  if (currentSlideIndex < slideCount) {
    modalElement.setAttribute("data-slide-index", currentSlideIndex + 1);
  } else {
    modalElement.setAttribute("data-slide-index", 1); // Wrap around to the first image
  }
}

function decrementSlideIndex(modalElement) {
  const currentSlideIndex = parseInt(modalElement.getAttribute("data-slide-index"));
  const slideCount = modalElement.querySelectorAll(".productsSlideImg").length;
  if (currentSlideIndex > 1) {
    modalElement.setAttribute("data-slide-index", currentSlideIndex - 1);
  } else {
    modalElement.setAttribute("data-slide-index", slideCount); // Wrap around to the last image
  }
}

function showDivs(modalElement) {
  const slideIndex = parseInt(modalElement.getAttribute("data-slide-index"));
  var i;
  var x = modalElement.querySelectorAll(".productsSlideImg");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex - 1].style.display = "block";
}
