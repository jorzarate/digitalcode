<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Vastart
 * @since 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-area" id="comments">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( 1 === $comments_number ) {
				printf(
					/* translators: %s: post title */
					esc_html_x( 'There is comment', 'comments title', 'vastart' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					esc_html(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'There is %1$s comment',
							'There are %1$s comments',
							$comments_number,
							'',
							'vastart'
						)
					),
					number_format_i18n( $comments_number ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="comment-navigation" id="comment-nav-above">
				<h1 class="screen-reader-text"><?php esc_html__( 'Comment navigation', 'vastart' ); ?></h1>
				<?php if ( get_previous_comments_link() ) : ?>
					<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'vastart' ) ); ?></div>
				<?php endif; ?>
				<?php if ( get_next_comments_link() ) : ?>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'vastart' ) ); ?></div>
				<?php endif; ?>
			</nav><!-- #comment-nav-above -->
		<?php endif; ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'callback'   => 'vastart_comment',
				)
			);

			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="comment-navigation" id="comment-nav-below">
				<h1 class="screen-reader-text"><?php esc_html__( 'Comment navigation', 'vastart' ); ?></h1>
				<?php if ( get_previous_comments_link() ) : ?>
					<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'vastart' ) ); ?></div>
				<?php endif; ?>
				<?php if ( get_next_comments_link() ) : ?>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'vastart' ) ); ?></div>
				<?php endif; ?>
			</nav><!-- #comment-nav-below -->
		<?php endif; ?>

	<?php endif; ?>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && '0' !== get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php esc_html_e( 'The comments are closed.', 'vastart' ); ?></p>

	<?php endif; ?>

	<?php
	// Render comments form.
	if ( ! is_user_logged_in() ) {
		$comment_notes_before = '';
		$comment_notes_after  = '';
	} else {
		$comment_notes_before = '';
		$comment_notes_after  = '';
	}
	$user      = wp_get_current_user();
	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$aria_req  = ( $req ? ' aria-required=true' : '' );
	$comments_args = array(
		'id_form'              => 'commentform',
		'id_submit'            => 'submit',
		'title_reply'          => '',
		'title_reply_to'       => esc_html__( 'Leave Comment', 'vastart' ),
		'cancel_reply_link'    => esc_html__( 'Cancel Reply', 'vastart' ),
		'label_submit'         => esc_html__( 'Post Comment', 'vastart' ),
		'must_log_in'          => '<p class="must-log-in">' .
			sprintf(
				/* translators: login is necessary */
				esc_html__( 'You must be %1$slogged in%2$s to post a comment.', 'vastart' ),
				'<a href="' . esc_url( wp_login_url( apply_filters( 'vastart_the_permalink', get_permalink() ) ) ) . '">',
				'</a>'
			) . '</p>',
		'logged_in_as'         => '<p class="logged-in-as">' .
			sprintf(
				/* translators: logged in status */
				esc_html__( 'Logged in as %1$s. %2$sLog out?%3$s', 'vastart' ),
				'<a href="' . esc_url( admin_url( 'profile.php' ) ) . '">' . $user->display_name . '</a>',
				'<a href="' . esc_url( wp_logout_url( apply_filters( 'vastart_the_permalink', get_permalink() ) ) ) . '">',
				'</a>'
			) . '</p>',
		'comment_notes_before' => $comment_notes_before,
		'comment_notes_after'  => $comment_notes_after,
		'fields'               => apply_filters(
			'vastart_comment_form_default_fields', array(
				'author' =>
					'<div class="row comment-row"><div class="comment comment-form-author col-md-4"><label for="author">' . esc_html__( 'Name', 'vastart' ) . '</label>' .
					( $req ? '' : '' ) .
					'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
					'"' . esc_attr( $aria_req ) . ' /></div>',
				'email'  =>
					'<div class="comment comment-form-email col-md-4"><label for="email">' . esc_html__( 'Email', 'vastart' ) . '</label>' .
					( $req ? '' : '' ) .
					'<input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .
					'"' . esc_attr( $aria_req ) . ' /></div>',
				'url'    =>
					'<div class="comment comment-form-url col-md-4"><label for="url">' . esc_html__( 'Website', 'vastart' ) . '</label>' .
					'<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
					'" /></div></div>',
			)
		),
	);
	comment_form( $comments_args );
	?>

</div><!-- #comments -->
