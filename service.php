<?php
/*
Template Name: Service Template
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
            <div class="row center col-lg-10">
                <aside class="sidebar col-md-5 center">
                    <?php 
                    // Require a file called sidebar-home.php
                    get_sidebar( 'home' ); 
                    ?>    
                </aside>     
                <div class="content col-md-6 center">
                    <?php the_content(); ?>
                </div>        
            </div>        
        </div>

        <!-- Other Services -->
        <footer>
            <div class="container">         
                <div class="row center col-lg-10">
                    <h2>Otros Servicios</h2>
                </div>            
                <div class="row center col-lg-10">    
                    <?php include('php-includes/other-services.php') ?>                    
                </div>
            </div>
        </footer>

    </article>
<?php
    endwhile;
?>


    
<?php get_footer(); ?>