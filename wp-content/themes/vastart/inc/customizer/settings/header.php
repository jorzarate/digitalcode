<?php
/**
 * This file config of custom control for customizer.
 *
 * @package Vastart
 */

$vastart_customizer_settings['header-styling'] = array(
	'section'     => 'header-styling',
	'type'        => 'radio',
	'default'     => 'layout-boxed',
	'label'       => esc_html__( 'Header Style', 'vastart' ),
	'description' => esc_html__( 'This option affects your header layout. ( This control just temporary )' , 'vastart' ),
	'choices'     => array(
		'style-1' => esc_html__( 'Style 1', 'vastart' ),
		'style-2' => esc_html__( 'Style 2', 'vastart' ),
		'style-3' => esc_html__( 'Style 3', 'vastart' ),
		'style-4' => esc_html__( 'Style 4', 'vastart' ),
	),
);

$vastart_customizer_settings['header_image_show_frontpage'] = array(
	'section'     => 'header_image',
	'type'        => 'custom',
	'custom_type' => 'vastart-switcher',
	'default'     => 'vastart-header-image-show',
	'label'       => esc_html__( 'Display at Homepage', 'vastart' ),
	'choices'         => array(
		'vastart-header-image-show' => esc_html__( 'Show' , 'vastart' ),
		'vastart-header-image-hide' => esc_html__( 'Hide' , 'vastart' ),
	),
);
