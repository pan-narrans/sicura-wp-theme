
</div>

<footer id="footer">
    <div class="container">
        <div class="row text-center">
            <div class="copyright col-lg-5 col-md-12">
                <p><?php echo get_theme_mod( 'set_copyright' ); ?></p>
            </div>
            <nav class="footer-menu col">
                <?php 
                    if($GLOBALS["ancestor_name"] == 'division-de-inteligencia'){
                        $_SESSION["menu_name"] = 'main_menu_intelligence';
                    }
                    else if($GLOBALS["ancestor_name"] == 'instituto-sicura'){
                        $_SESSION["menu_name"] = 'main_menu_institute';
                    }

                    if($_SESSION["menu_name"] == 'main_menu_intelligence'){
                        wp_nav_menu( array('theme_location' =>  'footer_menu_intelligence') );
                    }
                    else if($_SESSION["menu_name"] == 'main_menu_institute'){
                        wp_nav_menu( array('theme_location' =>  'footer_menu_institute') );
                    }

                ?>
            </nav>
        </div>
        <div class="row text-center">
            <div class="col-lg-1 col"></div>
            <?php for($i = 1; $i <=3; $i++):
                    if( get_theme_mod( 'set_rrss_link'.$i ) && get_theme_mod('set_rrss_image'.$i) ): ?>
				<section class="logo col-md-1 col-2">
					<a href="<?php echo get_theme_mod( 'set_rrss_link'.$i ); ?>">
					    <img class="rrss-img" src="<?php echo get_theme_mod('set_rrss_image'.$i); ?>">
					</a>
				</section>
			<?php endif; endfor; ?>
            <div class="col"></div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>


</body>
</html>
