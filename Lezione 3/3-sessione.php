<?php sdadsa
if( isset($_POST["name"]) ){

	//echo "CODICEEEEE";

	$correct_name = "daniele";
	$correct_pswd = md5("12345");
	//echo "pass nel DB: $correct_pswd";


	$nome = $_POST["name"];
	$pswd = $_POST["pswd"];

	/*
	SE NOME è UGUALE A NOMECORRETTO 
	E PASSOWRD = PASSWORD CORRETTA
	ALLORA DICI BENVENUTO
	ALTRIMENTI DICI NONE...
	*/
	if ( ($correct_name == $nome) && ($correct_pswd == md5($pswd)) ) { 
		echo "Benvenuto $nome"; 
	} else { 
		echo "Accesso non corretto"; 
	} 



}


?><!DOCTYPE html>
<html>
<head>
	<title>Esempio di form</title>
</head>
<body>

<h3>Esempio di form</h3>

<!-- <form accept-charset="UTF-8" action="3-sessione.php" method="POST"> -->
<form accept-charset="UTF-8" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
	<fieldset>
	<legend>Login:</legend>
	<br />
	<label for="name">Username: </label> 
	<input name="name" type="text" value="" /> <br /> 
	<br />
	<label for="pswd">Password: </label> 
	<input name="pswd" type="password" value="" /> <br /> 
	<br />
	<label for="ricordami">Ricordami:</label> 
	<input name="ricordami" type="checkbox" value="1" /> <br /> 
	<br /> 	
	<button type="submit" value="Submit">Accedi</button>
	</fieldset>
</form>


</body>
</html>
