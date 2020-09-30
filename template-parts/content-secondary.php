<article <?php post_class( array( 'class' => 'secondary' ) ); ?>>
	
	<!--
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( ['400', '200'], ['class' => 'title-image', 'title' => 'Feature image'] ); ?></a>
	</div>
	-->

	<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
	
	<div class="meta-info">
		<p>
			Categorias: <span><?php the_category( ' ' ); ?></span>
			<?php the_tags( ' Tags: <span>', ', ', '</span>' ); ?>
		</p>		
		<p class="date"><?php echo get_the_date(); ?></p>	
	</div>
	<?php the_excerpt(); ?>
</article>