<?php  
/*********** CITATIONS ALÉATOIRES *********************************************/
/**
 * Génère et retourne une citation aléatoire.
 * 
 * @param string $section : Identifiant de la page pour laquelle on veut une 
 * citation.
 * @param string $langue : Sigle (deux lettres) de la langue active sur le site.
 * 
 * @return array : Tableau contenant l'auteur et le texte d'une citation.
 */
function obtenirCitationAleatoire($section, $langue) 
{
    if(file_exists("data/citations-$section-$langue.json")) {
        $citationsJson = file_get_contents("data/citations-$section-$langue.json");
    }
    else {
        $citationsJson = file_get_contents("data/citations-$section-fr.json");
    }
    $citations = json_decode($citationsJson, true);
    $positionAleatoire = rand(0, count($citations)-1);
    $citation = $citations[$positionAleatoire];
    return $citation;
}

/*********** INTERNATIONALISATION *********************************************/
/**
 * Détermine et retourne le tableau des sigles de langues disponibles pour le 
 * site.
 *
 * @return array : Tableau contenant les sigles des langues.
 */
function obtenirLanguesDisponibles() 
{
    // Les langues disponibles sont dans le dossier i18n   
    $i18n = scandir('i18n/');

    // On filtre le '.' et '..' 
    $languesDisponibles = [];
    foreach($i18n as $elt) {
        if($elt !== '.' && $elt !== '..') {
            $languesDisponibles[] = $elt;
        }
    }

    return $languesDisponibles;
}

/**
 * Détermine et retourne la langue à utiliser dans le site.
 *
 * @param  string $langueParDefaut : Sigle de la langue par défaut.
 * @param  array $languesDispos : Tableau des sigles de langues supportées.
 * 
 * @return string : Sigle d'une des langues supportées.
 */
function determinerLangue($langueParDefaut, $languesDispos) {
    $lan = $langueParDefaut;

    if(isset($_COOKIE['leila-langue']) && in_array($_COOKIE['leila-langue'], $languesDispos)) {
        $lan = $_COOKIE['leila-langue'];
    }

    if(isset($_GET['langue']) && in_array($_GET['langue'], $languesDispos)) {
        $lan = $_GET['langue'];
        $expiration = time() + 60 * 60 * 24 * 50; 
        setcookie('leila-langue', $lan, $expiration);
    }
    return $lan;
}

/*********** MENU ET CARTE DES VINS ***********************************/
/**
 * Retourne les articles de la section spécifiée dans la langue active.
 * 
 * @param string $section : Identifiant de la page correspondant à la section.
 * @param string $langue : Sigle (deux lettres) de la langue active sur le site.
 * 
 * @return array : Tableau de tableaux contenant l'info des articles demandés.
 */
function obtenirArticles($section, $langue) 
{
    // Déterminer le nom de la table de la BD.
    $table = ($section === 'menu') ? 'plat' : 'vin';

    // Connexion
    $cnx = mysqli_connect('localhost', 'root', '', 'leila');
    mysqli_set_charset($cnx, 'utf8');

    // Requête SQL
    $sql = "SELECT  t.*,
                    c.nom AS nomCat
            FROM $table         AS t
                JOIN categorie  AS c
                    ON t.categorie_id = c.id
            ORDER BY c.id, t.prix";
    
    // Exécuter la requête et obtenir le jeu d'enregistrements correspondant
    $resultat = mysqli_query($cnx, $sql);

    // Produire un tableau contenant les articles (enregistrements)
    $articles = [];
    while ($enreg = mysqli_fetch_assoc($resultat)) {
        $cat = $enreg['nomCat'];
        $articles[$cat][] = $enreg;
    }
    return $articles;
}
?>