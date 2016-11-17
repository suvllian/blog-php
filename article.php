<?php
	include_once('./C/ConnectClient.php');
	$Worker = new ConnectClient();
	$id = $_GET['id'];
	$sql = "select * from pages where pId=$id";
	$res = $Worker->query($sql);
	foreach ($res as $key=>$val){
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $val["pTitle"] ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<meta http-equiv="x-ua-compatible" content="IE=Edge" />
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./V/style/stylesheets/index.css">
	<link rel="stylesheet" type="text/css" href="./V/style/stylesheets/commen.css">
	<link rel="stylesheet" type="text/css" href="./V/style/stylesheets/page.css">
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
		<div class="col-md-8">
			<div class="top">
				<div class="row topblock pagetopic">
					<p><?php echo $val["pTitle"] ?></p>
				</div>
			</div>
			<div class="row">
				<div class="title">
					<p><?php echo $val["pTitle"] ?></p>
				</div>
				<div class="time">
					<p>作者：Suvllian&nbsp;&nbsp;发表于：<?php echo $val["pTime"] ?></p>
				</div>
				<div class="thumbnail noborder">
					<img src="<?php echo $val["pImage"] ?>">
				</div>
				<div class="main">
					<?php echo $val["pContent"] ?>
				</div>
			</div>
		</div>

		<div class="col-md-4 right">
			<div class="link">
				<p class="text-center">聊点其他的</p>
			</div>
			<div class="rows thumbnail">
				<img src="./V/images/leftTop.jpg">
			</div>

			<div class="rows">
				<a href="books.php"><h3>书单</h3></a>
				<a href="books.php"><div class="col-md-6">
					<div class="thumbnail">
						<img src="./V/images/books/yiju.jpg">
					</div>
				</div></a>
				<a href="books.php"><div class="col-md-6">
					<div class="thumbnail">
						<img src="./V/images/books/santi.jpg">
					</div>
				</div></a>
			</div>

			<div class="rows">
				<!-- <a href="#"><h3>在路上</h3></a>
				<a href="#"><div class="col-md-12">
					<div class="thumbnail">
						<img src="images/guanxiang.jpg">
					</div>
				</div></a>

				<a href="#"><div class="col-md-12">
					<div class="thumbnail">
						<img src="images/beijing.jpg">
					</div>
				</div></a> -->
			</div>
		</div>
	</div>
</section>
<!-- Section End -->
<?php  } ?>
<!-- Footer Begin -->
<footer>
	<p class="text-center">Copyright © 2016 .瓦尔登湖畔一棵松 All rights reserved.备案号：陕IPC备16014072号</p>
</footer>
<!-- Footer End -->
</body>
<script type="text/javascript" src="./V/js/jquery-3.1.0.js"></script>
<script type="text/javascript" src="./V/js/index.js"></script>
</html>