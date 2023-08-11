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
function menus() {
register_nav_menus(
  array(
    'top-menu' => __('Top Menu Location'),
    'mobile-menu' => __('Mobile Menu Location'),
  )
);
}