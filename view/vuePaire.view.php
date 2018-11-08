<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Binokl'ART - <?=$lunette->style?></title>
    <link rel="stylesheet" type="text/css" media="screen" href="vuePaire.style.css" />
  </head>

  <header>
    <div>
      <img id="logo" src ="img/logo.png" aalt="logo"/>
      <h1>Binokl'ART</h1>
    </div>
  </header>

  <nav>
    <ul>
      <li><a class="lienNav" id="lienHome" href="../view/accueil.view.php" alt="Accueil"><img id="home" src="img/home.png" alt="home"/></a></li>
      <li><a class="lienNav" href="" alt="Solaires">LUNETTES DE SOLEIL</a></li>
      <li><a class="lienNav" href="" alt="Optiques">LUNETTES DE VUE</a></li>
    </ul>
  </nav>

  <body>
    <div id="container">

      <div id="image">
        <img src="img/paires/<?=$lunette->numero?>.jpg" alt="image">
      </div>

      <div id="infos">
        <div id="ref">
          <h2><?=$lunette->marque?></h2>
          <p id="modèle"><?=$lunette->modèle?></p>
          <p id="prix"><?=$lunette->prix?>&#128;</p>
        </div>
        <div id="dispo">
          <img src="img/<?=$lunette->dispo?>.png" alt="disponible">
          <p><?=$lunette->style?></p>
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
      <p><?=$lunette->matieriau?></p>
    </div>
  </body>

  <footer>
    <p> </p>
    <a id="admin" href="lesite.fr/admin" title="admin"><p>ADMIN</p></a>
  </footer>

</html>
