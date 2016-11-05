<?php
include_once('UniversalConnect.php');
class ConnectClient
{
	private $HookUp;
	public function __construct()
	{
		$this->HookUp = UniversalConnect::doConnect();
	}
	public function query($sql)
	{
		if($result = $this->HookUp->query($sql))
		{
			$row = $result->fetch_all(MYSQLI_NUM);
			return $row;
		}
		else
		{
			echo "Failed".$this->HookUp->error;
			exit();
		}
		$result->close();
	}
	public function IDAsql($sql)
	{
		if($result = $this->HookUp->query($sql))
		{
			return true;
		}
		else
		{
			return false;
			exit();
		}
		$result->close();
	}
}
?>