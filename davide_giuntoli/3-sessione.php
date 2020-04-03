<?php
if (!isset($_SESSION)) {
  session_start();
}
if (isset ($_POST["name"])) {
	// code
$correct_name = "davide";
$correct_pswd = md5("12345");

$nome = $_POST ["name"];
$pswd = $_POST ["pswd"];


  if ( ($correct_name == $nome) && ($correct_pswd == md5($pswd)) ) {
          echo "Benvenuto";
          $_SESSION ["login"]["accesso"] = true;
          $_SESSION ["login"]["user"] = $nome;
      } else {
          echo "none";
          $_SESSION ["login"]["accesso"] = false;
          $_SESSION ["login"]["user"] = "";
      }
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Esempio di form</title>
</head>
<body>
<?php include("menu.php") ?>
<h3>Esempio di form</h3>

<form accept-charset="UTF-8" action="3-sessione.php" method="POST">
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