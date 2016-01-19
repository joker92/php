

----distanze.php----

<?php

include "database_distanze.php";


$listapartenza=array_keys($distanze);  //trova le possibili citta di partenza 
$listadestinazione=array();

// base alla citta di partenza specificata
$partenza="";
if(isset($_GET["partenza"])){
if(isset($distanze[$_GET["partenza"]])){
$partenza=$_GET["partenza"];
//trova le citta di destinazione in base alla citta do partenza specificata
$listadestinazione=array_keys($distanze[$partenza]);


  }
}


$destinazione="";
if(isset($_GET["destinazione"])){
   if(isset($distanze[$partenza][$_GET["destinazione"] ])){
	$destinazione=$_GET["destinazione"];
	
  

  }
}

$distanza="sconosciuta";
if($partenza !=""&& $destinazione !=""){
//le citta di destinazione e di partenza sono valide

	$distanza=$distanze[$partenza][$destinazione];
	

}
?>

<html>	
<body>
	<form method="get">
		<?php if($partenza ==""):?>
		seleziona citta di partenza:
		<br/><select name="partenza">
		<?php 
		foreach ($listapartenza as $c) :?>
					<option value="<?php echo $c; ?>">
    			<?php echo $c; ?>
    </option>
   
	<?php endforeach ;?>
			
		
			
</select>	
<?php else :?>
	citta di partenza:<?php echo $partenza;?>
	<br/>
	<input type="hidden" 
	value="<?echo $partenza;?>"name="partenza"></input>

<?php endif;?>
<?php if ($partenza!==""&& $destinazione=="" ):?>
	seleziona citta di destinazione:
<select name="destinazione">
		<?php 
		foreach ($listadestinazione as $c) :?>
					<option value="<?php echo $c; ?>">
    			<?php echo $c; ?>
    </option>
   
	<?php endforeach ;?>
	<?php endif;?>
	
		<input type="submit" value="next"></input>
			
</select>	
	


</form>

la distanza tra <?php echo $partenza;?> e <?php echo $destinazione;?> di <?php echo $distanza;?> km
</body>
</html>