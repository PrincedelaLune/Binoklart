<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Binokl'ART - Solaires</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../view/login-admin.style.css" />
  </head>

  <header>
    <div>
      <img id="logo" src ="../view/img/logo.png" aalt="logo"/>
      <h1>Binokl'ART</h1>
    </div>
  </header>

  <nav>
    <nav>
      <ul>
        <li><a class="lienNav" id="lienHome" href="../view/accueil.view.php" alt="Accueil"><img id="home" src="../view/img/home.png" alt="home"/></a></li>
        <li><a class="lienNav" href="../controler/vueProduits.ctrl.php?c=Solaire" alt="Solaires">LUNETTES DE SOLEIL</a></li>
        <li><a class="lienNav" href="../controler/vueProduits.ctrl.php?c=Optique" alt="Optiques">LUNETTES DE VUE</a></li>
        <li><a class="lienNav" href="../controler/vueProduits.ctrl.php?c=Herv&eacute;" alt="Herv&eacute:">LUNETTES DE HERV&Eacute;</a></li>
      </ul>
    </nav>
  </nav>

  <body>
    <div id="alignement">
      <div id="login">
        <form method="post" action="../controler/LoginAdmin.ctrl.php">
            <label for="pseudo">Identifiant</label> <br> <input type="text" name="pseudo" id="pseudo"/> <br>
            <label for="pass">Mot de passe</label> <br> <input type="password" name="pass" id="pass"/>
            <br>
            <input id type="submit" value="Envoyer" />
            <?php if (isset($mauvaislog)) {
              echo"<br/><p id=incorrect>Login ou mot de passe incorrect</p>";
            } ?>
        </form>
      </div>
    </div>
  </body>

</html>
