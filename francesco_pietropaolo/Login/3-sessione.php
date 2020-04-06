<?php
//Inizializzo la sessione...
if (!isset($_SESSION)) {
  session_start();
}

if( isset($_POST["name"]) ){

	//echo "CODICEEEEE";

	$correct_name = "francesco";
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
		//echo "Benvenuto $nome";

		$_SESSION["login"]["accesso"] = true;
		$_SESSION["login"]["user"] = $nome;

		//Salvo la sessione prima di un redirect
		session_write_close();

		//Redirect
		header("location:home.php");
		exit();
		//oppure die();
	} else {
		$_SESSION["login"]["accesso"] = false;
		$_SESSION["login"]["user"] = "";

	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Esempio di form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- <form accept-charset="UTF-8" action="3-sessione.php" method="POST"> -->
  <form class="box" accept-charset="UTF-8" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
  	<h1>LOGIN</h1>
  	<br />
  	<input class="nome" name="name" type="text" value="" placeholder="Username" />
  	<input class="pswd" name="pswd" type="password" value="" placeholder="Password"  />
  	<label for="ricordami">Ricordami:</label>
  	<input class="check" name="ricordami" type="checkbox" value="1" />
  	<button class="login" type="submit" value="Submit">Accedi</button>


  </form>


</body>
</html>
