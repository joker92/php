<html>
inserisci il tuo numero per elevarlo al quadrato: 

	<form method="get">
		<input name="quadrato" type="text"></input>
		
		<!--<input name="receipt" type="text"></input>	-->	
		<input type="submit"/>
	</form>
</html>



<?php
$a= $_GET["quadrato"];
class Quadrato {
	
	private $n;
	public function __construct($quadrato){
	$this->n=$quadrato;
}


public  function quadrato()
{
	return $this->n * $this->n; 
	}
}

 $a =new quadrato($_GET["quadrato"]);
 echo $a->quadrato(); 