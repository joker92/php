

<!--funzione di autenticazione :
file authentication.php-->





<?php

function verifica($user , $pass){
$utenti=array(
		array("andrea","ciao"),
		array("giuseppe","stocazzo"),
		array("kikko","ciccio")

	);

	foreach($utenti as $u){
		if($user ==$u[0]&& ($pass) ==$u[1]){                  //md5($pass)al posto di($pass) per le password non in chiaro (stocazzo)=("374fdbaf20024a41e42c2e7f79f3e38c")
			return true ;
		}
	}	

	 return false;

}
function isLogged(){
	//session_start();
	if(isset($_SESSION["login_user"])&& $_SESSION["login_user"]!=""){
		return true;
	}else{
		return false ;	
	}

}

?>


