<?php
//Inizializzo la sessione... 
if (!isset($_SESSION)) { 
	session_start(); 
}


if($_SESSION["login"]["accesso"] != true){
	
	echo "Pagina riservata!!";

	//Interrompo esecuzione
	die();

}



?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
</head>
<body>

<?php include("menu.php"); ?>

<h3>AREA RISERVATA</h3>

<p>Segreti segretissimi...</p>



</body>
</html>