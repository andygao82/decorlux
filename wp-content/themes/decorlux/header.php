<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Decorlux
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link
		rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
	/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back_ios" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/b41f34b2fc.css">
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri('/'); ?>/css/custom.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri('/'); ?>/js/custom.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'decorlux' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="wrapper">
						<?php $img_path = get_template_directory_uri('/'); ?>
						<a class="decorlux-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" >
							<?php echo file_get_contents($img_path."/images/logo.svg"); ?>
						</a>
						<div id="burger-icon">
							<span class="burger-icon-bar burger-icon-first-bar"></span>
							<span class="burger-icon-bar burger-icon-second-bar"></span>
							<span class="burger-icon-bar burger-icon-third-bar"></span>
							<div class="burger-text">Close</div>
						</div>

						<nav id="site-nav" class="site-menu">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div><!-- .site-branding -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
