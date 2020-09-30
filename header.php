<?php ob_start();session_start(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
    <?php if( get_the_post_thumbnail() ): ?>
        <meta property="og:image" content=<?php get_the_post_thumbnail('small')?>>
    <?php endif; ?>
    <meta name="description" content="<?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>
	
	<?php	
	
		// Since all pages are ordered as children of two main pages,
		// depending on the name of the 'oldest' parent we can determine
		// wich navbar-menu to display
		global $ancestor_name;
		$ancestor = get_post_ancestors( the_post() );
		$last_item = count($ancestor) - 1;
		$last_ancestor = get_page( $ancestor[$last_item] );
		$ancestor_name = $last_ancestor->post_name;
		// Rewind the loop posts.	
		rewind_posts();

		// Here we set the session variable 'menu_name' used for the display of the menus
		// It's used so when you acces a page without a parent, such as 'Noticias' the menu
		// loaded is the same as the menu loadded in the last successfull load
		/*
		if($GLOBALS["ancestor_name"] == 'division-de-inteligencia'){
			$_SESSION["menu_name"] = 'main_menu_intelligence';
		}
		else if($GLOBALS["ancestor_name"] == 'instituto-sicura'){
			$_SESSION["menu_name"] = 'main_menu_institute';
		}
		else{
			$_SESSION["menu_name"] = 'main_menu_intelligence';
		}
		//*/
		$_SESSION["menu_name"] = 'main_menu_intelligence';
		/*
		print_r("ancestor: ".$GLOBALS["ancestor_name"]."  ");
		print_r("menu name: ".$_SESSION["menu_name"]);
		//*/
		//print_r("this is a test");
	?>

	<header id="header">
		<section class="top-bar">
			<div class="container">
				<div class="row align">
					<div class="row col-lg-8 col-md-6 col-12 text-center">
						<p class="col-lg-4 col-md-12 col-sm-6 col-12 black">
							<i class="fas fa-phone"></i>
							<?php 
								//if($_SESSION["menu_name"] == 'main_menu_intelligence')
								$a = ($_SESSION["menu_name"] == 'main_menu_institute' ? '_institute' : '');
								echo get_theme_mod( 'set_phone'.$a ) ?>
						</p>
						<p class="col">
							<i class="fas fa-envelope"></i>
							<?php echo get_theme_mod( 'set_email'.$a  ) ?>
						</p>
					</div>
					<div class="search col"><?php get_search_form(); ?></div>					
				</div>
			</div>
		</section>

		<section class="menu-area">
			<?php
				include('php-includes/navbar.php');		
			?>
		</section>	

	</header>
	
<div id="content" class="container">