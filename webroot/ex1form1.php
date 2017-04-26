    <!DOCTYPE html>
    <html lang="fr">
    	<head>
    		<meta charset="UTF-8" />
    		<link rel="stylesheet" href="https://cdn.concisecss.com/concise.min.css">
    		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-utils/concise-utils.min.css">
    		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-ui/concise-ui.min.css">
    		<link rel="stylesheet" href="./css/style.css">
    		<title>Exercice 1</title>

    	</head>
    	<body container>
    		<div grid>
    			<div column="8 +2">
    				<h3 class="_bb1 _mbs"> Exercice 1</h3>
    				<form  action="ex1form.php" method="POST">
    					<fieldset>
    						<legend>Qui êtes-vous ?</legend>

    						<!-- Text input-->
    						<div >
    							<label  for="nom">Nom</label>
    							<input id="nom" name="nom" placeholder="nom"  type="text">
    						</div>

    						<!-- Text input-->
    						<div>
    							<label for="prenom">Prénom</label>
    							<input id="prenom" name="prenom" placeholder="prénom" type="text">
    						</div>

    						<!-- Multiple Radios -->
    						<label class="control-label" for="radios">Sexe</label>
    						<label  for="homme">
    							<input name="sexe" id="homme" value="Homme" checked="checked" type="radio">
    							Homme
    						</label>
    						<label for="femme">
    							<input name="sexe" id="femme" value="Femme" type="radio">
    							Femme
    						</label>

    						<!-- Button -->
    						<button>Envoyer</button>
    					</fieldset>
    				</form>
    			</div>
    		</div>
    	</body>
    </html>

