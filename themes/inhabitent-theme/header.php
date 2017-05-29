<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			<div class="header-control-wrapper">
				<div class="site-branding">
					<a href="http://localhost:3000/wordpress/"><img class="nav-logo" src="/wordpress/wp-content/themes/inhabitent-theme/images/inhabitent-logo-tent.svg" alt="small-inhabitent-logo"></a>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					  <form id="search-form" class="search-form" >
							<input class="search-field" type="text" placeholder="TYPE AND HIT ENTER">
						</form>	
					<a id="search-icon" href="#">
						<i id="search-icon" class="fa fa-search" aria-hidden="true"></i>
					</a>
				</nav><!-- #site-navigation -->
				</div><!--header control wrapper-->
				</header><!-- #masthead -->

<!--Code for search here-->


			<div id="content" class="site-content">

