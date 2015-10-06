<?php
add_action( 'after_setup_theme', 'name_your_theme_setup' );
function name_your_theme_setup() {
  load_theme_textdomain( 'name_your_theme', get_template_directory() . '/languages' );
  add_theme_support( 'post-thumbnails' );
  register_nav_menus(
    array( 'main_nav' => __( 'Main Menu', 'name_your_theme' ) )
  );
}
add_action( 'wp_enqueue_scripts', 'name_your_theme_load_scripts' );
function name_your_theme_load_scripts() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_style( 'style', get_template_directory_uri().'css/php/style.css/php' );
}
