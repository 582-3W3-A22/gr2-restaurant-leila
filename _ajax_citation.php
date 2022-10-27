<?php
// Retourner une seule citation aléatoire (dans le format JSON)

// 1 : inclure le fichier contenant la fonction qui nous intéresse
include('lib/commun.lib.php');

// 1.5 : déterminer section et langue.
$section = isset($_GET['section']) ? $_GET['section'] : 'menu';
$langue = isset($_GET['langue']) ? $_GET['langue'] : 'fr';

// 2 : obtenir une citation aléatoire
$citation = obtenirCitationAleatoire($section, $langue);

// 3 : produire la réponse
echo json_encode($citation);
?>
