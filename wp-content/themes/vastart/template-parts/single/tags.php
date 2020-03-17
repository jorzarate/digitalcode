<?php
/**
 * Blog single tags
 *
 * @package Vastart
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="uf-single-post__tags">

	<?php if ( has_tag() ) : ?>

		<?php
		$vastart_tags = get_the_tags( get_the_ID() );
		foreach ( $vastart_tags as $vastart_tag ) {
			echo wp_kses_post( '<a href="' . esc_url( get_tag_link( $vastart_tag->term_id ) ) . '" rel="tag" class="pills pills-default">' . $vastart_tag->name . '</a>' );
		}
		?>

	<?php endif; ?>

</div>
