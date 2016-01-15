<html>
ribalta :
	<form method="get">
		<input name="stringa" type="text" size="5"></input>
		
		<!--<input name="receipt" type="text"></input>	-->	
		<input type="submit" value="ribalta"/>
	</form>
</html>



<?php

include"libreria_classi.php";

$a =new mystring($_GET["stringa"]);
 echo $a->ribalta(); 



?>