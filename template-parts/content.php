<a id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	
	<div>
		<?php the_post_thumbnail( 'hamilton_preview-image' ); ?>
	</div>
	
		<?php the_title( '<h2 class="title">', '</h2>' ); ?>

</a>