<article <?php post_class(); ?>>
	
	<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
	
	<div class="meta-info">
		<p>
			Categorias: <span><?php the_category( ' ' ); ?></span>
			<?php the_tags( ' Tags: <span>', ', ', '</span>' ); ?>
		</p>		
		<p class="date"><?php echo get_the_date(); ?></p>	
	</div>
	<div class="justify"><?php the_excerpt(); ?></div>
</article>