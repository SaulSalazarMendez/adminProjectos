<?php 

$connStr = 'sqlite:prueba.db'; 
try { 
	$conn = new PDO($connStr); 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	$conn->query("insert into prueba(nombre) values('LALA')"); 
	$query = $conn->query("SELECT * FROM prueba"); 
	echo "<table><theader><td>llave</td><td>nombre</td></theader><tbody>";
	foreach($query as $row){
		echo "<tr><td>".$row['llave']."</td><td>".$row['nombre']."</td></tr>";
	}
	echo "</tbody></table>";

} catch( PDOException $Exception ) { 
	echo $Exception->getMessage() ."\n"; } 
?> 
