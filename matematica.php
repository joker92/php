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

-----------esercizio2-------
<?php
$numero= -5;

function modulo($numero){
if ($numero <0) {

	$numero = -$numero;

}
return  $numero;
}
$num=-5;
$result =modulo($num);
echo  8+ $return;
?>
----------esercizio2 con  CLASSI modulo-------
<?php

class MyNumero
{
	private $n;

	public function __construct($numero)
{
	$this->n=$numero;
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
		return $this-> + $b;
	}


}

/*istanzio nuovo oggetto di vlasse numero */
$a= new Numero (-5);
$b= new Numero(100);

/*eseguo modulo sull'oggetto di tipo numro */

echo $a->modulo();
echo $a->somma(90);
?>