<?php

$prendi_nome = $_GET["nome_utente"];
$prendi_sesso = $_GET["sesso"];
$prendi_messaggio = $_GET["messaggio"];
$prendi_destinatario = $_GET["destinatario"];

?>

<h2>La risposta</h2>

Il tuo nome è: <?=$prendi_nome?>
<br>
Il tuo sesso è: <?=$prendi_sesso?>
<br>
Il messaggio inviato è: <?=$prendi_messaggio?>
<br>
Il destinatario è: <?=$prendi_destinatario?>

