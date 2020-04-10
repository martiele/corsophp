<?php
	require_once("db.php");

	//prima devo aver aperto la connessione al db
	$sql = "SELECT * FROM posts ORDER BY post_at DESC, id DESC";

	$result = $conn->prepare($sql);
	$result->execute($params);

	//Apri un file in scrittura
	$file_aperto = fopen('export_posts.csv', 'w');


	if ($result->rowCount() > 0) {
	    // se voglio “ciclare” tutti i risultati posso farlo così:
	    while($row = $result->fetch(PDO::FETCH_ASSOC) ) {

	    	fputcsv($file_aperto, $row);

		}
	}

    header("location:index.php");
    exit();   



?>