<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		
		<!-- GENERAL SITE SETUP META -->
		
			<meta charset="<?php bloginfo( 'charset' ); ?>" />
			<meta name="viewport" content="width=device-width" zoom="1.0" />
			<meta content="IE=edge" http-equiv="X-UA-Compatible">
			<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		
		<!-- SITE TITLE -->
		
			<title>
			<?php bloginfo('name'); ?> &raquo; <?php the_title(); ?>
			</title>
		
		<!-- WEB BOT/CRAWLER META INFORMATION -->
		
			<meta content="Media Marketers" name="author">
			
			<meta content="index,follow,archive" name="robots">
			<meta content="5 days" name="revisit-after">

		<!-- FAVICONS AND SHORTCUT ICONS -->
		
			<!-- Standard Favicon -->
			<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon.ico" type="image/x-icon">
			<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon.ico" type="image/x-icon">
			<!-- Standard iPhone --> 
			<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-tiny.png" />
			<!-- Retina iPhone --> 
			<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-medium.png" />
			<!-- Standard iPad --> 
			<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-small.png" />
			<!-- Retina iPad --> 
			<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-large.png" />
			
			<!-- Apple Favicon -->
			<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-icon-57x57.png">
			<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-icon-72x72.png">
			<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-icon-144x144.png">
			<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-icon-152x152.png">
			<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-icon-180x180.png">
			<!-- Standard Favicon -->
			<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/android-icon-192x192.png">
			<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon-96x96.png">
			<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon-16x16.png">
			<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/manifest.json">
			<!-- Microsoft Favicon -->
			<meta name="msapplication-TileColor" content="#ffffff">
			<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/ms-icon-144x144.png">
			<meta name="theme-color" content="#ffffff">
			
		<!-- WORDPRESS HEAD -->
			
			<?php wp_head(); ?>
			
		<!-- STYLE SHEETS AND CONDITIONAL STYLE SHEETS -->
		
			<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/php/style.css.php" />
	
	</head>
	
	<body <?php body_class(); ?>>

<header>
	
<!-- SITE/COMPANY BRANDING -->

	<section id="branding">
		<div id="site-title">
			<?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'name_your_theme' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?>
		</div><!--/#site-title-->
		<div id="site-description">
			<?php bloginfo( 'description' ); ?>
		</div><!--/#site-description-->
	</section><!--/#branding-->

<!-- NAVIGATION MENU -->

	<nav id="menu" role="navigation">
		<div id="search">
			<?php get_search_form(); ?>
		</div><!--/#search-->
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</nav><!--/#menu-->


</header>

<!-- SITE CONTAINER -->

<div id="container">