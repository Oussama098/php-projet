<?php 
class Task{
	public $projet;
	public $nom;
	public $debut;
	public $fin;
	public function __construct(Projet $projet,$nom,$debut,$fin){
	$this->projet = $projet;
	$this->nom = $nom;
	$this->debut = $debut;
	$this->fin=$fin;
	}
}

?>