<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Artist
 */

get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php the_title( '<h1 class="title">', '</h2>' ); ?>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile;
		?>


</article>

<?php
get_footer();