<?php

	$listadicibi = array(
		"Pane", 
		"Arachidi", 
		"Latte", 
		"Uova", 
		"Insalata", 
		"Pasta", 
		"Pomodori", 
		"Cereali per colazione", 
		"Biscotti", 
		"Knödel", 
		"Gazpacho", 
		"Salsiccia", 
		"Agnolotti", 
		"Purè di patate"
	);

?>








<?php
	$cibieingredienti = array(
		"Pane" => "farina, acqua, lievito", 
		"Arachidi" => "arachidi", 
		"Latte" => "acqua, grassi, proteine", 
		"Uova" => "tuorlo, albume", 
		"Insalata" => "insalata", 
		"Pasta" => "farina, sale, acqua", 
		"Pomodori" => "pomodoro", 
		"Cereali per colazione" => "cereali misti tostati", 
		"Biscotti" => "farina, acqua, zucchero, burro", 
		"Knödel" => "patate, latte, farina, prosciutto", 
		"Gazpacho" => "pomodoro, erbe, olio, sale, pepe", 
		"Salsiccia" => "carne suina macinata, pepe, conservanti", 
		"Agnolotti" => "farina, uova, acqua, carne macinata", 
		"Purè di patate" => "patate, burro, sale, noce moscata"
	);


?>

<html>
<body>
	Il database contiene 
	<?php echo count($listadicibi); ?>
	elementi
	</br></br>
	
	la chiave di ricerca &egrave;
	<?php
	$cerca="";
	if (isset($_GET["searchkey"])){
	$cerca = $_GET["searchkey"];}
	echo $cerca; ?>
<br/><br/>
	<?php 
		foreach ($listadicibi as $key=>$e) {
			$pos=false;
			if ($cerca != "") {
				$pos=stropos($e, $cerca);
				if ($pos === false) {
				} else {
					echo htmlentities($listadicibi[$key]) . " - " . htmlentities($cibieingredienti[$e]);
				}
			}
		}
	?>
		

</body>
</html>
 
