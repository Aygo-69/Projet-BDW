<?php 
$connexion = getConnexionBD(); // connexion à la BD

if(isset($_POST['boutonValider'])) {
	
	$valeur = mysqli_real_escape_string($connexion, trim($_POST['valeur']));
	$table	= mysqli_real_escape_string($connexion, $_POST['champRech']);
	
	if($table == 'Serie') {
		$requete = 'SELECT * FROM Series WHERE nomSerie LIKE \'%'.$valeur.'%\';';
	}
	else if($table == 'Actrice') {
		$requete = 'SELECT * FROM Actrices WHERE nom LIKE \'%'.$valeur.'%\' OR prenom LIKE \'%'.$valeur.'%\';';
	}
	$resultats = mysqli_query($connexion, $requete);
	
	if($resultats == FALSE || mysqli_num_rows($resultats) == 0) {
		$message = "La recherche n'a pas retourné de résultats !";
	}
}
?>
