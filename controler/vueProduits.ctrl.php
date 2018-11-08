<?php
  require_once('../model/DAO.class.php');
  require_once('../model/Lunette.class.php');

  if (isset($_POST['genre'])){
    for ($i=0; $i < sizeof($_POST['genre']); $i++) {
      array_push($genre, $_POST['genre'][$i]);
    }
  }


  $styleDemande = $_GET['c'];

//getArts($n, $genre, $forme, $mat, $couleur, $herv)
  $produits = $lunette->getArts(autres paramètres et $styleDemande);
  include("../view/vueProduits.view.php");
?>
