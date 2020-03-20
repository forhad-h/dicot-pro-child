<?php
/**
 * @package Dicot
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

	<div class="entry-meta entry-meta-header">
		<ul>
			<li><?php dicot_posted_on(); ?></li>
			<li><?php dicot_posted_by(); ?></li>
		</ul>
	</div><!-- .entry-meta -->

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="text">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'dicot-pro' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta entry-meta-footer">
		<?php dicot_entry_footer(); ?>
	</footer><!-- .entry-meta -->

</article><!-- #post-## -->
