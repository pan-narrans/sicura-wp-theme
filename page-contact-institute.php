<?php
/*
Template Name: Institute Contact Page
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
                        //get_sidebar( (get_the_ID()!=103 ? 'contact' : 'contact-defensor') ); 

                        $a = ($GLOBALS["ancestor_name"] == 'division-de-inteligencia' ? '2' : '3');

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
                                <pre><?php echo get_theme_mod( 'set_location_institute' ) ?></pre>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-right col-lg-2 col-md-5 col-sm-4 col-2">
                                <i class="fas fa-comments fa-2x" style="color: #FFD237;"></i>
                            </div>
                            <div class="col">
                                <h2>Contacto</h2>
                                <pre><?php echo get_theme_mod( 'set_phone_institute' ) ?><br><?php echo get_theme_mod( 'set_email_institute' ) ?></pre>
                            </div>
                        </div>
                        <!--
                        <div class="row">
                            <div class="text-right col-lg-2 col-md-5 col-sm-4 col-2">
                                <i class="fas fa-clock fa-2x"></i>
                            </div>
                            <div class="col">
                                <h2>Horario</h2>
                                <pre><?php echo get_theme_mod( 'set_horario_institute' ) ?></pre>
                            </div>
                        </div>
                        -->                   
                    </div>
                </div>
            </div>
        </div>

    </article>
<?php
    endwhile;
?>


    
<?php get_footer(); ?>