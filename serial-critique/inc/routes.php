<?php

/*
** Il est possible d'automatiser le routing, notamment en cherchant directement le fichier controleur et le fichier vue.
** ex, pour page=afficher : verification de l'existence des fichiers controleurs/controleurAfficher.php et vues/vueAfficher.php
** Cela impose un nommage strict des fichiers.
*/

$routes = array(
	'partie' => array('controleur' => 'controleurPartie', 'vue' => 'vuePartie'),
	'statistiques' => array('controleur' => 'controleurStatistiques', 'vue' => 'vueStatistiques'),
	'rechercher' => array('controleur' => 'controleurRechercher', 'vue' => 'vueRechercher'),
	'critiquer' => array('controleur' => 'controleurCritiquer', 'vue' => 'vueCritiquer')
);

?>
