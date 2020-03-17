<?php
/**
 * Customizer option and render to frontend.
 *
 * @package Vastart Addon
 */

if ( ! function_exists( 'vastart_render_settings' ) ) :

	/**
	 * This is function to retrieve and render customizer settings on frontend.
	 */
	function vastart_render_settings() {
		$css = array();

		wp_enqueue_style( 'vastart-addon-style', VASTART_ADDON_URL . 'assets/css/plugins.min.css' );

		if ( has_custom_logo() ) {
			$css[] = array(
				'element' => '#header-ext .navbar-wrapper .logo-container a.custom-logo-link img',
				'rules'   => array(
					'max-height' => vastart_addon_setting( 'logo-height' ) . 'px',
				),
			);
		}

		if ( has_header_image() ) {
			$css[] = array(
				'element' => '#header-image-bg',
				'rules'   => array(
					'background-image' => 'url(' . get_header_image() . ')',
				),
			);

			$css[] = array(
				'element' => '.breadcrumbs',
				'rules'   => array(
					'margin-top' => '0',
				),
			);
		} else {
			$css[] = array(
				'element' => '.breadcrumbs',
				'rules'   => array(
					'margin-top' => '0',
				),
			);

			$css[] = array(
				'element' => '#header-image #header-image-none',
				'rules'   => array(
					'background-color' => '#eeeeee',
				),
			);

			$css[] = array(
				'element' => '#header-image #header-image-none',
				'rules'   => array(
					'display' => 'block',
				),
			);

			$css[] = array(
				'element' => '#header-image #header-image-none',
				'rules'   => array(
					'height' => '100px',
				),
			);
		}

		// Check if quadmenu  inactive.
		if ( ! class_exists( 'Quadmenu' ) ) {
			$css[] = array(
				'element' => '#header-ext .navbar-wrapper .navigation-container .navigation-item',
				'rules'   => array(
					'padding' => '24px',
				),
			);
		} else {
			$css[] = array(
				'element' => 'nav#quadmenu',
				'rules'   => array(
					'padding' => '0 24px',
				),
			);
		}

		$css_output = array();

		foreach ( $css as $_css ) {
			$css_output[] = $_css['element'] . '{';

			foreach ( $_css['rules'] as $rule => $props ) {
				$css_output[] = $rule . ':' . $props;
			}

			$css_output[] = '}';
		}

		wp_add_inline_style( 'vastart-addon-style', implode( '', $css_output ) );
	}

	add_action( 'wp_enqueue_scripts', 'vastart_render_settings' );
endif;
