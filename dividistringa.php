<html>
dividi stringa :<br />
	<form method="get">
		dividi:<input name="dividi" type="text" size="5"></input>
	testo da dividere :<input name="testo" type="text" size="5"></input>
		<!--<input name="receipt" type="text"></input>	-->	
		<input type="submit" value="dividi"/>
	</form>
</html>

<?php


include "libreria_classi.php";

$s=new mystring($_GET["testo"]);
$stringadivisa = $s->dividi($_GET["dividi"]);

echo $stringadivisa [0];
echo  $stringadivisa[1] ."</br>"."stringa evidenzia:".$_GET["dividi"]."</br>";
echo $s->evidenzia($_GET["dividi"]);
?>