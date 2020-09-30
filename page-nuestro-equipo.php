<?php
/*
Template Name: Nuestro Equipo
*/
?>

<?php get_header(); ?>

<main class="home-page">
    <!-- INTRO -->
    <?php if( have_posts() ):
        while( have_posts() ): the_post(); ?>
    

    <!-- Title -->
    <header class="row col-lg-10 center title"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <div class="col-12">
            <h1 class="text-left"><?php the_title(); ?></h1>
        </div>
        <?php the_post_thumbnail(['973', '428'], ['class' => 'title-image col-12', 'title' => 'Feature image']); ?>            
    </header>

    <!-- Page Content -->
    <div class="container page-content">   
        <div class="content row center col-lg-11">
            <?php the_content(); ?>
        </div>        
    </div>

    <?php endwhile; ?>
    <?php endif; ?>

</main>
    
<?php get_footer(); ?>