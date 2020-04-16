<?php 
include("SessionManager.php"); 

session_destroy();
//unset($_SESSION["login"]);


//Distruggere i cookies
setcookie("username", "", time() - 36000, "/");
setcookie("access", "", time() - 36000, "/" );
//Se non specifico l'ultimo parametro, il cookie viene cercato nella cartella dello script PHP stesso. In questo caso in "/Script/PHP" 



header('location:../../Login.php');

?>