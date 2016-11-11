<?php
include_once('./C/ConnectClient.php');

class Page
{
	private $templete1;
	private $templete2;

	private $topic;
	private $content;

	public function __construct($topic){
		$this->topic = $topic;
	}

	public function getHead(){
		$this->templete1 = "<div class=\"top\"><div class=\"row topblock pagetopic\"><p>";
		$this->templete2 = "</p></div><div class=\"row topblock \"><p><img src=\"images/class.png\" class=\"text-left\"><span>2016</span></p></div></div>";

		echo $this->templete1.$this->topic.$this->templete2;
	}

	public function getData(){
		$sql = 'select * from pages where pTopic="'.$this->topic.'" order by pId desc';
		$Worker = new ConnectClient();
		$res = $Worker->query($sql);
		$length = count($res);	

		for($i=0;$i<$length;$i++){
			$string ="<a href=\"page.php?id=".$res[$i][0]."\"><article class=\"col-md-6\"><div class=\"thumbnail noborder\"><img src=\"".$res[$i][4]."\"></div><div class=\"caption\"><span class=\"topic\">".$res[$i][1] ."</span><span class=\"time\">".$res[$i][2]."</span><h3 class=\"title\">".$res[$i][3]."</h3><p class=\"content\">".$res[$i][5]."</p></div></article></a>";	
			$this->content = $this->content.$string;	
		}		
		
		echo "<div class=\"row\">".$this->content."</div>";
	}
}