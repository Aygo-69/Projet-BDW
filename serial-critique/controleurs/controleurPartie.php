<?php 
$connexion = getConnexionBD(); // connexion à la BD
$message = "";

// recupération des séries
$requete = "SELECT DISTINCT nomSerie FROM Series";
$series = mysqli_query($connexion, $requete);
if($series == FALSE) {
	$message .= "Aucune série n'a été trouvée dans la base de données !";
}

/*
** À vous de jouer : lister les critiques en vous inspirant du code ci-dessus.
** Vous pourrez plus tard améliorer le code en affichant chaque série avec les
** critiques qui la concernent !
*/


// recupération des actrices
$requete = "SELECT numINSEE, nom, prenom FROM Actrices";
$actrices = mysqli_query($connexion, $requete);
if($actrices == FALSE) {
	$message .= "Aucune actrice n'a été trouvée dans la base de données !";
}

// recupération des épisodes numérotés 1 et 2 avec la même requête préparée
$requete = "SELECT titre FROM Episodes WHERE numero = ?";
if(!($stmt = mysqli_prepare($connexion, $requete))) {
	$message .= "Aucun épisode n'a été trouvé dans la base de données ! [" .mysqli_errno($connexion)."] - ".mysqli_error($connexion) ;
}
else {
	mysqli_stmt_bind_param($stmt, "i", $numEpisode); // lier la variable $var au paramètre de la requête
	
	// $var à 1 pour afficher les épisodes numérotés 1
	$numEpisode = 1;
	mysqli_stmt_execute($stmt); // exécution de la requête
	$episodes1 = mysqli_stmt_get_result($stmt);  // récupération des tuples résultats dans la variable $episodes1
	//mysqli_stmt_bind_result($stmt, $episodes1); // recupere un seul resultat, besoin de boucler avec mysqli_stmt_fetch($stmt)

	// $var à 2 pour afficher les épisodes numérotés 2
	$numEpisode = 2;
	mysqli_stmt_execute($stmt); // pas besoin de lier, exécution directe de la requête
	$episodes2 = mysqli_stmt_get_result($stmt);  // récupération des tuples résultats dans la variable $episodes1

}

?>
