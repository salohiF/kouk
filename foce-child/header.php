<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">




	<?php wp_head(); ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

<header id="masthead" class="site-header">
	<nav id="site-navigation" class="main-navigation">
			<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<span class="line"></span>
			<span class="line"></span>
			<span class="line"></span>
		</button>

		<div class="menu-burger-container">
			<div class="menu-logo"></div>
			<ul id="primary-menu" class="menu">
				<li><a href="#story">Histoire</a></li>
				<li><a href="#characters">Personnages</a></li>
				<li><a href="#place">Lieu</a></li>
				<li><a href="#studio">Studio Koukaki</a></li>
			</ul>
			<div class="cat menu-chatnoir"></div>
			<div class="cat menu-chatbleu"></div>
			<div class="cat menu-chatoranger"></div>
			<div class="menu-fleurrose "></div>
			<div class="menu-hibiscus "></div>
			<div class="menu-sunflower flower"></div>
			<div class="menu-texture flower"></div>
			<div class="menu-Orchid "></div>
			<div class="menu-Orchid "></div>
			<div class="menu-studioname">STUDIO KOUKAKI</div>
			
		</div>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->

