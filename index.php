<?php ob_start();session_start(); ?>
<?php get_header(); ?>

<?php 

// If there are any posts
if( have_posts() ):
    // While have posts, show them to us
    while( have_posts() ): the_post();
    ?>

    <article id="post-<?php the_ID();?>" <?php post_class(); ?>>    
        <div class=" col-lg-10 center news-list">
            <!-- Title -->
            <?php if( get_the_post_thumbnail() ): ?>
                <a class="title" href="<?php the_permalink(); ?>"><h2 class=" news-title"><?php the_title(); ?></h2></a>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( ['1000', '800'], ['class' => 'news-image', 'title' => 'Feature image'] ); ?></a>
            <?php else:?>
                <a class="" href="<?php the_permalink(); ?>"><h2 class="news-title"><?php the_title(); ?></h2></a>
            <?php endif; ?>

            <div class="meta-info container">
                <div class="row">
                    <div class="col-lg-6">
                        <p><?php echo get_the_date('j  F, Y'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <div class="container page-content">   
                <div class="content row  col-lg-12">
                    <?php the_excerpt(); ?>
                </div>        
            </div>
            
        </div>
    </article>

    <?php
    endwhile;
    ?>

    <div class="row">    
        <div class="pages col-6 text-left">
            <?php previous_posts_link( __( "<< Newer posts", 'learnwp' ) ); ?>
        </div>
        <div class="pages col-6 text-right">
            <?php next_posts_link( __( "Older posts >>", 'learnwp' ) ); ?>
        </div>
    </div>

    <?php
    else: 
    ?>

    <p><?php _e( 'There&rsquo;s nothing yet to be displayed!', 'learnwp' ); ?></p>

<?php endif; ?>



    
<?php get_footer(); ?>