<?php
/**
 * Author bio template
 *
 * @package Vastart
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get author data.
$author         = get_the_author();
$description    = get_the_author_meta( 'description' );
$url            = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );

if ( empty( $description ) ) {
	return;
}

?>

<section id="author-bio">

	<div class="author-bio__avatar">

		<a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Visit Author Posts', 'vastart' ); ?>" rel="author" >
			<?php

				echo wp_kses_post( get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'vastart_author_bio_avatar_size', 100 ) ) );

			?>
		</a>

	</div>

	<div class="author-bio__content">

		<h3 class="author-bio__name">
			<a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Visit Author Posts', 'vastart' ); ?>">
				<?php

					echo esc_html( strip_tags( $author ) );

				?>
			</a>
		</h3>

		<?php

		if ( $description ) :
		?>

			<div class="author-bio__description">
				<?php echo wp_kses_post( $description ); ?>
			</div><!-- author-bio-description -->

		<?php endif; ?>


	</div>
	
</section>
