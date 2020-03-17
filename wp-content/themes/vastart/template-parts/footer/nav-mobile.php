<?php
/**
 * The template for displaying mobile navigation.
 *
 * @package Vastart
 * @since 1.0.0
 */

$mobile_menu_args = array(
	'theme_location' => 'main_menu',
	'menu_id'        => 'mobile_navigation',
	'menu_class'     => 'main-menu nav navbar-nav',
	'container'      => false,
	'fallback_cb'    => 'vastart_fallback_menu_mobile',
	'walker'         => new Vastart_Mobile_Nav_Walker(),
);

?>

<!-- Modal -->
<div class="modal fade uf-mobile-nav-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
	<div class="modal-dialog uf-mobile-nav-modal-dialog" role="document">
		<div class="modal-content uf-mobile-nav-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<i class="icon-x"></i>
			</button>
			<div class="modal-body uf-mobile-nav-body">
				<?php get_template_part( 'template-parts/footer/topbar-mobile' ); ?>
				<?php wp_nav_menu( $mobile_menu_args ); ?>
			</div>
		</div>
	</div>
</div>
