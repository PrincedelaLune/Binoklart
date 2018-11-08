<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Binokl'ART - Solaires</title>
    <link rel="stylesheet" type="text/css" media="screen" href="login-admin.style.css" />
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
      <li><a class="lienNav" href="../controler/vueProduits.ctrl.php?c=Solaire"alt="Solaires">LUNETTES DE SOLEIL</a></li>
      <li><a class="lienNav" href="../controler/vueProduits.ctrl.php?c=Optique" alt="Optiques">LUNETTES DE VUE</a></li>
    </ul>
  </nav>

  <body>
    <div id="alignement">
      <div id="login">
        <form method="post" action="../controler/LoginAdmin.ctrl.php">
            <label for="pseudo">Identifiant</label> <br> <input type="text" name="pseudo" id="pseudo"/> <br>
            <label for="pass">Mot de passe</label> <br> <input type="password" name="pass" id="pass"/>
            <br>
            <input id type="submit" value="Envoyer" />
        </form>
      </div>
    </div>
  </body>

</html>
