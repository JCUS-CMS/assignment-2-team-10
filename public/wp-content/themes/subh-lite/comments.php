<?php
 
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
 
if ( post_password_required() ) { ?>
	<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments','subh-lite'); ?>.</p>
<?php return; } ?>
<!-- You can start editing here. -->
<?php if ( have_comments() ) : ?>
	<div id="comments">
		<div class="total-comments"><?php comments_number(__('No Comments','subh-lite'), __('One Comment','subh-lite'),  __('% Comments','subh-lite') );?></div>
		<ol class="commentlist">
			<div class="navigation">
				<div class="alignleft"><?php previous_comments_link() ?></div>
				<div class="alignright"><?php next_comments_link() ?></div>
			</div>
			<?php wp_list_comments('type=comment&callback=subh_comment'); ?>
			<div class="navigation bottomnav">
				<div class="alignleft"><?php previous_comments_link() ?></div>
				<div class="alignright"><?php next_comments_link() ?></div>
			</div>
		</ol>
	</div>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"></p>
	<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
	<div class="bordersperator2"></div>
	<div id="commentsAdd">
		<div id="respond" class="box m-t-6">
			<?php global $aria_req; $comments_args = array(
				'title_reply'=>'<h4><span>'.__('Add a Comment','subh-lite').'</span></h4></h4>',
				'comment_notes_after' => '',
				'label_submit' => __('Add Comment','subh-lite'),
				'comment_field' => '<div class="form-group comment-form-comment col-lg-12 col-md-12">' . '<label for="comment">'.__('Comment:','subh-lite').'<span class="required">*</span></label></br>
				<textarea id="comment" name="comment" cols="45" rows="5" aria-required="true" class="form-control" required></textarea></div>',
				'fields' => apply_filters( 'comment_form_default_fields',
					array(
					'author' => '<div class="form-group comment-form-author col-lg-4 col-md-4 float-left">' . '<label for="author">' . __( 'Name', 'subh-lite' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .'<input class="form-control" required id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
						
					'email' => '<div class="form-group comment-form-author col-lg-4 col-md-4 float-left">' . '<label for="email">' . __( 'Email Address', 'subh-lite' ) . ':<span class="required">*</span></label>' 
						. ( $req ? '' : '' ) . '<input class="form-control" id="email" name="email" required type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
						
					'url' => '<div class="form-group comment-form-author col-lg-4 col-md-4 float-left">' . '<label for="url">' . __( 'Website', 'subh-lite' ) . ':</label>' . 
			'<input class="form-control" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>' 
			))
			); 
			comment_form($comments_args); ?>
		</div>
	</div>
<?php endif; // if you delete this the sky will fall on your head ?>