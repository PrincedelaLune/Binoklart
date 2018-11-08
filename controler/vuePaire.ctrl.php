<?php
  require_once("../model/DAO.class.php");
  require_once("../model/Lunette.class.php");

  $lunettes = $dao->getPaire($_GET['n']);
  include("../view/vuePaire.view.php");

?>
