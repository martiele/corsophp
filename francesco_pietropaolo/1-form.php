<?php


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
echo "Interessi: $elenco_interessi";

$destinatario = "";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Esempio di form</title>
</head>
<body>

<h3>Esempio di form</h3>

<p>ciao... edit by Daniele</p>
<p>by Rocco</p>

<form accept-charset="UTF-8" action="action_page.php" method="GET">
	<fieldset>
	<legend>Gruppo:</legend>
	<label for="name">Nome</label>
	<input name="nomepersona" type="text" value="" /> <br />
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


</body>
</html>
