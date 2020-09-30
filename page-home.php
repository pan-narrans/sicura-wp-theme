<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<main class="home-page">
    
    <?php if(false): ?>    
        <!-- TEMP NEWS -->
        <h1  class="temp temp-border">
            <a class="temp" href="https://sicura.es/division-de-inteligencia/i-jornadas-sobre-delitos-contra-el-medioambiente/"> I jornada sobre delitos contra el medioambiente</a>
        </h1>
    <?php endif; ?>
    
    <!-- INTRO -->
    <?php if( have_posts() ):
        while( have_posts() ): the_post(); ?>

    <section class="container home-presentation">
        <div class="row">
            <div class="col"></div>
            <div class="col-lg-7 text-center v-center">
                <p class="col-10 text center"> <?php the_content(); ?> </p>
                <!--<a class="black" href="/servicios/listado-de-servicios/">Visite nuestros servicios</a>-->
            </div>
            <div class="col"></div>
            <div class="col-lg-3 col-md-6 col-9"><p><?php the_post_thumbnail( 'large', ['class' => 'logo-home img-fluid', 'title' => 'Feature image'] ); ?></p></div>
            <div class="col"></div>
        </div>
    </section>

    <?php endwhile; ?>
    <?php endif; ?>

    <!-- SERVICES -->
    <section class="container">
        <div class="row center home-services">    
            <?php include('php-includes/other-services.php') ?>                    
        </div>
    </section>

    <!-- CONTACT AND POSTS -->
    <section class="container">
        <div class="row">
            
            <!-- CONTACT -->
            <aside class="sidebar col-lg-4 col-md-12 h-100">
                <?php
                    // Defensor del Empleado has id = 103
                    $a =  (get_the_ID()!=103 ? '1' : '2');
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
    
    
    <!-- SELLO EXCELENCIA -->
    <section class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="sello-excelencia col-md-8 col-12">
                <p class="sello-excelencia">Despacho galardonado con la Estrella de Oro a la Excelencia Profesional 2016,
por la Interamerican University de Estados Unidos y el Instituto para la Excelencia Profesional</p>
                 <img class="sello-excelencia" src="https://sicura.es/wp-content/uploads/2020/03/sello-excelencia-sicura.jpg"  height="auto" width="100%"> 
            </div>	
            <div class="col">
            </div>						
        </div>
    </section>
    

</main>
    
<?php get_footer(); ?>