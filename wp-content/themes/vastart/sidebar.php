<?php
/**
 * Just Sidebar.
 *
 * @package Vastart
 * @since 1.0.0
 */

if ( 'sidebar-none' === vastart_theme_setting( 'sidebar-layout' ) && ! is_customize_preview() ) {
	return;
}
?>

<?php
if ( is_home() || is_search() || is_category() || is_archive() ) {
	if ( is_active_sidebar( 'sidebar' ) ) {
?>
		<div <?php vastart_sidebar_class(); ?>>
			<aside id="sidebar">
				<?php
					dynamic_sidebar( 'sidebar' );
				?>
			</aside>
		</div>
<?php
	}
}
?>
