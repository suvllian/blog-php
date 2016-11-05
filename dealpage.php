<?php
	include_once('./C/ConnectClient.php');
	$Worker = new ConnectClient();

	$topic = $_POST['topic'];
	$time = $_POST['time'];
	$title = $_POST['title'];
	$image = $_POST['image'];
	$short = $_POST['short'];
	$content = $_POST['content'];

	$sql = "insert into pages(pTopic,pTime,pTitle,pImage,pShort,pContent) values('$topic','$time','$title','$image','$short','$content')";
	$res = $Worker->IDAsql($sql);
	if($res){
		echo "success";
	}else{
		echo "fail";
	}

?>
