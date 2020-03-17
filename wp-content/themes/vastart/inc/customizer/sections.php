<?php
/**
 * This file config of sections for customizer.
 *
 * @package Vastart
 */

$vastart_customizer_sections['upload-logo'] = array(
	'title' => esc_html__( 'Logo', 'vastart' ),
	'panel' => 'site-identity-panel',
	'priority' => 10,
);

$vastart_customizer_sections['address-icon'] = array(
	'title' => esc_html__( 'Favicon', 'vastart' ),
	'panel' => 'site-identity-panel',
	'priority' => 40,
);

$vastart_customizer_sections['colors'] = array(
	'title' => esc_html__( 'Brand Color', 'vastart' ),
	'panel' => 'site-identity-panel',
	'priority' => 60,
);

$vastart_customizer_sections['copyright-text'] = array(
	'title' => esc_html__( 'Copyright Text', 'vastart' ),
	'panel' => 'site-identity-panel',
	'priority' => 100,
);

// Vastart sections.
$vastart_customizer_sections['layout-option'] = array(
	'title' => esc_html__( 'Layout Options', 'vastart' ),
	'panel' => '',
	'priority' => 20,
);

// Vastart Navigation Bar Sticky Menu.
$vastart_customizer_sections['menu-option'] = array(
	'title' => esc_html__( 'Navigation Bar', 'vastart' ),
	'panel' => '',
	'priority' => 20,
);

// Vastart Top Bar.
$vastart_customizer_sections['top-bar'] = array(
	'title' => esc_html__( 'Top Bar', 'vastart' ),
	'panel' => '',
	'priority' => 30,
);

// Move WordPress default sections to vastart sections.
$wp_customizer_sections['static_front_page'] = array(
	'priority' => 40,
);

$wp_customizer_sections['title_tagline'] = array(
	'panel' => 'site-identity-panel',
	'title' => esc_html__( 'Site Title', 'vastart' ),
	'priority' => 20,
);

$wp_customizer_sections['header_image'] = array(
	'title' => esc_html__( 'Header Image', 'vastart' ),
	'priority' => 100,
);

if ( ! function_exists( 'detheme_display_footer_builder' ) ) {
	$vastart_customizer_sections['footer-section'] = array(
		'title' => esc_html__( 'Footer', 'vastart' ),
		'panel' => 'site-identity-panel',
		'priority' => 110,
	);
}

$wp_customizer_sections['custom_css'] = array(
	'title' => esc_html__( 'Custom CSS', 'vastart' ),
	'priority' => 120,
);
