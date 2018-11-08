<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Binokl'ART - <?=$produit[0]->style?></title>
    <link rel="stylesheet" type="text/css" media="screen" href="../view/vueProduits.style.css" />
  </head>

  <header>
    <div>
      <img id="logo" src ="../view/img/logo.png" aalt="logo"/>
      <h1>Binokl'ART</h1>
    </div>
  </header>

  <nav>
    <ul>
      <li><a class="lienNav" id="lienHome" href="../view/accueil.view.php" alt="Accueil"><img id="home" src="../view/img/home.png" alt="home"/></a></li>
      <li><a class="lienNav" href="../controler/vueProduits.ctrl.php?c=Solaire" alt="Solaires">LUNETTES DE SOLEIL</a></li>
      <li><a class="lienNav" href="../controler/vueProduits.ctrl.php?c=Optique" alt="Optiques">LUNETTES DE VUE</a></li>
    </ul>
  </nav>

  <body>
    <div id="container">
      <div id="menu">
      <form class="" method="post" action="../controler/vueProduits.ctrl.php">
        <div class="itemMenu">
          <p class="nomAttribut">Genre</p>
            <input class="attribut" type="checkbox" name="genre[]" id="genreh" value="homme"> <label for="genreh"> Homme<label/><br>
            <input class="attribut" type="checkbox" name="genre[]" id="genref" value="femme"> <label for="genref"> Femme<label/><br>
        </div>
        <div class="itemMenu">
          <p class="nomAttribut">Forme</p>
            <input class="attribut" type="checkbox" name="forme[]" id="formero" value="Ronde"> <label for="formero"> Ronde<label/><br>
            <input class="attribut" type="checkbox" name="forme[]" id="formeov" value="Ovale"> <label for="formeov"> Ovale<label/><br>
            <input class="attribut" type="checkbox" name="forme[]" id="formere" value="Rectangle"> <label for="formere"> Rectangle<label/><br>
            <input class="attribut" type="checkbox" name="forme[]" id="formeav" value="Aviateur"> <label for="formeav"> Aviateur<label/><br>
        </div>
        <div class="itemMenu">
          <p class="nomAttribut">Mati&egrave;re</p>
            <input class="attribut" type="checkbox" name="matiere[]" id="matierep" value="Plastique"> <label for="matierep"> Plastique<label/><br>
            <input class="attribut" type="checkbox" name="matiere[]" id="matierem" value="Métal"> <label for="matierem"> M&eacute;tal<label/><br>
        </div>
        <div class="itemMenu">
          <p class="nomAttribut">Couleur</p>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurno" value="Noir"> <label for="couleurno"> Noir<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurma" value="Marron"> <label for="couleurma">Marron<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurtr" value="Transparent"> <label for="couleurtr"> Transparent<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleuror" value="Or"> <label for="couleuror"> Or<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurar" value="Argent"> <label for="couleurar"> Argent<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurgu" value="Gun"> <label for="couleurgu"> Gunmetal<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleuron" value="Or/Noir"> <label for="couleuron"> Or/Noir<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurbl" value="Bleu"> <label for="couleurbl"> Bleu<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurgr" value="Gris"> <label for="couleurgr"> Gris<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurro" value="Rose"> <label for="couleurro"> Rose<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurru" value="Rouge"> <label for="couleurru">Rouge<label/><br>
        </div>
        <div class="itemMenu">
          <p class="nomAttribut">Herv&eacute;</p>
            <input class="attribut" type="checkbox" name="Herve" id="Herve" value="oui"> <label for="Herve"> Approuv&eacute; par Herv&eacute;<label/><br>
        </div>
        <div>
            <input class="submit" value="Appliquer">
        </div>
      </form>
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
              <img src="../view/img/paires/<?=$lunette->numero?>.jpg" alt="logo"/>
              <a class="lienref" href="../controler/vuePaire.ctrl.php?n=<?=$lunette->numero?>">
              <p><?=$lunette->marque?> - <?=$lunette->modele?></p>
              </a>
              <p class="prix"><?=$lunette->prix?>&#128;</p>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </body>

  <footer>
    <p> </p>
    <a id="admin" href="../view/login-admin.view.php" title="admin"><p>ADMIN</p></a>
  </footer>

</html>
