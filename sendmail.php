<?php

require("phpmailer/class.phpmailer.php");

function enviaContato(){

	$mail = new PHPMailer();

	// Define os dados do servidor e tipo de conexão
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->IsSendmail(); // telling the class to use SendMail transport
	
	$msgAlt = "Name: ".$_POST["cont_name"]." <br/>";
	$msgAlt.= "E-mail: ".$_POST["cont_email"]." <br/>";
	$msgAlt.= "Message: ".$_POST["cont_msg"]." <br/>";

	$body = $msgAlt;

	$mail->AddReplyTo($_POST["cont_email"],$_POST["cont_name"]);

	$mail->SetFrom("contact@highfieldterraces.com.au","Highfield Terraces - Contact");

	//$mail->AddReplyTo("contact@highfieldterraces.com.au","Highfield Terraces");

	$address = "contact@highfieldterraces.com.au";
	//address = "contact@highfieldterraces.com.au";
	$mail->AddAddress($address, $_POST["cont_name"]);

	$mail->Subject    = "Highfield Terraces - Contact";

	$mail->AltBody = " \r\n "; // optional, comment out and test

	$mail->MsgHTML($body);

	// Envia o e-mail
	if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  	//echo "Message sent!";
	  	echo 1;
	}
	
}


if (isset($_POST["catMail"])){
	
	switch ($_POST["catMail"]) {
		case 'contact':
			enviaContato();
			break;		
		default:
			
			break;
	}
	
}

?>
