<?php
/**
 * 1 Click Support
 *
 * @package Vastart Addon
 */

define( 'DETHEME_THEME_NAME', 'vastart' );
define( 'DETHEME_BEACON_SETTING_URL', home_url( 'wp-admin/themes.php?page=beacon-setting' ) );
define( 'DETHEME_BEACON_RESET_SETTING_URL', DETHEME_BEACON_SETTING_URL . '&action=reset' );
define( 'DETHEME_VERIFY_URL', 'http://demoimporter.detheme.com/envato-app/verify.php?ref=' . DETHEME_BEACON_SETTING_URL . '&theme=' . DETHEME_THEME_NAME );
define( 'SENDY_BUYERS_LIST', '0jSGvKg4yWP6QovgtGSoHQ' );
define( 'SENDY_NOT_BUYERS_LIST', 'X2JQO2G4DaOxmqB3QsGTYw' );
define( 'DETHEME_BEACON_HELPSCOUT_URL', 'http://demoimporter.detheme.com/vastart/beacons/' );

if ( ! function_exists( 'helpscout_beacon_menu' ) ) :
	/**
	 * Helpscout Beacon Menu
	 */
	function helpscout_beacon_menu() {
		if ( function_exists( 'vastart_register_required_plugins' ) || function_exists( 'vast_register_required_plugins' ) ) {
			add_theme_page( '1-Click Support', '1-Click Support', 'manage_options', 'beacon-setting', 'beacon_setting_init' );
		}
	}

	/*add menu page for helpscout beacon*/
	add_action( 'admin_menu', 'helpscout_beacon_menu' );
endif;

if ( ! function_exists( 'dt_get_envato_info' ) ) :
	/**
	 * Get envato info
	 *
	 * @param string $code code parameter from envato verify.
	 */
	function dt_get_envato_info( $code ) {

		$ch = curl_init();

		$url = 'http://demoimporter.detheme.com/envato-app/envato_info.php';

		$data = array(
			'code' => $code,
		);

		  // set url.
		  curl_setopt( $ch, CURLOPT_URL, $url );

		  curl_setopt( $ch, CURLOPT_POST, 1 );

		  // post.
		  curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $data ) );

		  // return the transfer as a string.
		  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );

		  // execute.
		  $data_out = curl_exec( $ch );

		  curl_close( $ch );

		  return $data_out;
	}
endif;

if ( ! function_exists( 'dt_subscribe_sendy' ) ) :
	/**
	 * Subscribe Sendy
	 */
	function dt_subscribe_sendy() {

		$ch = curl_init();

		$url = 'https://sendy.djavaweb.com/subscribe';

		$list = ( 'true' === get_option( 'envato_isbuyer' ) ) ? SENDY_BUYERS_LIST : SENDY_NOT_BUYERS_LIST;

		$data = array(
			'name'    => get_option( 'envato_fullname' ),
			'email'   => get_option( 'envato_email' ),
			'Theme'   => DETHEME_THEME_NAME,
			'list'    => $list,
			'subform' => 'yes',
		);

		  // set url.
		  curl_setopt( $ch, CURLOPT_URL, $url );

		  curl_setopt( $ch, CURLOPT_POST, 1 );

		  // post.
		  curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $data ) );

		  // return the transfer as a string.
		  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );

		  // execute.
		  $data_out = curl_exec( $ch );

		  curl_close( $ch );

		  return $data_out;
	}
endif;

if ( ! function_exists( 'beacon_setting_init' ) ) :
	/**
	 * Load Helpscout Beacon Setting
	 */
	function beacon_setting_init() {
		require_once VASTART_ADDON_DIR . 'templates-parts/1-click-support/layout.php';
	}
endif;

if ( ! function_exists( 'subscribe_sendy' ) ) :
	/**
	 * Subscribe Sendy
	 */
	function subscribe_sendy() {
		check_ajax_referer( 'sendy-nonce', 'security' );

		if ( ( isset( $_POST['mode'] ) ) && ( 'mode-subscribe' === $_POST['mode'] ) ) {
			if ( isset( $_POST['check_subscribe'] ) ) {
				update_option( 'is_sendy_subscribed', $_POST['check_subscribe'] );
			}
		}
	}

	add_action( 'wp_ajax_subscribe_sendy', 'subscribe_sendy' );
endif;

