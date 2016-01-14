<html>
inserisci numero per fare la somma: 

	<form method="get">
		<input name="somma" type="text" size="5"></input>
		<input name="somma1" type="text" size="5"></input>
		
		<!--<input name="receipt" type="text"></input>	-->	
		<input type="submit" value="somma"/>
	</form>
</html>

<?php
include "libreria_classi.php";

$a=$_GET["somma"];
$b=$_GET["somma1"];

//echo($_GET["somma"]+$_GET["somma1"]);

$n1=new Numero($a);
$n2=new Numero($b);
$ris = $n1->sommaOggetto($n2);
echo $ris->getValore();
?>