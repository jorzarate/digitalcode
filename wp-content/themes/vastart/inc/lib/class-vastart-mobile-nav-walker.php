<?php
/**
 * Mobile Navigation Walker Class File
 *
 * Class used to implement an HTML list of nav menu items on mobile navigation.
 *
 * @package Vastart
 */

/**
 * Vastart Mobile Navigation Walker Class.
 *
 * Description.
 *
 * @since 1.0.0
 */
class Vastart_Mobile_Nav_Walker extends Walker_Nav_Menu {
	/**
	 * Starts the list before the elements are added.
	 *
	 * @since 1.0.0
	 *
	 * @see Walker::start_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		parent::start_lvl( $output,$depth,$args );

		if ( is_rtl() ) {
			$output .= '<li class="menu-item"><label class="uf-mobile-nav-close-submenu">' . esc_html__( 'Back','vastart' ) . '<i class="icon-chevron-right"></i></label></li>';
		} else {
			$output .= '<li class="menu-item"><label class="uf-mobile-nav-close-submenu"><i class="icon-chevron-left"></i>' . esc_html__( 'Back','vastart' ) . '</label></li>';
		}
	}
}
