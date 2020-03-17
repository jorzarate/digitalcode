<?php
/**
 * Display Beacon
 *
 * @package Vastart Addon
 */

if ( ! function_exists( 'hscout_admin_script' ) ) {
	/**
	 * Add enqueue beacons script.
	 */
	function hscout_admin_script() {
		if ( function_exists( 'vastart_register_required_plugins' ) || function_exists( 'vast_register_required_plugins' ) ) {
			$envato_email   = get_option( 'envato_email' );
			$envato_isbuyer = get_option( 'envato_isbuyer' );
			if ( isset( $envato_email ) && ! empty( $envato_email ) && ( 'true' === $envato_isbuyer ) ) {
				wp_enqueue_script( 'beacons-helpscout', DETHEME_BEACON_HELPSCOUT_URL . 'helpscout-verified.js', array(), '1.0' );
			} else {
				wp_enqueue_script( 'beacons-helpscout', DETHEME_BEACON_HELPSCOUT_URL . 'helpscout.js', array(), '1.0' );
			}
		}
	}

	add_action( 'admin_enqueue_scripts', 'hscout_admin_script' );

}
