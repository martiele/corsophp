<?php
include("Scripts/PHP/dati_profilo.php");
include("Scripts/PHP/SessionManager.php"); 

if(!$_SESSION["login"]->logged){
    header('location:Login.php');
    exit();
}
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilo</title>
    <link type="text/css" rel="stylesheet" href="Styles/Bundle.css" />

    <?php include("Styles/MyStyle.php"); ?>
    <?php include("Styles/Bootstrap4.php"); ?>

</head>

<body>
    <?php include("Menu.php"); ?>

    <div class="content">
        
        <h3>Profilo utente</h3>

        <p>
        <?php
            //Recuperare nome file (e percorso)

            //Controllare che il file esista
            if(file_exists($file_immagine) 
                && (is_file($file_immagine))
            ){

                //Risolvo il problema cache sull'immagine
                $file_immagine .= "?".rand(0, 9999);

                // Se esiste visualizzarlo
                echo "<img src='$file_immagine' style='max-width:300px;' />";
            }else{
                echo "Foto profilo non trovata";
            }

        ?>
        </p>

        <p>
        <?php
            //Recuperare nome file (e percorso)
            // $file_descrizione

            //Controllare che il file esista
            if(file_exists($file_descrizione) 
                && (is_file($file_descrizione))
            ){
                $desc = file_get_contents($file_descrizione);

                //nl2br => converte gli "accapo" in "<br>"
                echo nl2br($desc);
            }else{
                echo "Descrizione non trovata";
            }
            //Se esiste leggerlo e visualizzare contenuto
        ?>
        </p>
        <p>
            <button onclick="location.href='Profilo_edit.php';" class="miobutton">modifica profilo</button>
        </p>

    </div>


    <script type="text/javascript">
    $(document).ready(function() {
        setActive("#menu", 1);
    });
    </script>

</body>

</html>