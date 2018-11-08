<?php
    require_once('Lunette.class.php');
    require_once('Forme.class.php');
    require_once('DAO.class.php');

      // Récupération des données de configuration
    $config = parse_ini_file('../config/config.ini');

      // Creation de l'instace DAO
    $lunettes = new DAO();
    $n = 2;
    $genre = array('0' => 'homme', '1' => 'femme');
    $forme = array('0' => 'Ronde');
    $mat = array('0' => 'Plastique');
    $couleur = NULL;
    $herv = NULL;
    $m = $lunettes->getArts($n, $genre, $forme, $mat, $couleur, $herv);

    var_dump($m);

    ?>
