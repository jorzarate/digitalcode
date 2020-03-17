<?php
/**
 * Vastart Walker Page Class File
 *
 * Walker class used to create an HTML list of pages.
 *
 * @package Vastart
 */

/**
 * Vastart Walker Page Class.
 *
 * Description.
 *
 * @since 1.0.0
 */
class Vastart_Walker_Page extends Walker_Page {
	/**
	 * Outputs the beginning of the current level in the tree before elements are output.
	 *
	 * @since 2.1.0
	 *
	 * @see Walker::start_lvl()
	 *
	 * @param string $output Used to append additional content (passed by reference).
	 * @param int    $depth  Optional. Depth of page. Used for padding. Default 0.
	 * @param array  $args   Optional. Arguments for outputting the next level.
	 *                       Default empty array.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ( isset( $args['item_spacing'] ) && 'preserve' === $args['item_spacing'] ) {
			$t = "\t";
			$n = "\n";
		} else {
			$t = '';
			$n = '';
		}
		$indent = str_repeat( $t, $depth );

		if ( 'mobile_navigation' === $args['menu_id'] ) {
			// Mobile Version Navigation.
			$classes = 'children sub-menu';
		} else {
			$classes = 'children sub-menu dropdown-menu uf-submenu';

			if ( $depth > 0 ) {
				$classes .= ' arrow_box uf-submenu-left';
			}
		}

		if ( 'mobile_navigation' === $args['menu_id'] ) {
			// Mobile Version Navigation.
			if ( is_rtl() ) {
				$output .= '<label class="uf-mobile-nav-expand-submenu"><i class="icon-chevron-left"></i></label>';
			} else {
				$output .= '<label class="uf-mobile-nav-expand-submenu"><i class="icon-chevron-right"></i></label>';
			}
		}

		$output .= "{$n}{$indent}<ul class='{$classes}'>{$n}";

		if ( 'mobile_navigation' === $args['menu_id'] ) {
			if ( is_rtl() ) {
				$output .= '<li class="page_item"><label class="uf-mobile-nav-close-submenu">' . esc_html__( 'Back','vastart' ) . '<i class="icon-chevron-right"></i></label></li>';
			} else {
				$output .= '<li class="page_item"><label class="uf-mobile-nav-close-submenu"><i class="icon-chevron-left"></i>' . esc_html__( 'Back','vastart' ) . '</label></li>';
			}
		}
	}
}
