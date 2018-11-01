<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Binokl'ART - Solaires</title>
    <link rel="stylesheet" type="text/css" media="screen" href="vueProduits.style.css" />
  </head>

  <header>
    <img id="logo" src ="img/logo.png" aalt="logo"/>
    <h1>Binokl'ART</h1>
  </header>

  <body>
    <div id="containerPaires">
  <!-- code d'apparition d'une paire html------------------------------------------->
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
    <div id="menu">
      <p class="nomAttribut">Genre</p><br>
        <input class="attribut" type="checkbox" name="genre" value="homme"> Homme<br>
        <input class="attribut" type="checkbox" name="genre" value="femme"> Femme<br>

      <p class="nomAttribut">Forme</p><br>
        <input class="attribut" type="checkbox" name="forme" value="ronde"> Ronde<br>
        <input class="attribut" type="checkbox" name="forme" value="ovale"> Ovale<br>
        <input class="attribut" type="checkbox" name="forme" value="rectangle"> Rectangle<br>
        <input class="attribut" type="checkbox" name="forme" value="aviateur"> Aviateur<br>

      <p class="nomAttribut">Matière</p><br>
        <input class="attribut" type="checkbox" name="matiere" value="plastique"> Plastique<br>
        <input class="attribut" type="checkbox" name="matiere" value="metal"> Métal<br>

      <p class="nomAttribut">Couleur</p><br>
        <input class="attribut" type="checkbox" name="couleur" value="plastique"> Plastique<br>
        <input class="attribut" type="checkbox" name="couleur" value="metal"> Métal<br>

      <p class="nomAttribut">Hervé</p><br>
        <input class="attribut" type="checkbox" name="herve" value="oui"> Approuvé par Hervé<br>


    </div>
  </body>

  <footer>
    <a href="lesite.fr/optiques" title="optiques"><p>Optiques</p></a>
    <a href="lesite.fr/solaires" title="solaires"><p>Solaires</p></a>
  </footer>
</html>
