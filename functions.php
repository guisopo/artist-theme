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

function artist_load_scripts() {
  // Main CSS file
  wp_enqueue_style( 'artist-style', get_stylesheet_uri(), array(), '1.0.0', 'all');
  // Main JS file
  wp_enqueue_script( 'aritst-scripts', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'artist_load_style' );
