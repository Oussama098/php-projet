<?php 
include('labrary/Router.php');
$params = explode('/',$_GET['url']);
$router = new Router();
$router->run($params );
?>