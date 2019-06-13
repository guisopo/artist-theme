<?php
/**
 * Enqueue scripts and styless
 * 
 * @package Artist
 */

function artist_load_scripts() {
  /**
   * Main CSS file
   */
   wp_enqueue_style( 'artist-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
   
  /**
   * Include the javascript file
   */
  wp_enqueue_script( 'aritst-scripts', get_template_directory_uri() . '/dist/main.bundle.js', null, null, true );

  /**
   * Include theme styles
   */
  // $cssFilePath = glob( get_template_directory() . '/build/main.*.css' );
  // $cssFileURI = get_template_directory_uri() . '/build/' . basename($cssFilePath[0]);
  // wp_enqueue_style( 'site_main_css', $cssFileURI );

  /**
   * Include the javascript file
   */
  // $jsFilePath = glob( get_template_directory() . '/build/main.*.js' );
  // $jsFileURI = get_template_directory_uri() . '/build/' . basename($jsFilePath[0]);
  // wp_enqueue_script( 'site_main_js', $jsFileURI , null , null , true );
}

add_action( 'wp_enqueue_scripts', 'artist_load_scripts' );