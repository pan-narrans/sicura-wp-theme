<?php
/*
Template Name: Article Page
*/
?>


<?php get_header(); ?>


<?php 
    while( have_posts() ): the_post();
?>
    <article id="post-<?php the_ID();?>" <?php post_class(); ?>>

        <!-- Title -->
        
        <header class="row col-lg-10 center title">
            <?php if( get_the_post_thumbnail() ): ?>
                <div class="col-12">
                    <h1 class="text-left"><?php the_title(); ?></h1>
                </div>
                <?php the_post_thumbnail(['973', '428'], ['class' => 'title-image col-12', 'title' => 'Feature image']); ?>     
            <?php else:?>
                <h1 class="text-left"><?php the_title(); ?></h1>
            <?php endif; ?>            
        </header>

        <!-- Page Content -->
        <div class="container page-content">   
            <div class="content row center col-lg-10">
                <?php the_content(); ?>
            </div>        
        </div>

        <!-- Other Services -->
        <footer class="meta-info container">
            <div class="row col-lg-10 center">    
                <p class="date"><?php echo get_the_date('j  F, Y'); ?></p>
            </div>
            <div class="row col-lg-10 center">    
                <p>Categories: <?php the_category( ' ' ); ?></p>
            </div>
            <div class="row col-lg-10 center">    
                <p><?php the_tags( 'Tags: ', ', ' ); ?></p>		
            </div>
        </footer>
            

    </article>
<?php
    endwhile;
?>


    
<?php get_footer(); ?>