<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vastart
 * @since 1.0.0
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div <?php vastart_content_class(); ?>>
				<div id="blog-entries">
					<?php
					if ( have_posts() ) :
					?>
						<div class="vastart-grid flip-effect" id="vastart-grid">
						<div class="grid-sizer"></div>
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/entry/content', get_post_format() );
						endwhile;
						?>
						</div>
						<?php
						the_posts_pagination(
							array(
								'mid_size' => 2,
								'screen_reader_text' => esc_html( '&nbsp;' ),
								'prev_text' => is_rtl() ? wp_kses(
									'<span class="icon-chevron-right"></span>',
									array(
										'span' => array(
											'class' => array(),
										),
									)
								) : wp_kses(
									'<span class="icon-chevron-left"></span>',
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								'next_text' => is_rtl() ? wp_kses(
									'<span class="icon-chevron-left"></span>',
									array(
										'span' => array(
											'class' => array(),
										),
									)
								) : wp_kses(
									'<span class="icon-chevron-right"></span>',
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
							)
						);
					else :

						get_template_part( 'template-parts/entry/content', 'none' );

					endif;
					?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>
