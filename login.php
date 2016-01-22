 <!--login.php-->




 <?php


include "authentication.php";
session_start();


$errore=false;

if(isset($_POST["user"])&& isset($_POST["password"])&& $_POST["user"] !="" 
&& $_POST["password"]!=""){
		if(verifica($_POST["user"], $_POST["password"])){
			
			$_SESSION["login_user"]=$_POST["user"];

			header("location: /prenotazioni3.php");   //una volta autenticato il login questo codice ti apre una pagina che vuoi tu 
			
		}else{
			$errore=true;
		}

}

 ?>





 <html>
 <body style="background-color:#D2B48C">
 	<?php if(isLogged()):?>
 		Buongiorno faccia di cazzo
 	<?php else :?>


<center><div  	style="border:2px solid black; width:250px;height:350px ;background-color:#3985b8;box-shadow:24px 20px 24px 0px rgba(0,0,0,0.79);border-radius:10px">
 	<form method="post" style="margin-top:100px">
		<center>USER:<br/><input name="user" type="text"></input><br/>
 		<br/>PASSWORD:<br/><input name="password" type="password"></input><br/>
 		<br/><input type="submit" value="login"></input></center>
 	</form>
<?php if($errore):?>
<b><font color=pink>username e password errati</b></font>
<?php endif;?>	
 </div></center>
<?php endif ?>

 </body>
 </html>




