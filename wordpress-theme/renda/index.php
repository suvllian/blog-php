<?php get_header();?>
<?php 
if(of_get_option('slides')){
$slides = of_get_option('slides');
?>
<section class="main-slider">
	<?php 
	$posts = get_posts("numberposts=-1&post_type=any&include=".$slides);
	if($posts) :
	?>
	<ul class="bxslider">
		<?php foreach( $posts as $post ) : 
	setup_postdata( $post ); ?>
		<li>
			<div class="slider-item">
				<?php get_template_part('inc/thumbnail');?>
				<h2><a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title();?>"><?php the_title();?></a></h2>
			</div>
		</li>
		<?php wp_reset_postdata(); endforeach;?>
	</ul>
	<?php endif; ?>
</section>
<?php } ?>
<section class="row">
	<div class="col-md-8">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post();?>
		<article class="blog-post">
			<div class="blog-post-image">
				<?php get_template_part('inc/thumbnail');?>
			</div>
			<div class="blog-post-body">
				<h2><a title="<?php the_title();?>" href="<?php the_permalink(); ?>" target="_blank"><?php the_title();?></a></h2>
				<div class="post-meta">
					<span>by <?php the_author();?></span>/<span><i class="fa fa-clock-o"></i><?php the_time('Y-n-j'); ?></span>/<span><i class="fa fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?></span>
				</div>
				<p><?php echo wp_trim_words($post->post_content, 250, '...'); ?></p>
				<div class="read-more"><a title="<?php the_title();?>" href="<?php the_permalink(); ?>" target="_blank">阅读全文</a></div>
			</div>
		</article>
		<?php endwhile;?>
		<?php get_template_part('include/pagenavi');?>
		<?php else : ?>
		<article class="blog-post">
			<p>内容稍后更新……</p>
		</article>
		<?php endif;?>
	</div>
	<?php get_sidebar();?>
</section>

<?php get_footer();?>