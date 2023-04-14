<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>/* Table styles */
	@import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
table {
  border-collapse: collapse;
  width: 100%;
  margin: 20px 0;
  font-size: 16px;
}

th,
td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
}

/* Heading styles */
h1 {
  font-size: 24px;
  margin-bottom: 10px;
}

/* Container styles */
.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

/* Button styles */
button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 3px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
  margin-right: 10px;
}

button:hover {
  background-color: #0069d9;
}

/* Table header styles */
th {
  background-color: #007bff;
  color: #fff;
}

/* Alternate row styles */
tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Hover styles */
tr:hover {
  background-color: #ddd;
}


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
            font-size: 30px;
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

echo '<h1>Information générales : </h1>';
echo '<table border=1> 
     <tr><th>Titre</th><td>'.$this->details['Titre'].'</td><tr>
	 <tr><th>Debut</th><td>'.$this->details['DatDebut'].'</td><tr>
	 <tr><th>Fin</th><td>'.$this->details['DateFin'].'</td><tr>
	 <tr><th>Dscription</th><td>'.$this->details['Description'].'</td><tr>
	 </table>';
if(sizeof($this->details['tasks'])){
	echo '<h1>Liste des tâches : </h1>';
	echo '<table border=1><tr><th>N°</th><th>Tache</th><th>Début</th><th>Fin</th></tr>';
	$i=1;
	foreach($this->details['tasks'] as $task){
		echo '<tr><td>'.$i++.'</td><td>'.$task['Nom'].'</td><td>'.$task['Debut'].'</td><td>'.$task['Fin'].'</td></tr>';
	}
	echo'</table>';
}
$image='application/views/gantt/projet'.$this->details['Id'].'.jpg';
//echo '<img src="application/views/gantt/projet'.$this->details['Id'].'.jpg">';
?>
<img src="data:image/jpeg;base64,<?php echo base64_encode(file_get_contents('application/views/gantt/projet'.$this->details['Id'].'.png')); ?>" alt="Gantt chart">

</body>
</html>
