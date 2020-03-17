<?php
/**
 * This file config of custom control for customizer.
 *
 * @package Vastart
 */

if ( function_exists( 'detheme_display_footer_builder' ) ) {
	$vastart_customizer_settings['footer-option'] = array(
		'section'         => 'footer-section',
		'type'            => 'select',
		'default'         => 'footer-widget',
		'label'           => esc_html__( 'Select Footer', 'vastart' ),
		'transport'       => 'refresh',
		'description'     => esc_html__( 'Select widget or page to appear on Footer.' , 'vastart' ),
		'choices'         => array(
			'footer-widget' => esc_html__( 'Footer from Widget' , 'vastart' ),
			'footer-page'   => esc_html__( 'Footer from Page' , 'vastart' ),
		),
	);

	$vastart_customizer_settings['footer-url'] = array(
		'section'         => 'footer-section',
		'type'            => 'custom',
		'custom_type'     => 'vastart-link',
		'default'         => '',
		'label'           => esc_html__( 'Click here to edit footer widgets', 'vastart' ),
		'description'     => esc_html__( '#', 'vastart' ),
		'transport'       => 'refresh',
	);

	$vastart_customizer_settings['footer-content'] = array(
		'section'         => 'footer-section',
		'type'            => 'select',
		'default'         => 'vastart-page-1',
		'label'           => esc_html__( 'Footer from Page', 'vastart' ),
		'transport'       => 'refresh',
		'description'     => esc_html__( 'Select a page to appear on Footer.' , 'vastart' ),
		'choices'         => detheme_get_pages_array(),
	);
}

$vastart_customizer_settings['footer-display-copyright'] = array(
	'section'     => 'footer-section',
	'type'        => 'custom',
	'custom_type' => 'vastart-switcher',
	'label'       => esc_html__( 'Copyright Text', 'vastart' ),
	'description' => esc_html__( 'Write your copyright', 'vastart' ),
	'default'     => true,
	'choices'     => array(
		false   => esc_html__( 'Hidden' , 'vastart' ),
		true    => esc_html__( 'Show' , 'vastart' ),
	),
);

/* translators: %s: site legal */
$default = sprintf( esc_html__( 'Copyright %s', 'vastart' ), get_bloginfo( 'name' ) );

$vastart_customizer_settings['footer-legal'] = array(
	'section'     => 'footer-section',
	'type'        => 'textarea',
	'default'     => $default,
	'transport'   => 'postMessage',
	'input_attrs' => array(
		'class' => 'my-custom-class',
		'placeholder' => esc_html__( 'Enter message...', 'vastart' ),
	),
);
