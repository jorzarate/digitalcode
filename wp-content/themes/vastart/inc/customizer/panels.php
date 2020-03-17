<?php
/**
 * This file config of panels customizer.
 *
 * @package Vastart
 */

$vastart_customizer_panels['site-identity-panel'] = array(
	'title' => esc_html__( 'Site Identities', 'vastart' ),
	'description' => esc_html__( 'Control your blog setting\'s, layout, sidebar position', 'vastart' ),
	'priority' => 10,
);

$vastart_customizer_panels['footer-panel'] = array(
	'title' => esc_html__( 'Footer', 'vastart' ),
	'description' => esc_html__( 'Control your footer setting\'s', 'vastart' ),
	'priority' => 110,
);
