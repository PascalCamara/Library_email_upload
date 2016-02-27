<!DOCTYPE html>
<html>
<head>
	<title>EnvoieMail</title>
	<meta charset='utf-8'>
</head>
<body>

<?php 

	$nom_expediteur = "Pascal CAMARA";
	$email_expediteur = "pascal.camara@eemi.com";
	$email_reply = "mailautomatique@test.com";
	$message_texte = "Bonjour";
	$destinataire = "pascal.camara@eemi.com";
	$sujet = "Message important";
	$message_html = "<!DOCTYPE html>
	<html>
	<head>
		<title>HOLA</title>
	</head>
	<body>
		<p>Bonjour ceci est un  <strong>MAIL AUTOMATIQUE</strong> </p>
	</body>
	</html>";

	// sans piece jointe
 	$fichiers = false;

 	// avec une piece jointe
 	//$fichiers = "img/image.jpg";

 	// plusieurs pieces jointes
 	//array(
 	//	 "img/image.jpg",
 	//	 "../pdf/pdf.pdf",
 	//	 "../img/image.png",
 	//	 "../../lib.zip",

	include_once('../src/envoimail.php');
	$retour = envoiMail($nom_expediteur, $email_expediteur, $email_reply, $message_texte, $destinataire, $sujet, $message_html, $fichiers); 
	 var_dump($retour);

?>

</body>
</html>