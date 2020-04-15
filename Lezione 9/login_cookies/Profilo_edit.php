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
        <br />
        <br />
        <br />
        <br />
        <h3>Form di gestione profilo</h3>

    </div>


    <script type="text/javascript">
    $(document).ready(function() {
        setActive("#menu", 1);
    });
    </script>

</body>

</html>