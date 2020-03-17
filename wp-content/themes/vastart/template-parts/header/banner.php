<?php
/**
 * Header Image
 *
 * @package Vastart
 */

global $wp_locale;
?>

<div id="header-image">
	<div id="header-image-bg">
		<div class="header-overlay">
			<div class="container d-flex flex-column align-items-center justify-content-center h-100 text-center site-title-wrapper">
				<?php if ( is_front_page() ) : ?>
					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<?php else : ?>
					<?php
					$queried_object = get_queried_object();
					$vastart_title = '';

					set_query_var( 'ob', $queried_object );

					if ( is_home() && 'page' === get_option( 'show_on_front' ) ) :
						$vastart_title = get_the_title( get_option( 'page_for_posts' ) );
					elseif ( is_single() || is_page() ) :
						if ( is_single() ) {
							get_template_part( 'template-parts/single/categories' );
							get_template_part( 'template-parts/single/meta' );
						}

						$vastart_title = get_the_title();
					elseif ( is_category() ) :
						/* translators: %s: Category name */
						$vastart_title = sprintf( esc_html__( 'Category: %s' , 'vastart' ), get_cat_name( $queried_object->term_id ) );
					elseif ( is_tag() ) :
						/* translators: %s: Tag name */
						$vastart_title = sprintf( esc_html__( 'Tag: %s' , 'vastart' ), get_tag( $queried_object->term_id )->name );
					elseif ( is_search() ) :
						/* translators: %s: Search term */
						$vastart_title = sprintf( esc_html__( 'Search result for: %s' , 'vastart' ), get_search_query() );
					elseif ( is_author() ) :
						/* translators: %s: Author name */
						$vastart_title = sprintf( esc_html__( '%s Posts', 'vastart' ), get_the_author() );
					elseif ( is_date() ) :
						$year = get_query_var( 'year' );
						$month = get_query_var( 'monthnum' );

						if ( $year ) {
							/* translators: %s: Year */
							$vastart_title = sprintf( esc_html__( 'Year: %s' , 'vastart' ), $year );
						}

						if ( $month ) {
							/* translators: %s: Month */
							$vastart_title = sprintf( esc_html__( 'Month: %1$s %2$s' , 'vastart' ), $wp_locale->get_month( $month ), $year );
						}
					endif;
					?>

					<div class="site-title"><?php echo esc_html( $vastart_title ); ?></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
