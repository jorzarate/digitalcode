<?php
/**
 * Displays post entry category
 *
 * @package Vastart
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="uf-single-post__meta-category">
	<?php the_category( '', get_the_ID() ); ?>
</div>
