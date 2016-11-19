<?php
	$page = new Paging($pageNow,4,"pages","order by pId desc");
	$res = $page->getArrayList();
?>
<div class="top">
	<div class="row topblock pagetopic">
		<p>主页</p>
	</div>
	<div class="row topblock ">
		<p><img src="./V/images/class.png" class="text-left"><span>2016</span></p>
	</div>
</div>

<div class="row">
	<?php
		foreach ($res as $key=>$val){
	?>
	<a href="article.php?id=<?php echo $val["pId"] ?>">
		<article class="col-md-6">
			<div class="thumbnail noborder">
				<img src="<?php echo $val["pImage"] ?>">
				<div class="image-content">
					<h3>Passion Suvllian</h3>
					<p><?php echo $val["pTitle"] ?></p>
				</div>
			</div>
			<div class="caption">
				<span class="topic"><?php echo $val["pTopic"] ?></span>
				<span class="time"><?php echo $val["pTime"] ?></span>
				<h3 class="title"><?php echo $val["pTitle"] ?></h3>
				<p class="content"><?php echo $val["pShort"] ?></p>
			</div>
		</article>
	</a>
	<?php } ?>	
</div>
