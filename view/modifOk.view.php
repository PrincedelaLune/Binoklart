<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Binokl'ART - Interface Administrateur</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../view/modifOk.style.css" />
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
      <div id="haut">
        <img id="image" src ="../view/img/modifOk.png" aalt="OK"/>
        <h2>Modifications effectuées</h2>
      </div>
      <form method="post" action="../view/accueil.view.php">
        <input id type="submit" value="Retour à l'accueil" />
     </form>
    </div>
  </body>
</html>
