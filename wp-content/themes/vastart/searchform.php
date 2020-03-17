<?php
/**
 * Template for displaying search forms
 *
 * @package Vastart
 * @since 1.0.0
 * @version 1.0.0
 */

?>

<?php $unique_id = uniqid( 'search-form-' ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="uf-input-group">
		<input type="search" id="<?php echo esc_attr( $unique_id ); ?>" class="uf-group-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'vastart' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		<button type="submit" class="uf-group-btn-icon"><i class="icon-search"></i></button>
	</div>
</form>
