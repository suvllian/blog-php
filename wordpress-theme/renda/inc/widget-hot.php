<?php
class leonhere_hot_post_list extends WP_Widget {
	function leonhere_hot_post_list(){
		$widget_des = array('description' => '浏览最多的文章');
		parent::__construct('leonhere_hot_post_list',$name='热门文章',$widget_des);
	}
	function form($instance){
		$instance = wp_parse_args((array)$instance,array('title'=>'热门文章','showPosts'=>10));
		$title = htmlspecialchars($instance['title']);		
		$showPosts = htmlspecialchars($instance['showPosts']);
		echo '<p style="text-align:left;"><label for="'.$this->get_field_name('title').'">中文标题:<input style="width:200px;" id="'.$this->get_field_id('title').'" name="'.$this->get_field_name('title').'" type="text" value="'.$title.'" /></label></p>';
		echo '<p style="text-align:left;"><label for="'.$this->get_field_name('showPosts').'">文章数量:<input style="width:200px;" id="'.$this->get_field_id('showPosts').'" name="'.$this->get_field_name('showPosts').'" type="text" value="'.$showPosts.'" /></label></p>';
	}
	function update($new_instance,$old_instance){
		$instance = $old_instance;
		$instance['title'] = strip_tags(stripslashes($new_instance['title']));		
		$instance['showPosts'] = strip_tags(stripslashes($new_instance['showPosts']));
		return $instance;
	}
	function the_hot_posts($args = ''){
		$default = array('meta_key' => 'views','orderby' => 'meta_value_num','order' => DESC,'showPosts'=>10);
		$r = wp_parse_args($args,$default);
		extract($r);
		$hot_query = new WP_Query("showposts=$showPosts&orderby=desc&meta_key=views&orderby=meta_value_num");		
		if($hot_query->have_posts()){
			echo '<div class="widget-container">';
			while($hot_query->have_posts()){
				$hot_query->the_post();
				echo '<article class="widget-post">';
				echo '<div class="post-image">';
				get_template_part('inc/thumbnail');
				echo '</div><div class="post-body">
					<h2><a href="'.get_permalink().'" title="'.get_the_title().'" target="_blank">'.get_the_title().'</a></h2>
					<div class="post-meta"><span><i class="fa fa-clock-o"></i>'.get_the_time('Y-n-j').'</span><span><i class="fa fa-eye"></i> '.getPostViews(get_the_ID()).'</span></div>
				</div>';				
				echo '</article>';
			}
			echo '</div>';
		}
		wp_reset_query();
	}
	function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? __('热门文章','leonhere') : $instance['title']);
		$title = $title;		
		$showPosts = empty($instance['showPosts']) ? 10 : $instance['showPosts'];
		echo $before_widget;
		if( $title ) echo $before_title . $title . $after_title;
		self::the_hot_posts("showPosts=$showPosts");
		echo $after_widget;
	}
}
register_widget('leonhere_hot_post_list');
?>