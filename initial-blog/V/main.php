<?php
	$page = new Paging($pageNow,4,"article","WHERE aClass>0 ORDER BY aDate DESC");
	$res = $page->getArrayList();
?>
<div class="top">
	<div class="row topblock">
		<p><i class="fa fa-home"></i><span>主页</span></p>
	</div>
	<div class="row topblock ">
		<p><i class="fa fa-tv"></i><span>Wow</span></p>
	</div>
</div>

<div class="row">
	<?php
		foreach ($res as $key=>$val){
	?>
	<a href="article.php?id=<?php echo $val["aId"] ?>">
		<article class="col-md-6">
			<div class="thumbnail noborder">
				<img src="<?php echo $val["aImage"] ?>">
			</div>
			<div class="caption">
				<span class="topic"><?php echo $val["aTopic"] ?></span>
				<span class="time"><?php echo date("Y-m-d",$val["aDate"]*100) ?></span>
				<div class="content"><?php echo $val["aIntro"] ?></div>
			</div>
		</article>
	</a>
	<?php } ?>	
</div>
