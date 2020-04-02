<?php
if(isset($_GET["name"])){
	var_dump($_GET);
	foreach ($_GET as $key => $value) {
		echo "<br />";
		var_dump($value);
	}
	die();
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
			$method = "GET"; // Metodo GET oppure POST

			/*
			var_dump($dest);
			die();
			*/
		?>

		<form accept-charset="UTF-8" action="<?php echo $dest; ?>" autocomplete="off" method="<?=$method?>">
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
