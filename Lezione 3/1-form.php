<?php

//Funzione isset()
// ci dice se una variabile esiste ed è stata inizializzata o meno

if(isset( $_GET["name"]) ){
	//Questo viene eseguito solo se il form è stato inviato ed è presente
	//almeno il nome dell'utente

	$nome = $_GET["name"];
	$var_sex = $_GET["sex"];
	$var_msg = $_GET["messaggio"];
	$var_dest = $_GET["destinatario"];
	$elenco_interessi = $_GET["interessi"];

	echo "Nome: " . $nome . "<br />";

	echo "Sesso: $var_sex <br />";
	//STRINGA DEVE ESSERE TRA DOPPI APICI
	//LA VARIABILE DEVE ESSERE UNA VARIABILE "SEMPLICE"	

	echo "Messaggio: $var_msg <br />";

	$destinatario = "";
	

	if($var_dest=="0"){
		$destinatario = "info@itsprime.it";
	}else if($var_dest=="1"){
		$destinatario = "commerciale@itsprime.it";
	}else if($var_dest=="2"){
		$destinatario = "tecnico@itsprime.it";
	}

	switch($var_dest){
		case "0": $destinatario = "info@itsprime.it";
			break;
		case "1": $destinatario = "commerciale@itsprime.it";
			break;
		case "2": $destinatario = "tecnico@itsprime.it";
			break;
	}

	echo "Destinatario: $destinatario <br />";
	/*
	ARRAY SEQUENZIALE
	echo $elenco_interessi[0];
	echo $elenco_interessi[1];
	echo $elenco_interessi[2];
	*/

	/*
	$nelementi = count($elenco_interessi);
	for($i=0; $i<$nelementi; $i++){
		echo $elenco_interessi[$i]. "<br />";
	}
	*/

	$interessi = "Interessi selezionati: ";
	foreach ($elenco_interessi as $valore) {
		//echo $valore . "<br />";
		//$interessi = $interessi . $valore . " ";
		//Come sopra ma più meglio ;-)
		$interessi .= $valore . ",";
	}
	$interessi = substr($interessi, 0 , -1);
	echo $interessi;

	$stringa_interessi = implode(", ", $elenco_interessi);
	echo "<br>Interessi2: ".$stringa_interessi;

	//https://www.php.net/manual/en/function.implode.php


	/*
	var_dump($_GET);
	//termina
	die();
	*/


	/*
	foreach ($_GET as $key => $value) {
		echo "<br />";
		var_dump($value);
	}
	die();
	*/

}

?><!DOCTYPE html>
<html>
<head>
	<title>Esempio di form</title>
	<!-- link rel="stylesheet" type="text/css" href="mystyle.css" -->
</head>
<body>

	<div class="content">
		<h3>Esempio di form</h3>

		<?php
			$dest = $_SERVER['PHP_SELF'];
			//restituisce l'indirizzo della pagina corrente


			$method = "GET"; // Metodo GET oppure POST

/*
			//Stampa la variabile a video 
			var_dump($dest);

			//termina l'esecuzione
			die();
*/

		?>

		<form accept-charset="UTF-8" 
		action="<?php echo $dest; ?>" method="<?=$method?>">
			<fieldset>
			<legend>Gruppo:</legend>
			<label for="name">Nome</label> 
			<input name="name" type="text" value="" /> <br /> 
			<br />
			<label for="sex">Sesso</label> 
			<input checked="checked" name="sex" type="radio" value="male" /> Male  
			<input name="sex" type="radio" value="female" /> Female <br />  
			<br />  
			<textarea cols="30" rows="5" placeholder="Messaggio" name="messaggio"></textarea><br /> 
			<br />  	
			<label for="destinatario">Scrivi a:</label> 
			<select name="destinatario">
				<option selected="selected" value="0">Generale</option>
				<option value="1">Commerciale</option>
				<option value="2">Tecnico</option>
			</select><br /> 
			<br /> 
			<label for="interessi">Interessato a:</label> <br />
			<input name="interessi[]" type="checkbox" value="sport" /> Sport<br /> 
			<input name="interessi[]" type="checkbox" value="cinema" /> Cinema<br /> 
			<input name="interessi[]" type="checkbox" value="musica" /> Musica<br /> 
			<input name="interessi[]" type="checkbox" value="altro" /> Altro<br /> 
			<br /> 	
			<button type="reset" value="Annulla">Annulla</button>
			<button type="submit" value="Submit">Invia</button>
			</fieldset>
		</form>	
	</div>



</body>
</html>
