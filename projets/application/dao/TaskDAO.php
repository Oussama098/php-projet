<?php
require_once(realpath(dirname(__FILE__)) . '/../../application/models/Projet.php');
require_once(realpath(dirname(__FILE__)) . '/../../application/models/Task.php');
require_once(realpath(dirname(__FILE__)) . '/../../application/dao/DB.php');

/**
 * @access public
 * @author pc
 * @package application.dao
 */
class TaskDAO {
	private  $cn;

	public function __construct(){
		$this->cn = DB::getInstance();
	}
	/**
	 * @access public
	 */
	public function insert(Task $task) {
		$sql = "INSERT INTO `task` (`ID`, `ProjetId`, `Nom`, `Debut`, `Fin`) 
				VALUES 
				(NULL, 
				'{$task->projet->getId()}', 
				'{$task->nom}', 
				'{$task->debut}', 
				'{$task->fin}');";
		mysqli_query($this->cn,$sql);
		mysqli_close($this->cn);
	}

	public function getAll(){
		$sql = "SELECT * FROM `task`;";
		$rs = mysqli_query($this->cn,$sql);
		$result = array();
		while( $data=mysqli_fetch_assoc($rs)){
			$result[]=$data;
		}
		mysqli_close($this->cn);
		return $result;
	}
	public function getById($id){
		$sql = "SELECT * FROM `task` WHERE `ID`=$id ;";
		$rs = mysqli_query($this->cn,$sql);
		$result=mysqli_fetch_assoc($rs);
		mysqli_close($this->cn);
		return $result;
	
	}
	public function delete($id){
		$sql = "DELETE FROM `task` WHERE `ID`=$id ;";
		$result = mysqli_query($this->cn,$sql);
		return $result;
	}
	
}
?>