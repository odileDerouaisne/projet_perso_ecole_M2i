<?php

/* 
 * VilleDAO.php
 */
//php 7
//declare (strict_type = 1);

//Chargement du fichier Ville.php
require_once '../entities/Ville.php';

/**
 * Description of VilleDAO
 * @author Oderouai
 */
//Déclaration de la classe
class VilleDAO {
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
     * @param Ville $ville
     */
    
   public function selectOne($ville): Ville {

       try {
           //Compilation (prepare)
            $lrs = $this->pdo->prepare("SELECT * FROM ville WHERE id_ville = ?");
            //Valorisation 
            $lrs->bindParam(1, $ville);
            //Execution de la requete
            $lrs->execute();
            
            $record = $lrs->fetch();
            if ($record != null) {
                $ville = new Ville($record[0], $record[1], $record[2]);
            } else {
                $pays = new Ville("0", "Introuvable");
            }
            $lrs->closeCursor();
        } catch (Exception $e) {
            $ville = new Ville("-1", $e->getMessage());
        }
        return $ville;
    }

    /**
     *
     * @return array
     */
    public function selectAll(): array {

      $tVille = array();
       
        try {
            // Les noms des colonnes doivent être identiques aux noms des attributs
           
            $lrs = $this->pdo->query("SELECT id_ville AS idVille, nom_ville AS nomVille, id_pays AS idPays, id_ville AS idVille FROM ville");
             //retourne une instance de la classe désirée        
            $tVille = $lrs->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "ville");
            // Fermeture du curseur
            $lrs->closeCursor();
        } catch (Exception $e) {
            $tVille = array();
            $tVille[] = new Ville("-1", $e->getMessage());
        }
        return $tVille;
    }
//    
    
    
    //Déclaration de la méthode INSERT : input : un objet ville, output : un INT
    /*
     * @param Article $ville
     * @return int
     */
    public function insert(Ville $ville): int {
        $affected = 0;

        try {
            //Compilation (prepare)
            $commadeSql = $this->pdo->prepare("INSERT INTO ville(cp_ville, nom_ville, id_pays, id_ville) VALUES(?,?,?,?)");
            //Valorisation des attributs
            $commadeSql->bindValue(1, $ville->getCpVille());
            $commadeSql->bindValue(2, $ville->getNomVille());
            $commadeSql->bindValue(3, $ville->getIdPays());
            $commadeSql->bindValue(4, $ville->getIdVille());
           
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
     * @param Produit $ville
     * @return int
     */
    public function delete(Ville $ville): int {
        $affected = 0;

        try {
            $commandeSql = $this->pdo->prepare("DELETE FROM ville WHERE cp_ville = ?");
            $commandeSql->bindValue(1, $ville->getCpVille());
            $commandeSql->execute();

            $affected = $commandeSql->rowCount();
        } catch (Exception $e) {
            $affected = -1;
        }


        return $affected;
    }
    
    public function update(Ville $ville): int {
        $affected = 0;
        try{
            $commandeSql=$this->pdo->prepare("UPDATE ville SET id_ville = ?,  nom_ville = ?, id_pays = ?, WHERE cp_ville = ?");
            $commandeSql->bindValue(1, $ville->getIdVille());
            $commandeSql->bindValue(2, $ville->getNomVille());
            $commandeSql->bindValue(3, $ville->getIdPays());
            $commandeSql->bindValue(4, $ville->getCpVille());
            
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

