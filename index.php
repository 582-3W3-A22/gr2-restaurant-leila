<?php
  // Identifiant de la page
  $page = 'accueil';
  include('inclusions/entete.inc.php');
?>
<!-- Page d'accueil : code spécifique -->
<div class="contenu-principal">
  <h2><?= $acTitre; ?></h2>
  <p><img src="images/accueil-cuisine.jpg" alt="<?= $acImageAlt; ?>"><?= $acPara1; ?></p>
  <p><?= $acPara2; ?></p>
</div>
<?php include('inclusions/pied2page.inc.php'); ?>

