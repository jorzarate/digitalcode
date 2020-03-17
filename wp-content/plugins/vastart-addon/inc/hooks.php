<?php
/**
 * The Hooks
 *
 * @package Vastart Addon
 */

if ( ! function_exists( 'vastart_addon_enqueue_scripts' ) ) :

	/**
	 * Enqueue plugin styles.
	 */
	function vastart_addon_enqueue_scripts() {
		wp_register_script( 'vastart-addon-script', VASTART_ADDON_URL . 'assets/js/plugins.min.js', array( 'jquery' ), null, true );
		wp_register_style( 'vastart-addon-style', VASTART_ADDON_URL . 'assets/css/plugins.min.css' );
		wp_register_style( 'social-icons', VASTART_ADDON_URL . 'assets/css/social-icons.css' );
		wp_register_style( 'vastart-flaticon', VASTART_ADDON_URL . 'assets/css/flaticon.css' );

		wp_enqueue_style( 'vastart-addon-style' );
		wp_enqueue_style( 'social-icons' );
		wp_enqueue_style( 'vastart-flaticon' );
		wp_enqueue_script( 'vastart-addon-script' );

		/**
		 * Load Vendor Icon Picker.
		 */
		if ( 'genericon' === vastart_addon_setting( 'test-icon-picker', true, 'iconset' ) ) {
			wp_enqueue_style( 'genericons', get_theme_file_uri( '/inc/customizer/assets/vendor/icon-picker/css/genericons/genericons.css' ), array(), null );
		}
		if ( 'dashicon' === vastart_addon_setting( 'test-icon-picker', true, 'iconset' ) ) {
			wp_enqueue_style( 'dashicons' );
		}
		if ( 'fa' === vastart_addon_setting( 'test-icon-picker', true, 'iconset' ) ) {
			wp_enqueue_style( 'font-awesome', get_theme_file_uri( '/inc/customizer/assets/vendor/icon-picker/css/font-awesome/css/font-awesome.min.css' ), array(), null );
		}
	}

	add_action( 'wp_enqueue_scripts', 'vastart_addon_enqueue_scripts' );
endif;

if ( ! function_exists( 'vastart_addon_admin_enqueue_scripts' ) ) :

	/**
	 * Enqueue plugin styles.
	 */
	function vastart_addon_admin_enqueue_scripts() {
		wp_register_style( 'social-icons', VASTART_ADDON_URL . 'assets/css/social-icons.css' );
		wp_register_script( 'vastart-addon-script', VASTART_ADDON_URL . 'assets/js/plugins.min.js', array( 'jquery' ), null, true );

		wp_enqueue_style( 'social-icons' );
		wp_enqueue_script( 'vastart-addon-script' );
	}

	add_action( 'admin_enqueue_scripts', 'vastart_addon_admin_enqueue_scripts' );
endif;

if ( ! function_exists( 'vastart_metabox_hide_title' ) ) :

	/**
	 * Hide Title Metabox
	 */
	function vastart_metabox_hide_title() {
		add_meta_box(
			'vast-meta-hide-title-id', __( 'Vastart Options', 'vastart-addon' ), 'vastart_metabox_hide_title_control', 'page', 'normal', 'high', array(
				'__block_editor_compatible_meta_box' => true,
				'__back_compat_meta_box'             => false,
			)
		);
	}

endif;

if ( ! function_exists( 'vastart_metabox_hide_title_control' ) ) :

	/**
	 * Hide title checkbox
	 */
	function vastart_metabox_hide_title_control() {
		global $post;
		wp_nonce_field( 'vastart_nonce', 'vastart_hide_title_nonce' );
		$is_hide = get_post_meta( $post->ID, '_hide_title', true );
		?>
		<p><input type="checkbox" name="hide_title" id="hide_title" value="1" <?php echo esc_attr( ( $is_hide ) ? 'checked="checked"' : '' ); ?>/> <?php esc_html_e( 'Hide Title', 'vastart-addon' ); ?></strong></p>
		<?php
	}

endif;

if ( ! function_exists( 'vastart_metabox_hide_title_save' ) ) :

	/**
	 * Vast hide title checkbox.
	 *
	 * @param string $post_id Post_id.
	 * @param post   $post The post object.
	 * @param bool   $update Whether this is an existing post being updated or not.
	 */
	function vastart_metabox_hide_title_save( $post_id, $post, $update ) {

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}

		if ( ! empty( $_REQUEST['vastart_hide_title_nonce'] ) ) {
			if ( ! wp_verify_nonce( $_REQUEST['vastart_hide_title_nonce'], 'vastart_nonce' ) ) {
				return;
			}
		}

		if ( $update ) {
			$old = get_post_meta( $post_id, '_hide_title', true );
			$new = isset( $_POST['hide_title'] ) ? sanitize_text_field( $_POST['hide_title'] ) : '';

			update_post_meta( $post_id, '_hide_title', $new, $old );
		}
	}

	add_action( 'save_post', 'vastart_metabox_hide_title_save', 10, 3 );

endif;

if ( ! function_exists( 'vastart_body_class' ) ) :

	/**
	 * Hide title body class.
	 *
	 * @param array $classes Body Class.
	 */
	function vastart_body_class( $classes ) {
		global $post;

		if ( $post ) {
			$is_hide = get_post_meta( $post->ID, '_hide_title', true );
			if ( $is_hide ) {
				$classes[] = 'hide-title';
			}
		}

		return $classes;
	}

	add_filter( 'body_class', 'vastart_body_class' );
endif;

if ( is_admin() ) {
	add_action( 'add_meta_boxes', 'vastart_metabox_hide_title' );
}

if ( ! function_exists( 'vastart_metabox_hide_breadcrumbs' ) ) :

	/**
	 * Hide Breadcrumbs Metabox
	 */
	function vastart_metabox_hide_breadcrumbs() {
		add_meta_box(
			'vast-meta-hide-breadcrumbs-id', __( 'Vastart Breadcrumbs Options', 'vastart-addon' ), 'vastart_metabox_hide_breadcrumbs_control', 'page', 'normal', 'high', array(
				'__block_editor_compatible_meta_box' => true,
				'__back_compat_meta_box'             => false,
			)
		);
	}

	endif;

if ( ! function_exists( 'vastart_metabox_hide_breadcrumbs_control' ) ) :

	/**
	 * Hide breadcrumbs checkbox
	 */
	function vastart_metabox_hide_breadcrumbs_control() {
		global $post;
		wp_nonce_field( 'vastart_nonce', 'vastart_hide_breadcrumbs_nonce' );
		$is_hide = get_post_meta( $post->ID, '_hide_breadcrumbs', true );

		$as_customizer = get_post_meta( $post->ID, '_as_customizer_breadcrumbs', true );
		$as_customizer = ( empty( $as_customizer ) && ( '0' !== $as_customizer ) ) ? '1' : $as_customizer;
		?>
		<p><input type="checkbox" name="as_customizer_breadcrumbs" id="as_customizer_breadcrumbs" value="1" <?php echo esc_attr( ( '1' === $as_customizer ) ? 'checked="checked"' : '' ); ?>/> <?php esc_html_e( 'Same as Customizer Setting', 'vastart-addon' ); ?></strong></p>
		<p><input type="checkbox" name="hide_breadcrumbs" id="hide_breadcrumbs" value="1" <?php echo esc_attr( ( $is_hide ) ? 'checked="checked"' : '' ); ?> <?php echo esc_attr( ( '1' === $as_customizer ) ? 'disabled="disabled"' : '' ); ?>/> <?php esc_html_e( 'Hide Breadcrumbs', 'vastart-addon' ); ?></strong></p>
		<?php
	}

	endif;

if ( ! function_exists( 'vastart_metabox_hide_breadcrumbs_save' ) ) :

	/**
	 * Vast hide breadcrumbs checkbox.
	 *
	 * @param string $post_id Post_id.
	 * @param post   $post The post object.
	 * @param bool   $update Whether this is an existing post being updated or not.
	 */
	function vastart_metabox_hide_breadcrumbs_save( $post_id, $post, $update ) {

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}

		if ( ! empty( $_REQUEST['vastart_hide_breadcrumbs_nonce'] ) ) {
			if ( ! wp_verify_nonce( $_REQUEST['vastart_hide_breadcrumbs_nonce'], 'vastart_nonce' ) ) {
				return;
			}
		}

		if ( $update ) {
			$old = get_post_meta( $post_id, '_as_customizer_breadcrumbs', true );
			$new = isset( $_POST['as_customizer_breadcrumbs'] ) ? sanitize_text_field( $_POST['as_customizer_breadcrumbs'] ) : '0';

			update_post_meta( $post_id, '_as_customizer_breadcrumbs', $new, $old );

			$old = get_post_meta( $post_id, '_hide_breadcrumbs', true );
			$new = isset( $_POST['hide_breadcrumbs'] ) ? sanitize_text_field( $_POST['hide_breadcrumbs'] ) : '';

			update_post_meta( $post_id, '_hide_breadcrumbs', $new, $old );
		}
	}

	add_action( 'save_post', 'vastart_metabox_hide_breadcrumbs_save', 10, 3 );

	endif;

if ( is_admin() ) {
	add_action( 'add_meta_boxes', 'vastart_metabox_hide_breadcrumbs' );
}

if ( ! function_exists( 'vastart_addon_hide_breadcrumbs' ) ) :

	/**
	 * Hide breadcrumbs filter.
	 *
	 * @param bool $hide_breadcrumbs Hide Breadcrumbs state.
	 */
	function vastart_addon_hide_breadcrumbs( $hide_breadcrumbs ) {
		global $post;

		if ( $post ) {
			$is_hide       = get_post_meta( $post->ID, '_hide_breadcrumbs', true );
			$as_customizer = get_post_meta( $post->ID, '_as_customizer_breadcrumbs', true );
			if ( '1' === $as_customizer ) {
				return $hide_breadcrumbs;
			} else {
				$hide_breadcrumbs = ( '1' === $is_hide ) ? true : false;
			}
		}

		return $hide_breadcrumbs;
	}

	add_filter( 'hide_breadcrumbs', 'vastart_addon_hide_breadcrumbs' );
	endif;


