<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Binokl'ART - Solaires</title>
    <link rel="stylesheet" type="text/css" media="screen" href="vueProduits.css" />
  </head>

  <header>
    <img src ="img/logo.png" aalt="logo"/>
    <h1>Binokl'ART</h1>
  </header>

  <body>
    <div id="container">
  <!-- code d'apparition d'une paire------------------------------------------->
      <div class="paires">
        <img src ="img/paires/44.png" alt="logo"/>
        <a class="lienref"><p>La référence</p></a>
      </div>
  <!-- code d'apparition d'une paire------------------------------------------->
  <?php

    foreach ($lunettes as $key => $value) {
      echo "<div class=\"paires\">
              <img src =\"img/paires/".$value->numero."png\" alt=".$value->modele."/>
              <a class=\"lienref\"><p>".$value->modele."</p></a>
            </div>\n\n";
    }

  ?>

    </div>
  </body>

  <footer>
    <a href="lesite.fr/optiques" title="optiques"><p>Optiques</p></a>
    <a href="lesite.fr/solaires" title="solaires"><p>Solaires</p></a>
  </footer>
</html>
