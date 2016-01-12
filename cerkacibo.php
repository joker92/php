<html>
	<form method="get">
		<input name="chiave" type="text"></input>
		<input type="submit"/>
	</form>
</html>


<?

	include "databasecibi.php";
	if(isset($_GET["chiave"])){

		//qui sonon sicuro che "chiave"

		//e definita


		foreach ($cibieingredienti as $cibo => $ingr){
//il codice qui sotto serve per trovare le parole che cerchiamo esempio (qui gli ingredienti  )
			if(strpos($ingr, $_GET["chiave"]) > -1) {
				echo  $cibo ;
				echo " (" . $ingr . ")<br/>";
			}
		}
	}
	

	
?>
