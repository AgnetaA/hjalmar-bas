<!DOCTYPE html>

<html>
	<head>

		<title></title>

		<meta charset="UTF-8">
		<meta id="viewport" name="viewport" content ="width=device-width" />


		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

		<?php
		wp_head();
		?>


		


	</head>
	
	<body>	

		<div id="wrap-all" class="wrap-all">

			<header id="header" class="header">	

				<div id="header-logo-space" class="header-logo-space"> 
					<?php the_custom_logo(); ?>
				</div>



				<!--Mobile-->
				<div class="mobile-nav-icon" id="mobile-nav-icon"><span class="dashicons dashicons-menu" id="menubutton"></span></div>

				<!--Nav-->
				<nav class='navbar' id='navbar'>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>

			</header>	