<?php

$campoVuoto= 0;
if(isset($_GET['nome']) && $_GET['nome'] == ""){
	$campoVuoto = 1;
}

if(isset($_GET['cognome']) && $_GET['cognome'] == ""){
	$campoVuoto = 1;
}

if($campoVuoto == 0){

echo "Il nome &egrave : ". $_GET['nome'] . "<br/>";
echo "Il cognome &egrave : " . $_GET['cognome'] . "<br/>";
						
}else{
	$_SESSION['errore-form'] = "compila tutti i campi";
	header('Location: index.php');						
						
}

?>
