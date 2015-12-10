<?php

	$a= array();
	$a[] = 1;

	
	if(empty($a)){
		
		echo "la variabile è vuota!" ;
	}else{
		echo "la variabile è piena." ;
	}

	$b['nome'] = 'mario';
	
	if(isset($b['nome'])){
			echo "<br/>campo presente";
		}else{
			echo "<br/>campo non presente";
		}
		
		//is_string() is_numeric()
		
		$c ="stringa";
		$d = 123;
		
		if(is_string($c)){
			echo "<br/>stringa";
		}else{
			echo "<br/>non è una stringa";
		}
		
		if(is_string($d)){
			echo "<br/>stringa";
		}else{
			echo "<br/>non è una stringa";
		}
		
		//is_array();
		
		$e = array();
		
		if(is_array($e)){
			echo "<br/>array";
		}else{
			echo "<br/>non è un array";
		}
		
		//gettype()
		
		$f = "stringa";
		$g = 1;
		$h = array();
		
		echo "<br/> la variabile f è: " .gettype($f);
		echo "<br/> la variabile g è: " .gettype($g);
		echo "<br/> la variabile h è: " .gettype($h);

		//strlen()
		
		$i[] = "campo1";
		$i[] = "campo2";
		
		echo "<br/>l'array ha " . count($i) . "campi";
		
		//str_replace()
		
		$l = "cao mario come stai oggi?";
		
		$l = str_replace("mario","luca",$l);
		
		echo "<br/>" . $l;
		
		//strtolower() strtoupper()
		
		echo "<br/>" . strtolower($l);
		echo "<br/>" . strtoupper($l);
		
		//ucifirst() ucword();
		
		echo "<br/>" . ucfirst($l);
		echo "<br/>" . ucwords($l);
		
		$nome = "marIO roSSi";
		
		echo "<br/>" . ucwords(strtolower($nome));
		
		//explode()
		
		
		$data= "27/01/2015";
		
		$d = explode("/" , $data);
		
		echo "<pre>" . print_r($d); echo "</pre>";
		
		echo $d[2] . "-" . $d[1] . "-" . $D[0];
		
		//time()
		
		echo "<br/>" . time();
		
		//date()
		
		echo "<br/>" . date('d/m/Y');

		//mktime()
		
		$giorno = mktime(0,0,0,01,27,2015);
		
		$data ="27/01/2015";
		
		$d = explode("/". $data);
		
		echo mktime(12,0,0,$d[1], $d[0] , d[2]))
		
		
		//FUNZIONI PERSONALI
		
		function miaFunzione(){
			
			echo "<br/>Mia funzione!";
			
		}
		
		echo "<br/>";
		miaFunzione();
		
		function saluti($nome = "pippo"){
			
			echo "<br/>ciao " . $nome;
			
		}
		saluti('Nome');
		
		function addizione($a , $b){
		
		echo $a + $b;
		
		return $tot;
		
		}
		
		$ris = addizione(10,20);
		echo "<br/>" . $ris;
		
		$user[] = "mario";
		$user[] = "luca";
		$user[] = "sivlia";
		
		function stampaUtenti($dati){
			
			foreach($dati as $key => $value){
				echo "<br/>" . $value;
			}
		}
		
		stampaUtenti($user);
		
		$a = 10;
		
		function miaFunzione2(){
			
			$a = 20;
			echo $a;
			
		}
		
		miaFunzione2();
		echo "<br/>" . $a;
		
		$nome = "Mario";
		
		function miaFunzione3($nome){
			
				$nome = "luca" ;
			return $nome;
		}
		
		$nome = miaFunzione3($nome);
		echo $nome;
		
		
		$cognome = "rossi";
		
		function miaFunzione4($cognome){
				
				$cognome = "bianchi";
		}
		
		miaFunzione4($cognome);
		echo $cognome;
			
?>
