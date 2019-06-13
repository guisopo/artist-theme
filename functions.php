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
  wp_enqueue_style( 'artist-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');

  // Include theme styles
  // $cssFilePath = glob( get_template_directory() . '/build/main.*.css' );
  // $cssFileURI = get_template_directory_uri() . '/build/' . basename($cssFilePath[0]);
  // wp_enqueue_style( 'site_main_css', $cssFileURI );

  // Include the javascript file
  // $jsFilePath = glob( get_template_directory() . '/build/main.*.js' );
  // $jsFileURI = get_template_directory_uri() . '/build/' . basename($jsFilePath[0]);
  // wp_enqueue_script( 'site_main_js', $jsFileURI , null , null , true );

  wp_enqueue_script( 'aritst-scripts', get_template_directory_uri() . '/dist/main.bundle.js', null, null, true );
}

add_action( 'wp_enqueue_scripts', 'artist_load_scripts' );

/** 
 * Remove version string from js and css 
 */
function artist_remove_wp_version( $src ) {
  // Remove generator with wordpress version
  remove_action('wp_head', 'wp_generator'); 
  // Remove wordpress version from css and js files name strings
	global $wp_version;
	parse_str( parse_url($src, PHP_URL_QUERY), $query );
	if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}

add_filter( 'script_loader_src', 'artist_remove_wp_version' );
add_filter( 'style_loader_src', 'artist_remove_wp_version' );