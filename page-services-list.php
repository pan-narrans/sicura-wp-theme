<?php
/*
Template Name: Services List
*/
?>

<?php get_header(); ?>

<?php 
    while( have_posts() ): the_post();
?>
    <article id="post-<?php the_ID();?>" <?php post_class(); ?>>

        <?php include('php-includes/page-content.php') ?>

        <!-- Services List -->
        <footer>
            <div class="container">
                <div class="row  center col-lg-10">
                    <?php
                    // The first services sidebar id is 'services' while all the others follow the format 'services-x'

                    // We check and create the first one
                    if( is_active_sidebar( 'services' ) ){        
                        echo ('<div class="services col-lg-4 col-12 center text-center">');
                        dynamic_sidebar( 'services' );
                        echo ('</div>');
                    }                     
                    
                    // We check and create all the other ones
                    for( $x=2; $x < 10; $x++ ){
                        if( is_active_sidebar( 'services-'.$x ) ){
                            echo ('<div class="services col-lg-4 col-12 center text-center">');
                            dynamic_sidebar( 'services-'.$x );
                            echo ('</div>');
                        } 
                    }
                    ?>
                </div>
            </div>
        </footer>

    </article>
<?php
    endwhile;
?>


    
<?php get_footer(); ?>