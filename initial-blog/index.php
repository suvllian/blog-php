<?php
	include_once('./C/ConnectClient.php');
	include_once('./C/Page.php');
	
	$pageNow = @$_GET['pageNow']-0;
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
			
	<?php
		require("V/main.php");
		echo $page->getPageHTML("index.php","","");
	?>
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
<script type="text/javascript" src="./V/js/jquery-3.1.0.js"></script>
<script type="text/javascript" src="./V/js/index.js"></script>
</html>