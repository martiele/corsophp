<?php 
include("SessionManager.php"); 

session_destroy();
header('location:../../Login.php');

?>