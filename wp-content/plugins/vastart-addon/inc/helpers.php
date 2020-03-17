<?php
/**
 * This file includes helper functions used throughout the plugins.
 *
 * @package Vastart Addon
 */

if ( ! function_exists( 'vastart_addon_setting' ) ) {
	/**
	 * Get plugin theme mod.
	 *
	 * @param string $key           Theme Mod key.
	 * @param bool   $control_value Whether using control value or not.
	 * @param string $control_attr  Control key from $vastart_customizer_settings.
	 * @return mixed
	 */
	function vastart_addon_setting( $key = '', $control_value = false, $control_attr = 'default' ) {
		global $vastart_customizer_settings;

		if ( isset( $key ) && ! empty( $key ) ) {
			$default_value = isset( $vastart_customizer_settings[ $key ] ) ? $vastart_customizer_settings[ $key ][ $control_attr ] : '';
			$theme_mod     = get_theme_mod( $key, $default_value );
			$setting       = $control_value ? $default_value : $theme_mod;

			return empty( $setting ) ? $default_value : $setting;
		}

		/**
		 * Get all settings.
		 */
		$settings = array();

		foreach ( $vastart_customizer_settings as $key => $setting ) {
			$default_value    = $setting[ $control_attr ];
			$theme_mod        = get_theme_mod( $key, $default_value );
			$setting          = $control_value ? $default_value : $theme_mod;
			$settings[ $key ] = empty( $setting ) ? $default_value : $setting;
		}

		return $settings;
	}
}
