<?php

  require_once('../model/Lunette.class.php');
  require_once('../model/DAO.class.php');
  $db = new DAO();
  $lunettes=$db->getAllLunettes();

  foreach ($lunettes as $paire){
    $n=$paire->numero;
    if ($_POST['disponible'.$paire->numero] == "oui"){
      $nouvelleDispo = 1;
    } else {
      $nouvelleDispo = 0;
    }

    if ($nouvelleDispo != $paire->dispo) {
      $db->updateDispo($n, $nouvelleDispo);
    }

    $nouveauPrix = $_POST['prix'.$paire->numero];
    if($nouveauPrix != "" && $nouveauPrix != $paire->prix ) {
      $db->updatePrix($n, $nouveauPrix);
    }
  }

  include("../view/login-admin.view.php")

 ?>
