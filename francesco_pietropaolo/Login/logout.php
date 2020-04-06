<?php
  if (!isset($_SESSION)) {
    session_start();
  }
    unset($_SESSION['login']);
    session_write_close();

    //Redirect
    header("location:3-sessione.php");
    exit();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>logout</title>
  </head>
  <body>
    <?php include("menu.php") ?>
  </body>
</html>
