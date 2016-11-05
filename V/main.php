<?php
	include_once('./C/ConnectClient.php');
	$Worker = new ConnectClient();
	$sql = 'select * from pages order by pId desc';
	$res = $Worker->query($sql);
	$length = count($res);
?>
<div class="top">
	<div class="row topblock pagetopic">
		<p>主页</p>
	</div>
	<div class="row topblock ">
		<p><img src="images/class.png" class="text-left"><span>2016</span></p>
	</div>
</div>

<div class="row">
	<?php
		for($i=0;$i<$length;$i++){
	?>
	<a href="page.php?id=<?php echo $res[$i][0] ?>">
		<article class="col-md-6">
			<div class="thumbnail noborder">
				<img src="<?php echo $res[$i][4] ?>">
			</div>
			<div class="caption">
				<span class="topic"><?php echo $res[$i][1] ?></span>
				<span class="time"><?php echo $res[$i][2] ?></span>
				<h3 class="title"><?php echo $res[$i][3] ?></h3>
				<p class="content"><?php echo $res[$i][5] ?></p>
			</div>
		</article>
	</a>
	<?php } ?>			
</div>
