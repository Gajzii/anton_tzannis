// burger menu
function onClickMenu() {
  document.getElementById("dropdownmenu").classList.toggle("change");
  document.querySelector(".top-menu").classList.toggle("change");
}

// product details
// function productdetails() {
//   document.querySelector("#productdetails").style.display = "block";
// }

// document
//   .getElementById("product_card_inner")
//   .addEventListener("mouseover", function () {
//     document.getElementById("productdetails").style.display = "block";
//   });
// document
//   .getElementById("product_card_inner")
//   .addEventListener("mouseout", function () {
//     document.getElementById("productdetails").style.display = "none";
//   });

// $(document).ready(function () {
//   var halfStarArray = $(".star i");

//   $(".star i").mouseover(function () {
//     var found = false;
//     for (var i = 0; i <= halfStarArray.length; i++) {
//       if (found) break;
//       else {
//         $(halfStarArray[i]).addClass("rating-star-hover");
//         if (halfStarArray[i] === this) found = true;
//       }
//     }
//   });
//   $(".star i").mouseout(function () {
//     halfStarArray.removeClass("rating-star-hover");
//   });
// });

// var all = document.querySelectorAll(".product_card_inner");

// for (var i = 0; i < all.length; i++) {
//   all[i].addEventListener("mouseover", btnHandler);
// }

// function btnHandler(e) {
//   TweenMax.to(e.target, 2, { display: block });
// }
