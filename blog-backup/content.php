<?php
/**
 * The default template for displaying content
 *
 * @package Dicot
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

	<?php dicot_post_thumbnail(); ?>

	<div class="hentry-content">

		<?php if ( 'post' == get_post_type() ) : // For Posts ?>
		<div class="entry-meta entry-meta-header">
			<ul>
				<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
				<li><span class="entry-featured"><?php esc_html_e( 'Featured', 'dicot-pro' ); ?></span></li>
				<?php endif; ?>
			</ul>
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title" itemprop="headline"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
			<p><?php dicot_posted_on(); ?></p>
		</header><!-- .entry-header -->

	</div><!-- .hentry-content -->

</article><!-- #post-## -->
