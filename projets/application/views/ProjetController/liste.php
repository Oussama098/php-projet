<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
		.project-table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
}

.project-table th {
  background-color: #eee;
  border: 1px solid #ddd;
  padding: 10px;
  text-align: center;
}

.project-table td {
  border: 1px solid #ddd;
  padding: 10px;
}

.delete-btn, .planifier-btn, .details-btn, .gantt-btn {
  display: inline-block;
  padding: 5px 10px;
  border: none;
  border-radius: 3px;
  color: #fff;
  text-decoration: none;
  margin-right: 10px;
  font-weight: bold;
}

.delete-btn {
  background-color: #dc3545;
}

.planifier-btn {
  background-color: #007bff;
}

.details-btn {
  background-color: #17a2b8;
}

.gantt-btn {
  background-color: #28a745;
}
.delete-btn,
.planifier-btn,
.details-btn,
.gantt-btn {
  display: inline-block;
  padding: 5px 10px;
  border: none;
  border-radius: 3px;
  color: #fff;
  text-decoration: none;
  margin-right: 10px;
  font-weight: bold;
  transition: all 0.2s ease-in-out;
}

.delete-btn:hover,
.planifier-btn:hover,
.details-btn:hover,
.gantt-btn:hover {
  transform: scale(1.1);
}

.delete-btn {
  background-color: #dc3545;
}

.planifier-btn {
  background-color: #007bff;
}

.details-btn {
  background-color: #17a2b8;
}

.gantt-btn {
  background-color: #28a745;
}
.project-heading {
  font-size: 50px;
  font-weight: bold;
  color: #333;
  text-align: center;
  margin-top: 20px;
  margin-bottom: 10px;
}
@import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');

        h1 {
            font-family: "Satisfy", cursive;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            letter-spacing: 0px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            scroll-behavior: smooth;
            margin: 0;
        }

        

        h1 {
            font-size: 40px;
            transition: 2s all ease;
            cursor: pointer;
        }

        h1:hover {
            text-shadow:
                #ffffff 0 0 15px,
                #85FFBD 0 0 22px,
                #85FFBD 0 0 25px;
        }

	</style>
</head>
<body>
<?php
echo '<h1 class="project-heading">Liste des Projets </h1>';
echo '<table class="project-table">
      <tr><th>N°</th><th>Titre</th><th>Date début</th><th>Date fin</th><th>Description</th><th>Actions</th></tr>';
$i=1;
foreach( $this->projets as $projet){
echo '<tr><td>'.$i++.'</td><td>'.$projet['Titre'].'</td><td>'.$projet['DatDebut'].'</td><td>'.$projet['DateFin'].'</td><td>'.$projet['Description'].'</td></td>
      <td><a class="delete-btn" href="../projetController/delete/'.$projet['Id'].'">Supprimer</td>
	  <td><a class="planifier-btn" href="../TaskController/add/'.$projet['Id'].'">Planifier</td>
	  <td><a class="details-btn" href="../ProjetController/details/'.$projet['Id'].'">Détails</td>
	  <td><a class="gantt-btn" href="../ProjetController/summury/'.$projet['Id'].'">Générer Gantt</td>
	  </tr>';
}
echo '</table>';
?>

</body>
</html>