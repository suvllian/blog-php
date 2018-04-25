<aside class="col-md-4 sidebar-gutter">
	<div class="sidebar-widget">
		<!-- <h3 class="sidebar-title">一颗松</h3> -->
		<div class="widget-container widget-about">
			<a href="post.html"><img src="<?php bloginfo('template_url');?>/images/author.jpg" alt=""></a>
			<p>Salvation lies within.</p>
		</div>
	</div>	
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar')) : endif;?>	
</aside>