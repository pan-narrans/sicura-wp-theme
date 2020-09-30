<?php 

function page_customizer( $wp_customize ){
	
	    //
		// ------------------------ CONTACT INFO INTELIGENCIA ------------------------ //
		//
	$wp_customize-> add_section( 'sec_contact_info', array(
		'title' => 'Información de Contacto División de Inteligencia' ,
	) );

	// Oficinas Dirección
	$wp_customize-> add_setting( 'set_location', array(
		'type' => 'theme_mod',
		'default' => 'C. Baeza nº5, /n Madrid',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_location', array(
		'label' => 'Dirección de Contacto',
		'section' => 'sec_contact_info',
		'settings' => 'set_location',
		'type' => 'textarea'
	) );

	// Contacto Teléfono y Mail
	$wp_customize-> add_setting( 'set_phone', array(
		'type' => 'theme_mod',
		'default' => '+34 651 545 541',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_phone', array(
		'label' => 'Información de Contacto',
		'description' => 'Teléfono',
		'section' => 'sec_contact_info',
		'settings' => 'set_phone',
		'type' => 'text'
	) );
	
	// Contacto Teléfono y Mail
	$wp_customize-> add_setting( 'set_email', array(
		'type' => 'theme_mod',
		'default' => 'info@sicura.es',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_email', array(
		'description' => 'Correo Electrónico',
		'section' => 'sec_contact_info',
		'settings' => 'set_email',
		'type' => 'text'
	) );

	// Horario 
	$wp_customize-> add_setting( 'set_horario', array(
		'type' => 'theme_mod',
		'default' => 
'Mañana: 9am – 14pm
Tarde: 16pm – 21pm
Sábado y Domingo: Cerrado',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_horario', array(
		'label' => 'Información de Contacto',
		'description' => 'Horario',
		'section' => 'sec_contact_info',
		'settings' => 'set_horario',
		'type' => 'textarea'
	) );
	
/*
	// Delegación Andalucía 
	$wp_customize-> add_setting( 'set_andalucia', array(
		'type' => 'theme_mod',
		'default' => 
'Avda. Luis de Morales n.º 32,
Planta baja, módulo 23
41018 - Sevilla
Tel: 954 86 68 61',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_andalucia', array(
		'label' => 'Información de Contacto',
		'description' => '',
		'section' => 'sec_contact_info',
		'settings' => 'set_andalucia',
		'type' => 'textarea'
	) );
*/



/*
	    //
		// ------------------------ CONTACT INFO INSTITUTO ------------------------ //
		//
	$wp_customize-> add_section( 'sec_contact_info_institute', array(
		'title' => 'Información de Contacto Instituto Sicura' ,
	) );

	// Oficinas Dirección
	$wp_customize-> add_setting( 'set_location_institute', array(
		'type' => 'theme_mod',
		'default' => 
'Fernando González Segura n.º 13
28770 –Colmenar Viejo (Madrid)',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_location_institute', array(
		'label' => 'Dirección de Contacto',
		'section' => 'sec_contact_info_institute',
		'settings' => 'set_location_institute',
		'type' => 'textarea'
	) );

	// Contacto Teléfono y Mail
	$wp_customize-> add_setting( 'set_phone_institute', array(
		'type' => 'theme_mod',
		'default' => '+34 615 559 210',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_phone_institute', array(
		'label' => 'Información de Contacto',
		'description' => 'Teléfono y Correo Electrónico',
		'section' => 'sec_contact_info_institute',
		'settings' => 'set_phone_institute',
		'type' => 'text'
	) );
	
	// Contacto Teléfono y Mail
	$wp_customize-> add_setting( 'set_email_institute', array(
		'type' => 'theme_mod',
		'default' => 
'info@iecis-edu.com
secretaria@iecis-edu.com',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_email_institute', array(
		'description' => 'Teléfono y Correo Electrónico',
		'section' => 'sec_contact_info_institute',
		'settings' => 'set_email_institute',
		'type' => 'textarea'
	) );

	// Horario 
	$wp_customize-> add_setting( 'set_horario_institute', array(
		'type' => 'theme_mod',
		'default' => 
'Mañana: 9am – 14pm
Tarde: 16pm – 21pm
Sábado y Domingo: Cerrado',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_horario_institute', array(
		'label' => 'Información de Contacto',
		'description' => 'Teléfono',
		'section' => 'sec_contact_info_institute',
		'settings' => 'set_horario_institute',
		'type' => 'textarea'
	) );
	

*/

	
	    //
		// ------------------------ COPYRIGHT ------------------------ //
		//
	$wp_customize-> add_section( 'sec_copyright', array(
		'title' => 'Copyright',
	) );

	$wp_customize-> add_setting( 'set_copyright', array(
		'type' => 'theme_mod',
		'default' => 'Copyright X - All Rights Reserved',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_copyright', array(
		'label' => 'Copyright Information',
		'description' => 'Escriba aquí su copyright.',
		'section' => 'sec_copyright',
		'settings' => 'set_copyright',
		'type' => 'text'
	) );
	
	
	

	    //
		// ------------------------ MAP ------------------------ //
		//
	$wp_customize-> add_section( 'sec_map', array(
		'title' => 'Mapa',
		'description' =>'Sección de mapa'
	) );

	// Activate Maps
	$wp_customize-> add_setting( 'set_map_activate', array(
		'type' => 'theme_mod',
		'default' => '',
		'sanitize_callback' => 'esc_attr'
	) );		

	$wp_customize-> add_control( 'ctrl_map_activate', array(
		'label' => 'Usar Maps de Google',
		'section' => 'sec_map',
		'settings' => 'set_map_activate',
		'type' => 'checkbox'
	) );

	// API Key
	$wp_customize-> add_setting( 'set_map_apikey', array(
		'type' => 'theme_mod',
		'default' => '',
		'sanitize_callback' => 'esc_attr'
	) );		

	$wp_customize-> add_control( 'ctrl_map_apikey', array(
		'label' => 'Google Maps API Key',
		'description' => sprintf('Consigue tu llave <a target="_blank" href="%s">aquí</a>', 'https://cloud.google.com/maps-platform/?apis=maps' ),
		'section' => 'sec_map',
		'settings' => 'set_map_apikey',
		'type' => 'text'
	) );

	// Map Address
	$wp_customize-> add_setting( 'set_map_address', array(
		'type' => 'theme_mod',
		'default' => '',
		'sanitize_callback' => 'esc_textarea'
	) );		

	$wp_customize-> add_control( 'ctrl_map_address', array(
		'label' => 'Escribe aquí tu dirección',
		'description' => 'No se permiten caracteres especiales',
		'section' => 'sec_map',
		'settings' => 'set_map_address',
		'type' => 'textarea'
	) );
	
	
	
	    //
		// ------------------------ RRSS ------------------------ //
		//
		// Declaración de la sección de RRSS
		//
	$wp_customize-> add_section( 'sec_rrss', array(
		'title' => 'RRSS',
		'description' => 'Introduzca aquí sus redes sociales',
	) );
	
	    // Propiedad link de rrss1
	    //
	$wp_customize-> add_setting( 'set_rrss_link1', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'esc_attr'
	) );	
	    // Controlador del link de rrss1
	    //
	$wp_customize-> add_control( 'ctrl_rrss_link1', array(
		'label' => 'Red Social 1',
		'description' => 'Link a la red social 1',
		'section' => 'sec_rrss',
		'settings' => 'set_rrss_link1',
		'type' => 'text'
	) );

        // Propiedad imagen de rrss1
        //
	$wp_customize-> add_setting( 'set_rrss_image1', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'esc_attr'
	) );
        // Controlador de imagen de rrss1
        //
	$wp_customize-> add_control( new WP_Customize_Image_Control(
		$wp_customize, 'rrss_img_1', array(
			'description' =>'Suba el logo de la red social.',
			'section'    => 'sec_rrss',
			'settings'   => 'set_rrss_image1',
		)
	) );
	
	
	    // Propiedad link de rrss2
	    //
	$wp_customize-> add_setting( 'set_rrss_link2', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'esc_attr'
	) );	
	    // Controlador del link de rrss2
	    //
	$wp_customize-> add_control( 'ctrl_rrss_link2', array(
		'label' => 'Red Social 2',
		'description' => 'Link a la red social 2',
		'section' => 'sec_rrss',
		'settings' => 'set_rrss_link2',
		'type' => 'text'
	) );

        // Propiedad imagen de rrss2
        //
	$wp_customize-> add_setting( 'set_rrss_image2', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'esc_attr'
	) );
        // Controlador de imagen de rrss2
        //
	$wp_customize-> add_control( new WP_Customize_Image_Control(
		$wp_customize, 'rrss_img_2', array(
			'description' =>'Suba el logo de la red social.',
			'section'    => 'sec_rrss',
			'settings'   => 'set_rrss_image2',
		)
	) );
	
	
	    // Propiedad link de rrss3
	    //
	$wp_customize-> add_setting( 'set_rrss_link3', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'esc_attr'
	) );	
	    // Controlador del link de rrss3
	    //
	$wp_customize-> add_control( 'ctrl_rrss_link3', array(
		'label' => 'Red Social 3',
		'description' => 'Link a la red social 3',
		'section' => 'sec_rrss',
		'settings' => 'set_rrss_link3',
		'type' => 'text'
	) );

        // Propiedad imagen de rrss3
        //
	$wp_customize-> add_setting( 'set_rrss_image3', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'esc_attr'
	) );
        // Controlador de imagen de rrss3
        //
	$wp_customize-> add_control( new WP_Customize_Image_Control(
		$wp_customize, 'rrss_img_3', array(
			'description' =>'Suba el logo de la red social.',
			'section'    => 'sec_rrss',
			'settings'   => 'set_rrss_image3',
		)
	) );

}

add_action( 'customize_register', 'page_customizer' );