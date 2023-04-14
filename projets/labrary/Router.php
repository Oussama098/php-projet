<?php 
include('application/controllers/ProjetController.php');
include('application/controllers/TaskController.php');
class Router{
	public function __construct(){
	
	}
	public function run($params){
		if(isset($params[0]) and file_exists('application/controllers/'.$params[0].'.php')){
			$controller= new $params[0]();
			if(isset($params[1]) and method_exists($controller,$params[1])){
					if(isset($params[2])){
						$controller->{$params[1]}($params[2]);
					}else{
						$controller->{$params[1]}();
					}
			}else{
				$controller->index();
			}
		}else{
		echo 'le controlleur '.$params[0] .' nexiste pas';

		}
	}
}
?>