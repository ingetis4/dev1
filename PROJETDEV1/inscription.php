<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="CSS/style.css" rel="stylesheet">
	<title>CV generator</title>
</head>
<body class="grad">
	<div class="header">
		<h1>QUESTE</h1>
		<p> Bienvenue sur notre site de générateur de CV </p>
	</div>
	<div class="container">

		<form method="post" id="inscription" action="PHP/inscr.php">
			<h1>Inscription</h1>
			<p>Pour nous rejoindre et commencerà crée vos CV veuillez remplir le formulaire ci-dessous.</p>
			<hr>

			<div class="input" style="margin-bottom: 25px;">
            </div>
            <div class="input">
				<label for="identifiant"><b> Choisir un Identifiant</b></label>
				<input type="text" placeholder="L'identifiant sera votre moyen de connexion" name="identifiant">
            </div>
            <div class="input demi">
				<label for="prenom"><b>Prenom</b></label>
				<input type="text" placeholder="Prenom" name="prenom">
            </div>
            <div class="input demi">
				<label for="Nom"><b>Nom</b></label>
				<input type="text" placeholder="Nom" name="nom">
            </div>
            <div class="input demi">
				<label for="Nom"><b>Date de naissance</b></label>
				<input type="date" placeholder="Date" name="date">
            </div>
            <div class="input demi">
				<label for="email"><b>Email</b></label>
                <input type="email" placeholder="email@exemple.fr" name="email">
            </div>
            <div class="input ">
				<label for="Nom"><b>Adresse</b></label>
                <input type="number" placeholder="numero de rue" name="Num">
                <input type="text" placeholder="Rue" name="Num">
                <input type="number" placeholder="code postal" name="Num">
                <input type="text" placeholder="Ville" name="Num">
                <input type="text" placeholder="Pays" name="Num">
            </div>
            <div class="input demi">
				<label for="phoneNumber"><b>Numéro de téléphone</b></label>
				<input type="tel" placeholder="Numéro de téléphone" name="Tel">
            </div>
            <div class="input demi">
				<label for="mdp"><b>Mot de passe</b></label>
				<input type="password" placeholder="Mot de passe" name="mdp">
            </div>
            <div class="input demi">
				<label for="mdp-ver"><b>Vérifier votre mot de passe</b></label>
				<input type="password" placeholder="Mot de passe" name="mdp-ver">
            </div>
          

			<p>Déjà membre ? Connectez-vous <a href="index.php" style="color:dodgerblue">ici</a>.</p>

			<button type="submit" form="inscription" name="inscription" class="inscription">Inscription</button>
		</form>

	</div>
</body>
<!-- <script src="JS/script.js"></script> -->
</html>