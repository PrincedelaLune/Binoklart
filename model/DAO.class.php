<?php

    require_once("Lunette.class.php");


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

      function getPaire($n) {
          $sql="SELECT * FROM lunette WHERE numero=$n";
          $lunette=$this->db->query($sql);
          $res=$lunette->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Lunette');
          return $res[0];
      }

      function getArts($n, $genre, $forme, $mat, $couleur, $herv) {
      //n : nbarticles
      //genre : tableau avec 'homme' et/ou 'femme'
      //forme : tableau avec les formes selectionnées
      //mat : tableau avec les matieres selectionnées
      //couleur : tableau avec les couleurs selectionnées
      //herve : 0/1

        if ($genre!=NULL) {
          if($genre[1]!=NULL){
            $SQgenre = "(genre ='X' or genre ='M' or genre ='F')";
          }else{
            $SQgenre = "(genre ='X' or genre ='".($genre[0]=='femme')?'F':'M'."')";
          }
        }

        if($forme!=NULL){
          $SQforme = "(forme = '".$forme[0]."'";
          for ($i = 1; $i < sizeof($forme); $i++) {
            $SQforme .= " or forme = '".$forme[$i]."'";
          }
          $SQforme.=")";
        }

        if($mat!=NULL){
          $SQmat = "(materiau = '".$mat[0]."'";
          for ($i = 1; $i < sizeof($mat); $i++) {
            $SQmat .= " or materiau = '".$mat[$i]."'";
          }
          $SQmat.=")";
        }

        if($couleur!=NULL){
          $SQcouleur = "(couleur = '".$couleur[0]."'";
          for ($i = 1; $i < sizeof($couleur); $i++) {
            $SQcouleur .= " or couleur = '".$couleur[$i]."'";
          }
          $SQcouleur.=")";
        }

        if ($herv!=NULL)
          $SQherv = "( herve = true )";

        $sql="SELECT * FROM lunette";
        if ($SQmat!=NULL||$SQherv!=NULL||$SQforme!=NULL||$SQgenre!=NULL||$SQcouleur!=NULL){
          $sql.=" WHERE ";
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
        $sql.=" and numero<=$n LIMIT 9";
        var_dump($sql);
        $lunette=$this->db->query($sql);
        var_dump($lunette);
        $res=$lunette->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Lunette');
        return $res;
      }

      function getlogin(){
        $sql="SELECT * FROM login";
        $login=$this->db->query($sql);
        $res=$login->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'LoginAdmin');
        return $res[0];
      }

    function getAllLunettes(){
      $sql="SELECT * FROM lunette";
      $formes=$this->db->query($sql);
      $res=$formes->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Lunette');
      return $res;
    }

    function get(int $id){
      $sql="SELECT * FROM lunette WHERE id='$numero'";
      $lunette=$this->db->query($sql);
      $res=$lunette->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Lunette');
      return $res[0];
    }
    }
    ?>
