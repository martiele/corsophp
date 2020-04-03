<?php

$mionome = $_GET["nomepersona"];
$sex = $_GET["sex"];
/*
$messaggio = $_GET["messaggio"];

$interessi = $_GET["interessi"];

echo "Nome: " . $nome . "<br />";

echo "Sesso: $var_sex <br />";
//STRINGA DEVE ESSERE TRA DOPPI APICI
//LA VARIABILE DEVE ESSERE UNA VARIABILE "SEMPLICE"
*/

$nome = $_GET["nomepersona"];
$var_sex = $_GET["sex"];
$var_msg = $_GET["messaggio"];
$var_dest = $_GET["destinatario"];
$elenco_interessi = $_GET["interessi"];

echo "Nome: " . $nome . "<br />";

echo "Sesso: $var_sex <br />";
//STRINGA DEVE ESSERE TRA DOPPI APICI
//LA VARIABILE DEVE ESSERE UNA VARIABILE "SEMPLICE"

echo "Messaggio: $var_msg <br />";
$interessi = "Interessi selezionati: ";
foreach ($elenco_interessi as $valore) {
  //echo $valore . "<br />";
  //$interessi = $interessi . $valore . " ";
  //Come sopra ma più meglio ;-)
  $interessi .= $valore . ",";
}

$stringa_interessi = implode(", ", $elenco_interessi);
echo "<br>Interessi2: ".$stringa_interessi;
?>

<h2>La risposta</h2>

Il tuo nome è: <?=$mionome?> <br/>
Il tuo sesso è: <?=$sex?> <br/>
