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
			//$row = $result->fetch_all(MYSQLI_NUM);
	        $rows = array();
	        while ($rs = $result->fetch_assoc()){
	            $rows[] = $rs;
	        }
			return $rows;
		}
		else
		{
			echo "Failed".$this->HookUp->error;
			exit();
		}
		$result->close();
	}
	//统计查询记录数
    public function numRows($sql){
        $result = $this->HookUp->query($sql);
        $rs = $result->fetch_assoc();
        return $rs;
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