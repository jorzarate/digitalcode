<?php
/**
 * Registered 1-Click Support
 *
 * @package Vastart Addon
 */

?>

<div class="register-verified">
	<?php echo esc_html__( 'Thank you for verify your account', 'vastart-addon' ); ?>
	<?php echo esc_html( get_option( 'envato_fullname' ) ); ?>
	<?php echo esc_html( '( ' . get_option( 'envato_email' ) . ' )' ); ?>
</div>

<script>
	var emailReturnVal = '<?php echo esc_js( get_option( 'envato_email' ) ); ?>';
	localStorage.setItem("emailReturnStorage", emailReturnVal);
</script>
