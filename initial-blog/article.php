<?php
	include_once('./C/ConnectClient.php');
	$Worker = new ConnectClient();
	$id = $_GET['id']-0;
	$sql = "SELECT aContent, aDate, aImage, aTopic, aClassName FROM article,articleclass WHERE article.aClass = articleclass.aId AND article.aId = $id";
	$res = $Worker->query($sql);
	foreach ($res as $key=>$val){
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $val["aTopic"] ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<meta http-equiv="x-ua-compatible" content="IE=Edge" />
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./V/style/index.css">
	<link rel="stylesheet" type="text/css" href="https://staticfile.qnssl.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="Bookmark" href="favicon.ico" />
	<link rel="Shortcut Icon" href="favicon.ico" />
</head>
<body>

<?php
	include_once('./V/header.php');
?>

<!-- Section Begin -->
<section  class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="top">
				<div class="row topblock pagetopic">
					<p class="home"><a href="index.php"><i class="fa fa-home" style="margin-right: 0.25em;"></i><span>首页</span></a></p>
				</div>
				<div class="row topblock pagetopic">
					<p><i class="fa fa-tag"></i><span><?php echo $val["aClassName"] ?></span></p>
				</div>
			</div>
			<div class="row">
				<div class="title">
					<p><?php echo $val["aTopic"] ?></p>
				</div>
				<div class="time">
					<p>作者：Suvllian&nbsp;&nbsp;发表于：<?php echo date("Y-m-d",$val["aDate"]*100) ?></p>
				</div>
				<div class="thumbnail noborder">
					<img src="<?php echo $val["aImage"] ?>">
				</div>
				<div class="main new-style">
					<?php echo $val["aContent"] ?>
				</div>
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