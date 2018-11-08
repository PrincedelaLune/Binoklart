<?php

  require_once('../model/Lunette.class.php');
  require_once('../model/DAO.class.php');
  $db = new DAO();
  $lunettes=$db->getAllLunettes();



  include("../view/accueil.view.php")
  
 ?>
