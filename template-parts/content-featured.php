<article <?php post_class( array( 'class' => 'featured' ) ); ?>>
	

	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

	<!--
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( ['700', '350'], ['class' => 'title-image', 'title' => 'Feature image'] ); ?></a>
	</div>
	-->
	
	<div class="meta-info">
		<p>
			Categorias: <span><?php the_category( ' ' ); ?></span>
			<?php the_tags( ' Tags: <span>', ', ', '</span>' ); ?>
		</p>
		<p class="date"><?php echo get_the_date(); ?></p>		
	</div>
	<?php the_excerpt(); ?>
</article>