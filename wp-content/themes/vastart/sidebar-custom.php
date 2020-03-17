<?php
/**
 * Just Sidebar.
 *
 * @package Vastart
 * @since 1.0.0
 */

?>

<div <?php vastart_sidebar_class(); ?>>
	<aside id="sidebar">
		<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar' ); ?>
		<?php endif; ?>
	</aside>
</div>
