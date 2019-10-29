<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<!-- le titre du document, qui apparait dans l'onglet du navigateur -->
    <title><?= $nomSite ?></title>
    <!-- lie le style CSS externe  -->
    <link href="css/style.css" rel="stylesheet" media="all" type="text/css">
    <!-- ajoute une image favicon (dans l'onglet du navigateur) -->
    <link rel="shortcut icon" type="image/x-icon" href="img/scotlandyard.png" />
</head>
<body>
    <?php include('static/header.php'); ?>
    <div id="divCentral">
		<?php include('static/menu.php'); ?>
		<main>
		<form name="requete" method="post" action="saisie.php">
            Entrez votre requete : <input type="text" name="txtRequete"/>
            <input type="submit" name="valider" value="Valider"/>
        </form>
		<?php
		if(isset($_POST['valider'])){
				$requete=$_POST['txtRequete'];
				}
		$connexion=getConnexionBD();

		$requete='SELECT COUNT(nomQ) FROM Quartiers';
		$resultats = mysqli_query($connexion, $requete);
		deconnectBD($connexion);
		if(isset($resultats) && $resultats != FALSE) { // affichage des résultats de recherche si existants
					$nbAttributs = mysqli_num_fields($resultats); // nombre d'attributs dans les résultats de la requête (variable selon la table)
					while ($res = mysqli_fetch_array($resultats, MYSQLI_NUM)) {
						echo '<li>';
						for($i = 0; $i < $nbAttributs; $i++) // affichage de chaque valeur (correspondant à chaque attribut)
							echo $res[$i] . ' ';
						echo '</li>';
					}
				}
		?>	

		</main>
		<?php include('static/statistiques.php'); ?>
	</div>
    <?php include('static/footer.php'); ?>
</body>
<script src="js/correction.js" charset="utf-8"></script>
<script src="js/messages.js" charset="utf-8"></script>
</html>

