<?php get_header();?>
<main class="row">
	<div class="col-md-12">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post();?>
		<article class="blog-post">
			<div class="blog-post-body">
				<h2><?php the_title();?></h2>
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
</main>
<?php get_footer();?>