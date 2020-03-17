<?php
/**
 * Template part for displaying meta in entry post.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vastart
 * @since 1.0
 * @version 1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( is_search() ) {
	return;
}
?>

<div class="entry__meta-author">
	<div class="entry__meta-author__gravatar">
		<?php echo wp_kses_post( get_avatar( get_the_author_meta( 'user_email' ), 40 ) ); ?>
	</div>

	<div class="entry__meta-author__info" itemscope>
		<div class="meta-author" itemprop="name"><?php echo wp_kses_data( the_author_posts_link() ); ?></div>
		<div class="meta-date" itemprop="datePublished">
			<?php
			$vastart_title = get_the_title();
			if ( empty( $vastart_title ) ) {
				?>
					<a href="<?php echo esc_url( get_permalink() ); ?>"> <?php echo wp_kses_data( get_the_date() ); ?> </a>
				<?php
			} else {
				echo wp_kses_data( get_the_date() );
			}
			?>
		</div>
	</div>
</div>
