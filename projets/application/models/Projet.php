<?php
/**
 * @access public
 * @author pc
 * @package application.models
 */
class Projet {
    /**
	 * @AttributeType int
	 */
	private $id;
	/**
	 * @AttributeType string
	 */
	private $titre;
	/**
	 * @AttributeType Date
	 */
	private $datDebut;
	/**
	 * @AttributeType Date
	 */
	private $dateFin;
	/**
	 * @AttributeType string
	 */
	private $description;

	/**
	 * @access public
	 */
	 
	public $tasks;
	public function __construct($titre,$dateDebut, $dateFin,$description)
	{
		$this->titre = $titre;
		$this->datDebut = $dateDebut;
		$this->dateFin = $dateFin;
		$this->description = $description;
		$this->tasks= array();
	}
	
	/**
	 * @access public
	 * @param string titre
	 * @ParamType titre string
	 */
	public function setTitre($titre) {
		$this->titre = $titre;
	}
	public function addTask(Task $task){
		$this->tasks[]=$task;
	}
	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getTitre() {
		return $this->titre;
	}

	/**
	 * @access public
	 * @param Date_4 dateFin
	 * @ParamType dateFin Date
	 */
	public function setDateFin($dateFin) {
		$this->dateFin = $dateFin;
	}
	public function setDateDebut($dateDebut) {
		$this->datDebut = $dateDebut;
	}

	/**
	 * @access public
	 * @return Date_4
	 * @ReturnType Date
	 */
	public function getDateFin() {
		return $this->dateFin;
	}
	public function getDateDebut() {
		return $this->datDebut;
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	/**
	 * @access public
	 * @param string description
	 * @ParamType description string
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getDescription() {
		return $this->description;
	}
}
?>