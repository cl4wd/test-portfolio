<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>portfolio</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="doom.ico" />
	<title></title>
</head>
<body class="example" class="her">
	<section class="bgwhite" class="her">
	<nav class="him">
			  <ul class="centreles">
			  	<li><a class="navcolor" href="web.html">Acceuil</a></li>
			    <li class="deroulant"><a class="navcolor">travaux</a>
			      <ul class="sous">
			      	<li><a class="navcolor2" href="infographie.html">infographie</a></li>
			        <li><a class="navcolor2" href="dev.html">developpement web</a></li>
			        <li><a class="navcolor2" href="audio_visuel.html">audio visuel</a></li>
			      </ul>
				</li>
			    <li><a class="navcolor" href="contacts.html">Contact</a></li>
			  </ul>
			</nav>
	<section>
			<h2>me contacter</h2>
				<form action="/ma-page-de-traitement" method="post">
    				<div>
        				<label for="name">Nom :</label>
        				<input type="text" id="name" name="user_name">
    				</div>
    				<div>
        				<label for="mail">e-mail :</label>
        				<input type="email" id="mail" name="user_mail">
    				</div>
    				<div>
        				<label for="msg">Message :</label>
        				<textarea id="msg" name="user_message"></textarea>
    				</div>
				</form>
				<br/>
					<div class="button">
        				<button type="submit">Envoyer le message</button>
    				</div>

    				<?php
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('shunbouye14@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
    ?>
		</section>
	</section>
</body>
</html>