
<?php
include "database_prenotazione.php";


?>




<html>	
<body>
	<table width=”75%” border="5" cellpadding="10"	cellspacing="2", style="background-color:red">
<tr>
		<?php for($i=1; $i<=10 ;$i++):?>
	<td>
	<?php echo $i ;?>
	</td>

<?php endfor;?>
</tr>
<?php foreach ($posti as $postiocccupati):?> 
	<tr>
		<?php for($i=1; $i<=10 ;$i++):?>
	<td>
	<?php	if(isset($postiocccupati [$i]))
		echo "X" ;
		else
			echo "-";
	?>
	</td>

<?php endfor;?>
</tr>
<?php endforeach;?>


	</table>