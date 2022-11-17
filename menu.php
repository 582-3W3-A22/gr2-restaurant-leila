<?php
  // Identifiant de la page
  $page = 'menu';
  include('inclusions/entete.inc.php');

  // Gestion de la citation aléatoire
  $citation = obtenirCitationAleatoire($page, $lan);

  // [TP #1] Gestion du menu
  $menu = obtenirArticles($page, $lan);
?>
<div class="contenu-principal">
      <div class="citation">
        <img src="images/menu-citation.jpg" alt="">
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
      <div class="carte">
      <!-- [TP #1] Affichage dynamique du menu des plats -->
      <!-- Un bloc HTML <section> par catégorie -->
      <?php foreach ($menu as $titreSection => $articles) { ?>
        <section>
          <!-- On met le titre de chaque section tout en majuscule -->
          <h2><?= mb_strtoupper($titreSection); ?></h2>
          <ul>
          <!-- Un bloc HTML <li> par article de menu (plat) -->
          <?php foreach ($articles as $article) { ?>
            <li>
              <span>
                <?= $article['nom'] ?>
                <!-- Le balisage suivant seulement si le plat a une description non-vide -->
                <?php if($article['description'] !== '') { ?>
                  <br><i><?= $article['description'] ?></i>
                <?php } ?>
              </span>
              <span class="prix">
                <!-- Le balisage suivant uniquement si la "portion" est plus que 1 -->
                <?php if($article['portion'] > 1) { ?>
                  <i class="article-menu-portion">(<?= $mnuEtiquettePortion ?> <?= $article['portion'] ?>)</i>
                <?php } ?>
                <?= $article['prix'] ?>
              </span>
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