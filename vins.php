<?php
  // Identifiant de la page
  $page = 'vins';
  include('inclusions/entete.inc.php');

  // Gestion de la citation aléatoire
  $citation = obtenirCitationAleatoire($page, $lan);
?>
<div class="contenu-principal">
      <div class="citation">
        <img src="images/vins-citation.png" alt="">
        <blockquote data-page="<?= $page ?>" data-langue="<?= $lan ?>"  title="<?= $blockquoteTitle; ?>">
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
        <section>
          <h2>VINS EFFERVESCENTS</h2>
          <ul>
            <li>
              <span>
                <span class="vin-nom">Cidre Fermier Biologique</span><br>
                <b class="vin-provenance">[Québec]</b>
                <i class="vin-desc">Des Bulles, Genre, Clos Saragnat</i>
              </span>
              <span class="prix">38</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Cidre Mousseux</span><br>
                <b class="vin-provenance">[Québec]</b>
                <i class="vin-desc">Récolte 2012, Michel Jodoin</i>
              </span>
              <span class="prix">45</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Cava Brut</span><br>
                <b class="vin-provenance">[Espagne]</b>
                <i class="vin-desc">1312, Mestres</i>
              </span>
              <span class="prix">50</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Savoie</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Ayse Brut, Dominique Belluard</i>
              </span>
              <span class="prix">72</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Champagne Brut Nature</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">1er Cru Vertus, Blanc de Blancs, Pascal Doquet</i>
              </span>
              <span class="prix">115</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Champagne Extra Brut</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Fleury 2000</i>
              </span>
              <span class="prix">150</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Champagne Extra Brut</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Saignée de Sorbée, Vouette & Sorbée</i>
              </span>
              <span class="prix">160</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Champagne Extra Brut, Les Béguines, La Closerie</span><br>
                <b class="vin-provenance">[France]</b>
              </span>
              <span class="prix">180</span>
            </li>
          </ul>
        </section>
        <section>
          <h2>VINS BLANCS</h2>
          <ul>
            <li>
              <span>
                <span class="vin-nom">Cavalier du Versant</span><br>
                <b class="vin-provenance">[Québec]</b>
                <i class="vin-desc">Domaine Gélinas 2011</i>
              </span>
              <span class="prix">42</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Mantinia, Moschofilero</span><br>
                <b class="vin-provenance">[Grèce]</b>
                <i class="vin-desc">Tselepos Classique 2013</i>
              </span>
              <span class="prix">46</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Côtes de Duras, Nadia</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Nadia Lusseau 2013</i>
              </span>
              <span class="prix">48</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Muscadet Sèvre et Maine</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Vincent Caillé 2013</i>
              </span>
              <span class="prix">50</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Saint-Foy Bordeaux Blanc</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Château les Mangons 2012</i>
              </span>
              <span class="prix">54</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Burgenland, Grüner Veltliner</span><br>
                <b class="vin-provenance">[Autriche]</b>
                <i class="vin-desc">Meinklang 2013</i>
              </span>
              <span class="prix">55</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Vin de France ( Bergerac, Sud-Ouest)</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Les Abeilles de Collinettes, Lestignac 2012</i>
              </span>
              <span class="prix">57</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Les Rosiers</span><br>
                <b class="vin-provenance">[Québec]</b>
                <i class="vin-desc">Les Pervenches 2013</i>
              </span>
              <span class="prix">62</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Vin de Table (Roussillon), Juste Ciel !</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">La Petite Baigneuse 2012</i>
              </span>
              <span class="prix">62</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Vin de France (Beaujolais), Escapade</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">France Gonzalvez 2012</i>
              </span>
              <span class="prix">63</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Badisher Landwein, Viviser</span><br>
                <b class="vin-provenance">[Allemagne]</b>
                <i class="vin-desc"> Ziereisen 2011</i>
              </span>
              <span class="prix">65</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Südtirol-Alto Aldige</span><br>
                <b class="vin-provenance">[Italie]</b>
                <i class="vin-desc">Chardonnay, Hartman Donà 2012</i>
              </span>
              <span class="prix">67</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Nahe, WeisserBurgunder Troken Gäseritsch</span><br>
                <b class="vin-provenance">[Allemagne]</b>
                <i class="vin-desc">Weingut Hahnmühle 2012</i>
              </span>
              <span class="prix">70</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Hawke's Bay Sauvignon Blanc</span><br>
                <b class="vin-provenance">[Nouvelle-Zélande]</b>
                <i class="vin-desc">The Supernatural 2013</i>
              </span>
              <span class="prix">70</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Priorat, Clos Martina 2011</span><br>
                <b class="vin-provenance">[Espagne]</b>
                <i class="vin-desc">Mas den Blei 2011</i>
              </span>
              <span class="prix">72</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Vino Bianco (Piémont)</span><br>
                <b class="vin-provenance">[Italie]</b>
                <i class="vin-desc">Ezio Trinchero</i>
              </span>
              <span class="prix">75</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Côtes du Jura, Naturé</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Domaine Berthet Bondet 2012</i>
              </span>
              <span class="prix">78</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Venezia Giulia, Ribolla Gialla</span><br>
                <b class="vin-provenance">[Italie]</b>
                <i class="vin-desc">Paraschos 2009</i>
              </span>
              <span class="prix">82</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Vin de Savoie, Le Feu</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Dominique Belluard 2011</i>
              </span>
              <span class="prix">86</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Somlo, Juhfark</span><br>
                <b class="vin-provenance">[Hongrie]</b>
                <i class="vin-desc">Meinklang 2010</i>
              </span>
              <span class="prix">87</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Anjou, Victoire</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Nicolas Reau 2012</i>
              </span>
              <span class="prix">89</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Vacqueyras, Minéral</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Montirius 2011</i>
              </span>
              <span class="prix">89</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Vin de France (Loire), Vino Bianco</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Marie Thibault 2011</i>
              </span>
              <span class="prix">92</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Saint-Véran, La Goutte du Charme</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Domaine Combier 2011</i>
              </span>
              <span class="prix">96</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Bourgogne, Le Petit Têtu</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Jean-Marie Berrux 2012</i>
              </span>
              <span class="prix">99</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Beaune 1er Cru Les Coucherias</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">J.Claude Rateau 2002</i>
              </span>
              <span class="prix">102</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Sancerre, Monts Damnés</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Gérard Boulay 2011</i>
              </span>
              <span class="prix">110</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Côtes du Jura</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Savagnin Les Chalasses Marnes Bleues 2011</i>
              </span>
              <span class="prix">130</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Meursault</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Jean Philippe Fichet 2011</i>
              </span>
              <span class="prix">155</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Hermitage, Prisme</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Julien Pilon 2012</i>
              </span>
              <span class="prix">175</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Chablis 1er Cru Forêt</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Domaine François Raveneau 2011</i>
              </span>
              <span class="prix">180</span>
            </li>
          </ul>
        </section>
        <section>
          <h2>VINS ROUGES</h2>
          <ul>
            <li>
              <span>
                <span class="vin-nom">Côtes du Rhône Signargues</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Domain de la Coudette 2012</i>
              </span>
              <span class="prix">43</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Marcillac, Cuvée Laïris</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Jean-Luc Matha 2010</i>
              </span>
              <span class="prix">44</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Montsant</span><br>
                <b class="vin-provenance">[Espagne]</b>
                <i class="vin-desc">Joan D'Anguera 2013</i>
              </span>
              <span class="prix">45</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Rioja</span><br>
                <b class="vin-provenance">[Espagne]</b>
                <i class="vin-desc">Vina Ilusion 2013</i>
              </span>
              <span class="prix">48</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Côtes du Rhône, Cuvée Tradition</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Domaine les Hautes Cances 2011</i>
              </span>
              <span class="prix">50</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Vin de France (Ardèche), Vin Nu</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Les Deux Terres 2013</i>
              </span>
              <span class="prix">50</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">BO2 (Andalousie)</span><br>
                <b class="vin-provenance">[Espagne]</b>
                <i class="vin-desc">Barranco Oscuro</i>
              </span>
              <span class="prix">52</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Vin de France (Beaujolais), Raisins Gaulois</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">M. Lapierre 2013</i>
              </span>
              <span class="prix">53</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Vin de Pays de l'Aveyron, Les Anciens</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Rols 2011</i>
              </span>
              <span class="prix">55</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Bourgueil, Avis de Vin Fort</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Domaine Breton 2013</i>
              </span>
              <span class="prix">57</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Mas P'aca (Andalousie)</span><br>
                <b class="vin-provenance">[Espagne]</b>
                <i class="vin-desc">Naranjuez 2011</i>
              </span>
              <span class="prix">58</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Saumur Champigny, Ruben</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Domaine Bobinet 2013</i>
              </span>
              <span class="prix">61</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Montsant, Finca L'Argatà</span><br>
                <b class="vin-provenance">[Espagne]</b>
                <i class="vin-desc">Joan D'Anguera 2011</i>
              </span>
              <span class="prix">64</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Burgenland, Blaufränkish</span><br>
                <b class="vin-provenance">[Autriche]</b>
                <i class="vin-desc">Moric 2012</i>
              </span>
              <span class="prix">66</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Vino Rosso (Sicile), Palmento</span><br>
                <b class="vin-provenance">[Italie]</b>
                <i class="vin-desc">Vino di Anna 2012</i>
              </span>
              <span class="prix">68</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Sainte-Foy Bordeaux</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Château les Mangons 2003</i>
              </span>
              <span class="prix">70</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Régnié</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">G. Descombes 2011</i>
              </span>
              <span class="prix">75</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Arbois Pupillin, La Chamade</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Philippe Bornard 2010</i>
              </span>
              <span class="prix">78</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Rheingau, Spätburguner Rotwein Trocken</span><br>
                <b class="vin-provenance">[Allemagne]</b>
                <i class="vin-desc">Peter Jakob Kühn 2012</i>
              </span>
              <span class="prix">80</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Monferrato Dolcetto, Le Taragne</span><br>
                <b class="vin-provenance">[Italie]</b>
                <i class="vin-desc">Ezio Trinchero 2006</i>
              </span>
              <span class="prix">82</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Campania Aglianico, Drogone</span><br>
                <b class="vin-provenance">[Italie]</b>
                <i class="vin-desc">Cantina Giardino 2008</i>
              </span>
              <span class="prix">85</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Anjou, L'Enfant Terrible</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Nicolas Reau 2010</i>
              </span>
              <span class="prix">89</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Vin de France (Jura), J'En Veux !!!</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Jean-François Ganevat</i>
              </span>
              <span class="prix">90</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Rosso Veneto, Verdugo</span><br>
                <b class="vin-provenance">[Italie]</b>
                <i class="vin-desc">Masiero Gianfranco 2010</i>
              </span>
              <span class="prix">96</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Rioja, Vina Tondonia</span><br>
                <b class="vin-provenance">[Espagne]</b>
                <i class="vin-desc">R. Lopez de Heredia 2002</i>
              </span>
              <span class="prix">99</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Pic Saint-Loup (Languedoc), Fleuve Amour</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Zélige-Caravent 2010</i>
              </span>
              <span class="prix">105</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Auxey-Duresses</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Alain Gras 2012</i>
              </span>
              <span class="prix">108</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Macon, La Maison Romane</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Château de Berzé 2011</i>
              </span>
              <span class="prix">112</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Barolo</span><br>
                <b class="vin-provenance">[Italie]</b>
                <i class="vin-desc">Josetta Saffirio 2009</i>
              </span>
              <span class="prix">125</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Marsannay, Trois Terres</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Domaine Jean Fournier 2011</i>
              </span>
              <span class="prix">130</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Barbaresco (Piémont), Montestefano</span><br>
                <b class="vin-provenance">[Italie]</b>
                <i class="vin-desc">Rivella Serafino 2009</i>
              </span>
              <span class="prix">131</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Cornas, Chaillot</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Thierry Allemand 2009</i>
              </span>
              <span class="prix">175</span>
            </li>
            <li>
              <span>
                <span class="vin-nom">Nuits Saint Georges, Les Damodes</span><br>
                <b class="vin-provenance">[France]</b>
                <i class="vin-desc">Domaine Ballorin 2010</i>
              </span>
              <span class="prix">190</span>
            </li>
          </ul>
        </section>
      </div>
    </div>
<?php include('inclusions/pied2page.inc.php'); ?>
