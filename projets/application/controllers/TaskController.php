<?php
require_once(realpath(dirname(__FILE__)) . '/../../application/dao/ProjetDAO.php');
require_once(realpath(dirname(__FILE__)) . '/../../application/dao/TaskDAO.php');
require_once('labrary/View.php');
require_once('labrary/BaseController.php');

/**
 * @access public
 * @author pc
 * @package application.controllers
 */
class TaskController extends BaseController{
	private $view;
	private $projetDAO;
	private $taskDAO;
	/**
	 * @access public
	 */
	public function __construct() {
		parent::__construct();
		$this->taskDAO = new TaskDAO();
	}
	/**
	 * @access public
	 */
	public function index() {
		$this->view = new View('TaskController','index');
		$this->view->render();
	}
	/**
	 * @access public
	 */
	public function add($projetId) {
		if(isset($_POST['projetID'])){
			$projet = new Projet($_POST['projetID'],'','','');
			$projet->setId($_POST['projetID']);
			$task = new Task($projet,$_POST['nom'],$_POST['debut'], $_POST['fin']);
			$this->taskDAO->insert($task);
			header("location:../../../projetController/liste");
			exit();
		}
		$this->view= new View('TaskController','add');
		$this->view->projetId =$projetId;
		$this->view->render();
		
	}
	// /**
	//  * @access public
	//  */
	// public function details() {
	// 	$this->view= new View('TaskController','liste');
	// 	$result = $this->taskDAO->getDetails();
	// 	$this->view->details=$result;
	// 	$this->view->render();
	// }
	// /**
	//  * @access public
	//  */
	public function delete($TaskId) {
		$result = $this->taskDAO->delete($TaskId);
		if($result){
			header("location:../../ProjetController/liste");
			//header('Location: ' . $_SERVER['REQUEST_URI']);
		}else{
			$message = "impossible de supprimer de tache";
			header("location:../ErrorController/index/$message");
			exit();
		}
		
	// }

}
}	
?>