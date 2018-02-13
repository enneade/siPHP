<!DOCTYPE HTML>
<html>
	<head>
		 <title> CONNEXION </title> 
		 <meta charset="utf-8">	  
	     <meta name='viewport' content='height=device-height, initial-scale=1.0'>
	     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	     <link rel="stylesheet" type="text/css" href="">
	</head>

	<body style="text-align: center;">
	<br><br>	

		<h3> CONNEXION </h3>
		<!-- TRAITEMENT DU FORMULAIRE -->
		<?php
			// Si l'utilisateur appuie sur le bouton se connecté
			if (isset($_POST['valider'])) {
				// déclaration de nos variables
				$email = htmlentities($_POST['email']);
				$pass = htmlentities($_POST['pass']);
				// connexion à la base de donnée
				$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'root');
				// requête sql pour vérifier les données saisies par le user
				$connexion = " SELECT * FROM utilisateur WHERE email = :email AND password = :pass ";

				$req=$bdd->prepare($connexion);
				$req->bindValue(':email', $email, PDO::PARAM_STR);
				$req->bindValue(':pass', $pass, PDO::PARAM_STR);
				$req->execute();
				$connexion=$req->fetch(); // il faut savoir que fetch permet de 
				//récuperer les données.

				if ($connexion) { // Si les données sont bonnes on commence une session.
					$_SESSION['nom'] = $connexion['nom'];
					$_SESSION['prenom'] = $connexion['prenom'];
					$_SESSION['email'] = $connexion['email'];
					$_SESSION['tel'] = $connexion['telephone'];
					$_SESSION['statut'] = $connexion['statut'];
					// on affiche le message si dessous à l'aide de : echo "...";
					echo "Vous êtes connecté";
					
				}else{ // Si les donnees ne sont pas correctes on affiche le 
					// message ci-dessous.
					echo "E-mail et (ou) mot de passe incorrect(s). <br><br><br>";
				}
			}
		?>
		

		<!-- LE FORMULAITE DE CONNEXION -->
		<form method="post" action="">
							<!-- action est vite car on traire le formulaire sur le
							même page -->
		<br>
			Email <br>
			<input type="email" name="email">
			<br><br>

			Mot de passe <br>
			<input type="password" name="pass">
			<br><br>

			<input type="submit" name="valider" value="SE CONNECTER">

		</form>
	
	</body>
</html>
