<?php
/**
 * Single Post Meta
 *
 * @package Vastart
 * @since   1.0.0
 */

$queried_object = get_query_var( 'ob' );
?>

<div class="post-meta">
	<span class="post-meta-author"><a href="<?php echo esc_url( get_author_posts_url( isset( $queried_object->post_author ) ? $queried_object->post_author : 'ID' ) ); ?>" title="<?php esc_attr_e( 'Visit Author Posts', 'vastart' ); ?>"><?php echo wp_kses_post( the_author_meta( 'display_name', isset( $queried_object->post_author ) ? $queried_object->post_author : '' ) ); ?></a></span> <?php echo esc_html__( 'on', 'vastart' ); ?> <span class="post-meta-date"><?php echo wp_kses_data( get_the_date() ); ?></span>
</div>
