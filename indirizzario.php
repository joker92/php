
<html>
<body style="background-color:B27920">

	<form method="post" style="background-color:CC8E14;width:30%;margin:0 auto;text-align:center;border:2px solid black ;">

		<p>nome:</p>
		<input name="nome" type="text"/>

		<p>cognome:</p>
		<input name="cognome" type="text"/>

		<p>indirizzo:</p>

		<input name="indirizzo" type="text"/>


		<p>tel:</p>
		<input name="tel" type="text"/>
		

		<p>cellulare:</p>

		<input name="cellulare" type="text"/>

			
   		<input style="width:50%;background-color:#48F52E;border:2px solid black ;margin-top:19px;margin-bottom:20px" type="submit" value="SALVA"/ >

</body>
</form>
</html>



<?php

// &&=and


include "libreria_classi.php";
if (isset($_POST["nome"]) && 
isset($_POST["cognome"]) && 
isset($_POST["indirizzo"]) &&
isset($_POST["cellulare"]) &&
isset($_POST["tel"])) {

	$indirizzo=new IndirizzoEsteso();
	$indirizzo->nome=$_POST["nome"];
	$indirizzo->cognome=$_POST["cognome"];
	$indirizzo->indirizzo=$_POST["indirizzo"];
	$indirizzo->tel=$_POST["tel"];
	$indirizzo->ncell=$_POST["cellulare"];


		//echo $indirizzo->nome;
		//echo $indirizzo->cognome;


		//l echo qui sotto e $this che concatena  nome e cognome 		
		//echo $indirizzo->nomeCompleto();		
		//echo $indirizzo->indirizzo;
		// echo $indirizzo->tel;
		// l echo qui sotto $visualizza richima la indirizzo e tel e nome completo
		echo $indirizzo->visualizza();



}
?>
