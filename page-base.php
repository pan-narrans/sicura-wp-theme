<?php
/*
Template Name: Page Template
*/
?>



<?php get_header(); ?>


<?php 
    while( have_posts() ): the_post();
?>
    <article id="post-<?php the_ID();?>" <?php post_class(); ?>>

        <!-- Title -->
        <header class="row col-lg-10 center title">
            <div class="col-12">
                <h1 class="text-left"><?php the_title(); ?></h1>
            </div>
            <?php the_post_thumbnail(['973', '428'], ['class' => 'title-image col-12', 'title' => 'Feature image']); ?>            
        </header>

        <!-- Page Content -->
        <div class="container page-content">   
            <div class="content row center col-lg-10">
                <?php the_content(); ?>
            </div>        
        </div>

        <!-- Other Services -->
        <footer>
            <div class="container">         
                <div class="row center col-lg-8 sidebar">
                    <?php
                        // Defensor del Empleado has id = 103
                        $a =  (get_the_ID()!=103 ? '1' : '2');
                        if( is_active_sidebar( 'contact-'.$a ) ){
                            dynamic_sidebar( 'contact-'.$a );
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