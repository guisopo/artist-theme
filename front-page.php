<?php
/**
 * Front Page
 *
 * This is used to render your site’s front page.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package Artist
 */

get_header(); 
?>

<h1>Front-Page</h1>

<?php
  $categories = get_categories( array(
    'orderby' => 'name',
    'parent'  => 0,
    'exclude' => '1'
) );
 
foreach ( $categories as $category ) {

    printf( '<a href="%1$s">%2$s</a><br />',
        esc_url( get_category_link( $category->term_id ) ),
        esc_html( $category->name )
    );

}
  
?>

<?php 
get_footer();