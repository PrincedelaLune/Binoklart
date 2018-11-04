<?php
  require_once("../model/DAO.class.php");
  require_once("../model/Lunette.class.php");
  require_once("../model/Forme.class.php");

  $firstId = 0
  $nbItem = (isset($_GET['nbItem']))?$_GET['nbItem']:15;

  $lunettes = $dao->getN($firstId,$nbItem);
  include("../view/vueProduits.view.php");

?>
