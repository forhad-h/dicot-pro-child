<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Dicot
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<div id="page" class="site-wrapper hfeed site">

	<?php
	// Include the preloader template.
	if ( dicot_mod( 'dicot_show_preloader' ) ) {
		get_template_part( 'preloader' );
	}
	?>

	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
		<div class="container">

			<div class="cb-main-header">

				<div>
					<?php
					// Site Logo
					if ( function_exists( 'jetpack_the_site_logo' ) ) {
						jetpack_the_site_logo();
					}
					?>
				</div>

				<nav id="site-navigation" class="main-navigation" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
					<div class="container-fluid">

						<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'dicot-pro' ); ?></a>

						<div class="toggle-menu-wrapper">
							<a href="#main-navigation-responsive" title="<?php esc_attr_e( 'Menu', 'dicot-pro' ); ?>" class="toggle-menu"><?php _e( 'Menu', 'dicot-pro' ); ?></a>
						</div>

						<?php
						wp_nav_menu( apply_filters( 'dicot_primary_menu_args', array(
							'container'         => 'div',
							'container_class'   => 'site-primary-menu',
							'theme_location'    => 'primary',
							'menu_class'        => 'primary-menu sf-menu',
						) ) );
						?>

					</div><!-- .container -->
				</nav><!-- .main-navigation -->

				<div>
					<ul class="cb-auth-btn">
						<li class="cb-log-in-btn"><a href="cerebriam.com">Log in</a></li>
						<li class="cb-sign-up-btn"><a href="cerebriam.com">Sign up</a></li>
					</ul>
				</div>

		  </div>

			<!--
			<div class="site-branding">
				<h2 class="site-title" itemprop="headline"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" title="<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
				<h3 class="site-description" itemprop="description"><?php //bloginfo( 'description' ); ?></h3>
			</div> -->
			<!-- .site-branding -->

		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<?php
		// Include the featured content template.
		if ( ( is_home() || is_front_page() ) && dicot_has_featured_posts() ) {
			get_template_part( 'featured-content' );
		}
		?>
