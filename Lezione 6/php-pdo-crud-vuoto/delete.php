<?php

require_once("db.php");


	//Codice eliminazione record (e redirect a index.php)
if( isset($_GET) && isset($_GET["id"]) && ($_GET["id"]>0)  ){

	$id_to_delete = $_GET["id"];
	//$query = "DELETE FROM `posts` WHERE `posts`.`id` = " . $id_to_delete;
	$query = "DELETE FROM `posts` WHERE `posts`.`id` = $id_to_delete";

	$result = $conn->prepare($query);
	$result->execute();

	//a questo punto ho eliminato il record dal db

}

header("location:index.php");
exit();


?>