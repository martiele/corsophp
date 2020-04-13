<?php
include("Scripts/PHP/SessionManager.php"); 

if(!$_SESSION["login"]->logged){
    header('location:Login.php');
    exit();
}
// if(isset( $_GET["name"]) ){
// 	$nome = $_GET["name"];
// 	$var_sex = $_GET["sex"];
// 	$var_msg = $_GET["messaggio"];
// 	$var_dest = $_GET["destinatario"];
// 	$elenco_interessi = $_GET["interessi"];


// 	$destinatario = "";

// 	switch($var_dest){
// 		case "0": $destinatario = "ing.martini@gmail.com";
// 			break;
// 		case "1": $destinatario = "ing.martini@gmail.com";
// 			break;
// 		case "2": $destinatario = "ing.martini@gmail.com";
// 			break;
// 	}

// 	//Converte un vettore in una stringa "incollando" tra loro gli elementi tramite una stringa data (nel nostro caso ", ")
// 	$stringa_interessi = implode(", ", $elenco_interessi);

// 	echo "Nome: " . $nome . "<br />";
// 	echo "Sesso: $var_sex <br />";
// 	echo "Messaggio: $var_msg <br />";
// 	echo "Destinatario: $destinatario <br />";
// 	echo "<br>Interessi2: ".$stringa_interessi;

// /* INVIO MAIL - inizio */
// $nome_mittente = "Giuseppe Conte";
// $mail_mittente = "g.conte@ministero.it";
// $mail_oggetto = "Lavati con l'amuchina";

// $mail_corpo = "<HTML><BODY>";
// $mail_corpo .= "Nome: " . $nome . "<br />";
// $mail_corpo .= "Sesso: $var_sex <br />";
// $mail_corpo .= "Messaggio: $var_msg <br />";
// $mail_corpo .= "Destinatario: $destinatario <br />";
// $mail_corpo .= "<br>Interessi2: ".$stringa_interessi;
// $mail_corpo .= "</BODY></HTML>";


// $mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
// $mail_headers .= 'MIME-Version: 1.0';
// $mail_headers .= 'Content-type: text/html; charset=utf-8';


// if (mail($destinatario, $mail_oggetto, $mail_corpo, $mail_headers))
//   echo "Messaggio inviato con successo a " . $destinatario;
// else
//   echo "Errore. Nessun messaggio inviato.";

/* INVIO MAIL - fine */
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link type="text/css" rel="stylesheet" href="Styles/Bundle.css" />

    <?php include("Styles/Bootstrap4.php"); ?>
    <?php include("Styles/MyStyle.php"); ?>

</head>

<body>
    <?php include("Menu.php"); ?>

    <div class="content">
        <h3>Esempio di form</h3>

        <?php
			$dest = $_SERVER['PHP_SELF'];
			//restituisce l'indirizzo della pagina corrente


			$method = "GET"; // Metodo GET oppure POST

/*
			//Stampa la variabile a video 
			var_dump($dest);

			//termina l'esecuzione
			die();
*/

		?>

        <!-- <form accept-charset="UTF-8" action="<?php echo $dest; ?>" method="<?=$method?>">
            <fieldset>
                <legend>Gruppo:</legend>
                <label for="name">Nome</label>
                <input name="name" type="text" value="" /> <br />
                <br />
                <label for="sex">Sesso</label>
                <input checked="checked" name="sex" type="radio" value="male" /> Male
                <input name="sex" type="radio" value="female" /> Female <br />
                <br />
                <textarea cols="30" rows="5" placeholder="Messaggio" name="messaggio"></textarea><br />
                <br />
                <label for="destinatario">Scrivi a:</label>
                <select name="destinatario">
                    <option selected="selected" value="0">Generale</option>
                    <option value="1">Commerciale</option>
                    <option value="2">Tecnico</option>
                </select><br />
                <br />
                <label for="interessi">Interessato a:</label> <br />
                <input name="interessi[]" type="checkbox" value="sport" /> Sport<br />
                <input name="interessi[]" type="checkbox" value="cinema" /> Cinema<br />
                <input name="interessi[]" type="checkbox" value="musica" /> Musica<br />
                <input name="interessi[]" type="checkbox" value="altro" /> Altro<br />
                <br />
                <button class="btn-danger" type="reset" value="Annulla">Annulla</button>
                <button class="btn-success" type="submit" value="Submit">Invia</button>
            </fieldset>
        </form>
    </div> -->


        <script type="text/javascript">
        $(document).ready(function() {
            setActive("#menu", 1);
        });
        </script>

</body>

</html>