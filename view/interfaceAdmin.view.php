<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Binokl'ART - Interface Administrateur</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../view/interfaceAdmin.style.css" />
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
      <li><a class="lienNav" href="../controler/vueProduits.ctrl.php?c=Herv&eacute;" alt="Herv&eacute:">LUNETTES DE HERV&Eacute;</a></li>
    </ul>
  </nav>

  <body>
  <form method="post" action="../controler/interfaceAdmin.ctrl.php">
    <div id="alignement">
      <div id="enteteInterface">
        <h2>Tableau de bord</h2>
      </div>

      <?php foreach($list as $lunette){?>
      <div class="paire">
        <div class="photo">
          <img src="../view/img/paires/<?php echo $lunette->numero?>.jpg" alt="photo">
        </div>
        <div class="nometref">
          <p class="num"><?php echo $lunette->numero?></p>
          <p class="ref"><?php echo $lunette->marque?> - <?php echo $lunette->modele?></p>
        </div>
        <div class="prix">
          <h5>Prix</h5>
          <p><?php echo $lunette->prix?>&#128;</p>
          <?php echo'<input type="text" name="prix'.$lunette->numero.'" placeholder="Nv Prix"/>'?>
        </div>
        <div class="dispo">
          <h5>Disponible</h5>
          <?php if($lunette->dispo){
          echo'<input type="radio" name="disponible'.$lunette->numero.'" value="oui" checked="checked"> Oui<br>';
          echo'<input type="radio" name="disponible'.$lunette->numero.'" value="non"> Non';
          }else{
          echo'<input type="radio" name="disponible'.$lunette->numero.'" value="oui" > Oui<br>';
          echo'<input type="radio" name="disponible'.$lunette->numero.'" value="non" checked="checked"> Non';
          }?>
        </div>
      </div>
      <?php } ?>
      <div id="boutons">
        <input type="submit" value="Mettre &agrave; jour" />
        <input id="b2" type="button" value="Ajouter une paire" />
      </div>
     </form>
    </div>
  </body>

  <footer>
    <div id="boutons">
      <input type="submit" value="Mettre &agrave; jour" />
      <input id="b2" type="button" value="Ajouter une paire" />
    </div>
  </footer>
</html>
