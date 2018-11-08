<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Binokl'ART</title>
    <link rel="stylesheet" type="text/css" media="screen" href="accueil.style.css" />
  </head>

  <header>
    <div>
      <img id="logo" src ="img/logo.png" aalt="logo"/>
      <h1>Binokl'ART</h1>
    </div>
  </header>

  <body>
    <div id="container">

      <div class="divacc" id="solaire">
        <a class="liencat" href="../controler/vueProduits.ctrl.php?c='solaires'" title="solaires">
          <p>SOLAIRES</p>
        </a>
        <img class="imgacc" src="img/solaire.jpg" alt="vour les lunettes solaires">
      </div>

      <div class="divacc" id="optique">
        <a class="liencat" href="../controler/vueProduits.ctrl.php?c='optique'" title="optiques">
          <p>OPTIQUES</p>
        </a>
        <img class="imgacc" src="img/optique.jpg" alt="vour les lunettes optiques">
      </div>

      <div class="divacc" id="toutes">
        <a class="liencat" id="lientoutes" href="../controler/vueProduits.ctrl.php?c='herve'" title="herve">
          <p>APPROUV&Eacute;ES PAR HERV&Eacute;</p>
        </a>
      </div>

    </div>
  </body>

  <footer>
    <p> </p>
    <a id="admin" href="../view/login-admin.view.php" title="admin"><p>ADMIN</p></a>
  </footer>

</html>
