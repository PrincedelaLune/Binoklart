<?php
    require_once('Lunette.class.php');
    require_once('Forme.class.php');
    require_once('DAO.class.php');

      // Récupération des données de configuration
    $config = parse_ini_file('../config/config.ini');

      // Creation de l'instace DAO
    $lunettes = new DAO();

    $m = $lunettes->getAllForme();
    var_dump($m);

    ?>
