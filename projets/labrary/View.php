<?php 
class View{
	private $controller;
	private $action;
	private $file;
	private $data;
	public $content;
	public $title;
	public function __construct($controller,$action){
		$this->controller=$controller;
		$this->action= $action;
		$this->file="application/views/".$controller.'/'.$action.'.php';
		$data= array();
	}
	public function render(){
	ob_start();
	include($this->file);
	$this->content=ob_flush();
	
	
	include('application/layout/layout1.php');
		
	}
	public function __set($attribute, $value){
		$this->data[$attribute]=$value;
	}
	public function __get($attribute){
		if(array_key_exists($attribute,$this->data) and isset($this->data[$attribute])){
		
			return $this->data[$attribute];
		}
	}
}
?>