<?php
/**
 * Pre Register 1-Click Support
 *
 * @package Vastart Addon
 */

$sendy_nonce = wp_create_nonce( 'sendy-nonce' );
?>

<div class="pre-register">
  <div><?php echo esc_html__( 'First, you need to verify your purchase of the theme before you can use the feature.', 'vastart-addon' ); ?>
  </div>
  <div><?php echo esc_html__( 'Don\'t worry, it will only takes a few moments :)', 'vastart-addon' ); ?>
  </div><br />
  
  <input type="checkbox" name="check_subscribe" id="check_subscribe" value="yes" checked="checked"  /><?php echo esc_html__( 'Subscribe our newsletter', 'vastart-addon' ); ?><br /><br />
  <a href="<?php echo esc_url( DETHEME_VERIFY_URL ); ?>" target="" id="verify-envato" class="button button-primary verify-button"><?php echo esc_html__( 'Verify Your ENVATO Account', 'vastart-addon' ); ?></a><br />
  
<script>
	jQuery(document).ready(function($) {
	jQuery('#verify-envato').on("click", function( event ) {
	  event.preventDefault();

	  var data = {
	  'action': 'subscribe_sendy',
	  'mode': 'mode-subscribe',
	  'security': '<?php echo esc_js( $sendy_nonce ); ?>',
	  'check_subscribe': jQuery( '#check_subscribe' ).prop( "checked" )
	  };

	  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
	  jQuery.post(ajaxurl, data, function(response) {
		window.location.href = jQuery('#verify-envato').prop('href');
	  });
	});    
  });
</script>
