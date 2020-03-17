<?php
/**
 * This file config of custom control for customizer.
 *
 * @package Vastart
 */

$vastart_customizer_settings['logo-height'] = array(
	'section'         => 'upload-logo',
	'type'            => 'custom',
	'custom_type'     => 'vastart-input-slider',
	'default'         => 27,
	'unit'            => 'px',
	'priority'        => 9,
	'label'           => esc_html__( 'Height', 'vastart' ),
	'description'     => esc_html__( 'Recomended logo height is 21px.' , 'vastart' ),
	'transport'       => 'postMessage',
	'input_attrs'     => array(
		'min'  => 10,
		'max'  => 250,
		'step' => 1,
	),
);

$vastart_customizer_settings['logo-sticky'] = array(
	'section'         => 'upload-logo',
	'type'            => 'image',
	'priority'        => 9,
	'default'         => '',
	'label'           => esc_html__( 'Logo Sticky', 'vastart' ),
	'transport'       => 'refresh',
);

$vastart_customizer_settings['logo-sticky-height'] = array(
	'section'         => 'upload-logo',
	'type'            => 'custom',
	'custom_type'     => 'vastart-input-slider',
	'default'         => 27,
	'unit'            => 'px',
	'priority'        => 9,
	'label'           => esc_html__( 'Logo Sticky Height', 'vastart' ),
	'description'     => esc_html__( 'Recomended logo height is 21px.' , 'vastart' ),
	'transport'       => 'postMessage',
	'input_attrs'     => array(
		'min'  => 10,
		'max'  => 250,
		'step' => 1,
	),
);

$vastart_customizer_settings['blog-layout'] = array(
	'section'         => 'layout-option',
	'type'            => 'custom',
	'custom_type'     => 'vastart-switcher',
	'default'         => 'vastart-layout-fullwidth',
	'label'           => esc_html__( 'Blog Layout', 'vastart' ),
	'transport'       => 'postMessage',
	'choices'         => array(
		'vastart-layout-fullwidth'  => esc_html__( 'Fullwidth' , 'vastart' ),
		'vastart-layout-boxed'      => esc_html__( 'Boxed' , 'vastart' ),
	),
);

$vastart_customizer_settings['style-layout'] = array(
	'section'         => 'layout-option',
	'type'            => 'custom',
	'custom_type'     => 'vastart-switcher',
	'default'         => 'vastart-classic-layout',
	'label'           => esc_html__( 'Layout Styles', 'vastart' ),
	'transport'       => 'refresh',
	'choices'         => array(
		'vastart-classic-layout'  => esc_html__( 'Classic' , 'vastart' ),
		'vastart-masonry-layout'     => esc_html__( 'Masonry' , 'vastart' ),
	),
);

$vastart_customizer_settings['sidebar-layout'] = array(
	'section'         => 'layout-option',
	'type'            => 'custom',
	'custom_type'     => 'vastart-image-selector',
	'default'         => 'sidebar-right',
	'transport'       => 'refresh',
	'label'           => esc_html__( 'Sidebar Option', 'vastart' ),
	'description'     => esc_html__( 'You can choose sidebar position on your site, is it in right, left, or no sidebar.' , 'vastart' ),
	'choices'         => array(
		'sidebar-right'  => array(
			'image' => VASTART_THEME_URI . '/inc/customizer/assets/images/rs.png',
			'name' => esc_html__( 'Right Sidebar' , 'vastart' ),
		),
		'sidebar-none'  => array(
			'image' => VASTART_THEME_URI . '/inc/customizer/assets/images/ns.png',
			'name' => esc_html__( 'None Sidebar' , 'vastart' ),
		),
		'sidebar-left'  => array(
			'image' => VASTART_THEME_URI . '/inc/customizer/assets/images/ls.png',
			'name' => esc_html__( 'Left Sidebar' , 'vastart' ),
		),
	),
);

$vastart_customizer_settings['parallax-layout'] = array(
	'section'         => 'layout-option',
	'type'            => 'custom',
	'custom_type'     => 'vastart-switcher',
	'default'         => 'vastart-header-parallax',
	'label'           => esc_html__( 'Header Image Scrolling', 'vastart' ),
	'transport'       => 'refresh',
	'choices'         => array(
		'vastart-header-parallax' => esc_html__( 'Parallax' , 'vastart' ),
		'vastart-header-none' => esc_html__( 'Static' , 'vastart' ),
	),
);

$vastart_customizer_settings['dropdown-layout'] = array(
	'section'         => 'layout-option',
	'type'            => 'custom',
	'custom_type'     => 'vastart-switcher',
	'default'         => 'vastart-dropdown-style',
	'label'           => esc_html__( 'Dropdown Style', 'vastart' ),
	'transport'       => 'refresh',
	'choices'         => array(
		'vastart-dropdown-style' => esc_html__( 'Selectize' , 'vastart' ),
		'vastart-dropdown-none' => esc_html__( 'Original' , 'vastart' ),
	),
);

$vastart_customizer_settings['related-post-image'] = array(
	'section'     => 'layout-option',
	'type'        => 'custom',
	'custom_type' => 'vastart-switcher',
	'label'       => esc_html__( 'Related Post Image', 'vastart' ),
	'default'     => 'related-post-image-hidden',
	'choices'     => array(
		'related-post-image-hidden'  => esc_html__( 'Hidden' , 'vastart' ),
		'related-post-image-show'    => esc_html__( 'Show' , 'vastart' ),
	),
);

$vastart_customizer_settings['breadcrumbs-option'] = array(
	'section'     => 'layout-option',
	'type'        => 'custom',
	'custom_type' => 'vastart-switcher',
	'label'       => esc_html__( 'Breadcrumbs', 'vastart' ),
	'default'     => 'breadcrumbs-show',
	'choices'     => array(
		'breadcrumbs-hidden'  => esc_html__( 'Hidden' , 'vastart' ),
		'breadcrumbs-show'    => esc_html__( 'Show' , 'vastart' ),
	),
);

$vastart_customizer_settings['sticky-layout'] = array(
	'section'         => 'menu-option',
	'type'            => 'custom',
	'custom_type'     => 'vastart-switcher',
	'default'         => 'vastart-sticky',
	'label'           => esc_html__( 'Navigation Position', 'vastart' ),
	'transport'       => 'refresh',
	'choices'         => array(
		'vastart-sticky' => esc_html__( 'Sticky' , 'vastart' ),
		'vastart-scroll' => esc_html__( 'Scroll' , 'vastart' ),
	),
);

$vastart_customizer_settings['navbar-font-color'] = array(
	'section'     => 'menu-option',
	'type'        => 'color',
	'default'     => '#333333',
	'transport'   => 'refresh',
	'label'       => esc_html__( 'Font & Background Color', 'vastart' ),
);

$vastart_customizer_settings['navbar-background-color'] = array(
	'section'     => 'menu-option',
	'type'        => 'color-alpha',
	'default'     => '#ffffff',
	'capability'  => 'edit_theme_options',
	'transport'   => 'refresh',
	'show_opacity'  => true,
	'palette'   => array(
		'rgb(150, 50, 220)',
		'rgba(50,50,50,0.8)',
		'rgba( 255, 255, 255, 0.2 )',
		'#00CC99',
	),
);

$vastart_customizer_settings['navbar-font-sticky-color'] = array(
	'section'     => 'menu-option',
	'type'        => 'color',
	'default'     => '#333333',
	'transport'   => 'refresh',
	'label'       => esc_html__( 'Font & Background Color Sticky', 'vastart' ),
);

$vastart_customizer_settings['navbar-background-sticky-color'] = array(
	'section'     => 'menu-option',
	'type'        => 'color-alpha',
	'default'     => '#ffffff',
	'capability'  => 'edit_theme_options',
	'transport'   => 'refresh',
	'show_opacity'  => true,
	'palette'   => array(
		'rgb(150, 50, 220)',
		'rgba(50,50,50,0.8)',
		'rgba( 255, 255, 255, 0.2 )',
		'#00CC99',
	),
);

$vastart_customizer_settings['navbar-bottom-border'] = array(
	'section'         => 'menu-option',
	'type'            => 'custom',
	'custom_type'     => 'vastart-switcher',
	'default'         => '1px solid #e3e3e3',
	'label'           => esc_html__( 'Bottom Border on Homepage', 'vastart' ),
	'transport'       => 'refresh',
	'choices'         => array(
		'none'              => esc_html__( 'Hide' , 'vastart' ),
		'1px solid #e3e3e3' => esc_html__( 'Show' , 'vastart' ),
	),
);
