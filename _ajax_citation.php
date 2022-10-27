<?php
// sleep(20);
// Retourner une seule citation aléatoire (dans le format JSON)

// 1 : inclure le fichier contenant la fonction qui nous intéresse
include('lib/commun.lib.php');

// 2 : obtenir une citation aléatoire
$citation = obtenirCitationAleatoire('vins', 'en');

// 3 : produire la réponse
echo json_encode($citation);
?>
