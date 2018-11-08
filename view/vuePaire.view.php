<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Binokl'ART - <?=$lunette->style?></title>
    <link rel="stylesheet" type="text/css" media="screen" href="../view/vuePaire.style.css" />
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

      <div id="image">
        <img src="../view/img/paires/<?=$lunette->numero?>.jpg" alt="image">
      </div>

      <div id="infos">
        <div id="ref">
          <h2><?=$lunette->marque?></h2>
          <p id="modèle"><?=$lunette->modele?></p>
          <p id="prix"><?=$lunette->prix?>&#128;</p>
        </div>
        <div id="dispo">
          <img src="../view/img/<?=$lunette->dispo?>.png" alt="disponible">
          <?php if ($lunette->dispo == '0') {
            echo "<p>La paire est momentanément indisponible</p>";
          } else {
            echo "<p>Disponible !</p>";
          }?>
        </div>
      </div>

    </div>
    <div id="description">
      <h3>Genre</h3>
      <?php if ($lunette->genre == 'M') {
        echo "<p>Masculin</p>";
      } elseif ($lunette->genre == 'F'){
        echo "<p>F&eacute;minin</p>";
      } else {
        echo "<p>Mixte</p>";
      }?>
      <h3>Type</h3>
      <p><?=$lunette->style?></p>
      <h3>Forme</h3>
      <p><?=$lunette->forme?></p>
      <h3>Couleur</h3>
      <p><?=$lunette->couleur?></p>
      <h3>Mat&eacute;riau</h3>
      <p><?=$lunette->materiau?></p>
    </div>
  </body>

  <footer>
    <p> </p>
    <a id="admin" href="../view/login-admin.view.php" title="admin"><p>ADMIN</p></a>
  </footer>

</html>
