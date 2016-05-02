<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sassycode
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sassycode' ); ?></a>

	<header id="masthead" class="site-header" >
		<div class="container">

			<a href="/" class="logo "><img src="<?php echo get_bloginfo('template_directory');?>/images/logo.png" alt=""/></a>
			<div class="social">
				<a href="https://www.facebook.com/cococheriemusic/?fref=ts" class="social-facebook"></a>
				<a href="https://github.com/nicolecpeoples" class="social-github"></a>
				<a href="https://www.linkedin.com/in/nicolecpeoples" class="social-linkedin"></a>
				<a href="https://twitter.com/misstechpodcast" class="social-twitter"></a>
			</div>
			<a href="#about" class="about-me"><img src="<?php echo get_bloginfo('template_directory');?>/images/me.png" alt=""/></a>
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'sassycode' ); ?><i class="fa fa-bars" aria-hidden="true"></i></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
