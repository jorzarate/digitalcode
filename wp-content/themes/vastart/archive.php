<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vastart
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div <?php vastart_content_class(); ?>>
			<div id="archive-post">
				<?php if ( have_posts() ) : ?>
					<header class="archive-page-header">
						<?php
							the_archive_title(
								wp_kses(
									'<h3 class="archive-title">',
									array(
										'h3' => array(
											'class' => array(),
										),
									)
								),
								wp_kses(
									'</h3>',
									array(
										'h3' => array(
											'class' => array(),
										),
									)
								)
							);
						?>
					</header><!-- .page-header -->
					<div class="vastart-grid flip-effect" id="vastart-grid">
					<div class="grid-sizer"></div>
					<?php

					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/entry/content', get_post_format() );
					endwhile;
					?>
					</div>
				<?php endif; ?>
			</div><!-- #archive-post -->
		</div>
		<?php get_sidebar(); ?>
	</div>
</div><!-- .container -->

<?php get_footer(); ?>
