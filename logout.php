


<!--logout.php-->

<?php

session_Start();
$nomeutente="non hai una seissione attiva";
if(isset($_SESSION["login_user"])&& $_SESSION["login_user"]!=""){
	$nomeutente=$_SESSION["login_user"];

}
if(isset($_POST["logout"])){
	session_destroy();
}

?>



<html>
 <body>

Buongiorno <?php echo $nomeutente ?>
<br/>
 	<form method="post">
 		<input name="logout"type="submit" value="logout"></input>
 	</form>

<a href="login.php" target="_blank"> ritorna al login</a>
 </body>
 </html>
