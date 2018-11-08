<?php
  require_once("../model/DAO.class.php");
  require_once("../model/Lunette.class.php");
  require_once("../model/Forme.class.php");

  $lunettes = $dao->getPaire($_GET['n']);
  include("../view/vuePaire.view.php");

?>
