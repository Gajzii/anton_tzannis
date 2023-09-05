// import { productModal } from "./utilities/product-modal";
// import { navigation } from "./utilities/navigation";

// productModal();
// navigation();

// BURGER MENU
function onClickMenu() {
  document.getElementById("dropdownmenu").classList.toggle("change");
  document.querySelector(".top-menu").classList.toggle("change");
}

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

function incrementSlideIndex(modalElement) {
  if (!modalElement) {
    console.error("Modal element not found");
    return;
  }

  const currentSlideIndex = parseInt(modalElement.getAttribute("data-slide-index"));
  const slideCount = modalElement.querySelectorAll(".productsSlideImg").length;

  if (currentSlideIndex < slideCount - 1) {
    modalElement.setAttribute("data-slide-index", currentSlideIndex + 1);
  } else {
    modalElement.setAttribute("data-slide-index", 0); // Wrap around to the first image
  }

  showDivs(modalElement, modalElement.getAttribute("data-slide-index"));
}

function decrementSlideIndex(modalElement) {
  if (!modalElement) {
    console.error("Modal element not found");
    return;
  }

  const currentSlideIndex = parseInt(modalElement.getAttribute("data-slide-index"));
  const slideCount = modalElement.querySelectorAll(".productsSlideImg").length;

  if (currentSlideIndex > 0) {
    modalElement.setAttribute("data-slide-index", currentSlideIndex - 1);
  } else {
    modalElement.setAttribute("data-slide-index", slideCount - 1); // Wrap around to the last image
  }

  showDivs(modalElement, modalElement.getAttribute("data-slide-index"));
}

function showDivs(modalElement, slideIndex) {
  const slideIndexInt = parseInt(slideIndex);
  const x = modalElement.querySelectorAll(".productsSlideImg");
  for (let i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndexInt].style.display = "block";
}

readMoreBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    const productsPopupModal = "card-" + index;
    const productsPopup = "cards-" + index;

    // Check if the modal is already in the modals array
    let modalData = modals.find((modal) => modal.id === productsPopup);

    if (!modalData) {
      // If the modal is not in the array, initialize its data
      const modalElement = document.getElementById(productsPopup);
      if (!modalElement) {
        console.error("Modal element not found");
        return;
      }
      modalElement.setAttribute("data-slide-index", 0); // Initialize to 0
      modalData = { id: productsPopup, element: modalElement };
      modals.push(modalData);

      // Attach event listeners for navigation within this modal
      modalElement.querySelector(".slideshow-arrow-left").addEventListener("click", () => {
        decrementSlideIndex(modalElement);
        showDivs(modalElement);
      });

      modalElement.querySelector(".slideshow-arrow-right").addEventListener("click", () => {
        incrementSlideIndex(modalElement);
        showDivs(modalElement);
      });
    }

    // Show the first image and display the modal
    showDivs(modalData.element, modalData.element.getAttribute("data-slide-index"));
    document.querySelector("#" + productsPopupModal).style.display = "block";
    modalData.element.style.display = "block";
  });
});

closeBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    const productsPopupModal = "card-" + index;
    const productsPopup = "cards-" + index;

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
