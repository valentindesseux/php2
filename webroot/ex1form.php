<!DOCTYPE html>
<html lang="fr">
	<head>
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-utils/concise-utils.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-ui/concise-ui.min.css">
		<link rel="stylesheet" href="./css/style.css">
		<meta charset="UTF-8" />
		<title></title>
	</head>
	<body container>
		<div grid>
			<div column="8 +2">
				<h3 class="_bb1 _ms _pbs">
<?php
if(isset($_POST["nom"]) AND isset($_POST["prenom"]) AND isset($_POST["sexe"])) {
	if($_POST["sexe"]=="Homme"){
		
		$sexe="Monsieur";
	}
	else {
		$sexe="Madame";
		
	}
}
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];


echo "Bonjour " .  $sexe . " " . $nom . " " . $prenom;

?>
					<!-- À compléter -->

				</h3>
			</div>
		</div>
	</body>
</html>