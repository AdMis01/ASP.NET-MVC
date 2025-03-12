<?php

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$zdrowie_comment_count = get_comments_number();
			if ( '1' === $zdrowie_comment_count ) {
				printf(
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'zdrowie' ),
					'<span class="green">' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $zdrowie_comment_count, 'comments title', 'zdrowie' ) ),
					number_format_i18n( $zdrowie_comment_count ),
					'<span class="green">' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2>
		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>

		<?php
		the_comments_navigation();

		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'zdrowie' ); ?></p>
			<?php
		endif;

	endif;

	comment_form();
	?>

</div>


