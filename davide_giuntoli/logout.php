<?php

//Inizializzo la sessione... 
if (!isset($_SESSION)) { 
	session_start(); 
}

//Elimina una variabile
unset($_SESSION["login"]);


/*
unset($_SESSION["login"]["accesso"]);
unset($_SESSION["login"]["user"]);
*/



?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
</head>
<body>

<?php include("menu.php"); ?>

<h3>USCITO</h3>

<p>Sei uscito dall'area riservata</p>



</body>
</html>