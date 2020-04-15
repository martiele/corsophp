<?php
include("Scripts/PHP/dati_profilo.php");
include("Scripts/PHP/SessionManager.php"); 

if(!$_SESSION["login"]->logged){
    header('location:Login.php');
    exit();
}



$target_dir = $directory; // "uploads/";
$uploadOk = 0;

$target_file = $target_dir . basename(
    $_FILES["fotoprofilo"]["name"]
);
$target_file = $file_immagine; // public/uploads/profilo.jpg

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//SE HO INVIATO IL FORM, CONTROLLO I DATI E FACCIO L'UPLOAD E TUTTO IL RESTO
if(isset($_POST["submit"])) {
    // Controllo che il file sia veramente un’immagine
    $check = getimagesize($_FILES["fotoprofilo"]["tmp_name"]);
    if($check !== false) {
        echo "Il file è un’immagine - " . $check["mime"] . ".";         
        $uploadOk = 1;
    } else {
        echo "Il file non è un’immagine.";
        $uploadOk = 0;
    }

    //altri controlli sul file...

    if ($uploadOk == 0) {   // Controllo se $uploadOk è uguale a 0 comunico l’errore
        echo "Spiacente, il file non è stato caricato.";
    } else {        
        // Se invece è tutto ok, tento di caricare il file
        if ( move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ) {
                header("location:Profilo.php");
                exit;
        } else {
                echo "Spiacente, si è verificato un errore caricando il file.";
        }
    }

    die();


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
        <h3>Form di gestione profilo</h3>

        <form action="" method="post" enctype="multipart/form-data">

            <label for="fotoprofilo">Foto profilo: </label>
            <input type="file" name="fotoprofilo">
            <br />
            <br />
            <label for="descrizione">Descrizione: </label>
            <textarea name="descrizione" rows="5" cols="48">
            </textarea>
            <br />
            <br />
            <input type="submit" name="submit" value="Invia">

        </form>

    </div>


    <script type="text/javascript">
    $(document).ready(function() {
        setActive("#menu", 1);
    });
    </script>

</body>

</html>