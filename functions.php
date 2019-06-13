<?php
/**
 * Artist functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Artist
 */


/**
 * Enqueue scripts and styles.
 */

// function artist_load_scripts() {
  
//   // Main JS file
//   wp_enqueue_script( 'aritst-scripts', get_template_directory_uri() . '/scripts/app.js', array(), '1.0.0', true );
// }

function artist_load_scripts() {
  // Main CSS file
  wp_enqueue_style( 'artist-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');

  // include the css file
  // $cssFilePath = glob( get_template_directory() . '/build/main.*.css' );
  // $cssFileURI = get_template_directory_uri() . '/build/' . basename($cssFilePath[0]);
  // wp_enqueue_style( 'site_main_css', $cssFileURI );

  // include the javascript file
  // $jsFilePath = glob( get_template_directory() . '/build/main.*.js' );
  // $jsFileURI = get_template_directory_uri() . '/build/' . basename($jsFilePath[0]);
  // wp_enqueue_script( 'site_main_js', $jsFileURI , null , null , true );

  wp_enqueue_script( 'aritst-scripts', get_template_directory_uri() . '/dist/main.bundle.js', null, null, true );
}

add_action( 'wp_enqueue_scripts', 'artist_load_scripts' );
