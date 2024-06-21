<!DOCTYPE html>
<html lang="pt">
    <head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo get_the_title(); ?> - Bívar Clinic</title>
        <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
		<header id="header" class="header">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<div class="container-fluid d-flex p-0">
						<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white.jpg" alt="Logo Bívar Clinic">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
							data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<div class="menu-button" id="menu-button" onclick="menuMobile()">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php
								wp_nav_menu(array(
									'theme_location' => '',
									'menu_id' 		 => 'menu', 
									'container' 	 => false,
									'menu_class' 	 => '',
									'items_wrap' 	 => '<ul id="%1$s" class="navbar-nav mb-lg-0 %2$s">%3$s</ul>',
                                    'add_li_class'   => 'nav-item',
									'depth' 		 => 2,
								));
                            ?>
						</div>
					</div>
				</div>
			</nav>
		</header>

        <section class="main">