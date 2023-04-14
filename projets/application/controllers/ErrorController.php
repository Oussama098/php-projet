<?php 
require_once('labrary/View.php');
require_once('labrary/BaseController.php');

/**
 * @access public
 * @author pc
 * @package application.controllers
 */
class ErrorController extends BaseController{
	private $view;
	
	/**
	 * @access public
	 */
	public function __construct() {
		parent::__construct();
		
	}
	/**
	 * @access public
	 */
	public function index($message) {
		$this->view = new View('ErrorController','index');
		$this->view->message=$message;
		$this->view->render();
	}
	
	

}	

?>