<?php

/**
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 */
//Register area for custom menu
add_action( 'init', 'register_my_menu' );
 
function register_my_menu() {
   register_nav_menus(array('primary-menu'=>'Home Nav'));
}


function migration_scripts_styles() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'grid' , get_template_directory_uri() . '/css/grid.css' );
  wp_enqueue_style( 'menu' , get_template_directory_uri() . '/css/menu.css' );
  wp_enqueue_style( 'jquery_css.bxslider' , get_template_directory_uri() . '/css/jquery.bxslider.css' );
  wp_enqueue_style( 'responsive' , get_template_directory_uri() . '/css/responsive.css' );
  wp_enqueue_style( 'animate' , get_template_directory_uri() . '/css/animate.css' );


  wp_enqueue_script( 'bxslider' , get_template_directory_uri() . '/js/jquery.bxslider.js' , array( 'jquery' ) , false , true );
  wp_enqueue_script( 'ajax', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js' , array('jquery') );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '20151215', true );
  wp_enqueue_script( 'fixed-responsive-nav', get_template_directory_uri() . '/js/fixed-responsive-nav.js', array() ,true );
  wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'migration_scripts_styles' );
