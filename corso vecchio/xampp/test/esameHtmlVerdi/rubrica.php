<?php
	include "lib/funzioni.php";
	include "lib/config.php";
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
	 	case "list":
	 		echo "elenco persone in rubrica";
  		   $elenco = elenco();
  		   stampa_rubrica($elenco);
		   break ;
		case "search1":
  		 	$elenco = cerca($_GET['data_nome']);
       	stampa_rubrica($elenco);
       	break ;
		case "search2":
			$elenco = cerca1($_GET['data_tel']);
			stampa_rubrica($elenco);
			break;
		case "insert":
  			echo "insert";
  			inserisci($_GET['data_nome'], $_GET['data_indirizzo'],
				       $_GET['data_tel'],$_GET['data_mail']);
		   debug($_GET, "inserisci");
         break;
		case "update":
			//echo "il nome e: ". $_GET['data_nome'];
  			if ($_GET['data_nome'] == " ")
  			{
				echo "<br>Valorizzare il campo nome";
			}
			else
			{
				//echo "<br>" . $upd;
				switch ($upd)
				{
					case "tutti":
						modifica_1($_GET['data_nome'], $_GET['data_indirizzo'],
					              $_GET['data_tel'],$_GET['data_mail']);
						break;
					case "indirizzo":
						modifica_2($_GET['data_nome'],$_GET['data_indirizzo']);
						break;
					case "telefono":
						modifica_3($_GET['data_nome'],$_GET['data_telefono']);
						break;
					case "email":
						modifica_4($_GET['data_nome'],$_GET['data_email']);
						break;
					default:
						echo "<br>campo non disponibile";
				}
			}
		case "delete":
			elimina($_GET['data_nome']);
			break;
		case "export":
			echo "under costruction!";
			esporta($exportfile);
			//$fp=open($exportfile,a+);
			break;
		case "import":
			echo "under costruction!";
			importa($importfile);
			//$fp=fopen($importfile,r);
			break;
		default:
   		echo "<br>richiesta non ammessa";
	}
	mysql_close($link);
	echo "Connessione con il db chiusa";
?>
<br/><br/>
<a href="rubrica.html"> 
	vai alla rubrica
</a>
 
