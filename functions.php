<?php

function mytheme_setup() {
  // This theme uses wp_nav_menu() in one location.
  register_nav_menu( 'main', 'Main Menu' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

function mytheme_menu_item_classes($classes){
  if( in_array('current-menu-item', $classes) ){
    array_push($classes, 'active');
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'mytheme_menu_item_classes');
