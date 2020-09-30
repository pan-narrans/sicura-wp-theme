<?php 

// Requiring Theme Customizer
require get_template_directory() . '/inc/customizer.php'; 

// Including stylesheet and script files
function load_scripts(){
	wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array( 'jquery' ), '1.14.0', true ); 
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );	
	wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/fitvids.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


// Main configuration function
function theme_setup(){

	// Registering our menus
	register_nav_menus(
		array(
			'main_menu_intelligence' => 'Intelligence Menu',
			'main_menu_institute' => 'Institute Menu',
			'footer_menu_intelligence' => 'Footer Intelligence Menu',
			'footer_menu_institute' => 'Footer Institute Menu'
		)
	);

	//add_image_size( 'title-image', 973, 428, true );

	$args = array(
		'height' => 225,
		'width' => 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image') );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height' => 110,
		'width' => 200
	) );

	$textdomain = 'learnwp';
	load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

}
add_action( 'after_setup_theme', 'theme_setup', 0 );


// Registering our sidebars
add_action( 'widgets_init', 'page_sidebars' );
function page_sidebars(){
    
    /* CONTACTO SICURA */
	register_sidebar(
		array(
			'name' => 'Contacto SICURA',
			'id' => 'contact-1',
			'description' => 'Añadir aquí el formulario de contacto',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	); 
	/* DEFENSOR DEL EMPLEADO */
	register_sidebar(
		array(
			'name' => 'Defensor del Empleado',
			'id' => 'contact-2',
			'description' => 'Añadir aquí el formulario de contacto',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	
	/* CONTACTO INSTITUTO */
	register_sidebar(
		array(
			'name' => 'Contacto Instituto',
			'id' => 'contact-3',
			'description' => 'Añadir aquí el formulario de contacto',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
		
	
		/* SERVICES SIDEBARS */
	register_sidebars( 9, [
		'name' => __( 'Servicio %d', 'learnwp' ),
		'id' => 'services',
		'description' => __( 'Pestaña de servicios', 'learnwp' ),
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>'
	] );
								
}