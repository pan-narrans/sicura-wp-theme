<?php 

// Checks if there's a widget area with id sidebar-1
if( is_active_sidebar( 'contact-2' ) ){
    // If we find it, load its widgets
    dynamic_sidebar( 'contact-2' );
}

?> 