<?php
  require_once("../model/DAO.class.php");
  require_once("../model/LoginAdmin.class.php");

  $pseudo = $_POST['pseudo'];
  $pass = $_POST['pass'];
  $bd = new DAO();

  $login = $bd->getlogin();
  $list = $bd->getAllLunettes();
  if ($pseudo==$login->login && $pass==$login->motdp) {
    include("../view/interfaceAdmin.view.php");
  }

?>
