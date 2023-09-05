// import { productModal } from "./utilities/product-modal";
// import { navigation } from "./utilities/navigation";

// productModal();
// navigation();

// BURGER MENU
function onClickMenu() {
  document.getElementById("dropdownmenu").classList.toggle("change");
  document.querySelector(".top-menu").classList.toggle("change");
}

// ADD CLASS TO ACTIVE MENU ITEM
for (var i = 0; i < document.links.length; i++) {
  if (document.links[i].href == document.URL) {
    document.links[i].className = "active";
  }
}

// MODAL
const readMoreBtns = document.querySelectorAll(".openModal");
const closeBtns = document.querySelectorAll(".closeModal");

// Create an array to store modal elements and their associated data
const modals = [];

readMoreBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    let productsPopupModal = "card-" + index;
    let productsPopup = "cards-" + index;

    // Check if the modal is already in the modals array
    let modalData = modals.find((modal) => modal.id === productsPopup);

    if (!modalData) {
      // If the modal is not in the array, initialize its data
      const modalElement = document.querySelector("#" + productsPopup);
      modalElement.setAttribute("data-slide-index", 1); // Initialize to 1
      modalData = { id: productsPopup, element: modalElement };
      modals.push(modalData);

      // Attach event listeners for navigation within this modal
      modalElement
        .querySelector(".slideshow-arrow-left")
        .addEventListener("click", () => {
          decrementSlideIndex(modalElement);
          showDivs(modalElement);
        });

      modalElement
        .querySelector(".slideshow-arrow-right")
        .addEventListener("click", () => {
          incrementSlideIndex(modalElement);
          showDivs(modalElement);
        });
    }

    // Show the first image and display the modal
    showDivs(modalData.element);
    document.querySelector("#" + productsPopupModal).style.display = "block";
    modalData.element.style.display = "block";
  });
});

closeBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    let productsPopupModal = "card-" + index;
    let productsPopup = "cards-" + index;

    // Hide the modal
    document.querySelector("#" + productsPopupModal).style.display = "none";

    // Find the corresponding modal data and hide it
    const modalData = modals.find((modal) => modal.id === productsPopup);
    if (modalData) {
      modalData.element.style.display = "none";
    }
  });
});

function incrementSlideIndex(modalElement) {
  const currentSlideIndex = parseInt(
    modalElement.getAttribute("data-slide-index")
  );
  const slideCount = modalElement.querySelectorAll(".productsSlideImg").length;
  if (currentSlideIndex < slideCount) {
    modalElement.setAttribute("data-slide-index", currentSlideIndex + 1);
  } else {
    modalElement.setAttribute("data-slide-index", 1); // Wrap around to the first image
  }
}

function decrementSlideIndex(modalElement) {
  const currentSlideIndex = parseInt(
    modalElement.getAttribute("data-slide-index")
  );
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
