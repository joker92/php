<html>
	<body>
		
<a href="cars.php">Vedi tutte</a>
<br/>
<form method="get" action="cars.php">
	Prezzo massimo: <input type="text" name="prezzo"/>
	Marca: <input type="text" name="marca"/>
	<input type="submit" value="cerca"/>
</form>


<?php
	include("cars_database.php");
	include("cars_function.php");

	$risultato=$cars;
	// codice per filtrare in base al prezzo
	// se è definito $_GET{"prezzo"]. impostare $prezzo al valore inserito
	if (isset($_GET["prezzo"]) && $_GET["prezzo"] >0 ) {
	$prezzo=$_GET["prezzo"];
	$risultato=auto_prezzo($prezzo, $cars);
							}
	if (isset($_GET["marca"]) && $_GET["marca"] !="") {
	$marca=$_GET["marca"];
	$risultato=auto_marca($marca,$risultato);
}





?>


<?php
	// codice per filtrare in base alla marca








?>



	<table >
<tr>
	<td> anno </td>
	
	<td> marca </td>
	
	<td> modello </td>


	<td> prezzo </td>
	</tr>
<?php

	// codice per visualizzare la tabella
	foreach ($risultato as $car){
		echo"<tr>";
		echo"<td>";
		echo $car["anno"];
		echo"</td>";
		echo"<td>";
		echo $car["marca"];
		echo"</td>";
		echo"<td>";
		echo $car["modello"];
		echo"</td>";
		echo"<td>";
		echo $car["prezzo"];
		echo"</td>";
		echo"</tr>";
		
		
	}



?>	
	</table>
	</body>
</html>


