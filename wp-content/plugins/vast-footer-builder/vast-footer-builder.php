<?php
/**
 * Plugin Name: Footer Builder for Vast
 * Plugin URI:          https://vastthemes.com
 * Description:         Add-On Footer Builder for Vast Theme
 * Version:             1.0.2
 * Author:              deTheme
 * Author URI:          https://detheme.com
 * Requires at least:   4.0.0
 * Tested up to:        4.9.1
 *
 * @package vast_footer_builder
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

if ( ! defined( 'VAST_FOOTER_BUILDER_PATH' ) ) {
	define( 'VAST_FOOTER_BUILDER_PATH', plugin_dir_url( __FILE__ ) );
}

/**
 * This file config for customizer.
 *
 * @param object $wp_customize wp_customize object.
 */
function detheme_customizer_footer_builder( $wp_customize ) {
	// All our sections, settings, and controls will be added here.
	$wp_customize->add_section(
		'footer-section', array(
			'title'    => __( 'Footer', 'vast-footer-builder' ),
			'panel'    => '',
			'priority' => 110,
		)
	);
}
add_action( 'customize_register', 'detheme_customizer_footer_builder' );

if ( ! function_exists( 'detheme_get_pages_array' ) ) :

	/**
	 * Get Pages Array.
	 *
	 * @param array $args get array of args.
	 * @return $result Array
	 */
	function detheme_get_pages_array( $args = array() ) {
		$result = array();
		$pages  = get_pages( $args );
		if ( ! empty( $pages ) ) {
			foreach ( $pages as $page ) {
				$result[ $page->ID ] = $page->post_title;
			}
		}

		return $result;
	}
endif;

if ( ! function_exists( 'detheme_display_footer_builder' ) ) :

	/**
	 * Display a selected page on footer.
	 *
	 * @return $result string
	 */
	function detheme_display_footer_builder() {
		$postid     = get_the_ID();
		$footerpage = get_theme_mod( 'footer-content' );

		if ( get_theme_mod( 'footer-option', 'footer-widget' ) == 'footer-widget' || ! $footerpage || $postid == $footerpage ) {
			return;
		}
		remove_filter( 'the_content', 'wpautop' );
		echo apply_filters( 'the_content', get_post_field( 'post_content', $footerpage ) );
		
	}

	add_action( 'detheme_display_footer_builder', 'detheme_display_footer_builder' );
endif;
