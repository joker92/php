<html>
	<table border= "1">
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
	<?php
		/*$listadicibi[]="Focaccia";
			array_push ($listadicibi , "Couscous");//mette in fondo l'ultimo
			array_unshift ($listadicibi , "Pizza");//mette in cima il primo nella lista	
					$e = array_pop ($listadicibi);//mette il primo fuori se usi 										"pop" ,mette fuori dalla lista 										l'ultimo
					echo $e;*/
				natcasesort($cibieingredienti);				
				foreach ($cibieingredienti as $key=>$cibo){
				echo "<tr><td>";
				if ($x==0){ echo "*";			
				echo htmlentities($key);	
				echo "</td><td>";			
				echo htmlentities($cibo);					
				echo "</td></tr>";
			}
		?>
	</table>
</html>
