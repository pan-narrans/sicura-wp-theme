
<form role="search" method="get" class="search-form row text-center" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" placeholder="Buscar..." value="<?php echo get_search_query(); ?>" name="s" />
		<button type="submit" class="btn"><i class="fas fa-search"></i></button>
	</label>
</form>