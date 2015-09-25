<?php $data = array(); // array to pass back data
	  $errors = array(); // array to hold validation errors

	if(empty($_POST['name'])){
		$errors['name'] = 'Nous avons besoin de votre nom.';
	}elseif (empty($_POST['prenom'])){
		$errors['prenom'] = 'Nous avons besoin de votre prénom.';
	}elseif (empty($_POST['phone'])){
		$errors['phone'] = 'Nous avons besoin de votre numéro de téléphone.';
	}elseif (empty($_POST['email'])){
		$errors['email'] = 'Merci de nous communiquer votre adresse mail.';
	}elseif (empty($_POST['type_transaction'])){
		$errors['type_transaction'] = 'Merci de renseigner le type de transaction.';
	}elseif (empty($_POST['type'])){
		$errors['type'] = 'Merci de renseigner le type de bien.';
	}elseif (empty($_POST['surface'])){
		$errors['surface'] = 'Merci de renseigner la surface du bien.';
	}elseif (empty($_POST['type'])){
			$errors['permis'] = 'Quand avez-vous obtenu le permis de construire ?';
	}elseif (empty($_POST['adresse'])){
		$errors['adresse'] = 'Merci de renseigner une adresse.';
	}elseif (empty($_POST['ville'])){
		$errors['ville'] = 'Merci de renseigner la ville du bien.';
	}elseif (empty($_POST['gaz'])){
		$errors['gaz'] = 'Merci de nous renseigner les informations sur votre installation de gaz.';
	}elseif (empty($_POST['electricite'])){
		$errors['electricite'] = 'Merci de nous renseigner les informations sur votre installation electrique.';
	}elseif (empty($_POST['message'])){
		$errors['message'] = 'Merci de nous laisser un message sur vos besoins.';
	}else{

		$data['success'] = true;

		$data['messageSuccess'] = 'Nous vous remercions pour l\'intêret que vous nous portez, notre conseiller répondra à votre demande dans les plus bref délais.';

		// CHANGE THE TWO LINES BELOW

		$email_to = "contact@attest-rt2012.com";

		$email_subject = "Contact par internet ATTEST-RT2012"

		$email_from = $_POST['email'];

		// Form Message Begin

		$email_message = "<table border='0' cellpadding='2' cellspacing='2' width='600'>
		<tr><td>Information transmise par formulaire web</td></tr>
		<tr><td>Name: ".$_POST['name']." </td></tr>
		<tr><td>Prénom: ".$_POST['prenom']." </td></tr>
		<tr><td>Téléphone: ".$_POST['phone']." </td></tr>
		<tr><td>Email: ".$_POST['email']."</td></tr>
		<tr><td>Type de Transaction: ".$_POST['type_transaction']."</td></tr>
		<tr><td>Type de bien: ".$_POST['type']."</td></tr>
		<tr><td>Surface: ".$_POST['surface']." </td></tr>
		<tr><td>Permis de construire: ".$_POST['permis']." </td></tr>
		<tr><td>Adresse du bien: ".$_POST['adresse']." </td></tr>
		<tr><td>Ville: ".$_POST['ville']." </td></tr>
		<tr><td>Gaz: ".$_POST['gaz']." </td></tr>
		<tr><td>electricité: ".$_POST['electricite']." </td></tr>
		<tr><td>Message: ".$_POST['message']."</td></tr>
		</table>";
		$cc = "contact@attest-rt2012.com";
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

		// Additional headers
		$headers .= 'Reply-To: '.$_POST['email']."\r\n";
		$headers .= 'From: '.$_POST['email'] . "\r\n";
		$headers .= 'Cc: '.$cc . "\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();

	};

	if(mail($address, $e_subject, $msg, $headers)) {

		// Email has sent successfully, echo a success page.

		echo "<fieldset>";
		echo "<div id='success_page'>";
		echo "<h1>Message envoyé correctement.</h1>";
		echo "<p>Nous vous remercions pour l'intêret que vous nous portez. Notre conseillé répondra à votre demandande dans les plus brefs délais.</p>";
		echo "</div>";
		echo "</fieldset>";

	} else {

		echo 'ERROR!';

	}
