<?php
	class Azienda {
		public $nome;
		public $sitoweb;
		public $logo;
		public $indirizzo;

	public funtion getHtmlUrl() {
		$ind = $this->sitoweb;
		$nomeazienda = $this->nome;
		
		$html= '<a href="' . $ind . '">' . $nomeazienda . '</a>';
		return $html;
		}
	}

?>
