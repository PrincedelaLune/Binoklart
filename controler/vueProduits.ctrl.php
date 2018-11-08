<?php
  require_once('../model/DAO.class.php');
  require_once('../model/Lunette.class.php');
  $lunette = new DAO();
$checked = array();
  if (isset($_POST['genre'])){
    $genre = array();
    for ($i=0; $i < sizeof($_POST['genre']); $i++) {
      array_push($genre, $_POST['genre'][$i]);
      $checked[$_POST['genre'][$i]]=1;
    }
  }else {
    $genre = NULL;
  }

  if (isset($_POST['forme'])){
    $forme = array();
    for ($i=0; $i < sizeof($_POST['forme']); $i++) {
      array_push($forme, $_POST['forme'][$i]);
      $checked[$_POST['forme'][$i]]=1;
    }
  }else {
    $forme = NULL;
  }

  if ($_GET['c'] == "Hervé") {
    $checked['Ronde']=1;
  }

  if (isset($_POST['matiere'])){
    $matiere = array();
    for ($i=0; $i < sizeof($_POST['matiere']); $i++) {
      array_push($matiere, $_POST['matiere'][$i]);
      $checked[$_POST['matiere'][$i]]=1;
    }
  }else {
    $matiere = NULL;
  }

  if (isset($_POST['couleur'])){
    $couleur = array();
    for ($i=0; $i < sizeof($_POST['couleur']); $i++) {
      array_push($couleur, $_POST['couleur'][$i]);
      $checked[$_POST['couleur'][$i]]=1;
    }
  }else {
    $couleur = NULL;
  }

  if (isset($_POST['Herve'])){
    $herve = 1;
    $checked['Herve']=1;
  }else {
    $herve = NULL;
  }

  if (isset($_POST['trier'])) {
    $ordre = $_POST['trier'];
  }else {
    $ordre = NULL;
  }

  $style = $_GET['c'];

//getArts(/*$n,*/ $genre, $forme, $mat, $couleur, $herv, $style)
  $produits = $lunette->getArts($genre, $forme, $matiere, $couleur, $herve, $style, $ordre);
  include("../view/vueProduits.view.php");
?>
