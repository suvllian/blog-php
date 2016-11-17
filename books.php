<?php
	include_once('./C/ConnectClient.php');
	include_once('./C/Page.php');
	$Worker = new ConnectClient();

	$pageNow = @$_GET['pageNow'];
	if (!$pageNow) {
		$pageNow = 1;
	}
	$page = new Paging($pageNow,16,"books","order by bId","bClass,bTime,bName,bTopic,bImage");
	$res = $page->getArrayList();
?>

<!DOCTYPE html>
<html>
<head>
	<title>瓦尔登湖畔一棵松</title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./V/style/stylesheets/commen.css">
	<link rel="stylesheet" type="text/css" href="./V/style/stylesheets/books.css">
	<link rel="Bookmark" href="favicon.ico" />
	<link rel="Shortcut Icon" href="favicon.ico" />
</head>
<body>
<?php
	include_once('./V/header.php');
?>

<!-- Section Begin -->
<section  class="container">
	<?php
		include_once('./V/nav.php');
	?>
	<div class="row">
		<div class="top">
			<div class="row topblock pagetopic">
				<p>书单</p>
			</div>
			<div class="row topblock ">
				<p><img src="./V/images/class.png" class="text-left"><span>2016</span></p>
			</div>
		</div>
	<?php
		foreach ($res as $key=>$val){
	?>

		<a href="">
			<article class="col-md-3">
				<div class="thumbnail noborder">
					<img src="./V/images/books/<?php echo $val["bImage"] ?>.jpg">
				</div>
				<div class="caption">
					<span class="topic"><?php echo $val["bClass"] ?></span>
					<span class="time"><?php echo $val["bTime"] ?></span>
					<h3 class="title"><?php echo $val["bName"] ?></h3>
					<p class="content">
					<?php 
						$content = $val["bTopic"];
						$strLen = strlen($content) ;
						if($strLen>112){
							$str = substr($content,0,112);
							echo $str."......";
						}else{
							echo $content;
						}
					?></p>
				</div>
			</article>
		</a>

	<?php } ?>
	</div>

	<?php
		echo $page->getPageHTML("books.php","","");
	?>
</section>
<!-- Section End -->

<!-- Footer Begin -->
<footer>
	<p class="text-center">Copyright © 2016 .瓦尔登湖畔一棵松 All rights reserved.备案号：陕IPC备16014072号</p>
</footer>
<!-- Footer End -->
</body>
<script type="text/javascript" src="./V/js/jquery-3.1.0.js"></script>
<script type="text/javascript" src="./V/js/index.js"></script>
</html>