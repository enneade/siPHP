<!DOCTYPE HTML>
<html>
	<head>

		<title> INSCRIPTION </title>
		<meta charset="utf-8">
	     <title>  </title>
	     <meta name='viewport' content='height=device-height, initial-scale=1.0'>
	     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	     <link rel="stylesheet" type="text/css" href="">

	</head>

	<body style="text-align: center;">
	<br><br>

		<!-- AJUTONS UN TITRE À LA PAGE -->
		<h3> INSCRIPTION </h3>

<?php
// 2 - TRAITEMENT DU FORMULAIRE
// Si on appuie sur le bouton valider

if (isset($_POST['valider'])) {


	// A- Commencons par simplifier nos variable : $_POST['blablabla']; <=> method = post

	// htmlentities est une fonction php permettant de ne pas prendre en compte des balises
	//	html par exemple dans un formulaire dan sle cadre de clients mal-intentioner bien sur

	$nom = $_POST['nom'];
	$prenom = htmlentities($_POST['prenom']);
	$naissance = htmlentities($_POST['naissance']);
	$email = htmlentities($_POST['email']);
	$pass1 =  htmlentities($_POST['pass1']);
	$pass2 = htmlentities($_POST['pass2']);
	$tel = htmlentities($_POST['telephone']);
	$statut = htmlentities($_POST['statut']);


	// B- À présent, ajutons quelque conditions avant l'inscription du client

	// Commençons par vérifier si les deux mots de passes sont indentiques

	if ($pass1 == $pass2) {
		// On continue le traitaement
		// B.1- On se connecte à la base de donées

		$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'root');

		// B.2- On utilise la requette PRÉPARÉE INSERT INTO pour inserser les données dans la base de donnéées
		// Il faut savoir qu'on peut directement inserrer les variables dans la requête ou utilsé soit
		// des marqueurs soit des variables inconnues pour des questions de sécurité. Ici, nous utiliserons des
		// marquuer. C'est simple il ya faut mettre 2 points puis un nom <=> :lenom


		$insert = " INSERT INTO
						utilisateur
						(
							nom,
							prenom,
							naissance,
							email,
							password,
							telephone,
							statut
						)
					 VALUES
					 	(
					 		:nom,
					 		:prenom,
					 		:naissance,
					 		:email,
					 		:pass1,
					 		:tel,
					 		:statut
				 		)
		";

		$req=$bdd->prepare($insert);
		$req->bindValue(':nom', $nom, PDO::PARAM_STR);
		$req->bindValue(':prenom', $prenom, PDO::PARAM_STR);
		$req->bindValue(':naissance', $naissance, PDO::PARAM_STR);
		$req->bindValue(':email', $email, PDO::PARAM_STR);
		$req->bindValue(':pass1', $pass1, PDO::PARAM_STR);
		$req->bindValue(':tel', $tel, PDO::PARAM_STR);
		$req->bindValue(':statut', $statut, PDO::PARAM_STR);
		$req->execute();
		$insert=$req->fetch();



	} else {
		// Si les deux mots de passes ne sont pas identiques on affiche le message ci-dessous
		//" echo ''; --> permet d'afficher du text en php "

		echo " Les deux mots de passes ne sont pas identiques. Veuillez recommencer";
	}
}

?>

		<!--
			1- LES IMPUTS
			Comme vous pouvez l'observer dans le formulaire ci dessous chaque input
			à un nom <=> name="le nom de l'input". les inputs étant des variables, les
			"name" nous permettrons d'identifer chaque variable et de leurs définir une
			fonction avec des requêtes SQL tel que aller se placer dans le chmaps nom de
			la table client par exemple.
		-->

		<form method="post" action="">

			Nom <br>
			<input type="text" name="nom" placeholder=" votre nom">
			<br><br>

			Prénom <br>
			<input type="text" name="prenom" placeholder=" votre prénom">
			<br><br>

			Date de naissance <br>
			<input type="text" name="naissance" placeholder=" JJ/MM/AAAA">
			<br><br>

			E-mail <br>
			<input type="email" name="email" placeholder=" votre e-mail">
			<br><br>

			Mot de passe <br>
			<input type="password" name="pass1" placeholder=" votre mot de passe">
			<br><br>

			Répéter votre mot de passe <br>
			<input type="password" name="pass2" placeholder=" répéter votre de passe">
			<br><br>

			Télephone <br>
			<input type="text" name="telephone" placeholder=" votre téléphone">
			<br><br>

			Statut <br>
            <select name="statut">
            	<option> Particulier </option>
            	<option> Entreprise </option>
            </select>
            <br><br>

			Sexe  <br>
            Femme <input type="checkbox" name="femme"> Homme <input type="checkbox" name="homme" >
            <br><br>

			<input type="submit" name="valider" value="S'INSCRIRE">
			<br><br>


		</form>

	</body>
</html>
