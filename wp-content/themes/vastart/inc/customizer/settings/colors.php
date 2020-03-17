<?php
/**
 * This file config of custom control for customizer.
 *
 * @package Vastart
 */

$vastart_customizer_settings['primary-color'] = array(
	'section'     => 'colors',
	'type'        => 'color',
	'default'     => '#ff8d74',
	'transport'   => 'postMessage',
	'label'       => esc_html__( 'Brand Color', 'vastart' ),
	'description' => esc_html__( 'Change your brand color', 'vastart' ),
);
