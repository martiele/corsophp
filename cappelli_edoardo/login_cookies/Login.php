<?php
include("Scripts/PHP/SessionManager.php"); 

$login = new login("", false);

$login_success = true;
$login_cookies = false;
$login_message = "";
$access = "";

$check_access = "Marco" . md5("12345");

/*
var_dump($_COOKIE);
die();
*/

if(isset($_COOKIE["username"]) && isset($_COOKIE["access"]) ){
    $user = $_COOKIE["username"];
    $access = $_COOKIE["access"];

    if( ($user!="") && ($access==$check_access) ){
        //login corretto
        $login_cookies = true;
    }

}

//Controllo che il form sia stato inviato
if(isset($_POST["name"]) && isset($_POST["pswd"])){    
    
    $nome = $_POST["name"];
    $password = $_POST["pswd"];
    
    $access = $nome . md5($password);
    
    // echo "$check_access = $access";

    if($check_access != $access){
        $login_success = false;
    }

}else{
    $login_success = false;
}

if(($login_success)||($login_cookies)){

    $login->set_name($_POST["name"]);
    $login->set_logged(true);

    if( (isset($_POST["ricordami"])) && 
        ($_POST["ricordami"]=="1") ){

        //Se non specifico l'ultimo parametro, il cookie viene assegnato alla directory corrente, per sicurezza conviene specificare la root del dominio stesso col parametro "/" che nel nostro caso corrisponde a "localhost" 
        setcookie("username", $nome, time() + 2592000, "/" );
        setcookie("access", $access, time() + 2592000, "/" );      
    }

    save_login($login);
    header('location:Home.php');
    exit();

}else{
    if(isset($_POST["name"]) && isset($_POST["pswd"])){
        $put_alert = true;
    }
    save_login($login);
}

?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <?php include("Styles/MyStyle.php"); ?>
    <?php include("Styles/Bootstrap4.php"); ?>

</head>
<body class="">
    <?php 
    if($put_alert){
        alert("Utente non riconosciuto, il campo utente o la password non sono corretti.", "Accesso Negato", "danger");        
    }
    ?>

    <?php include("Menu.php"); ?>

    <div class="log-container">
        <div class="log-left"></div>
        <div class="log-right">

            <form accept-charset="UTF-8" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <h1>Login</h1>
                <br />
                <label for="name"><strong>Username </strong></label> <br />
                <input name="name" type="text" value="" required /> <br />
                <br />
                <label for="pswd"><strong>Password </strong></label> <br />
                <input name="pswd" type="password" value="" required /> <br />
                <br />
                <a for="ricordami" onclick="$('#cbx_remember').attr('checked', !$('#cbx_remember').attr('checked'))"
                    style="cursor: pointer;"><strong>Ricordami </strong></a>
                <input id="cbx_remember" name="ricordami" type="checkbox" value="1" checked /> <br />
                <br />
                <button class="btn-primary" type="submit" value="Submit"><strong>Accedi</strong></button>
            </form>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        setActive("#menu", 0);
    });
    </script>
</body>

</html>