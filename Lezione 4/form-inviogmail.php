<?php
if(isset( $_GET["name"]) ){
	$nome = $_GET["name"];
	$var_sex = $_GET["sex"];
	$var_msg = $_GET["messaggio"];
	$var_dest = $_GET["destinatario"];
	$elenco_interessi = $_GET["interessi"];


	$destinatario = "";

	switch($var_dest){
		case "0": $destinatario = "ing.martini@gmail.com";
			break;
		case "1": $destinatario = "ing.martini@gmail.com";
			break;
		case "2": $destinatario = "ing.martini@gmail.com";
			break;
	}

	//Converte un vettore in una stringa "incollando" tra loro gli elementi tramite una stringa data (nel nostro caso ", ")
	$stringa_interessi = implode(", ", $elenco_interessi);

	echo "Nome: " . $nome . "<br />";
	echo "Sesso: $var_sex <br />";
	echo "Messaggio: $var_msg <br />";
	echo "Destinatario: $destinatario <br />";
	echo "<br>Interessi2: ".$stringa_interessi;

/* INVIO MAIL - inizio */
$nome_mittente = "Daniele Martini";
$mail_mittente = "ing.martini@gmail.com";
$mail_oggetto = "Invio mail da form";

$mail_corpo = "<HTML><BODY>";
$mail_corpo .= "Nome: " . $nome . "<br />";
$mail_corpo .= "Sesso: $var_sex <br />";
$mail_corpo .= "Messaggio: $var_msg <br />";
$mail_corpo .= "Destinatario: $destinatario <br />";
$mail_corpo .= "<br>Interessi2: ".$stringa_interessi;
$mail_corpo .= "</BODY></HTML>";



	include('src/PHPMailer.php');
	include('src/SMTP.php');

	//Create a new PHPMailer instance
	$mail = new PHPMailer;

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	//Enable SMTP debugging
	// SMTP::DEBUG_OFF = off (for production use)
	// SMTP::DEBUG_CLIENT = client messages
	// SMTP::DEBUG_SERVER = client and server messages
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;

	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// if your network does not support SMTP over IPv6

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;

	//Set the encryption mechanism to use - STARTTLS or SMTPS
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = 'ing.martini@gmail.com';

	//Password to use for SMTP authentication
	$mail->Password = 'yourpassword';

	//Set who the message is to be sent from
	$mail->setFrom('ing.martini@gmail.com', 'Daniele Martini');

	//Set an alternative reply-to address
	$mail->addReplyTo('ing.martini@gmail.com', 'Daniele Martini');

	//Set who the message is to be sent to
	$mail->addAddress('daniele@aiosa.net', 'John Doe');

	//Set the subject line
	$mail->Subject = 'PHPMailer GMail SMTP test';

	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';

	//Attach an image file
	$mail->addAttachment('images/phpmailer_mini.png');

	//send the message, check for errors
	if (!$mail->send()) {
	    echo 'Mailer Error: '. $mail->ErrorInfo;
	} else {
	    echo 'Message sent!';
	    //Section 2: IMAP


	}




}
  
?><!DOCTYPE html>
<html>
<head>
	<title>Esempio di form</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>

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

		<form accept-charset="UTF-8" 
		action="<?php echo $dest; ?>" method="<?=$method?>">
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
			<button type="reset" value="Annulla">Annulla</button>
			<button type="submit" value="Submit">Invia</button>
			</fieldset>
		</form>	
	</div>



</body>
</html>
