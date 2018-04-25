<?php 
	/*http://www.boke8.net 博客吧模板*/
	if(isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die('please do not load this page directly. Thanks!');
	if ( post_password_required() ) {
?>
<section class="post_section post_comments">
	<div class="post_section_title">
		<h3><i class="icon-comment"></i>网友评论</h3>
	</div>
	<ol>
		<li>
			<p>请输入密码再查看评论内容.</p>
		</li>						
	</ol>
</section>
<?php return; } ?>
<?php if ( have_comments() ) { ?>
<section class="post_section post_comments">
	<div class="post_section_title">
		<h3><i class="icon-comment"></i>网友评论</h3>
	</div>
	<ol>		
		<?php wp_list_comments('type=comment&callback=boke8_comment');?>
		<?php
			if (get_option('page_comments')) {
				$comment_pages = paginate_comments_links('echo=0');
				if ($comment_pages) {
					echo '<div class="pagenavi">';
					echo $comment_pages;
					echo '</div>';
				}
			}
		?>
	</ol>
</section>
<?php }?>
<?php if (comments_open() ) : ?>			
<section class="post_section post_comments">
	<div class="post_section_title">
		<h3><i class="icon-edit"></i>我要评论</h3>
	</div>
	<div id="respond">
		<div class="warning">
			<?php cancel_comment_reply_link(); ?>
		</div>
		<?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
		<div class="warning">你必须 <a href="<?php echo wp_login_url( get_permalink() ); ?>">登录</a> 才能发表评论！</div>
		<?php else : ?>
		<form id="commentform" name="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">			
			<?php if(is_user_logged_in()) :?>
			<div class="warning">您已登录：<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. 点击 <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出登录">退出</a> 登录</div>
			<?php else : ?>
			<p>
				<label for="author">昵称：<i>*</i></label>
				<input type="text" name="author" id="author" class="text" value="<?php echo $comment_author; ?>" tabindex="1"/>
			</p>
			<p>
				<label for="email">邮箱：<i>*</i></label>
				<input type="text" name="email" class="text" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2"/>
			</p>
			<p>
				<label for="url">网址：</label>
				<input type="text" name="url" class="text" value="<?php echo $comment_author_url; ?>" tabindex="3"/>
			</p>
			<?php endif; ?>			
			<p>
				<textarea name="comment" id="comment" tabindex="4"></textarea>
			</p>		
			<p class="submit_btn">
				<input type="submit" name="submit" class="submit" value="提交" tabindex="5"/>
			</p>			
			<?php comment_id_fields(); ?>
			<?php do_action('comment_form',$post->ID);?>
		</form>
		<?php endif; ?>
	</div>
</section>
<?php endif;?>