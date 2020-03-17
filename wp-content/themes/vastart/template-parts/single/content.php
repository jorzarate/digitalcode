<?php
/**
 * Template part for displaying blog content in single post.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vastart
 * @since 1.0
 * @version 1.0
 */

?>

<div class="uf-single-post">

	<header class="uf-single-post__title" itemscope>
		<?php if ( ! has_header_image() ) : ?>
			<?php get_template_part( 'template-parts/single/categories' ); ?>
			<?php get_template_part( 'template-parts/single/meta' ); ?>
			<h1 class="uf-single-post-title entry-title" itemprop="headline"><?php the_title(); ?></h1><!-- .uf-single-post-title -->
		<?php endif; ?>

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>
	</header>

	<div class="uf-single-post__content clearfix">
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">',
					'after'  => '</div>',
					'link_before' => '<span>',
					'link_after' => '</span>',
				)
			);
		?>
	</div>

	<?php get_template_part( 'template-parts/single/tags' ); ?>

	<?php get_template_part( 'template-parts/single/author' ); ?>

	<?php
	the_post_navigation(
		array(
			'prev_text' => '<i class="icon-chevron-left"></i><span class="vastart_nav_text"><span>' . esc_html__( 'Previous', 'vastart' ) . '</span><span>%title</span></span>',
			'next_text' => '<i class="icon-chevron-right"></i><span class="vastart_nav_text"><span>' . esc_html__( 'Next', 'vastart' ) . '</span><span>%title</span></span>',
		)
	);
	?>

	<?php get_template_part( 'template-parts/single/related-posts' ); ?>

</div>
