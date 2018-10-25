<?php

    require_once("Lunette.class.php");
    require_once("Forme.class.php");

    // Definition de l'unique objet de DAO
    $dao = new DAO();

    // Le Data Access Object
    // Il représente la base de donnée
    class DAO {
        // L'objet local PDO de la base de donnée
        private $db;
        // Le type, le chemin et le nom de la base de donnée
        private $database = 'sqlite:../model/data/lunette.db';

        // Constructeur chargé d'ouvrir la BD
        function __construct() {
            $database='sqlite:../model/data/lunette.db';
            try{
            $this->db = new PDO($database);
          }catch(PDOEXCEPTION $e){
              var_dump($e);
          }
        }

        function getAllForme() {
            $sql="SELECT * FROM forme";
            $formes=$this->db->query($sql);
            $res=$formes->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Forme');
            return $res;
        }
      }


    ?>
