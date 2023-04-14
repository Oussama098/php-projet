<?php
require_once(realpath(dirname(__FILE__)) . '/../../application/dao/ProjetDAO.php');
require_once('labrary/View.php');
require_once('labrary/BaseController.php');
require_once('labrary/jpgraph-4.4.1/src/jpgraph.php');
require_once('labrary/jpgraph-4.4.1/src/jpgraph_gantt.php');

/**
 * @access public
 * @author pc
 * @package application.controllers
 */
class ProjetController extends BaseController{
	private $view;
	private $projetDAO;
	/**
	 * @access public
	 */
	
	public function __construct() {
		parent::__construct();
		$this->projetDAO = new ProjetDAO();
	}
	/**
	 * @access public
	 */
	public function index() {
		$this->view = new View('ProjetController','index');
		$this->view->render();
	}
	/**
	 * @access public
	 */
	public function add() {
		if(isset($_POST['titre'])){
			$projet = new Projet($_POST['titre'],$_POST['debut'], $_POST['fin'],$_POST['description']);
			$this->projetDAO->insert($projet);
			header("location:../projetController/liste");
			exit();
		}
		$this->view= new View('ProjetController','add');
		$this->view->title="Ajouter un projet";
		$this->view->render();
		
	}
	public function liste() {
		$this->view= new View('ProjetController','liste');
		$result = $this->projetDAO->getAll();
		$this->view->projets=$result;
		$this->view->title="Liste de projets";
		$this->view->render();
	}
	/**
	 * @access public
	 */
	public function details($projetId) {
		$this->view= new View('ProjetController','details');
		$result = $this->projetDAO->getDetails($projetId);
		$this->view->details=$result;
		$this->view->title="Détails du projet";
		$this->view->render();
	}
	/**
	 * @access public
	 */
	public function delete($projetId) {
		$result = $this->projetDAO->delete($projetId);
		if($result){
			header("location:../liste");
		}else{
			$message = "impossible de supprimer de projet";
			header("location:../ErrorController/index/$message");
			exit();
		}
		
	}
	public function summury($projetId){
		$this->gantt($projetId);
		$this->view= new View('ProjetController','summury');
		$result = $this->projetDAO->getDetails($projetId);
		
		if($result){
			$this->view->details=$result;
			$this->view->title="Resume du projet";
			$this->view->render();
			
		}else{
			$message = "Aucune information sur ce projet";
			header("location:../ErrorController/index/$message");
			exit();
		}
	}
	private function gantt($projetId) {
		$result = $this->projetDAO->gantt($projetId);
		if($result){
			$graph = new GanttGraph();
			// Add the tasks to the graph
			foreach($result as $row) {
				
				$task = new GanttBar($row['ID'], $row['Nom'], $row['Debut'], $row['Fin']);
				$graph->Add($task);
			}
			
			// Output the graph
			$graph->Stroke("application/views/gantt/projet$projetId.png");
			
			
			// if(file_exists("application/views/gantt/projet$projetId.png")){
			// 		//"application/views/gantt/projet$projetId.jpg";
				
			// 	$file_path = "application/views/gantt/projet$projetId.png";
			// 	$graph = new GanttGraph(500,300,$file_path);
			// 	// Add the tasks to the graph
			// 	foreach($result as $row) {
				
			// 	$task = new GanttBar($row['ID'], $row['Nom'], $row['Debut'], $row['Fin']);
			// 	$graph->Add($task);
			// 	}
				
			// 	$graph->Stroke($file_path);
			// }else{
			// 	//Create a new Gantt graph
			// $graph = new GanttGraph();
			// // Add the tasks to the graph
			// foreach($result as $row) {
				
			// 	$task = new GanttBar($row['ID'], $row['Nom'], $row['Debut'], $row['Fin']);
			// 	$graph->Add($task);
			// }
			
			// // Output the graph
			// $graph->StrokeStore("application/views/gantt/projet$projetId.png");
			// }
			
			
		}
	}

}	
?>