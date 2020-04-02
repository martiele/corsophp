<?php

$_name = $_GET["name"];
$_message = $_GET["messaggio"];

if($_name == ""){
    $_name = "Non hai inserito alcun nome :(";
}
if($_message == ""){
    $_message = "Nessun messaggio da trasmettere, non sei abbastanza importante!";
}

$_gender = $_GET["sex"];
$_receiver = $_GET["dest_value"];

$_interest_list = "";
if(isset($_GET["interessi"])){
    $_interests = $_GET["interessi"];
    $_temp = "";
    foreach($_interests as $selected){
        $_temp .= $selected . ", ";
    }
    $_interest_list = substr($_temp, 0, -2);
}else{
    $_interest_list = "Non hai interessi...che tristezza..";
}

?>

<h1>La risposta</h1>

<div style="border: solid 2px black; padding: 1em;">
<ul>
    <li><b>Il tuo nome è:</b> <?=$_name?></li>
    <li><b>Il tuo sesso:</b> <?=$_gender?></li>
    <li><b>Messaggio:</b> <?=$_message?></li>
    <li><b>Destinatario:</b> <?=$_receiver?></li>
    <li><b>I tuoi interessi:</b> <?=$_interest_list?></li>
</ul>
</div>