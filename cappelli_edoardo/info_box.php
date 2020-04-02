
<?php
if(isset($g_GET["nome_utente"])){
	$nome=$_GET["nome_utente"];
	$sesso=$_GET["sesso"];
	$messaggio=$_GET["messaggio"];
	$destinatario=$_GET["destinatario"];
		
	echo "Nome: " . $nome;
	echo "<br />";
	echo $sesso;
	echo "<br />";
	echo $messaggio;
	echo "<br />";
	echo $destinatario;

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Esempio di form</title>
</head>
<body>

<h3>Esempio di form</h3>

<form accept-charset="UTF-8" action="data_output.php" autocomplete="off" method="GET">
	<fieldset>
	<legend>Gruppo:</legend>
	<label for="nome_utente">Nome</label> 
	<input name="nome_utente" type="text" value="" /> <br /> 
	<br />
	<label for="sesso">Sesso</label> 
	<input checked="checked" name="sesso" type="radio" value="Maschio" /> Maschio  
	<input name="sesso" type="radio" value="Femmina" /> Femmina <br />  
	<br />  
	<textarea cols="30" rows="5" placeholder="Messaggio" name="messaggio"></textarea><br /> 
	<br />  	
	<label for="destinatario">Scrivi a:</label> 
	<select name="destinatario">
		<option selected="selezione" value="Generale">Generale</option>
		<option value="Commerciale">Commerciale</option>
		<option value="Tecnico">Tecnico</option>
	</select><br /> 
	<br /> 
	<label for="hobby">Interessato a:</label> <br />
	<input name="hobby[]" type="checkbox" value="sport" /> Sport<br /> 
	<input name="hobby[]" type="checkbox" value="cinema" /> Cinema<br /> 
	<input name="hobby[]" type="checkbox" value="musica" /> Musica<br /> 
	<input name="hobby[]" type="checkbox" value="altro" /> Altro<br /> 
	<br /> 	
	<button type="reset" value="Annulla">Annulla</button>
	<button type="submit" value="Invia">Invia</button>
	</fieldset>
</form>


</body>
</html>
