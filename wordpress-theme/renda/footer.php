</div>
<footer class="footer">
	<!-- <div class="footer-socials">
		<?php if(of_get_option('qq')){?>
		<a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo of_get_option('qq');?>&site=<?php bloginfo('url');?>&menu=yes" target="_blank"><i class="fa fa-qq"></i></a>
		<?php } ?>
		<?php if(of_get_option('weibo')){?>
		<a rel="nofollow" href="<?php echo of_get_option('weibo');?>" target="_blank"><i class="fa fa-weibo"></i></a>
		<?php } ?>
		<?php if(of_get_option('weixin')){?>
		<a rel="nofollow" href="<?php echo of_get_option('weixin');?>" target="_blank"><i class="fa fa-wechat"></i></a>
		<?php } ?>
		<?php if(of_get_option('twitter')){?>
		<a rel="nofollow" href="<?php echo of_get_option('twitter');?>" target="_blank"><i class="fa fa-twitter"></i></a>
		<?php } ?>
		<?php if(of_get_option('renren')){?>
		<a rel="nofollow" href="<?php echo of_get_option('renren');?>" target="_blank"><i class="fa fa-renren"></i></a>
		<?php } ?>
		<?php if(of_get_option('facebook')){?>
		<a rel="nofollow" href="<?php echo of_get_option('facebook');?>" target="_blank"><i class="fa fa-facebook"></i></a>
		<?php } ?>
	</div> -->
	<div class="footer-bottom">
		<i class="fa fa-copyright"></i> <?php copyrightDate();?> <a href="<?php bloginfo('home');?>" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a> All Rights Reserved
	</div>
</footer>
<script src="<?php bloginfo('template_url');?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.bxslider.js"></script>
<script src="<?php bloginfo('template_url');?>/js/mooz.scripts.min.js"></script>
<?php wp_footer();?>
</body>
</html>