<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css)
 * It is used to display a page when nothing more specific matches a query
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Artist
 */

get_header(); 
?>

  <div id="primary" class="content-area container">
	  <main id="main" class="site-main">

      <?php if ( have_posts() ) : ?>

        <div class="posts" id="posts">

          <?php while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', get_post_type() );

          endwhile; ?>

        </div><!-- .posts -->
        
      <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php 
get_footer();

