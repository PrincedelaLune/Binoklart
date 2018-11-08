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

      function firstN($n) {
          $sql="SELECT * FROM lunette LIMIT $n";
          $lunette=$this->db->query($sql);
          $res=$lunette->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Lunette');
          return $res;
      }

      function getN($ref,$n) {

          $sql="SELECT * FROM lunette WHERE ref=$ref";
          $lunette=$this->db->query($sql);
          $res[]=$lunette->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Lunette');// ???
          for ($i=1; $i <$n ; $i++) {
          $sql="SELECT * FROM lunette WHERE ref=$ref";
          $lunette=$this->db->query($sql);
          $res[]=$lunette->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Lunette');
          }
          return $res;
      }

      function getArts($n, $genre, $forme, $mat, $couleur, $herv) {
      //n : nbarticles
      //genre : tableau avec 'homme' et/ou 'femme'
      //forme : tableau avec les formes selectionnées
      //mat : tableau avec les matieres selectionnées
      //couleur : tableau avec les couleurs selectionnées
      //herve : oui/non
        /*if (isset($genre[0]) && isset($genre[1])){
          if ($genre[0]=='femme'&&$genre[1]=='homme'||$genre[1]=='femme'&&$genre[0]=='homme')
            $SQgenre = "(genre = 'X' or genre = 'M' or genre='F')";

        }else*/
        if (isset($genre[0]) && !isset($genre[1])) {
          $SQgenre = ($genre[0]=='femme')?"genre = 'F' or genre = 'X'":($genre[0]=='homme')?"genre = 'M' or genre = 'X'":"genre = 'X'";
        }

        if(isset($forme)){
          $SQforme = "forme = '".$forme[0]
          for (i = 1; i < sizeof($forme); i++) {
            $SQforme .= " or forme = '".$forme[i]."'";
          }
        }

        if(isset($mat)){
          $SQmat = "meteriau = '".$mat[0]
          for (i = 1; i < sizeof($mat); i++) {
            $SQmat .= " or materiau = '".$mat[i]."'";
          }
        }

        if(isset($couleur)){
          $SQcouleur = "couleur = '".$couleur[0]
          for (i = 1; i < sizeof($couleur); i++) {
            $SQcouleur .= " or couleur = '".$couleur[i]."'";
          }
        }

        if (isset($herv))
          $SQherv = "herve = true";

        $sql="SELECT * FROM lunette LIMIT $n"
        if (isset($SQmat)||isset($SQherv)||isset($SQforme)||isset($SQgenre)||isset($SQcouleur)){
          $sql.=" where ";
          $b = false;//conditions multiples ?
          if (isset($SQmat)) {
            $sql.=$SQmat;
            $b=true;
          }
          if (isset($SQherv)) {
            $sql.=($b)?" and ".$SQherv:$SQherv;
            $b = true;
          }
          if (isset($SQforme)) {
            $sql.=($b)?" and ".$SQforme:$SQforme;
            $b = true;
          }
          if (isset($SQgenre)) {
            $sql.=($b)?" and ".$SQgenre:$SQgenre;
            $b = true;
          }
          if (isset($SQcouleur)) {
            $sql.=($b)?" and ".$SQcouleur:$SQcouleur;
            $b = true;
          }
        }
        $lunette=$this->db->query($sql);
        $res=$lunette->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Lunette');
        return $res;
      }

    }
    ?>
