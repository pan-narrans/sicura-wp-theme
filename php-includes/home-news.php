<?php 

// First Loop
$featured = new WP_Query( 'post_type=post&posts_per_page=1' );

if( $featured->have_posts() ):
    while( $featured->have_posts() ): 
        $featured->the_post();
?>

<div class="col-12">
    <?php include( 'hp-article.php' ); ?>
</div>

<?php
    endwhile;
    wp_reset_postdata();
endif;

// Second Loop
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
    'offset' => 1
);

$secondary = new WP_Query( $args );

if( $secondary->have_posts() ):
    while( $secondary->have_posts() ): 
        $secondary->the_post();
?>

<div class="col-sm-6">
    <?php include( 'hp-article.php' ); ?>
</div>

<?php
    endwhile;
    wp_reset_postdata();
endif;
?>	