<?php
  require_once('../model/DAO.class.php');
  require_once('../model/Lunette.class.php');
  $lunette = new DAO();

  if (isset($_POST['genre'])){
    $genre = array();
    for ($i=0; $i < sizeof($_POST['genre']); $i++) {
      array_push($genre, $_POST['genre'][$i]);
    }
  }else {
    $genre = NULL;
  }

  if (isset($_POST['forme'])){
    $forme = array();
    for ($i=0; $i < sizeof($_POST['forme']); $i++) {
      array_push($forme, $_POST['forme'][$i]);
    }
  }else {
    $forme = NULL;
  }

  if (isset($_POST['matiere'])){
    $matiere = array();
    for ($i=0; $i < sizeof($_POST['matiere']); $i++) {
      array_push($matiere, $_POST['matiere'][$i]);
    }
  }else {
    $matiere = NULL;
  }

  if (isset($_POST['couleur'])){
    $couleur = array();
    for ($i=0; $i < sizeof($_POST['couleur']); $i++) {
      array_push($couleur, $_POST['couleur'][$i]);
    }
  }else {
    $couleur = NULL;
  }

  if (isset($_POST['Herve'])){
    $herve = 1;
  }else {
    $herve = NULL;
  }

  $style = $_GET['c'];

//getArts(/*$n,*/ $genre, $forme, $mat, $couleur, $herv, $style)
  $produits = $lunette->getArts($genre, $forme, $matiere, $couleur, $herve, $style);
  include("../view/vueProduits.view.php");
?>
