<?php
include "authentication.php";
include "database_prenotazione.php";

session_start();


$cinema=queryCinema(16);
$nfila="";
$nposto="";
$risultato="";
$risultatolibera="";

if(isset($_POST["nfila"]) && isset($_POST["nposto"])){
	$nfila=$_POST["nfila"];
	$nposto=$_POST["nposto"];

	if(isset($_POST["libera"])){
		$risultatolibera=$cinema->libera($nfila,$nposto);
	}
	if(isset($_POST["prenota"])){
		$risultato=$cinema->prenota($nfila,$nposto);
	}
}



if(isset($_POST["logout"])){
	session_destroy();
	header("location: /login.php");
}

?>


<html>
<body>
	<?php if(isLogged()):?>

<table  width=”75%” border="5" cellpadding="20"	cellspacing="4	" style="background-color:black">
<?php foreach ($cinema->getFile() as $fila):?> 
<tr>
			<?php foreach ($cinema->getPosti() as $posto):?> 

			
			<?php if($cinema->isPrenotato($fila,$posto)):?>
			<td> <img src="/immagini/icon.png"></td>
			
		<?php else :?>
			<td><img src="/immagini/1.png"></td>




			<?php endif;?>
		
			<?php endforeach;?>
</tr>
	<?php endforeach;?>


</table>
<br/>

<center><form method="post">
<select name="nfila">
	<?php foreach ($cinema->getFile() as $f):?>
	<option value="<?php echo $f;?>"> <?php echo $f;?>

	</option>
	<?php endforeach;?>

</select>



<select name="nposto">
	<?php foreach ($cinema->getPosti() as $p):?>
	<option value="<?php echo $p;?>"> <?php echo $p;?>

	</option>
	<?php endforeach;?>

</select>

<input type="submit" value="prenota"></input>

<input type="submit" name="libera" value="libera"></input></center>






</form>
<?php if($risultato===0):?>
il posto <?php echo $nfila;?> - <?php echo $nposto;?> e' stato prenotato con successo!!
	
<?php endif;?>
<?php if($risultato==1):?>
il posto <?php echo $nfila;?> - <?php echo $nposto;?> gia prenotato!!!

	
<?php endif;?>
<?php if($risultato==-1):?>
il posto <?php echo $nfila;?> - <?php echo $nposto;?> non e valido !!!
<?php endif;?>




<?php if($risultatolibera===1):?>
il posto <?php echo $nfila;?> - <?php echo $nposto;?> e' stato liberato!!

<?php endif;?>	


<?php else:?>
	devi fare il login per vedere questa pagina !
<?php endif;?>



<a href="login.php" target="_blank"> ritorna al login</a>

<br/>
 	<form method="post">
 		<input name="logout"type="submit" value="logout"></input>
 	</form>


</body>

</html>