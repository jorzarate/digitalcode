<?php
/**
 * Custom Control Customizer.
 *
 * Contains class of custom control.
 *
 * @package Vastart
 */

/**
 * WordPress customizer Text Radio Button.
 *
 * Description.
 *
 * @since 1.0.0
 * @see WP_Customize_Control.
 */
class Vastart_Upsell_Section_Control extends WP_Customize_Section {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'vastart-upsell';

	/**
	 * The URL type.
	 *
	 * @access public
	 * @var string
	 */
	public $url  = '';

	/**
	 * The ID type.
	 *
	 * @access public
	 * @var string
	 */
	public $id = '';

	/**
	 * JSON.
	 */
	public function json() {
		$json           = parent::json();
		$json['url']    = esc_url( $this->url );
		$json['id']     = $this->id;
		return $json;
	}

	/**
	 * Render template
	 *
	 * @access protected
	 */
	protected function render_template() {
		?>
		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
			<h3>
				<a class="vastart_upsell" href="{{{ data.url }}}" target="_blank">{{ data.title }}</a>
			</h3>
		</li>
		<?php
	}
}

/**
 * Enqueue control related scripts/styles.
 *
 * @access public
 */
function vastart_upsell_enqueue() {
	wp_enqueue_style( 'vastart-upsell', get_theme_file_uri( '/assets/vendors/upsell/upsell.css' ), null );
}
add_action( 'customize_controls_enqueue_scripts', 'vastart_upsell_enqueue' );
