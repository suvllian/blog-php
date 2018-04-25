<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<title><?php if (is_home()){bloginfo('name'); echo '_'; bloginfo('description');}else{ wp_title('',true); echo '_'; bloginfo('name'); } ?></title>
<link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/font-awesome.min.css">
<link href="<?php bloginfo('template_url');?>/css/jquery.bxslider.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<?php if ( is_singular() ) wp_enqueue_script('comment-reply');?>
<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<!-- <nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<?php wp_nav_menu( array('theme_location' =>'header-menu','container' => '','container_class' => '','menu_class' => '','depth' => 1,'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>')); ?>
		</div>
	</div>
</nav> -->

<div class="container">
<header>
	<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
		<h2 class="demon-title">Demon</h2>
		<p class="demon-name">瓦尔登湖畔一颗松</p>
	</a>
</header>