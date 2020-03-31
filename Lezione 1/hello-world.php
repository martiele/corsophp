<?php

	//Inserisco il messaggio in una variabile
	$messaggio = "Hello Wolrd!";

	/*
	Dopodiché lo stampo nella pagina nei 2 modi previsti da PHP
	1 - versione estesa con funzione "echo"
	2 - versione rapida
	*/

?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $messaggio; ?></title>
</head>
<body>

	<h3><?=$messaggio?></h3>

</body>
</html>