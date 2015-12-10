<?php
session_start();

$b = array();
$b[] = 10;
$b[] = 20;
$b[5] = 30;
$b[] = 40; //incrementa in automatico l'inidice che si trova nell'array //
$b['nome'] = "Fabio";
$b['cognome'] = "Matta";

$b['utenti'][0]['nome'] = "mario";
$b['utenti'][0]['cognome'] = "rossi";
$b['utenti'][1]['nome'] = "sara";
$b['utenti'][1]['cognome'] = "verdi";

echo "<pre>"; print_r($b); echo "</pre>";


if(isset($_SESSION['a'])){; 
	$a = $_SESSION['a'];
}else{
	$a = 0;
}

$a += 0;

$_SESSION['a'] = $a;

echo "la variabile a vale: " . $a;

session_destroy();
?>

<br/><br/>

INVIO IN GET
<form action="esercizio.php" method="GET">
	Nome:<input type="text" name="nome*" placeholder="inserisci il nome"><br/>
	Cognome:<input type="text" name="cognome*" placeholder="inserisci il cognome"><br/>
	<input type="submit" value="invia">
</form>


