<?php


function uncarattereallavolta($linea) {

	for ($i=0;$i<strlen($linea); $i++) {
		echo "carattere " . $i . "->" . $linea[$i];
		echo "<br/>";
	}

	return;
}







function rovescio($linea) {

	for ($i=strlen($linea)-1;$i>=0; $i--) {
		echo "carattere " . $i . "->" . $linea[$i];
		echo "<br/>";
	}

	return;
}









function rovescio2($linea) {
	$risultato="";

	for ($i=strlen($linea)-1 ;$i>=0 ; $i--) {
		 $risultato=$risultato . $linea[$i];
	}

	return $risultato;
}



   function annibisestili(){
 	for ($i=2000;$i<2050;$i=$i+4){ 
        echo $i;
	echo "<br />";
}
        
}
function annibisestili2(){
		$anno=2000;
		while ( $anno <2050) {
		
		echo $anno;	
		$anno +=4;
		echo "<br />";

		}
		}
			function contalinee($nomefile) {
				$filehandle=fopen($nomefile, "r");
				$numerolinee=0;
					while($linea = fgets($filehandle) ){
				echo "sto leggendo la linea n." .				
				$numerolinee . ":".$linea;
					echo "<br/>";
						$numerolinee++;					
					}
				fclose($filehandle);
			return $numerolinee;
			}
		





?>
 


