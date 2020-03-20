<?php
/**
 * The template for displaying link post formats
 *
 * Used for both single and index/archive/search.
 *
 * @package Dicot
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

	<div class="entry-meta entry-meta-header">
		<ul>
			<li><?php dicot_posted_by(); ?></li>
			<li><?php dicot_posted_on(); ?></li>
			<li>
				<span class="entry-format">
					<a href="<?php echo esc_url( get_post_format_link( 'link' ) ); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'All %s Posts', 'dicot-pro' ), get_post_format_string( 'link' ) ) ); ?>">
						<?php echo get_post_format_string( 'link' ); ?>
					</a>
				</span>
			</li>
		</ul>
	</div><!-- .entry-meta -->

	<header class="entry-header">
		<?php
		// Extract the first URL from the content.
		$post_title_link = get_permalink();
		$url_in_content = get_url_in_content( get_the_content() );
		if( ! empty( $url_in_content ) && false !== $url_in_content ) {
			$post_title_link = $url_in_content;
		}
		?>

		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' );
		else :
			the_title( '<h1 class="entry-title" itemprop="headline"><a href="' . esc_url( $post_title_link ) . '" rel="bookmark">', '</a></h1>' );
		endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="text">
		<?php the_content( __( 'Read More', 'dicot-pro' ) ); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'dicot-pro' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( is_single() ) : ?>
	<footer class="entry-meta entry-meta-footer">
		<?php dicot_entry_footer(); ?>
	</footer><!-- .entry-meta -->
	<?php endif; ?>

</article><!-- #post-## -->
