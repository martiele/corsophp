<?php
include("Scripts/PHP/SessionManager.php"); 

if(!$_SESSION["login"]->logged){
    header('location:Login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sito Web Meraviglioso</title>
    
    <?php include("Styles/Bootstrap4.php"); ?>
    <?php include("Styles/MyStyle.php"); ?>

</head>

<body>
    <?php include("Menu.php"); ?>

    <div class="main-content">
        <h1>Questa è la pagina HOME</h1>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        setActive("#menu", 0);
    });
    </script>
</body>

</html>