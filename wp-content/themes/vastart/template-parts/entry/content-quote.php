<?php
/**
 * Template part for displaying page content in quote format.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vastart
 * @since 1.0
 * @version 1.0
 */

$classes = vastart_entries_class();
$vastart_post_id = 'post-' . get_the_ID();
?>

<article id="<?php echo esc_attr( $vastart_post_id ); ?>" <?php post_class( $classes ); ?>>

	<div class="uf-card">
		<div class="uf-card-header">
			<?php
				get_template_part( 'template-parts/entry/categories' );
				the_post_thumbnail(
					'large',
					array(
						'class' => 'uf-card-image',
					)
				);
			?>
		</div><!-- .uf-card-header -->

		<div class="uf-card-body">
			<div class="entry__content clearfix">
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
			</div><!-- .entry-content -->
		</div><!-- .uf-card-header -->

		<div class="uf-card-footer">
			<?php get_template_part( 'template-parts/entry/meta' ); ?>
		</div><!-- .uf-card-footer -->
	</div><!-- .uf-card-->

</article><!-- #post-## -->
