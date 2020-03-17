<?php
/**
 * Template part for displaying nothing found anything.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vastart
 * @since 1.0
 * @version 1.0
 */

?>

<article class="content-none">
	<?php

	if ( is_search() ) {
		?>

			<div id="not-found" class="d-flex flex-column justify-content-center align-items-center text-center">
				<h2><?php echo esc_html__( 'Nothing Found.', 'vastart' ); ?></h2>
				<p>
				<?php
				printf(
					/* translators: link */
					esc_html__( 'Sorry, what you are looking for is not found. Please try again with some different keywords.', 'vastart' ),
					/* translators: site url and homepage text */
					sprintf( '<a href="%1$s">%2$s</a>', esc_url( home_url( '/' ) ), esc_html__( 'Homepage', 'vastart' ) )
				);
			?>
				</p>

				<div class="search-form-wrapper">
					<?php get_search_form(); ?>
				</div>
			</div>
	<?php
	}

	?>
</article><!-- #post-## -->
