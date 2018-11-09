<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Binokl'ART</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../view/accueil.style.css" />
  </head>

  <header>
    <div>
      <img id="logo" src ="../view/img/logo.png" aalt="logo"/>
      <h1>Binokl'ART</h1>
    </div>
  </header>

  <body>
    <div id="container">

      <div class="divacc" id="solaire">
        <a class="liencat" href="../controler/vueProduits.ctrl.php?c=Solaire" title="solaires">
          <p>SOLAIRES</p>
        </a>
        <img class="imgacc" src="../view/img/solaire.jpg" alt="voir les lunettes solaires">
      </div>

      <div class="divacc" id="optique">
        <a class="liencat" href="../controler/vueProduits.ctrl.php?c=Optique" title="optiques">
          <p>OPTIQUES</p>
        </a>
        <img class="imgacc" src="../view/img/optique.jpg" alt="voir les lunettes optiques">
      </div>

      <div class="divacc" id="toutes">
        <img id="imgHerve" href="../view/img/herve.png" alt="herve">
        <a class="liencat" id="lientoutes" href="../controler/vueProduits.ctrl.php?c=Herv&eacute;" title="herve">
          <p>APPROUV&Eacute;ES PAR HERV&Eacute;</p>
        </a>
      </div>

    </div>
  </body>

  <footer>
    <p>Binokl'Art<br>127 Rue Blanchon<br>38000<br>Grenoble</p>
    <a id="admin" href="../view/login-admin.view.php" title="admin"><p>ADMIN</p></a>
  </footer>

</html>
