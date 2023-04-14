<?php
require_once('labrary/jpgraph-4.4.1/src/jpgraph.php');
require_once('labrary/jpgraph-4.4.1/src/jpgraph_gantt.php');
// $db = new PDO('mysql:host=localhost;dbname=projets2023', 'root', '');
// require_once ('../controllers/ProjetController.php');
// $projetController = new ProjetController();
// $projetController->gantt();


   $graph = new GanttGraph();
  while($this->gantt){
    $task = new GanttBar($this->gantt['ID'], $this->gantt['Nom'], $this->gantt['Debut'], $this->gantt['Fin']);
    $graph->Add($task);
  }
       
//   $task = new GanttBar($this->gantt['ID'], $this->gantt['Nom'], $this->gantt['Debut'], $this->gantt['Fin']);
//   $graph->Add($task);
   $graph->Stroke();
?> 
