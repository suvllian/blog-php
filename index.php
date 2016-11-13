<?php
	include_once('./C/ConnectClient.php');
	include_once('./V/Page.php');
	include_once('./C/Page.php');
	$Worker = new ConnectClient();
	$sql = 'select * from pages';
	$res = $Worker->query($sql);
	$length = count($res);


	$pageNow = @$_GET['pageNow'];
	if (!$pageNow) {
		$pageNow = 1;
	}

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
	<link rel="stylesheet" type="text/css" href="style/stylesheets/index.css">
	<link rel="stylesheet" type="text/css" href="style/stylesheets/commen.css">
	<link rel="Bookmark" href="favicon.ico" />
	<link rel="Shortcut Icon" href="favicon.ico" />
</head>
<body>
<?php
	include_once('header.php');
?>

<!-- Section Begin -->
<section  class="container">
	<?php
		include_once('nav.php');
	?>
	<div class="row">
		<div class="col-md-8">
			
	<?php
		$link = @$_GET["topic"];
		if($link==NULL||$link=="index"){
			require("V/main.php");
			echo $page->getPageHTML("index.php","","&topic=index");
		}elseif($link=="windows"){
			$windows = new Page('Windows');
			$windows->getHead();
			$windows->getData();
		}elseif($link=="js"){
			$js = new Page('前端开发');
			$js->getHead();
			$js->getData();
		}elseif($link=="websec"){
			$websec = new Page('Web安全');
			$websec->getHead();
			$websec->getData();
		}elseif($link=="handle"){
			$handle = new Page('后端开发');
			$handle->getHead();
			$handle->getData();
		}elseif($link=="life"){
			$life = new Page('生活');
			$life->getHead();
			$life->getData();
		}else{
			require("V/main.php");
		}
	?>
		</div>

		<div class="col-md-4 right">
			<div class="link">
				<p class="text-center">聊点其他的</p>
			</div>
			<div class="rows thumbnail">
				<img src="images/leftTop.jpg">
			</div>

			<div class="rows">
				<a href="books.php"><h3>书单</h3></a>
				<a href="books.php"><div class="col-md-6">
					<div class="thumbnail">
						<img src="images/books/yiju.jpg">
					</div>
				</div></a>
				<a href="books.php"><div class="col-md-6">
					<div class="thumbnail">
						<img src="images/books/santi.jpg">
					</div>
				</div></a>
			</div>

			<div class="rows">
				<a href="#"><h3>在路上</h3></a>
				<a href="#"><div class="col-md-12">
					<div class="thumbnail">
						<img src="images/guanxiang.jpg">
					</div>
				</div></a>

				<a href="#"><div class="col-md-12">
					<div class="thumbnail">
						<img src="images/beijing.jpg">
					</div>
				</div></a>
			</div>

		</div>
	</div>
</section>
<!-- Section End -->

<!-- Footer Begin -->
<footer>
	<p class="text-center">Copyright © 2016 .瓦尔登湖畔一棵松 All rights reserved.备案号：陕IPC备16014072号</p>
</footer>
<!-- Footer End -->
</body>
<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</html>