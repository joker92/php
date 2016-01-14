




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



class Numero
{
	private $n;

	public function __construct($numero)
{
	$this->n=$numero;
	}

	public function getValore() {
		return $this->n;
	}

	public function modulo()
	{
		if ($this->n <0)
	{
		return - $this->n;
	}
	return $this->n;
	}
	public function somma($b){
		return $this->n +	 $b;
	}
	public function sommaOggetto($b){
		$ris = $this->n +	 $b->n;
		return new Numero($ris);
	}

	public  function quadrato()
	{
		return $this->n * $this->n; 
	}
}

?>
