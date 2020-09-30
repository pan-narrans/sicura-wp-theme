<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>


<?php 
    while( have_posts() ): the_post();
?>
    <article id="post-<?php the_ID();?>" class="contact">        
        <div class="container">
            <div class="row col-lg-10 col-md-12 center">
                <div class="col-lg-6 sidebar">
                    <?php
                        // Defensor del Empleado has id = 103
                        $a =  (get_the_ID()!=103 ? '1' : '2');
                        if( is_active_sidebar( 'contact-'.$a ) ){
                            dynamic_sidebar( 'contact-'.$a );
                        } 
                    ?>
                </div>
                <div class="col-lg-1"></div>
                <div class="col contact-info">             
                    <div class="container">
                        <div class="row">
                            <div class="text-right col-lg-2 col-md-5 col-sm-4 col-2">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                            </div>
                            <div class="col">
                                <h2>Oficinas</h2>
                                <pre><?php echo get_theme_mod( 'set_location' ) ?></pre>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-right col-lg-2 col-md-5 col-sm-4 col-2">
                                <i class="fas fa-comments fa-2x" style="color: var(--color-corporativo);"></i>
                            </div>
                            <div class="col">
                                <h2>Contacto</h2>
                                <pre><?php echo get_theme_mod( 'set_phone' ) ?><br><?php echo get_theme_mod( 'set_email' ) ?></pre>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-right col-lg-2 col-md-5 col-sm-4 col-2">
                                <i class="fas fa-clock fa-2x"></i>
                            </div>
                            <div class="col">
                                <h2>Horario</h2>
                                <pre><?php echo get_theme_mod( 'set_horario' ) ?></pre>
                            </div>
                        </div>


                        <!--div class="row">
                            <div class="text-right col-lg-2 col-md-5 col-sm-4 col-2">
                                <i class="fas fa-building fa-2x"></i>
                            </div>
                            <div class="col">
                                <h2>Delegación en Castilla y León</h2>
                                <pre><?php //echo get_theme_mod( 'set_andalucia' ) ?></pre>
                            </div>
                        </div-->     
                        
                    </div>
                </div>
            </div>
            <!-- GOOGLE MAPS -->
            <?php if(get_theme_mod('set_map_activate')==null){ echo '<!--'; }?>
            
            <div class="row-12 center">
                <?php include('php-includes/google-maps.php') ?>
            </div>
            
            <?php if(get_theme_mod('set_map_activate')==null){ echo '-->'; }?>
            
            
        </div>
    </article>
<?php
    endwhile;
?>


    
<?php get_footer(); ?>