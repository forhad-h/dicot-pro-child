<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dicot
 */
?>


	</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
			<div class="container-fluid">
			  	<?php if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?>
			</div>


				<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) : ?>
				<div id="supplementary" class="site-footer-widgets">

					<div class="site-footer-widgets-wrapper">
						<div class="container">
							<div class="row">

								<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div id="footer-sidebar-first" class="footer-sidebar-first widget-area" role="complementary">
										<?php dynamic_sidebar( 'sidebar-2' ); ?>
									</div><!-- #footer-sidebar-first .widget-area -->
								</div><!-- .col-* -->
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div id="footer-sidebar-second" class="footer-sidebar-second widget-area" role="complementary">
										<?php dynamic_sidebar( 'sidebar-3' ); ?>
									</div><!-- #footer-sidebar-second .widget-area -->
								</div><!-- .col-* -->
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div id="footer-sidebar-third" class="footer-sidebar-third widget-area" role="complementary">
										<?php dynamic_sidebar( 'sidebar-4' ); ?>
									</div><!-- #footer-sidebar-third .widget-area -->
								</div><!-- .col-* -->
								<?php endif; ?>

							</div><!-- .row -->
						</div><!-- .container -->
					</div><!-- .site-footer-widgets-wrapper -->

				</div><!-- #supplementary -->
				<?php endif; // end footer widget area ?>

				<div class="<?php dicot_animation_class( array( 'class' => 'site-info' ) ); ?>">
					<div class="container">

						<?php if ( has_nav_menu( 'secondary' ) ) : ?>
						<div class="row">
							<div class="col-lg-12">
								<?php
								wp_nav_menu( apply_filters( 'dicot_secondary_menu_args', array(
									'container'         => 'div',
									'container_class'   => 'site-secondary-menu',
									'theme_location'    => 'secondary',
									'menu_class'        => 'secondary-menu',
									'depth'             => 1,
								) ) );
								?>
							</div><!-- .col -->
						</div><!-- .row -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
						<div class="row">
							<div class="col-lg-12">
								<?php
								wp_nav_menu( apply_filters( 'dicot_social_menu_args', array(
									'container'        => 'div',
									'container_class'  => 'site-social-menu',
									'theme_location'   => 'social',
									'menu_class'       => 'social-menu fa',
									'depth'            => 1,
									'link_before'      => '<span class="screen-reader-text">',
									'link_after'       => '</span>',
								) ) );
								?>
							</div><!-- .col -->
						</div><!-- .row -->
						<?php endif; ?>


					</div><!-- .container -->
					<div class="container-fluid">

							<div class="row">
								<div class="col-md-6">
									<ul class="cb_social_links">
									<li><a href="https://twitter.com/cerebriam" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.facebook.com/cerebriam/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
										<li><a href="https://www.linkedin.com/company/cerebriam" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="https://www.instagram.com/cerebriam/" target="_blank"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://www.youtube.com/user/Cerebriam" target="_blank"><i class="fa fa-youtube"></i></a></li>
									</ul>
								</div>
								<div class="col-md-6">
									<div class="cb_copyright">
										© Copyright <script>document.write(new Date().getFullYear())</script>
										<?= bloginfo('title'); ?>
									</div><!-- .credits -->
								</div><!-- .col -->
							</div><!-- .row -->

					</div>
				</div><!-- .site-info -->
    </footer><!-- #colophon -->

</div><!-- #page .site-wrapper -->
<div class="overlay-effect"></div><!-- .overlay-effect -->

<?php wp_footer(); ?>

</body>
</html>
