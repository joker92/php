<html>

<form method="get" action="bonusquestion.php">

<input type="text" name="lingua"></input>
<input type="submit" value="submit"/>

</form>

<?php	
   $lingue=[ "en", "es", "it" ];
	$ls="it"
	if (isset($_GET["lingua"])){
		if (isset$_GET["lingua"] in_array $lingue) 
		{
		$ls=$_GET["lingua"];
		}
		}
   // definizione dei dati
   
   $titolo=
      [ "it" => "I miei animali preferiti",
        "en" => "My favourite animals",
        "es" => "Mis animales favoritos" ];
   $parole=[];
   $parole["parola1"]=
      [ "it" => "gatto", "en" => "cat", "es" => "gato" ];
   $parole["parola2"]=
      [ "it" => "cane", "en" => "dog", "es" => "perro" ];
   $parole["parola3"]=
      [ "it" => "pipistrello", "en" => "bat", "es" => "murcielago"
];
   // logica del programma
   //foreach ($lingue as $l) {
      echo $titolo[$ls];
      echo "<br/>";
      foreach ($parole as $parolamultilingua) 
{
         echo $parolamultilingua[$ls];
         echo "<br/>";
      }
//}
 ?>

</html>
