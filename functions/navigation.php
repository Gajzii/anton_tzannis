<?php
// Theme Options
add_theme_support('menus');

//Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'footer-menu' => 'Footer Menu Location',
  )
);