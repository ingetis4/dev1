<?php
	session_start();
	if(isset($_SESSION['id'])) header("Location: ./utilisateur_acceuil.php");
	require 'PHP/cbdd.php';
	$typeNotif = isset($_GET["erreur"])? "erreur" : "";
	$typeNotif = isset($_GET["succes"])? "succes" : "";
	$notification = "";
	if(isset($_GET["erreur"])) {
		switch ($_GET["erreur"]) {
			case "champvide":
				$notification = "Veuillez remplir tous les champs";
				break;
			case "wrongmdp":
				$notification = "Le mot de passe est incorrecte";
				break;
			case "nouser":
				$notification = "Cet identifiant n'existe pas";
				break;
		}
	}
	if(isset($_GET["succes"])) {
		switch ($_GET["succes"]) {
			case "inscription":
				$notification = "Inscription validé !";
				break;
			}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="CSS/style.css" rel="stylesheet">
	<title>CV GENERATOR</title>
</head>
<body class="grad">
<?php 
	if(isset($_GET["succes"]) || isset($_GET["erreur"])) {
		echo "	<div type='" .  $typeNotif . "' class='notification'><p>" .  $notification . "</p></div>";
	}
	?>
	<div class="header">
		<h1>CV GENERATOR</h1>
		<p> Bienvenue sur notre site création de CV  en ligne !</p>
	</div>
	<div class="container">

		<form method="post" id="connexion" action="PHP/conn.php">
			<h1>Connexion</h1>
			<p>Pour nous rejoindre et commencer la création de vos CV veuillez vous connecter.</p>
			<hr>
			<div class="input">
				<label for="identifiant"><b>Identifiant</b></label>
				<input type="text" placeholder="Identifiant" name="identifiant">
			</div><div class="input">
				<label for="mdp"><b>Mot de passe</b></label>
				<input type="password" placeholder="Mot de passe" name="mdp">
			</div>
			
			<p>Vous n'avez pas de compte ? Inscivez-vous <a href="inscription.php" style="color:dodgerblue">ici</a>.</p>

			<div>
			</div>
		</form>

		<button type="submit" form="connexion" name="connexion" class="connexion">Connexion</button>

	</div>
</body>
</html>