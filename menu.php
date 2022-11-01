<?php
  // Identifiant de la page
  $page = 'menu';
  include('inclusions/entete.inc.php');

  // Gestion de la citation aléatoire
  $citation = obtenirCitationAleatoire($page, $lan);
?>
<div class="contenu-principal">
      <div class="citation">
        <img src="images/menu-citation.jpg" alt="">
        
        <blockquote data-page="<?= $page ?>" data-langue="<?= $lan ?>"  title="<?= $blockquoteTitle; ?>">
          <span class="citation-texte"><?= $citation['texte']; ?></span>
          <cite>- <span class="citation-auteur"><?= $citation['auteur']; ?></span></cite>
        </blockquote>
        
      </div>
      <div class="carte">
        <section>
          <h2>Entrées</h2>
          <ul>
            <li>
              <span>Escargots à la crème d’ail</span>
              <span class="prix">31</span>
            </li>
            <li>
              <span>Foie gras de canard poêlé aux coings<br><i>gâteau et infusion de coing à la verveine</i></span>
              <span class="prix"><i class="article-menu-portion">(pour 2 personnes)</i>34</span>
            </li>
            <li>
              <span>Jardin de champignons d’automne<br><i>crème de cèpes, émulsion au thé noir</i></span>
              <span class="prix">33</span>
            </li>
          </ul>
        </section>
        <section>
          <h2>Poissons</h2>
          <ul>
            <li>
              <span>Sandre à la peau croustillante<br><i>fondue d’échalotes, sauce au vin rouge</i></span>
              <span class="prix">42</span>
            </li>
            <li>
              <span>Saint-pierre rôti aux olives taggiasche<br><i>mousseline d’artichaut, fumet de poisson au citron kalamansi</i></span>
              <span class="prix">49</span>
            </li>
            <li>
              <span>Bar cuit à la vapeur et criste marine<br><i>déclinaison de riz et coquillages, jus au curcuma</i></span>
              <span class="prix"><i class="article-menu-portion">(pour 2 personnes)</i>58</span>
            </li>
          </ul>
        </section>
        <section>
          <h2>Viandes</h2>
          <ul>
            <li>
              <span>Côte de porcelet et poitrine de cochon du Cantal croustillant<br><i>légumes de saison et crémeux de céleri-rave</i></span>
              <span class="prix">42</span>
            </li>
            <li>
              <span>Filet de canette rôti sur la peau, jus au porto infusé à l’hibiscus<br><i>tartelette de figues et cuisse confite, petite chartreuse de figues</i></span>
              <span class="prix">44</span>
            </li>
            <li>
              <span>Ris de veau doré au sautoir et cèpes<br><i>mousseline de cèpes, jus de veau à la cazette du Morvan</i></span>
              <span class="prix">63</span>
            </li>
          </ul>
        </section>
        <section>
          <h2>Fromages</h2>
          <ul>
            <li>
              <span>Chariot de fromages affinés de nos régions</span>
              <span class="prix">12</span>
            </li>
          </ul>
        </section>
        <section>
          <h2>Desserts</h2>
          <ul>
            <li>
              <span>Poire Louise Bonne pochée au citron doux<br><i>parfait glacé à la Nepeta, crumble de petit épeautre</i></span>
              <span class="prix">13</span>
            </li>
            <li>
              <span>Fleur de cassis de Bourgogne<br><i>chiboust à la vanille et chocolat grand cru de Madagascar</i></span>
              <span class="prix">13</span>
            </li>
            <li>
              <span>Tarte fine aux pommes de Bernard Loiseau<br><i>sorbet pomme verte</i></span>
              <span class="prix">12</span>
            </li>
          </ul>
        </section>
      </div>
    </div>
<?php include('inclusions/pied2page.inc.php'); ?>