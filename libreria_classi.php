




<?php




//classi


//una classe definisce la struttura di un oggetto 

//un oggetto e una struttura che contiene :
	
	//dati  (proprieta)
	//Funzioni (metodi)

//definire una classe 

//$this serve: (e proprio una etichetta di PHP) richiama sia il nome e cognome eli concatena insieme 

	class Indirizzo{

		public $nome;

		public $cognome;

		public $indirizzo;

		public $tel;


	public function nomeCompleto() {
	
			$n=$this->nome . " " . $this->cognome;

				return $n ;

			}

			public function visualizza() {

			$n=$this->nomeCompleto();

			$n=$n. "<br />";

			$n=$n. $this->indirizzo;

			$n=$n. "<br />";

			$n=$n. $this->tel ;
			
				return $n;


}

}


		class IndirizzoEsteso extends Indirizzo{
			public $ncell;

		public function visualizza(){
			$n=parent::visualizza();
			$n=$n . "<br /> n. cellulare:".$this->ncell;

					return $n;

}

}
?>
