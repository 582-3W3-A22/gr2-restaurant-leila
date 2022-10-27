// Capturer le bloc HTML contenant la citation
let eltCitation = document.querySelector(".citation blockquote");
// console.log("L'élément blockquote : ", eltCitation);

// Associer l'écouteur d'événement 'clic'
if(eltCitation !== null) {
    eltCitation.addEventListener('click', changerCitation);
}

/**
 * Obtient une nouvelle citation aléatoire du serveur.
 */
async function changerCitation() {
    console.log("OK je vais chercher une nouvelle citation...");
    
    // Étape 0 : récupérer la section et la langue
    let section = eltCitation.getAttribute('page');
    let langue = eltCitation.getAttribute('langue');
    // console.log("La page : ", section);

    // Étape 1 : chercher une citation aléatoire au serveur (script PHP)
    // 1a : faire une requête HTTP et capturer la réponse
    let reponse = await fetch(`_ajax_citation.php?section=${section}&langue=${langue}`);
    
    // 1b : sortir le contenu de la réponse
    let citationJson = await reponse.json();
    console.log("Réponse du serveur : ", citationJson);

    // Étape 2 : injecter le texte et l'auteur de la citation obtenue à l'étape 1 dans la page (DOM)
    eltCitation.querySelector('.citation-texte').innerHTML = citationJson.texte;
    eltCitation.querySelector('.citation-auteur').innerHTML = citationJson.auteur;
}
