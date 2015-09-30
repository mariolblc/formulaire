<?php
	$data = array();
	$errors = array();
	$data['success'] = true;
	$data['messageSuccess'] = 'Nous vous remercions pour l\'intêret que vous nous portez, notre conseiller répondra à votre demande dans les plus bref délais.';
	$email_to = "contact@attest-rt2012.com";
	$email_subject = "Demande de devis par internet ATTEST-RT2012.com";
	$email_from = $_POST['email'];
	$email_message = "<table border='0' cellpadding='2' cellspacing='2' width='600'>
		<tr><td>Informations transmise par formulaire web</td></tr>
		<tr><td>Name: ".$_POST['name']." </td></tr>
		<tr><td>Prénom: ".$_POST['prenom']." </td></tr>
		<tr><td>Téléphone: ".$_POST['phone']." </td></tr>
		<tr><td>Email: ".$_POST['email']."</td></tr><br><br>
		<tr><b>ÉTUDE THERMIQUE</b></tr>
		<tr><td>Type de bâtiment ".$_POST['etude-thermique']."
		<tr><td>Étude souhaitée ".$_POST['etude-thermique-neuf']."
		<tr><b>DIAGNOSTICS ET SERVICES</b></tr>
		<tr><td>Type de Transaction: ".$_POST['type_transaction']."</td></tr>
		<tr><td>Type de bien: ".$_POST['type']."</td></tr>
		<tr><td>Surface: ".$_POST['surface']." </td></tr>
		<tr><td>Permis de construire: ".$_POST['permis']." </td></tr>
		<tr><td>Adresse du bien: ".$_POST['adresse']." </td></tr>
		<tr><td>Ville: ".$_POST['ville']." </td></tr>
		<tr><td>Gaz: ".$_POST['gaz']." </td></tr>
		<tr><td>electricité: ".$_POST['electricite']." </td></tr><br><br>
		<tr><b>MESSAGE</b></tr>
		<tr><td>Message: ".$_POST['message']."</td></tr>
		</table>";
	$cc = "contact@attest-rt2012.com";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'Reply-To: '.$_POST['email']."\r\n";
	$headers .= 'From: '.$_POST['email'] . "\r\n";
	$headers .= 'Cc: '.$cc . "\r\n";
	$headers .= 'X-Mailer: PHP/' . phpversion();
	if(mail($email_from, $email_subject, $email_message, $headers)) {
		echo "<fieldset>";
		echo "<div id='success_page'>";
		echo "<h1>Message envoyé correctement.</h1>";
		echo "<p>Nous vous remercions pour l'intêret que vous nous portez. Notre conseillé répondra à votre demandande dans les plus brefs délais.</p>";
		echo "</div>";
		echo "</fieldset>";
	} else {
		echo 'ERROR!';
	}
?>
