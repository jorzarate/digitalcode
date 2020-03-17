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
class Vastart_Link_Control extends WP_Customize_Control {

	/**
	 * Control type.
	 *
	 * @var string
	 */
	public $type = 'vastart-link';

	/**
	 * Render the control's content.
	 */
	public function render_content() {
		?>
		<a id="<?php echo esc_attr( $this->id ); ?>" href="<?php echo esc_url( $this->description ); ?>" title="<?php echo esc_attr( $this->label ); ?>"><?php echo esc_html( $this->label ); ?></a>
		<?php
	}
}
