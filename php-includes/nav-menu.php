<?php
    // Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
    // This code based on wp_nav_menu's code to get Menu ID from menu slug
    $menu_name;
    $menu_items;

    

    $menu_name = $_SESSION["menu_name"];
    
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    
        $menu_items = wp_get_nav_menu_items($menu->term_id);
    
        $menu_list = '<ul id="menu-' . $menu_name . '" class="d-flex flex-md-row flex-column">';
    
        foreach ( (array) $menu_items as $key => $menu_item ) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $class = $menu_item->classes[0];

            if (!$menu_item->menu_item_parent && isset($old_item) && $old_item->menu_item_parent){
                // If we have just passed the last item of the dropdown
                // We close the dropdown
                // ie. if the last item had a parent and the curent one doesn't
                // ie. we proceed to close the ul and div tags oppened before
                $menu_list .= '</div></ul></div>';
            }

            if($class == 'dropdown'){
                // If the item has the class 'dropdown' added in the WP customizer
                // We create the markup for the bootstrap dropdown menu
                // A container with the class 'dropdown' and a give the item the class 'dropdown-toggle' and data-toggle='dropdown'
                // The container ul with the class 'dropdown-menu' is also created
                $menu_list .= 
                '<div class="dropdown disp-contents">
                    <li class="dropdown-toggle" data-toggle="dropdown">
                        <a href="#" >' . $title . '</a>
                    </li> 
                    <ul class="dropdown-menu">
                        <div class="container center">';

            }else{					
                // If we are normal then we get a normal li element
                $menu_list .= '<a href="' . $url . '"><li>' . $title . '</li></a>';

            }

            // Allows us to check if the last item had a parent
            $old_item = $menu_item;
        }
        $menu_list .= '</ul>';
    } else {
        $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
    }

    // $menu_list now ready to output       
    echo($menu_list);
?>

<?php 

/* DEBUG */

/*					
foreach ( (array) $menu_items as $key => $menu_item ) {
    echo('<pre>');
    print_r('ID = '.$menu_item->ID.'<br>');
    print_r('Object ID = '.$menu_item->object_id.'<br>');
    print_r('Title = '.$menu_item->title.'<br>');
    print_r('Post Parent = '.$menu_item->post_parent.'<br>');
    print_r('Menu Item Parent = '.$menu_item->menu_item_parent.'<br>');
    print_r('Classes = '.$menu_item->classes[0].'<br>');

    echo (!$menu_item->menu_item_parent ? 'no' : 'yes');
    //print_r($menu_item);
    echo('</pre>');
}//*/

?>