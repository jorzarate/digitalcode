<?php
/**
 * Template part for displaying blog content in blog entriess.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vastart
 * @since 1.0
 * @version 1.0
 */

$classes = vastart_entries_class();
$body_class = get_body_class();
$vastart_post_id = 'post-' . get_the_ID();
?>

<article id="<?php echo esc_attr( $vastart_post_id ); ?>" <?php post_class( $classes ); ?>>

	<div class="uf-card">
		<?php
		if ( has_post_thumbnail() ) {
			$url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
			echo '<div class="uf-card-header thumbnail" style="background-image: url(' . esc_attr( $url ) . ')" >';
		} else {
			echo wp_kses_post( '<div class="uf-card-header">' );
		}
		get_template_part( 'template-parts/entry/categories' );
		?>
		</div><!-- .uf-card-header -->

		<div class="uf-card-body">
			<header class="entry__header">
				<?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
			</header><!-- .entry-header -->
			<div class="entry__content clearfix">
				<?php
				if ( has_excerpt( $post->ID ) || is_search() ) {
					the_excerpt();
				} else {
					the_content( esc_html__( 'Read More', 'vastart' ) );

					wp_link_pages(
						array(
							'before' => '<div class="page-links">',
							'after'  => '</div>',
							'link_before' => '<span>',
							'link_after' => '</span>',
						)
					);
				}
				?>
			</div><!-- .entry-content -->
			<?php get_template_part( 'template-parts/entry/tags' ); ?>
		</div><!-- .uf-card-header -->

		<div class="uf-card-footer">
			<?php get_template_part( 'template-parts/entry/meta' ); ?>
		</div><!-- .uf-card-footer -->
	</div><!-- .uf-card-->

</article><!-- #post-## -->
