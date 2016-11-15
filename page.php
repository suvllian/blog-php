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
	<link rel="stylesheet" type="text/css" href="style/stylesheets/index.css">
	<link rel="stylesheet" type="text/css" href="style/stylesheets/commen.css">
	<link rel="stylesheet" type="text/css" href="style/stylesheets/page.css">
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
<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</html>