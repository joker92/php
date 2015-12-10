<?php

$config['db']=array(
  "server"=>"localhost",
  "user"=>"root",
  "db"=>"test");




function db_connect(){
 global $config;

	$link= mysql_connect(
  $config['db']['server'],
  $config['db']['user']);

	if(!$link){ 
	  die("impossibile collegarsi al server ". $config['db']['server'] . " con utente {$config['db']['server']}");
	}
	else {
	  echo "connessione avvenuta <br>";
	  
	}

	 $selected=mysql_select_db($config['db']['db'], $link);

	if(!$selected){
	  die("impossibile selezionare il database {$config['db']['db']}");
	}
	else {
	  echo " selezione avvenuta<br>";
	}

}

//mysql_close($link);
