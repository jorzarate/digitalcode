<?php
/**
 * Breadcrumbs Layout
 *
 * @package Vastart
 */

?>

<?php
$hide_breadcrumbs = ( 'breadcrumbs-hidden' === vastart_theme_setting( 'breadcrumbs-option' ) ) ? true : false;

$hide_breadcrumbs = apply_filters( 'hide_breadcrumbs', $hide_breadcrumbs );

if ( $hide_breadcrumbs ) {
	return;
}

if ( function_exists( 'woocommerce_breadcrumb' ) ) {
	$wc_breadcrumb_args = array(
		'delimiter' => '',
		'wrap_before' => '<div class="breadcrumbs"><div class="container"><div class="uf-breadcrumbs">',
		'wrap_after' => '</div></div></div>',
		'before' => '<span>',
		'beforecurrent' => '<span class="current">',
		'after' => '</span>',
		'home' => esc_html__( 'Home', 'vastart' ),
	);

	woocommerce_breadcrumb( $wc_breadcrumb_args );
} else {
?>
	<div class="breadcrumbs">
		<div class="container">
			<?php vastart_breadcrumbs(); ?>
		</div>
	</div>
<?php
}
?>
