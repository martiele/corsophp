<?php
include("Scripts/PHP/SessionManager.php"); 

$login = new login("", false);

$login_success = true;
$login_message = "";

if(isset($_POST["name"]) && isset($_POST["pswd"])){
	$check_access = "Marco" . md5("12345");
    
    
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

if($login_success){

    $login->set_name($_POST["name"]);
    $login->set_logged(true);

    save_login($login);
    header('location:Home.php');
    exit();

}else{
	if(isset($_POST["name"]) && isset($_POST["pswd"])){
	    $login_message = "Utente non riconosciuto, il campo utente o la password non sono corretti.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link type="text/css" rel="stylesheet" href="Styles/Bundle.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="Scripts/JavaScript/Bundle.js"></script>

</head>

<body class="">
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
                <label style="color: red; margin-top: 1em;"><?php echo $login_message ?></label>
            </form>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        setActive("#menu", 0);
        $("#btn_contacts").hide();
        $("#btn_user").hide();
    });
    </script>
</body>

</html>