<?php

$login_success = true;
$login_message = "";

if(isset($_POST["name"]) && isset($_POST["pswd"])){
	$check_access = "Marco" . md5("12345");
	
	$nome = $_POST["name"];
	$password = $_POST["pswd"];
	
	$access = $nome . md5($password);
	
	if($check_access != $access){
		$login_success = false;
	}

}else{
	$login_success = false;
}

if($login_success){
	echo("Benvenuto ". $nome . "!");
}else{
	echo("None");
	$login_message = "Utente non riconosciuto, modifica l'utente o la password.";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Esempio di form</title>
</head>
<body>

<h3>Esempio di form</h3>

<form accept-charset="UTF-8" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
	<label style="color: red; font-size: 500; margin-top: 1em;"><?php $login_message ?></label>
</form>

</body>
</html>
