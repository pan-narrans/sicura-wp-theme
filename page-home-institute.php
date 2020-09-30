<?php
/*
Template Name: Home Page Institute
*/
?>

<?php get_header(); ?>

<main class="home-page">
    <!-- INTRO -->
    <?php if( have_posts() ):
        while( have_posts() ): the_post(); ?>

    <section class="container home-presentation">
        <div class="row">
            <div class="col-12 text-center"> 
                <h1 class="title ">Instituto Sicura</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center"> <?php the_post_thumbnail('medium', ['class' => 'title img-fluid', 'title' => 'Feature image']); ?> </div>
        </div>
        <div class="row">
            <div class="col text-center v-center">
                <p class="col-10 text-center"> <?php the_content(); ?> </p>
            </div>
        </div>
    </section>

    <!-- CONTACT AND POSTS -->
    <section class="container">
        <div class="row">
            
            <!-- CONTACT -->
            <aside class="sidebar col-lg-4 col-md-12 h-100">
                <?php
                    // Defensor del Empleado has id = 103
                    //get_sidebar( (get_the_ID()!=103 ? 'contact' : 'contact-defensor') ); 

                    $a = ($GLOBALS["ancestor_name"] == 'division-de-inteligencia' ? '2' : '3');

                    if( is_active_sidebar( 'contact-'.$a ) ){
                        dynamic_sidebar( 'contact-'.$a );
                    }

                ?>                          
            </aside>
            
            <!-- NEWS -->
            <div class="news col">
                <div class="container">
                    <h1 class="latest-news">Últimas Noticias</h1>
                    <div class="row">
                        <?php include('php-includes/home-news.php'); ?>								
                    </div>
                </div>
            </div>							
        </div>
    </section>

    <?php endwhile; ?>
    <?php endif; ?>

</main>
    
<?php get_footer(); ?>