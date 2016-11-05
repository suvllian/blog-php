<?php
interface IConnectInfo
{
	const Host     = "localhost";
	const UserName = "root";
	const Password = "";
	const DBName   = "blog";
	
	public function doConnect();
}
?>

