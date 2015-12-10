<html>
<body>

<?php
	include("azienda_class.php");
	include("api.php");
?>


<h1>Elenco aziende</h1>


<table>


<?php
	foreach ($aziende as $a) {
		echo "<tr>";

		echo "<td>";
		echo $a->nome;
		echo "</td>";

		echo "</tr>";
	}

?>



</table>


</body>
</html>
