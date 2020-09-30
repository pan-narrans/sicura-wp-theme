<section class="map">
    <?php 
        $key = get_theme_mod( 'set_map_apikey' );
        $address = urlencode( get_theme_mod( 'set_map_address' ) );
    ?>
    <iframe
        width="100%"
        height="350"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?>&q=<?php echo $address; ?>&zoom=15" allowfullscreen>
    </iframe>						
</section>