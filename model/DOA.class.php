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

        // Acces à l'article suivant l'article dans l'ordre des références
        // Cette méthode ne rend qu'un objet de la classe Article
        function next(Article $a) {


        }

        // Acces aux n articles qui précèdent de $size l'article $a dans l'ordre des références
        function prevN(Article $a,$n) {


        }



        // Acces à une catégorie
        // Retourne un objet de la classe Categorie connaissant son identifiant
        function getCat($id) {

        }




        // Acces au n articles à partir de la reférence $ref de la catégorie indiquée
        // Retourne une table d'objets de la classe Article
        function getNCateg($ref,$n,$categorie) {


        }

//////////////////////////////////////////////////////////////
//Acces aux logins/mots de passes
//////////////////////////////////////////////////////////////

        function getMDP($login){
          $sql="SELECT motdp where login =$login";
        }

        function getLogins(){

        }

    }
    $article = new DAO();
    $m = $article->getN(67359894,5);
    ?>
