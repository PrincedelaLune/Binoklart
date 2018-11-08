<?php
    require_once('Lunette.class.php');
    require_once('DAO.class.php');


      // Creation de l'instace DAO
    $lunettes = new DAO();

    $n = 60;
    $genre = array('0' => 'homme', '1' => 'femme');
    $forme = array('0' => 'Ronde');
    $mat = array('0' => 'Plastique');
    $couleur = NULL;
    $herv = NULL;
    $m = $lunettes->getArts($n, $genre, $forme, $mat, $couleur, $herv);
    //var_dump($m);

    ?>
