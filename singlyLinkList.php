<?php 


class node{
	public $data;
	public $next ;
	
	public function __construct($data){
		$this->data = $data;
		$this->next  = null;
	}
}


class singlyLinkList{
	
	public $head;
	
	public function __construct(){
		$this->head = null;
	}
	
}


function insertNewNode($list, $data){
	
	$newNode = new node($data);
	
	if($list->head === null){
		$list->head = $newNode;
	}else{
		$newNode->next = $list->head;
		$list->head = $newNode;
	}
	return $list->head;
	
}


$linkList = new singlyLinkList();

$n = intval(trim(fgets(STDIN)));
for($i=0; $i < $n; $i++ ){
	$data = intval(trim(fgets(STDIN)));
	$linkList->head = insertNewNode($linkList, $data);
}

$curent = $linkList->head;
while($curent != null){
	
	echo $curent->data . PHP_EOL;
	$curent = $curent->next;
	
}


?>
