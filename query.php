<?

// connessione al DB

$link=mysql_connect("a22docente","softuser","_s0ft*");
mysql_select_db("fanqook");
 //local host e la macchina dove stiamo lavorando  ....la parentesi sopra e cosa deve essrere inseire (host, nome untete, password ,db da utilizzare )


// esequzione queri 
echo "<table border=1>\n";

$query=mysql_query("SELECT login , password FROM utente");

//interazione sui riultati


while ($record=mysql_fetch_assoc($query)){
	echo "<tr>";
	echo "<td>".$record["login"]."</td>";
	echo "<td>".$record["password"]."</td>";
	
	echo "</tr>";
}