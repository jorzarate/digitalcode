<?php
/**
 * Main Header Layout
 *
 * @package Vastart
 */

?>

<header id="header" class="<?php echo esc_attr( vastart_header_classes() ); ?>">
	<?php get_template_part( 'template-parts/header/navbar/topbar' ); ?>
	<?php get_template_part( 'template-parts/header/navbar/layout' ); ?>
</header>
