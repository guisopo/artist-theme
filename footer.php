<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Artist
 */
?>

		</div><!-- #content -->

		<footer class="site-footer section-inner">

			<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>" class="site-name"><?php bloginfo( 'name' ); ?></a></p>

		</footer> <!-- footer -->
		
		<?php wp_footer(); ?>

	</body>
</html>
