<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Artist
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div>
		<?php the_post_thumbnail( 'hamilton_preview-image' ); ?>
	</div>
	
		<?php the_title( '<h2 class="title">', '</h2>' ); ?>

</article>