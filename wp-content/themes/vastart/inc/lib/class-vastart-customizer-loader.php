<?php
/**
 * Customizer Loader File
 *
 * This file is used to loads panels, sections and controls for Vastart
 *
 * @package Vastart
 */

/**
 * Vastart Customizer Loader Class.
 *
 * This file is the source of the Customizer functionality in Vastart.
 *
 * @since Vastart 1.0.0
 */
class Vastart_Customizer_Loader {
	/**
	 * Get Theme Version
	 *
	 * @var string
	 */
	public $theme_version = '';

	/**
	 * Construct function.
	 */
	public function __construct() {
		$theme_info = wp_get_theme();
		$this->theme_version = $theme_info->get( 'Version' );
		add_action( 'customize_register', array( $this, 'init' ) );
		add_action( 'customize_register', array( $this, 'customize_register' ), 11 );
		add_action( 'customize_register', array( $this, 'custom_controls' ) );
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'customize_controls_enqueue_scripts' ) );
		add_action( 'customize_preview_init', array( $this, 'customize_preview_init' ) );
	}

	/**
	 * Adds custom controls
	 *
	 * @param Object $wp_customize Object of wp_customize.
	 */
	public function custom_controls( $wp_customize ) {
		$wp_customize->register_section_type( 'Vastart_Upsell_Section_Control' );
	}

	/**
	 * Core modules
	 *
	 * @param Object $wp_customize Object of wp_customize.
	 */
	public static function customize_register( $wp_customize ) {
	}

	/**
	 * Init behaves like, and replaces, construct.
	 *
	 * @param Object $wp_customize Object of wp_customize.
	 */
	public function init( $wp_customize ) {
		if ( isset( $wp_customize ) ) {
			require_once get_parent_theme_file_path( 'inc/lib/class-vastart-customizer-config.php' );
			require get_parent_theme_file_path( '/inc/customizer/class-vastart-upsell-section-control.php' );

			$this->config = Vastart_Customizer_Config::get_instance();

			// Start registration with the panels & sections.
			$this->customizer = $wp_customize;
			$this->register_panels( $this->config->panels );
			$this->register_sections( $this->config->sections );
			$this->register_controls( $this->config->controls );
			$this->register_settings( $this->config->settings );

			// Move default sections into Layers Panels.
			$this->move_default_sections( $this->config->default_sections );

			$this->move_default_controls( $this->config->default_controls );
		}
	}

	/**
	 * Register Panels.
	 *
	 * @param Array $panels array of panels config.
	 */
	public function register_panels( $panels = array() ) {

		if ( empty( $panels ) ) {
			return;
		}

		foreach ( $panels as $panel_key => $panel_data ) {

			if ( ! in_array( $panel_key, $this->customizer->panels() ) ) {
				$this->customizer->add_panel( $panel_key, $panel_data );
			}
		}
	}

	/**
	 * Register Sections.
	 *
	 * @param Array $sections array of sections config.
	 */
	public function register_sections( $sections = array() ) {

		if ( empty( $sections ) ) {
			return;
		}

		foreach ( $sections as $section_key => $section_data ) {

			if ( isset( $section_data['panel'] ) ) {

				$this->customizer->add_section( $section_key, $section_data );

			}
		}

	}

	/**
	 * Register custom control types.
	 *
	 * @param array $controls array of custom control types.
	 */
	public function register_controls( $controls = array() ) {
		foreach ( $controls as $name => $control ) {
			require get_parent_theme_file_path( '/inc/customizer/controls/class-' . $name . '-control.php' );
		}
	}

	/**
	 * Register Settings.
	 *
	 * @param array $settings array of controls config.
	 */
	public function register_settings( $settings = array() ) {
		global $vastart_customizer_controls;

		if ( empty( $settings ) ) {
			return;
		}

		// Default control priorities.
		$default_priority = 150;

		// Default transport always refresh.
		$default_transport = 'refresh';

		// Whitelisted control keys.
		$allowed_control_keys = array(
			'default',
			'transport',
		);

		$control_id_prefix = 'vastart-';

		foreach ( $settings as $setting_key => $setting ) {

			// Add the default into the control data so it can be accessed if needed.
			$setting['default'] = isset( $setting['default'] ) ? $setting['default'] : null;

			// Set Transport Method.
			$setting['transport'] = isset( $setting['transport'] ) ? $setting['transport'] : $default_transport;

			if ( isset( $setting['partial'] ) ) {
				$setting['transport'] = 'postMessage';
			}

			// Set control priority to obey order of setup.
			$control_priority = isset( $setting['priority'] ) ? $setting['priority'] : $default_priority;

			// Blacklist setting keys in order to merge default array of controls with settings.
			$allowed_control_array = vastart_array_keys_blacklist( $setting, $allowed_control_keys );

			$control_id = $control_id_prefix . $setting_key . '-control';

			$control_data = array_merge(
				array(
					'type'      => $setting['type'],
					'section'   => $setting['section'],
					'settings'  => $setting_key,
					'priority'  => $control_priority,
				), $allowed_control_array
			);

			// Add Setting.
			$this->customizer->add_setting(
				$setting_key, array(
					'type'              => 'theme_mod',
					'capability'        => 'manage_options',
					'default'           => $setting['default'],
					'transport'         => $setting['transport'],
				)
			);

			switch ( $control_data['type'] ) :
				case 'custom':
					// Get class name.
					$class_name = $this->config->controls[ $control_data['custom_type'] ];

					// Call class with reflection.
					$control = new ReflectionClass( $class_name );

					// Apply class args on reflection class.
					$new_control = $control->newInstanceArgs(
						array(
							$this->customizer,
							$control_id,
							$control_data,
						)
					);

					$this->customizer->add_control( $new_control );
					break;

				case 'color':
					$this->customizer->add_control(
						new WP_Customize_Color_Control( $this->customizer, $control_id, $control_data )
					);
					break;

				case 'color-alpha':
					$this->customizer->add_control(
						new Vastart_Alpha_Color_Picker_Control( $this->customizer, $control_id, $control_data )
					);
					break;

				case 'image':
					$this->customizer->add_control(
						new WP_Customize_Image_Control( $this->customizer, $control_id, $control_data )
					);
					break;

				case 'icon-picker':
					$this->customizer->add_control(
						new Vastart_Icon_Picker_Control( $this->customizer, $control_id, $control_data )
					);
					break;

				default:
					$this->customizer->add_control(
						new WP_Customize_Control( $this->customizer, $control_id, $control_data )
					);
					break;
			endswitch;

		}

	}

	/**
	 * Move Default Section.
	 *
	 * @param Array $sections array of sections config.
	 */
	public function move_default_sections( $sections = array() ) {

		foreach ( $sections as $section_key => $section_data ) {

			// Get the current section.
			$section = $this->customizer->get_section( $section_key );

			// Move this section to a specific panel.
			if ( isset( $section->panel ) && isset( $section_data['panel'] ) ) {
				$section->panel = $section_data['panel'];
			}

			// Section Priority.
			if ( isset( $section->priority ) && isset( $section_data['priority'] ) ) {
				$section->priority = $section_data['priority'];
			}

			if ( isset( $section->title ) && isset( $section_data['title'] ) ) {
				$section->title = $section_data['title'];
			}
		}

	}

	/**
	 * Move Default Controls.
	 *
	 * @param Array $controls array of controls config.
	 */
	public function move_default_controls( $controls = array() ) {

		foreach ( $controls as $control_key => $control_data ) {

			// Get the current control.
			$control = $this->customizer->get_control( $control_key );

			if ( isset( $control->section ) && isset( $control_data['section'] ) ) {
				$control->section = $control_data['section'];
			}

			if ( isset( $control->priority ) && isset( $control_data['priority'] ) ) {
				$control->priority = $control_data['priority'];
			}

			if ( isset( $control->title ) && isset( $control_data['title'] ) ) {
				$control->title = $control_data['title'];
			}
		}
	}

	/**
	 * Enqueue customizer script and styles.
	 *
	 * @return void
	 */
	public function customize_controls_enqueue_scripts() {
		wp_enqueue_style( 'vastart-customizer', get_theme_file_uri( '/inc/customizer/assets/css/customizer.min.css' ), array(), $this->theme_version );
		wp_enqueue_script( 'vastart-customizer', get_theme_file_uri( '/inc/customizer/assets/js/customizer-panel.min.js' ), array(), $this->theme_version, true );
		wp_localize_script( 'vastart-customizer', 'vastartCustomizerDefault', vastart_theme_setting( null, true ) );
	}

	/**
	 * Enqueue customizer script and styles.
	 *
	 * @return void
	 */
	public function customize_preview_init() {
		wp_enqueue_script( 'vastart-customizer', get_theme_file_uri( '/inc/customizer/assets/js/customizer-preview.min.js' ), array(), $this->theme_version, true );
	}
}
