<?php
/*
Theme Name: Build Lite
Theme URI: http://www.sktthemes.net/shop/skt-build-lite/
Author: SKT Themes
Author URI: http://www.sktthemes.net
Description: Build Lite is a simple responsive and adaptable multipurpose WordPress theme with focus more on construction, industrial, commercial, corporate, and business websites. However it can be used for personal and blogging purposes. Also since its compatible with Nextgen gallery can be used for portfolio and photography websites. It is also compatible with WooCommerce and Contact Form 7 and Yoast SEO. Demo Link: http://sktthemesdemo.net/construction/

Version: 1.6
License: GNU General Public License
License URI: license.txt
Text Domain: build-lite
Tags: yellow,black,gray,white,dark,one-column,two-columns,right-sidebar,responsive-layout,custom-background,custom-colors,custom-menu,sticky-post,theme-options,threaded-comments

Build Lite WordPress Theme has been created by SKT Themes(sktthemes.net), 2015.
Build Lite WordPress Theme is released under the terms of GNU GPL
*/
if ( post_password_required() )
	return;
?>
<div class="product-border"></div>

	<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h4 class="comments-title">
			<?php
				printf( _nx( 'Có một nhận xét &ldquo;%2$s&rdquo;', 'Có %1$s nhận xét về &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'build-lite' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h4>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_attr_e( 'Comment navigation', 'build-lite' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_attr_e( '&larr; Older Comments', 'build-lite' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_attr_e( 'Newer Comments &rarr;', 'build-lite' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use build_lite_comment() to format the comments.
				 * If you want to override this in a child theme, then you can
				 * define build_lite_comment() and that will be used instead.
				 * See build_lite_comment() in inc/template-tags.php for more.
				 */
				wp_list_comments( array( 'callback' => 'build_lite_comment' ) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_attr_e( 'Comment navigation', 'build-lite' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_attr_e( '&larr; Older Comments', 'build-lite' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_attr_e( 'Newer Comments &rarr;', 'build-lite' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php echo esc_attr_e( 'Comments are closed.', 'build-lite' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
