<?php
/*
Template Name: Paypal Test
*/
?>

<?php get_header(); ?>

<main class="home-page">
    <!-- INTRO -->
    <?php if( have_posts() ):
        while( have_posts() ): the_post(); ?>

    <section class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-md-3 col-8 ">
                <?php 
                    if(get_post_thumbnail_id()){
                        the_post_thumbnail( 'full', ['class' => 'img-fluid', 'title' => 'Feature image']);
                    }
                    else{
                        echo('<img class="img-fluid" src="/wp-content/uploads/2019/08/logos-instituto-copia-1.png" alt="Error loading the image">');
                    }
                ?>
            </div>
            <div class="col"></div>
            <div class="col-md-7 col-12 text-left v-center">
                <h1 class="text-left title"><?php the_title(); ?></h1>
                <p class="col-10 text-center"> <?php the_content(); ?> 
					<?php //include('php-includes/pago-cursos.php'); ?> </p>
            </div>
        </div>
    </section>

    <?php endwhile; ?>
    <?php endif; ?>

</main>
    
<?php get_footer(); ?>