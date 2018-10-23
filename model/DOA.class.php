<?php

    require_once("../model/Lunette.class.php");

    // Definition de l'unique objet de DAO
    $dao = new DAO();

    // Le Data Access Object
    // Il représente la base de donnée
    class DAO {
        // L'objet local PDO de la base de donnée
        private $db;
        // Le type, le chemin et le nom de la base de donnée
        private $database = 'sqlite:../data/lunette.db';

        // Constructeur chargé d'ouvrir la BD
        function __construct() {
            $database='sqlite:../data/lunette.db';
            try{
            $this->db = new PDO($database);
          }catch(PDOEXCEPTION $e){
              var_dump($e);
            }


        }


        // Accès à toutes les catégories
        // Retourne une table d'objets de type Categorie
        function getAllCat() {
            $sql="SELECT * FROM categorie";
            $music=$this->db->query($sql);
            $res=$music->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Categorie');
            return $res;
        }



        // Accès aux n premiers articles
        // Cette méthode retourne un tableau contenant les n permier articles de
        // la base sous la forme d'objets de la classe Article.
        function firstN($n) {
            $sql="SELECT * FROM article LIMIT $n";
            $music=$this->db->query($sql);
            $res=$music->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'article');
            return $res;



        }

        // Acces au n articles à partir de la reférence $ref
        // Cette méthode retourne un tableau contenant n  articles de
        // la base sous la forme d'objets de la classe Article.
        function getN($ref,$n) {

            $sql="SELECT * FROM article WHERE ref=$ref";
            $music=$this->db->query($sql);
            $res[]=$music->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'article');
            for ($i=1; $i <$n ; $i++) {

            $sql="SELECT * FROM article WHERE ref=$ref";
            $music=$this->db->query($sql);
            $res[]=$music->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'article');
            }
            return $res;


        }
        
    $article = new DAO();
    $m = $article->getN(67359894,5);
    ?>
