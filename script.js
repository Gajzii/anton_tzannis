/* --------------------------------- MENU -------------------------------- */
// MENU - DESKTOP
$(document).ready(function () {
  $(".open_menu").click(function () {
    $(".sub_nav").slideToggle();
  });
});

// MENU - MOBILE
function onClickMenu() {
  document.getElementById("menu").classList.toggle("change");

  document.querySelector(".nav_list").classList.toggle("change");
}

// SET ACTIVE MENU ITEM TO COLOR RED
for (var i = 0; i < document.links.length; i++) {
  if (document.links[i].href == document.URL) {
    document.links[i].className = "active";
  }
}
