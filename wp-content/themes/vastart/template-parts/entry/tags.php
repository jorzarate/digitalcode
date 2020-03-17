<?php
/**
 * Displays post entry tags
 *
 * @package Vastart
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php if ( has_tag() ) : ?>
<div class="entry__meta-tags">
	<?php
		$vastart_tags = get_the_tags( get_the_ID() );
	if ( $vastart_tags ) {
		foreach ( $vastart_tags as $vastart_tag ) {
			echo wp_kses_post( '<a href="' . esc_url( get_tag_link( $vastart_tag->term_id ) ) . '" rel="tag" class="pills pills-default">' . $vastart_tag->name . '</a>' );
		}
	}
	?>
</div>
<?php endif; ?>
