<?php

    /*
    13 // 0 = �0�9rea de inteligencia e investigaci��n
    60 // 1 = vigilancia itinerante
    41 // 2 = �0�9rea jur��dica
    66 // 3 = ciberseguridad
    71 // 4 = sistemas de seguridad
    75 // 5 = división de inteligencia
    81 // 6 = colsultoría de seguridad
    719// 7 = �0�9rea Criminol��gica
    */ 

    // Array of correspondences between the post id and the sidebar id
    $page_id = array(
        13 => 0,
        41 => 1,
        719 => 2
    );

    // The services array contains all the id's of the services sidebars
    // Here we declare and fill it
    $services = array();
    if( is_active_sidebar( 'services' ) ){
        $services[0] = 'services';
    }
    for( $x=2; $x < 8 ; $x++ ){
        if( is_active_sidebar( 'services-'.$x ) ){
            $services[$x-1] = 'services-'.$x;
        } 
    }

    // We create an array of seven items
    $numbers = array(0, 1, 2);
    
    // We delete the sidebar id corresponding to the post's id
    //unset($numbers[$page_id[get_the_ID()]]);
    //$numbers = array_values($numbers);

    // We strip away items of the array until we're left with three
    while(sizeof($numbers) > 3){
        $rand = rand(0, sizeof($numbers)-1);
        unset($numbers[$rand]);
        $numbers = array_values($numbers);
    }

    // We create the sidebars using the array of id's and the three remaining items of the numbers array
    for( $x=0; $x < 3; $x++ ){
        echo ('<div class="services col-lg-4 col-12 center text-center">');
        dynamic_sidebar( $services[$numbers[$x]] );
        echo ('</div>');
    }
?>