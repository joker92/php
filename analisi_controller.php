

<?php
	$testo="";
	if(isset($_POST["testo"])){

		$testo=$_POST["testo"];

		}
	
 //explode serve per contare le parole che ci sono nel testo inserito 
 $testo_arr = explode( " " , $testo  );

	//echo "numero parole=". count($testo_arr);

        //metto il commento sopra all echo per continuare con un foreach per contare le parole piu frequenti


		$frequenzaparole=[] ;

		foreach($testo_arr as $parola) {
			if(isset($frequenzaparole[$parola])){
				$frequenzaparole[$parola]++;
			} else {
				$frequenzaparole[$parola]=1;

			}

		}

		//arosort mette in ordine decrescente dal piu prequente al meno frequente
		arsort($frequenzaparole);

		foreach($frequenzaparole as $parola=>$conteggio){

			echo $parola . "=". $conteggio . "<br />"; 


		}


?>

