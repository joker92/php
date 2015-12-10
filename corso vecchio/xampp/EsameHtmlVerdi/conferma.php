<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contatti</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body>
	<div id='container'> 
    	<div id="header">
        	&nbsp;<h1> SIRACUSA </h1>
        </div>
        <div id='colums1'>
        	<ul>
             <li><a href="index2.html">Home</a></li>
             <li><a href="gallery.html">Galleria</a></li>
             <li><a href="eventi.html">Eventi</a></li>
             <li>Contatti</li>
            </ul>
        </div>
        <div id='colums2'>
        CONTATTI
        <?php
	
		require "db.inc.php";

	    db_connect();

	// router applicazione
	// in base al valore di $_GET['operation']
	// fai quello che devi

// ricevo i dati di input
	$operation = $_GET['operation'] ;
	$upd = $_GET['upd'];

// in base al valore di operation:
	switch ($operation)
	 {
	 	case "insert":
  			echo "insert";
  			inserisci($_GET['nome'], $_GET['cognome'],
				       $_GET['telefono']);
			 $elenco = elenco();
  		    stampa_rubrica($elenco);
			
         break;
		default:
   		echo "<br>richiesta non ammessa";
	}
	mysql_close($link);
	echo "Connessione con il db chiusa";
}
	function elenco(){
    $sql= "SELECT Nome,Cognome,Telefono,from Rubrica order by Cognome";

 $result = mysql_query($sql);

 while($row = mysql_fetch_array($result)){
   $dati[]=$row;
}
  return  $dati;  
}
function inserisci($nome,$cognome,$tel)
{
  // inserisce nella base dati
  $sql = "INSERT INTO Rubrica (Nome,Cognome,Telefono) 
					VALUES (\"$nome\", \"$cognome\", \",\"$tel\");";


if (!mysql_query($sql)){
  die("impossibile eseguire l'operazione");


}
   return true ;
}
function stampa_rubrica($elenco){
  //è un array di array  con id nome e tel
  echo "<table border=1>";
  foreach($elenco as $record ){
    echo "<tr><td>" . $record["id"] .
         "</td><td>" . $record["Nome"] . 
         "</td><td>" . $record["Cognome"] . 
         "</td><td>" . $record["Telefono"] .
         "</td></tr>" ; 
  }
  echo "</table>";


}
?>
        </div>
        <div id='footer'>
        	<small>Copyrigth Maxcasazza</small>
        </div>
    </div>
    
</body>
</html>
