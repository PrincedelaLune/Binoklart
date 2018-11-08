<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Binokl'ART - <?php echo($produits[0]->style); ?></title>
    <link rel="stylesheet" type="text/css" media="screen" href="../view/vueProduits.style.css" />
  </head>

  <header>
    <div>
      <img id="logo" src ="../view/img/logo.png" alt="logo"/>
      <h1>Binokl'ART</h1>
    </div>
  </header>

  <nav>
    <ul>
      <li><a class="lienNav" id="lienHome" href="../view/accueil.view.php" alt="Accueil"><img id="home" src="../view/img/home.png" alt="home"/></a></li>
      <li><a class="lienNav" href="../controler/vueProduits.ctrl.php?c=Solaire" alt="Solaires">LUNETTES DE SOLEIL</a></li>
      <li><a class="lienNav" href="../controler/vueProduits.ctrl.php?c=Optique" alt="Optiques">LUNETTES DE VUE</a></li>
      <li><a class="lienNav" href="../controler/vueProduits.ctrl.php?c=Herv&eacute;" alt="Herv&eacute:">LUNETTES DE HERV&Eacute;</a></li>
    </ul>
  </nav>

  <body>
    <div id="container">
      <div id="menu">
      <form class="" method="post" action="../controler/vueProduits.ctrl.php?c=<?php echo($_GET['c'])?>">
        <div class="itemMenu">
          <p class="nomAttribut">Genre</p>
            <input class="attribut" type="checkbox" name="genre[]" id="genreh" value="homme"<?php if(isset($checked['homme']))echo'checked=\'checked\'';?>> <label for="genreh"> Homme<label/><br>
            <input class="attribut" type="checkbox" name="genre[]" id="genref" value="femme"<?php if(isset($checked['femme']))echo'checked=\'checked\'';?>> <label for="genref"> Femme<label/><br>
        </div>
        <div class="itemMenu">
          <p class="nomAttribut">Forme</p>
            <input class="attribut" type="checkbox" name="forme[]" id="formero" value="Ronde"<?php if(isset($checked['Ronde']))echo'checked=\'checked\'';?>> <label for="formero"> Ronde<label/><br>
            <input class="attribut" type="checkbox" name="forme[]" id="formeov" value="Ovale"<?php if(isset($checked['Ovale']))echo'checked=\'checked\'';?>> <label for="formeov"> Ovale<label/><br>
            <input class="attribut" type="checkbox" name="forme[]" id="formere" value="Rectangle"<?php if(isset($checked['Rectangle']))echo'checked=\'checked\'';?>> <label for="formere"> Rectangle<label/><br>
            <input class="attribut" type="checkbox" name="forme[]" id="formeav" value="Aviateur"<?php if(isset($checked['Aviateur']))echo'checked=\'checked\'';?>> <label for="formeav"> Aviateur<label/><br>
        </div>
        <div class="itemMenu">
          <p class="nomAttribut">Mati&egrave;re</p>
            <input class="attribut" type="checkbox" name="matiere[]" id="matierep" value="Plastique"<?php if(isset($checked['Plastique']))echo'checked=\'checked\'';?>> <label for="matierep"> Plastique<label/><br>
            <input class="attribut" type="checkbox" name="matiere[]" id="matierem" value="Métal"<?php if(isset($checked['Métal']))echo'checked=\'checked\'';?>> <label for="matierem"> M&eacute;tal<label/><br>
        </div>
        <div class="itemMenu">
          <p class="nomAttribut">Couleur</p>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurno" value="Noir"<?php if(isset($checked['Noir']))echo'checked=\'checked\'';?>> <label for="couleurno"> Noir<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurma" value="Marron"<?php if(isset($checked['Marron']))echo'checked=\'checked\'';?>> <label for="couleurma">Marron<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurtr" value="Transparent"<?php if(isset($checked['Transparent']))echo'checked=\'checked\'';?>> <label for="couleurtr"> Transparent<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleuror" value="Or"<?php if(isset($checked['Or']))echo'checked=\'checked\'';?>> <label for="couleuror"> Or<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurar" value="Argent"<?php if(isset($checked['Argent']))echo'checked=\'checked\'';?>> <label for="couleurar"> Argent<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurgu" value="Gun"<?php if(isset($checked['Gun']))echo'checked=\'checked\'';?>> <label for="couleurgu"> Gunmetal<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleuron" value="Or/Noir"<?php if(isset($checked['Or/Noir']))echo'checked=\'checked\'';?>> <label for="couleuron"> Or/Noir<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurbl" value="Bleu"<?php if(isset($checked['Bleu']))echo'checked=\'checked\'';?>> <label for="couleurbl"> Bleu<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurgr" value="Gris"<?php if(isset($checked['Gris']))echo'checked=\'checked\'';?>> <label for="couleurgr"> Gris<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurro" value="Rose"<?php if(isset($checked['Rose']))echo'checked=\'checked\'';?>> <label for="couleurro"> Rose<label/><br>
            <input class="attribut" type="checkbox" name="couleur[]" id="couleurru" value="Rouge"<?php if(isset($checked['Rouge']))echo'checked=\'checked\'';?>> <label for="couleurru">Rouge<label/><br>
        </div>
        <div class="itemMenu">
          <p class="nomAttribut">Herv&eacute;</p>
            <input class="attribut" type="checkbox" name="Herve" id="Herve" value="Herve"<?php if(isset($checked['Herve']))echo'checked=\'checked\'';?>> <label for="Herve"> Approuv&eacute; par Herv&eacute;<label/><br>
        </div>
        <div>
            <input type="submit" value="Appliquer">
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
      <!-- code type d'apparition d'une paire html
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
