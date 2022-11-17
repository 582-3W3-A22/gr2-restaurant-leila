<?php
  // Identifiant de la page
  $page = 'vins';
  include('inclusions/entete.inc.php');

  // Gestion de la citation aléatoire
  $citation = obtenirCitationAleatoire($page, $lan);
  
  // [TP #1] Gestion de la carte des vins
  $carteDesVins = obtenirArticles($page, $lan);
?>
    <div class="contenu-principal">
      <div class="citation">
        <img src="images/vins-citation.png" alt="">
        <!-- 
          Remarquez les attributs HTML 'data-section' et 'data-langue' dans 
          l'élément BLOCKQUOTE ci-dessous ! On les utilise pour inclure dans le 
          document HTML les valeurs des variables PHP qui nous seront utiles 
          plus tard, de manière à pouvoir les récupérer en JavaScript.

          Ces attributs HTML sont nommés avec le préfixe 'data-' pour produire 
          un document HTML valide tout en y ajoutant des attributs personnalisés.

          Référence (pour en apprendre plus) : 
          https://developer.mozilla.org/en-US/docs/Learn/HTML/Howto/Use_data_attributes
        -->
        <blockquote data-section="<?= $page; ?>" data-langue="<?= $lan; ?>" title="<?= $comTitleCitation; ?>">
          <span class="citation-texte"><?= $citation['texte']; ?></span>
          <cite>- <span class="citation-auteur"><?= $citation['auteur']; ?></span></cite>
        </blockquote>
      </div>
      <form class="frm-recherche">
        <label><?= $vinRechercheEtiquette; ?>
          <input type="text" name="origine" placeholder="<?= $vinRecherchePlaceholder; ?>">
        </label>
      </form>
      <div class="carte">
      <!-- [TP #1] Affichage dynamique de la carte des vins -->
      <!-- Un bloc HTML <section> par catégorie -->
      <?php foreach ($carteDesVins as $titreSection => $articles) { ?>
        <section>
          <!-- On met le titre de chaque section tout en majuscule -->
          <h2><?= mb_strtoupper($titreSection); ?></h2>
          <ul>
          <!-- Un bloc HTML <li> par article de menu (bouteille de vin) -->
          <?php foreach ($articles as $article) { ?>
            <li>
              <span>
                <span class="vin-nom"><?= $article['nom']; ?></span><br>
                <b class="vin-provenance">[<?= $article['provenance']; ?>]</b>
                <!-- Certain vin n'ont pas de description... -->
                <?php if($article['description'] !== '') { ?>
                  <i class="vin-desc"><?= $article['description']; ?></i>
                <?php } ?>
              </span>
              <span class="prix"><?= $article['prix']; ?></span>
            </li>
          <?php } ?>
          <!-- Fin du LI -->
          </ul>
        </section>
      <?php } ?>
      <!-- Fin de la SECTION -->
      </div>
    </div>
<?php include('inclusions/pied2page.inc.php'); ?>