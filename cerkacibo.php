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
			$inizio=strpos($ingr, $_GET["chiave"]);
			if( $inizio > -1) {
				echo  $cibo ;
				// echo " (" . $ingr . ")<br/>";
				$prima=substr($ingr, 0, $inizio);
				$seconda=substr($ingr, $inizio, strlen($_GET["chiave"]));
				$terza=substr($ingr, $inizio + strlen($_GET["chiave"]));
				echo $prima;
				echo "<b>".$seconda."</b>";
				echo $terza;

			}
		}
	}
	

	
?>
