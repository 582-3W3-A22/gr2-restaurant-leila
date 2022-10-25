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
function changerCitation() {
    console.log("OK je vais chercher une nouvelle citation...");
}
