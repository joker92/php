




<?php


	include "animali.php";
	
	function presenta($animale){

		$r="sono " . $animale->nome;

		$r.="<br />ho " . $animale::nzampe. "zampe";

		$r.="<br />". $animale->verso();
			
			return $r;
}

//cra un array di animali 

	$animali=array();



	$a=new cane();

	$a->nome="fido";
	$animali[]=$a;


	
	$a=new cane();

	$a->nome="wolf";
	$animali[]=$a;



	
	$a=new Papero();

	$a->nome="paperino";
	$animali[]=$a;



	
	$a=new pesce();

	$a->nome="nemo";
	$animali[]=$a;




	foreach ($animali as $a){

		echo presenta($a);
		echo "<br /><br />";
}

?>

