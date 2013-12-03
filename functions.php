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

function mytheme_widgets_init() {
    register_sidebar( array(
      'name'          => __('Footer Widget Area', 'mytheme'),
      'id'            => 'footer',
      'description'   =>
        __('Appears in the footer section of the site. Limited to 900px.', 'mytheme'),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
      'name'          => __('Header Widget Area', 'mytheme'),
      'id'            => 'header',
      'description'   =>
        __('Appears on the right side of the header. Limited to 300px.', 'mytheme'),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
      'name'          => __('Blog Sidebar Widget Area', 'mytheme'),
      'id'            => 'blog-sidebar',
      'description'   =>
        __('Appears on blogs as a sidebar. Limited to 300px.', 'mytheme'),
      'before_widget' => '<aside id="%1$s" class="widget col-md-3 %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
      'name'          => __('Page Sidebar Widget Area', 'mytheme'),
      'id'            => 'page-sidebar',
      'description'   =>
        __('Appears on static pages as a sidebar. Limited to 300px.', 'mytheme'),
      'before_widget' => '<aside id="%1$s" class="widget col-md-3 %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );
