<?php

/* -- inizio commento

nomi variabile sono composti da:
$
[a-z],[A-Z],_
[a-z],[A-Z],[0-9],_

Per le URL (e quindi i nomi pagina) usare SNAKE CASE
SNAKE CASE: nome_pagina_web
CAMEL CASE: nomePaginaWeb

Per le variabili fate come vi pare...

*/ 

$var_text = "Hello World!!";
$var_text2 = 'Hello World 2!!'; 
$var_intera = 100;
$var_float = 3.53;	//Dato float con virgola mobile.
$var_bool = true;
$var_array = [1, 4, 456, 24, -23];

$corpotesto = "
<p>Ciao Daniele questa è una mail di prova...</p>
";

mail("ing.martini@gmail.com", "Email di Prova", $corpotesto, $headers );

/*
SE IL SITO FOSSE:
www.danielemartini.it

POTREI INVIARE SOLO CON MITTENTE
nomecasella@danielemartini.it

SE PROVASSI A INVIARE CON MITTENTE
ing.martini@gmail.com



*/



?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $var_text; ?> Page</title>
</head>
<body>

<h3>Pagina di esempio <?php echo $var_text; ?></h3>

<?=$var_text?>

<hr />

<?php
	prova();
?>

</body>
</html>
<?php

	function prova(){
		echo "si sto funzionando lo stesso...";
	}

?>