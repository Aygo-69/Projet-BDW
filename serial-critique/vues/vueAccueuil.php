<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
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
			
			<p id="description">Le projet de cette année est inspiré du jeu de société Scotland  Yard, dans lequel des détectives essaient d’attraper Mister X. 
			Les protagonistes se déplacent sur les 199 stations du plateau de jeu en utilisant taxi, métro, bus ou bateau. 
			La position de Mister X est secrète, mais les détectives connaissent les moyens de transport qu’il utilise à chaque tour. 
			De plus, Mister X doit dévoiler sa position à certains tours. Il existe plusieurs éditions du jeu, mais le projet se concentre sur les règles de base adaptées. </p>
			<div><img src="img/background.jpg" width="100%" height="90%"></div>
			
		</main>
		<?php include('static/statistiques.php'); ?>
	</div>
    <?php include('static/footer.php'); ?>
</body>
<script src="js/correction.js" charset="utf-8"></script>
<script src="js/messages.js" charset="utf-8"></script>
</html>






