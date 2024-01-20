<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title><?php the_title(); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
		
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Kaushan+Script:400" rel="stylesheet" type="text/css">
		<link href="http://localhost/softuni/wp-content/themes/softuni/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://localhost/softuni/wp-content/themes/softuni/fonts/icomoon/style.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="http://localhost/softuni/wp-content/themes/softuni/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
			
			<header class="site-header">
				<div class="container">
					
					
					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						
						<?php 
						wp_nav_menu( array(
								'menu'            => 'primary-menu',
								'theme_location'  => 'primary_menu',
								'menu_class'      => 'menu',
								'container_class' => 'menu-content'
							)
						);
						?>
						
						<div class="menu-content">
						<!--	<ul class="menu">
								<li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
								<li class="menu-item"><a href="about.html">About us</a></li>
								<li class="menu-item"><a href="product.html">Products</a></li>
								<li class="menu-item"><a href="about.html">Blog</a></li>
								<li class="menu-item"><a href="contact.html">Contact</a></li>
							</ul>  .menu -->
							<button class="menu-toggle-back"><i class="fa fa-bars"></i></button>
						</div>
					</div> <!-- .main-navigation -->
				</div>
			</header> <!-- .site-header -->