<?php
/**
 * Vastart Input Slider Control.
 *
 * @package Vastart
 */

/**
 * Vastart Input Slider Custom Control.
 *
 * @since 1.0.0
 * @see WP_Customize_Control.
 */
class Vastart_Input_Slider_Control extends WP_Customize_Control {

	/**
	 * Control type.
	 *
	 * @var string
	 */
	public $type = 'vastart-input-slider';

	/**
	 * Input Unit
	 *
	 * @var String
	 */
	public $unit = '';

	/**
	 * Render the control's content.
	 */
	public function render_content() {
		?>
		<div class="vastart-input-slider-control">
			<?php if ( ! empty( $this->label ) ) { ?>
				<label class="customize-control-title"><?php echo esc_html( $this->label ); ?></label>
			<?php } ?>

			<div class="input">
				<input type="range" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); ?> <?php $this->input_attrs(); ?> data-unit="<?php echo esc_attr( $this->unit ); ?>" value="<?php echo esc_attr( $this->value() ); ?>">
				<span class="value"><?php echo esc_attr( $this->value() ); ?><?php echo esc_attr( $this->unit ); ?></span>
			</div>

			<?php if ( ! empty( $this->description ) ) { ?>
				<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php } ?>
		</div>
		<?php
	}
}
