<?php 
function optionsframework_option_name() {
	return 'options-framework-theme';
}
function optionsframework_options() {
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = '选择一个页面:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}
	$imagepath =  get_template_directory_uri() . '/images/';
	$options = array();	
	$options[] = array(
		'name' => __( '基础设置', 'theme-textdomain' ),
		'type' => 'heading'
	);	
	$options[] = array(
		'name' => __( '轮播图文章', 'theme-textdomain' ),
		'desc' => __( '首页轮播图要调用的文章id', 'theme-textdomain' ),
		'id' => 'slides',
		'std' => '',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'qq', 'theme-textdomain' ),
		'desc' => __( 'qq号码', 'theme-textdomain' ),
		'id' => 'qq',
		'std' => '',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( '微博', 'theme-textdomain' ),
		'desc' => __( '新浪微博', 'theme-textdomain' ),
		'id' => 'weibo',
		'std' => '',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( '微信', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'std' => '',
		'id' => 'weixin',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'Twitter', 'theme-textdomain' ),
		'desc' => __( '推特地址', 'theme-textdomain' ),
		'id' => 'twitter',
		'std' => '',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( '人人网', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'renren',
		'std' => '',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Facebook', 'theme-textdomain' ),
		'desc' => __( '脸书', 'theme-textdomain' ),
		'id' => 'facebook',
		'std' => '',
		'type' => 'text'
	);
	return $options;
}