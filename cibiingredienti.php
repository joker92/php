<html>
 <!--.. il codice html qui sotto ti va a fare la ricerca delle ricette sotto SE AL POSTO DI TUTTI I GET ANDIAMO AD ISERIRE POST NASCONDE NEL URL NASCONDE I PARAMETRI ESEMPIO SE CERCHI PANE NON ESCE NIENTE NEL URL  ..-->		
			<form method="GET">  
			<input type="text" name ="cibo" />

			<input type="submit" value="cerca"/>

		</from>

<br />	

</html>











<?php

		


		include "databasecibi.php";
// questa variabile sotto va a prendere il codice html e ti va a fare la ricerca delle ricette 

	if (isset($_GET["cibo"])){

		$cibo=$_GET["cibo"];

     // if isset : questa stringa sotto serve per dire se il cibo non e nella lista di che non esiste  
  
	if (isset($cibieingredienti[$cibo])){
		
	echo $cibieingredienti [$cibo];					
	
	} else {

		

		echo "$cibo non esistente" ;  
		echo "<br />";
//con un apice solo ' stampa $cibo non interpreta con "" interpreta la variabile e stampa il contenuto		
		echo '$cibo non esistente';
		echo "<br />";

                echo $cibo . "non esistente" ;
		echo "<br />";


   }
	

}

?>




