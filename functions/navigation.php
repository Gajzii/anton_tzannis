<?php
/* --------------------------------- MENU -------------------------------- */
// MENU - MOBILE
function onClickMenu() {
  document.getElementById("menu").classList.toggle("change");

  document.querySelector(".nav_list").classList.toggle("change");
}

// Theme Options
add_theme_support('menus');

//Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
  )
);