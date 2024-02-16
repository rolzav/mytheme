<?php

/**
 * @package Bootscore Child
 * @version 6.6.0
 */


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Enqueue scripts and styles
 */
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/assets/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  
  // custom.js
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', false, '', true);
}
