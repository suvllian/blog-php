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
		$pageResult = $Worker->query($sql);
		foreach ($pageResult as $key=>$val){
			$string ="<a href=\"article.php?id=".$val["pId"]."\"><article class=\"col-md-6\"><div class=\"thumbnail noborder\"><img src=\"".$val["pImage"]."\"></div><div class=\"caption\"><span class=\"topic\">".$val["pTopic"] ."</span><span class=\"time\">".$val["pTime"]."</span><h3 class=\"title\">".$val["pTitle"]."</h3><p class=\"content\">".$val["pShort"]."</p></div></article></a>";	
			$this->content = $this->content.$string;	
		}		
		
		echo "<div class=\"row\">".$this->content."</div><style>#guide{display:none;}</style>";
	}
}