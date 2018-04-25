<?php get_header();?>
<section class="row">
	<div class="col-md-8">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post();?>
		<article class="blog-post">			
			<div class="blog-post-body">
				<h2><?php the_title();?></h2>
				<div class="post-meta">
					<span>by <?php the_author();?></span>/<span><i class="fa fa-clock-o"></i><?php the_time('Y-n-j'); ?></span>/<span><i class="fa fa-comment-o"></i> <?php setPostViews(get_the_ID()); echo getPostViews(get_the_ID()); ?></span>
				</div>
				<div class="blog-post-text">
					<?php the_content();?>
				</div>
				<?php comments_template();?>
			</div>
		</article>
		<?php endwhile;?>
		<?php else : ?>
		<article class="blog-post">
			<p>内容稍后更新……</p>
		</article>
		<?php endif;?>
	</div>
	<?php get_sidebar();?>
</section>
<?php get_footer();?>