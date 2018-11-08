<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Binokl'ART - Solaires</title>
    <link rel="stylesheet" type="text/css" media="screen" href="vueProduits.style.css" />
  </head>

  <header>
    <div>
      <img id="logo" src ="img/logo.png" aalt="logo"/>
      <h1>Binokl'ART</h1>
    </div>
  </header>

  <nav>
    <ul>
      <li><a class="lienNav" id="lienHome" href="" alt="Accueil"><img id="home" src="img/home.png" alt="home"/></a></li>
      <li><a class="lienNav" href="" alt="Solaires">LUNETTES DE SOLEIL</a></li>
      <li><a class="lienNav" href="" alt="Optiques">LUNETTES DE VUE</a></li>
    </ul>
  </nav>

  <body>
    <div id="container">
      <div id="menu">
        <div class="itemMenu">
          <p class="nomAttribut">Genre</p>
            <input class="attribut" type="checkbox" name="genre" value="homme"> Homme<br>
            <input class="attribut" type="checkbox" name="genre" value="femme"> Femme<br>
        </div>
        <div class="itemMenu">
          <p class="nomAttribut">Forme</p>
            <input class="attribut" type="checkbox" name="forme" value="Ronde"> Ronde<br>
            <input class="attribut" type="checkbox" name="forme" value="Ovale"> Ovale<br>
            <input class="attribut" type="checkbox" name="forme" value="Rectangle"> Rectangle<br>
            <input class="attribut" type="checkbox" name="forme" value="Aviateur"> Aviateur<br>
        </div>
        <div class="itemMenu">
          <p class="nomAttribut">Mati&egrave;re</p>
            <input class="attribut" type="checkbox" name="matiere" value="plastique"> Plastique<br>
            <input class="attribut" type="checkbox" name="matiere" value="metal"> M&eacute;tal<br>
        </div>
        <div class="itemMenu">
          <p class="nomAttribut">Couleur</p>
            <input class="attribut" type="checkbox" name="couleur" value="noir"> Noir<br>
            <input class="attribut" type="checkbox" name="couleur" value="marron"> Marron<br>
        </div>
        <div class="itemMenu">
          <p class="nomAttribut">Herv&eacute;</p>
            <input class="attribut" type="checkbox" name="herve" value="oui"> Approuv&eacute; par Herv&eacute;<br>
        </div>
      </div>
      <div id="partieDroite">
        <div id="entetePaires">
          <h2>LUNETTES DE SOLEIL</h2>
          <select>
            <option value="rien">Trier par</option>
            <option value="prix1">Prix - le moins cher</option>
            <option value="prix2">Prix - le plus cher</option>
            <option value="nom1">Nom - A-Z</option>
            <option value="nom2">Nom - Z-A</option>
          </select>
        </div>
        <div id="containerPaires">
      <!-- code d'apparition d'une paire html

          <div class="paires">
            <img src="img/paires/44.jpg" alt="logo"/>
            <a class="lienref"><p>Carrera - 113/S 003HD</p></a>
            <p class="prix">139&#128;</p>
          </div>
      -->
          <?php foreach ($produits as $lunette) { ?>
            <div class="paires">
              <img src="<?=$lunette->numero?>.jpg" alt="logo"/>
              <a class="lienref" href="../controler/vuePaire.ctrl.php?n=<?=$lunette->numero?>"><p><?=$lunette->nom?></p></a>
              <p class="prix"><?=$lunette->prix?>&#128;</p>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </body>

  <footer>
    <p> </p>
    <a id="admin" href="lesite.fr/admin" title="admin"><p>ADMIN</p></a>
  </footer>

</html>
