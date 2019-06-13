<?php
/**
 * Artist theme support
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Artist
 */

function artist_setup () {
  /*
   * Switch to HTML5 semantic markup
   */
  add_theme_support( 'html5', array( 
    'search-form', 
    'comment-form', 
    'comment-list', 
    'gallery', 
    'caption' 
  ) );
  
  /*
   * Let WordPress manage the document title
   */
  add_theme_support( 'title-tag' );
  
  /*
   * Enable support for Post Thumbnails on posts and pages.
   * https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  
  add_theme_support( 'post-thumbnails' );
  
  /*
   * Enable support for Post Formats.
   * https://developer.wordpress.org/themes/functionality/post-formats/
   */
  
  add_theme_support( 'post-formats', array( 
    'gallery', 
    'image', 
    'video' 
  ) );
  
  /*
   *  Background color
   */
  add_theme_support( 'custom-background', array(
    'default-color' => 'ffffff',
  ) );
}

add_action( 'after_setup_theme', 'artist_setup' );