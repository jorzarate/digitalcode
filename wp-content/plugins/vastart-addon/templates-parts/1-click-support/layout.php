<?php
/**
 * 1-Click Support Layout
 *
 * @package Vastart Addon
 */

if ( isset( $_GET['code'] ) ) {
	$code = $_GET['code'];

	$jsoninfo   = dt_get_envato_info( $code );
	$envatoinfo = json_decode( $jsoninfo );

	if ( isset( $envatoinfo->email ) ) {
		update_option( 'envato_email', $envatoinfo->email );
	}

	if ( isset( $envatoinfo->fullname ) ) {
		update_option( 'envato_fullname', $envatoinfo->fullname );
	}

	if ( isset( $envatoinfo->isbuyer ) && true === $envatoinfo->isbuyer ) {
		update_option( 'envato_isbuyer', 'true' );
	} else {
		update_option( 'envato_isbuyer', 'false' );
	}


	$is_sendy_subscribed = get_option( 'is_sendy_subscribed' );
	if ( 'true' === $is_sendy_subscribed ) {
		dt_subscribe_sendy();
	}
}
?>

<div class="asdf">
	  <h1><?php echo esc_html__( '1-Click Support', 'vastart-addon' ); ?></h1>

		<div><?php echo esc_html__( 'With this feature you can contact our Support System using our Beacon icon on the bottom right corner on the WordPress Dasboard. Easier support without leaving your site.', 'vastart-addon' ); ?>
	</div><br/>

	<?php
		$envato_email = get_option( 'envato_email' );
	if ( empty( $envato_email ) ) {
		require 'pre-register.php';
	} else {
		require 'registered.php';
	}
	?>
</div>
