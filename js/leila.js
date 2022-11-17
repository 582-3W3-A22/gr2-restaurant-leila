// Gestion du clic sur la citation
let eltCitation = document.querySelector('.citation blockquote');

if(eltCitation !== null) {
    // Associer l'écouteur d'événement 'clic'
    eltCitation.addEventListener('click', changerCitation);
}

/**
 * Requiert une nouvelle citation aléatoire au serveur.
 * 
 */
async function changerCitation() {
    // Étape 1 : faire une requête HTTP au script PHP adéquat par l'entremise 
    // de  JavaScript. On va utiliser l'API 'Fetch'.
    // Docs : https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API
    
    // 1a : requête HTTP (et capture de la réponse du serveur une fois que la 
    // requête asynchrone est complétée : remarquez le mot clé "await")
    // Cette instruction peut être grandement simplifiée en utilisant les 
    // littéraux de gabarit ("template literals"), sauriez-vous la réécrire ?
    let reponse = await fetch("_ajax_citation.php?section="
            + eltCitation.getAttribute('data-section')
            + "&langue=" 
            + eltCitation.getAttribute('data-langue'));
    
    // 1b : extraire le contenu JSON (parce que notre script PHP produit une 
    // chaîne dans ce format !) de la réponse HTTP du serveur.
    // Remarquez encore une fois l'utilisation de la syntaxe "await".
    let citation = await reponse.json();

    // Étape 2 : intégrer les données reçues dans la réponse dans la page HTML
    // pour remplacer la citation actuelle : 
    // 2a : Injecter le texte de la citation
    eltCitation.querySelector('.citation-texte').innerHTML = citation.texte;
    // 2b : Injecter l'auteur de la citation
    eltCitation.querySelector('.citation-auteur').innerHTML ='- '+ citation.auteur;
}