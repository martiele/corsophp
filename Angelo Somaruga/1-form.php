<!DOCTYPE html>
<html>
<head>
	<title>SOMA MOTORSPORT</title>
</head>
<body>
	<h3>FAI SGOMMARE LE TUE PASSIONI</h3>
	<form accept-charset="UTF-8" action="action_page.php" method="GET">
	<FIELDSET>
	<br>
	<label for="nome">Username: </label> 
	<input name="nome" type="text" value="" /> <br /> 
</br>
<label for="SESSO">Sesso</label> 
	<input name="SESSO" type="radio" value="MASCHIO" /> Maschio 
	<input name="SESSO" type="radio" value="FEMMINA" /> Femmina <br />  
	<br /> 
	<TEXTAREA cols="100" raws="10" placeholder="messaggio" nome="messaggio"></TEXTAREA><br />
	<br />
<label for="destinatario">scrivi a:</label>
<select name="destinatario">
	<option value="0">IL SOMA IN PERSONA</option>
	<option value="1">altro tizio</option>
</select><br />
<br />
<label for="interessato_a">interessato a</label><br />
<input type="checkbox" name="interessato_a" value="moto">moto<br />
<input type="checkbox" name="interessato_a" value="auto">auto<br />
<input type="checkbox" name="interessato_a" value="altro">altro<br />
	<button type="reset" value="Annulla">Annulla</button>
	<button type="submit" value="Submit">Invia</button>
</FIELDSET>
</form>
</body>
</html>