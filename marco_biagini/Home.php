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
    <link type="text/css" rel="stylesheet" href="Styles/Bundle.css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="Scripts/JavaScript/Bundle.js"></script>

</head>
<body>
<?php include("Menu.php"); ?>

<div class="main-content">
    <h1>Questa è la pagina HOME</h1>
</div>

<script type="text/javascript">
$(document).ready(function(){
    setActive("#menu", 0);
});
</script>
</body>
</html>