	<?php
// connessione al DB

$link=mysql_connect("a22docente","softuser","_s0ft*");
mysql_select_db("fanqook");
 //local host e la macchina dove stiamo lavorando  ....la parentesi sopra e cosa deve essrere inseire (host, nome untete, password ,db da utilizzare )

/*
// esequzione queri 
echo "<table border=1>\n";

$query=mysql_query("SELECT login , password FROM utente");

//iterazione sui riultati


while ($record=mysql_fetch_assoc($query)){
	echo "<tr>";
	echo "<td>".$record["login"]."</td>";
	echo "<td>".$record["password"]."</td>";
	
	echo "</tr>";
}
echo "</table>\n";
*/



//controllo se l utente ha invia la from 
if(isset($_REQUEST["azione"])){
if($_REQUEST["azione"]=="Invia"){
	mysql_query("INSERT INTO post(utente,titolo,testo)
		VALUES(".$_REQUEST["id_utente"].","."'".$_REQUEST["titolo"]."',"."'".$_REQUEST["post"]."'".
")"
	);
}
}

echo "<table border=1>\n";

$query=mysql_query("SELECT post.id,date_format(dataora,'%e/%m/%Y %T')AS dataora,".
	" utente.login,titolo ".
	" FROM post JOIN utente ON post.utente=utente.id ".
	"ORDER BY dataora DESC LIMIT 10");

//iterazione sui riultati
echo "<table border=1>\n";
echo "<tr><th>Data e ora </th><th>titolo</th><th>utente</th></tr>\n";

while ($record=mysql_fetch_assoc($query)){
	echo "<tr>";
	echo "<td>".$record["dataora"]."</td>";
	echo "<td><A href='?post=".$record["id"]."'>".$record['titolo']."</A></td>";
	echo "<td>".$record["login"]."</td>";
	
	
	echo "</tr>";

}
echo "</table>\n";
echo "<br>\n";


//post per invio
echo "<form method='post'>\n";



echo "<select name='id_utente'>\n";


//menu  con loghi value=id
$query=mysql_query("SELECT id , login FROM utente");


while($record=mysql_fetch_assoc($query)){


echo "<option value='".$record["id"]."''>";
echo $record["login"];
echo "</option>\n";
}
echo "</select>\n";

//casellla di testo per il titolo


echo "<input type='text'name='titolo'>\n";
echo "<br/>\n";

//area testo 

echo "<textarea name='post' cols=80 rows=20> </textarea>\n";
echo "<br/>";

//testo submit



echo "<input type='submit' name='azione' value='Invia'>\n";
echo "<br/>\n";









?>