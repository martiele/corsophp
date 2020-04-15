<?php 
include("SessionManager.php"); 

session_destroy();
//unset($_SESSION["login"]);

//Distruggere i cookies
setcookie("username", "", time() +36000 );
setcookie("access", "", time() +36000  );

//session_write_close();


header('location:../../Login.php');

?>