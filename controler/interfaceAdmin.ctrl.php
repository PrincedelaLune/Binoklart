<?php

  require_once('../model/Lunette.class.php');
  require_once('../model/DAO.class.php');
  $lunettes = new DAO();
  $list = $lunettes->getAllLunettes();
  }
 ?>
