<?php
/**
 * Top Bar Layout
 *
 * @package Vastart
 */

if ( vastart_theme_setting( 'topbar-switch' ) !== 'true' ) {
	return;
}
?>

<div id="topbar" class="topbar-desktop d-none d-lg-block">
	<div class="container">
		<div class="row topbar-content">
			<div class="topbar-left col-12 col-sm-6">
<?php
				echo wp_kses_post( vastart_theme_setting( 'topbar-left' ) );
?>
			</div>
			<div class="topbar-right col-12 col-sm-6">
<?php
				echo wp_kses_post( vastart_theme_setting( 'topbar-right' ) );
?>
			</div>
		</div>
	</div>
</div>
