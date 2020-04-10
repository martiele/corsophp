<?php

require_once("db.php");


	//Codice eliminazione record (e redirect a index.php)
if( isset($_GET) && isset($_GET["id"]) && ($_GET["id"]>0)  ){

	$id_to_delete = $_GET["id"];
	

	$query = "DELETE FROM `posts` WHERE `posts`.`id` = ?";
	$result = $conn->prepare($query);
	$result->execute([$id_to_delete]);

	/*
	$array_param = [
		"id_to_delete" => $id_to_delete,
		"altroparametro" => "parametro inutile ciaone",
		"id_inutile" => 45
	];
	$query = "DELETE FROM `posts` WHERE `posts`.`id` = :id_to_delete";
	$result = $conn->prepare($query);
	$result->execute($array_param);
	*/






	//a questo punto ho eliminato il record dal db

}

header("location:index.php");
exit();

?>