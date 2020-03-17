<?php
/**
 * Plugin Name: Vastart Addon
 * Plugin URI:  https://www.detheme.com
 * Description: Vastart Addon Plugin for Vastart Theme.
 * Version:     1.0.2
 * Author:      deTheme
 * Author URI:  https://www.detheme.com
 * Copyright:   2019 Vastart Addon Plugin (https://www.detheme.com)
 * Text Domain: vastart-addon
 *
 * @package Vastart addon
 */

defined( 'ABSPATH' ) || die( 'What are you doing here ?' );

define( 'VASTART_ADDON_DIR', plugin_dir_path( __FILE__ ) );
define( 'VASTART_ADDON_URL', plugin_dir_url( __FILE__ ) );

require 'inc/helpers.php';
require 'inc/hooks.php';
require 'inc/customizer.php';

/**
 * 1 Click Support.
 */
require_once VASTART_ADDON_DIR . 'inc/1-click-support/1-click-support.php';

$theme      = wp_get_theme();
$theme_name = 'Vastart';

if ( $theme_name == $theme->name || $theme_name == $theme->parent_theme ) {
	include_once VASTART_ADDON_DIR . 'inc/1-click-support/show-beacon.php';
}
