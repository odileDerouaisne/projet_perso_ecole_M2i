<?php
/*
 * ArticleDAOPOO.php
 */
//php 7
//declare (strict_type = 1);

//Chargement du fichier article.php
require_once '../entities/Pays.php';

/**
 * Description of articleDAO
 * @author Oderouai
 */
//Déclaration de la classe
class PaysDAO {
    //Déclaration d'un attribut
    private $pdo;

    /**
    * @param PDO $pdo
    */
    //Le constructeur qui a comme paramètre l'objet PDO
    function __construct(PDO $pdo) {
        //Affectation de la valeur du paramètre à l'attribut
        $this->pdo = $pdo;
    }

    /*
     * Déclaration de la méthode SELECTONE
     * @param Article $article
     */
    
   public function selectOne($pays): Pays {

       try {
           //Compilation (prepare)
            $lrs = $this->pdo->prepare("SELECT * FROM pays WHERE id_pays = ?");
            //Valorisation 
            $lrs->bindParam(1, $pays);
            //Execution de la requete
            $lrs->execute();
            
            $record = $lrs->fetch();
            if ($record != null) {
                $pays = new Pays($record[0], $record[1], $record[2]);
            } else {
                $pays = new Pays("0", "Introuvable");
            }
            $lrs->closeCursor();
        } catch (Exception $e) {
            $pays = new Pays("-1", $e->getMessage());
        }
        return $pays;
    }

    /**
     *
     * @return array
     */
    public function selectAll(): array {

      $tPays = array();
       
        try {
            // Les noms des colonnes doivent être identiques aux noms des attributs
           
            $lrs = $this->pdo->query("SELECT id_pays AS idPays, alpha3 AS alpha3, nom_pays AS nomPays, FROM pays");
             //retourne une instance de la classe désirée        
            $tPays = $lrs->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "pays");
            // Fermeture du curseur
            $lrs->closeCursor();
        } catch (Exception $e) {
            $tPays = array();
            $tPays[] = new Pays("-1", $e->getMessage());
        }
        return $tPays;
    }
//    
    
    
    //Déclaration de la méthode INSERT : input : un objet article, output : un INT
    /*
     * @param Article $article
     * @return int
     */
    public function insert(Pays $pays): int {
        $affected = 0;

        try {
            //Compilation (prepare)
            $commadeSql = $this->pdo->prepare("INSERT INTO pays(id_pays,alpha3, nom_pays) VALUES(?,?,?)");
            //Valorisation des attributs
            $commadeSql->bindValue(1, $pays->getIdPays());
            $commadeSql->bindValue(2, $pays->getAlpha3());
            $commadeSql->bindValue(3, $pays->getNomPays());
           
            //Execution de la requête
            $commadeSql->execute();
            
            //<nombre de lignes affectées
            $affected = $commadeSql->rowCount();
            //Si erreur on passe dans le catch
        } catch (Exception $e) {
            $affected = -1;
        }

        //Retour de la méthode (outpout)
        return $affected;
    }
    
    /**
     * 
     * @param Produit $article
     * @return int
     */
    public function delete(Pays $pays): int {
        $affected = 0;

        try {
            $commandeSql = $this->pdo->prepare("DELETE FROM pays WHERE id_pays = ?");
            $commandeSql->bindValue(1, $pays->getIdPays());
            $commandeSql->execute();

            $affected = $commandeSql->rowCount();
        } catch (Exception $e) {
            $affected = -1;
        }


        return $affected;
    }
    
    public function update(Pays $pays): int {
        $affected = 0;
        try{
            $commandeSql=$this->pdo->prepare("UPDATE pays SET id_pays = ?,  alpha3 = ?, nom_pays = ?, WHERE id_pays = ?");
            $commandeSql->bindValue(1, $pays->getIdPays());
            $commandeSql->bindValue(2, $pays->getAlpha3());
            $commandeSql->bindValue(3, $pays->getNomPays());
            $commandeSql->bindValue(4, $pays->getIdPays());
            
            $commandeSql->execute();
            $affected = $commandeSql->rowCount();
            echo "<hr> zzz $Affected<hr>";
        } catch (Exception $ex) {
            echo "<hr>catch<hr>";
            echo $ex->getMessage();
            $affected = -1;
        }
        return $affected;
    }
}