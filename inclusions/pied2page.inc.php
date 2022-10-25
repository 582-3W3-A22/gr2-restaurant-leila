    <footer>
      <h2><?= $ppInfo; ?></h2>
      <p><?= $ppOuverture1; ?><br><?= $ppOuverture2; ?></p>
      <p><?= $ppReservation; ?> 
        <span class="gras"><?= $entTelephone; ?></span>
      </p>
      <p class="adresse">
        <a href="https://goo.gl/maps/9pTkr" target="lien-externe" title="<?= $ppCarteTitre; ?>">
          <img src="images/iu/nav-icone-google-maps.png" alt="<?= $ppCarteAlt; ?>">
        </a>
        <?= $entAdresse; ?>
      </p>
    </footer>
  </div>
  <!-- Droits d'utilisation et de reproduction réservés -->
  <p class="droits">
    &copy;2022
    <br>Toute reproduction interdite excepté dans le cadre académique des cours 
    <br>au département de Techniques d'intégration multimédia au Collège de Maisonneuve
  </p>
  <script src="js/leila.js"></script>
</body>
</html>