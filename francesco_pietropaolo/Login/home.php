<?php
  if (!isset($_SESSION)) {
    session_start();
  }
?>
<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>home</title>
  </head>
  <body>
        <p>Benvenuto!!!</p>
    <?php include("menu.php")?>
    <?php
      if (isset($_SESSION["login"])) {
        ?>
        <style>
          li.loginpage {
            display:none;
          }
          li.homepage {
            display:none;
          }
        </style>
     <?php } ?>

  </body>
</html>
