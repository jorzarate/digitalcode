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
class Vastart_Switcher_Control extends WP_Customize_Control {

	/**
	 * Control type.
	 *
	 * @var string
	 */
	public $type = 'vastart-switcher';

	/**
	 * Render the control's content.
	 */
	public function render_content() {
		?>

		<div class="vastart_text_radio_button_control">
			<?php if ( ! empty( $this->label ) ) { ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php } ?>
			<?php if ( ! empty( $this->description ) ) { ?>
				<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php } ?>

			<div class="radio-buttons">
				<?php foreach ( $this->choices as $key => $value ) { ?>
					<label class="radio-button-label">
						<input type="radio" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $key ); ?>" <?php $this->link(); ?> <?php checked( esc_attr( $key ), $this->value() ); ?>/>
						<span><?php echo esc_attr( $value ); ?></span>
					</label>
				<?php	} ?>
			</div>
		</div>

		<?php
	}
}
