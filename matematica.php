<?


//$a=6;
//$b=2;
//echo "6 elevato a 2 =";
//echo  pow($a,$b);



?>


<html>
	<form method="get">
		<input name="var" type="text"></input>
		<input type="submit"/>
	</form>
</html>


<?php


	//extract($_GET);
	//include "mate.php";
	//if(isset($var)){

	//modulo($var);



?>


----------------esercizio4-------------------

<?php

$a=5;
$b=6;
$c=4;



echo ($a*$b/100+$c);

?>


<html>
	<form method="get">
		<input name="price" type="text"></input>
		<input name="tax" type="text"></input>
		<input name="receipt" type="text"></input>		
		<input type="submit"/>
	</form>
</html>


<?php
function iva($a,$b){
$risultato =$a+(($a*$b)/100);
return $risultato ;
}


$a= $_GET["price"];
$b=$_GET["tax"];;
//$c=$_GET["receipt"];;


echo $prezzo = iva($a,$b);


//echo $risultato= $a+(($a*$b)/100);



?>

----------esercizio 5----------------------------
<html>
	<form method="get">
		<input name="price" type="text"></input>
		<input name="tax" type="text"></input>
		<!--<input name="receipt" type="text"></input>	-->	
		<input type="submit"/>
	</form>
</html>


<?


$a= $_GET["price"];
$b=$_GET["tax"];;


list($a,$b) = array($b,$a);

echo $a."</br>".$b;



?>


