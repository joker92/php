



<?php

$posti=Array(
	"fila1"=> array(
			1=>1,
			4=>1,
			9=>1
		),



"fila2"=> array(
			5=>1,
			8=>1,
			9=>1
		),



"fila3"=> array(
			8=>1,
			9=>1,
			10=>1
		),



"fila4"=> array(
			1=>1,
			4=>1,
			5=>1
		),

);


?>










<?php
 

 class platea {
 	private $posti;
 	private $postiperfila;

 	public function __construct($p,$n){  //creazione del costrutto

 		$this->posti=$p;
 		$this->postiperfila=$n;
 	}
 	public function getFile(){    // creazione di un metordo ,restituisce un array
 		return array_keys($this->posti);						  //presenti in platea
 	}
 

//qui sotto restituisce un array con i numeri dei posti dei presenti in platea


public function getPosti(){
	$n=array();
	for($i=1; $i<=$this->postiperfila;$i++){    //cicla $i fino a quando non ragggiunge il numero di posti che ci sono nela fila
		$n[]=$i;
	}
	return $n;
}

// controlla se il posto specificato è prenotato


//se il posto e prenotato ritorna un intero 
//1 se il posto e prenotato 
//0 se il posto e libero 
//  -1 se la fila o il numero di posto non sono validi 

public function isPrenotato($f,$p) {
		//controlla se la fila e valida

				if(isset($this->posti[$f])){
						//controlla se il posto e valido 
					if($p>=1 && $p<=$this->postiperfila){
						if(isset($this->posti[$f][$p])){
							return 1;

						}else{
							return 0 ;
						}

					}else{
						return -1;
					}
				}else{
					return -1;
				}
			}

//prenota un posto 
//ritorna 0 se il posto viene prenotato con successo
//ritorna 1  se il posto e giga prenotato
// -1 se la fila o il nimero di posti non e valido 


public function prenota($f,$p){
	$prenotato=$this->isPrenotato($f,$p);
	if($prenotato== 0){
		//prenota il posto
		$this->posti[$f][$p]=1;
		return 0;
	} else {
		return  $prenotato;
	}
  }
public function libera($f,$p){
	$prenotato=$this->isPrenotato($f,$p);
	if($prenotato== 1){
		 unset($this->posti[$f][$p]);
		return 1;
	} else {
		return  $prenotato;
	}
  }

}

function queryCinema($n){
$posti=array(
	"fila1"=> array(
			1=>1,
			4=>1,
			9=>1
		),



"fila2"=> array(
			5=>1,
			8=>1,
			9=>1
		),



"fila3"=> array(
			8=>1,
			9=>1,
			10=>1
		),



"fila4"=> array(
			1=>1,
			4=>1,
			5=>1
		),

);

	return new Platea($posti,$n);
}








?>
