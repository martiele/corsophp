<?php

$prendi_nome = $_GET["nome_utente"];
$prendi_sesso = $_GET["sesso"];
$prendi_messaggio = $_GET["messaggio"];
$prendi_destinatario = $_GET["destinatario"];
$interessi="Interessi selezionati: ";
foreach ($elenco_interessi as $valore){
    $interessi .=$valore .",";
}
$interessi = substr($interessi, 0 , -1);

?>

<h2>La risposta</h2>

Il tuo nome è: <?=$prendi_nome?>
<br>
Il tuo sesso è: <?=$prendi_sesso?>
<br>
Il messaggio inviato è: <?=$prendi_messaggio?>
<br>
Il destinatario è: <?=$prendi_destinatario?>
<br>
Gli interessi sono: <?=$interessi?>;



<?php
$nome_mittente = "Edoardo Cappell";
$mail_mittente = "pippo@gmail.com";
$mail_oggetto = "messaggio dal form del sito";
$mail_corpo ="";
$mail_corpo .="Nome: ". $prendi_nome . "<br />";
$mail_corpo .="Sesso: ". $prendi_sesso . "<br />";
$mail_corpo .="Messaggio: ". $prendi_messaggio . "<br />";
$mail_corpo .="Destinatario: ". $prendi_destinatario . "<br />";
$mail_corpo .="Interessi: ". $interessi . "<br />";

$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
$mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
$mail_headers .= "X-Mailer: PHP/" . phpversion();

if (mail($prendi_destinatario, $mail_oggetto, $mail_corpo, $mail_headers))
  echo "Messaggio inviato con successo a " . $mail_destinatario;
else
  echo "Errore. Nessun messaggio inviato.";

?><!DOCTYPE html>
<html>
<head>
	<title>Invio mail</title>
</head>
<body>

<h3>Invio mail</h3>
<p>Invio mail test</p>

</body>
</html>


