<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blanktworight
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blanktworight' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<h2 class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></h2>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Menu', 'blanktworight' ); ?>">
				<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'blanktworight' ); ?></button>
				<?php wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id' => 'primary-menu',
				) ); ?>
			</nav><!-- #site-navigation -->

		</div><!-- .header-wrap -->

		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
		</a>
		<?php endif; // End header image check. ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
