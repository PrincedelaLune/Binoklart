<?php
  require_once("../model/DAO.class.php");
  require_once("../model/Lunette.class.php");

  //var_dump($_GET['n']);
  $lunette = $dao->get($_GET['n']);
  include("../view/vuePaire.view.php");

?>
