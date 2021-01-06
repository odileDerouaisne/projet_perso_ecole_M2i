<?php
/*
 * ClientDAOPOO.php
 */
//php 7
//declare (strict_type = 1);

//Chargement du fichier Client.php
require_once '../entities/Client.php';

/**
 * Description of articleDAO
 * @author Oderouai
 */
//Déclaration de la classe
class ClientDAO {
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
    
   public function selectOne($client): Client {

       try {
           //Compilation (prepare)
            $lrs = $this->pdo->prepare("SELECT * FROM client WHERE id_client = ?");
            //Valorisation 
            $lrs->bindParam(1, $client);
            //Execution de la requete
            $lrs->execute();
            
            $record = $lrs->fetch();
            if ($record != null) {
                $client = new Client($record[0], $record[1], $record[2], $record[3], $record[4], $record[5],$record[6],$record[7],$record[8],$record[9]);
            } else {
                $client = new Client("0", "Introuvable");
            }
            $lrs->closeCursor();
        } catch (Exception $e) {
            $client = new Client("-1", $e->getMessage());
        }
        return $client;
    }

    /**
     *
     * @return array
     */
    public function selectAll(): array {

      $tClient = array();
       
        try {
            // Les noms des colonnes doivent être identiques aux noms des attributs
           
            $lrs = $this->pdo->query("SELECT id_client AS idClient, nom_client AS nomClient, prenom_client AS prenomClient, adresse_client AS adresseClient, visiteur AS visiteur, id_ville AS idVille, email_client AS emailClient, pwd_client AS pwdClient, telephone_client AS telephoneClient FROM client");
             //retourne une instance de la classe désirée        
            $tClient = $lrs->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "client");
            // Fermeture du curseur
            $lrs->closeCursor();
        } catch (Exception $e) {
            $tClient = array();
            $tClient[] = new Client("-1", $e->getMessage());
        }
        return $tClient;
    }
//    
//    
    
    //Déclaration de la méthode INSERT : input : un objet article, output : un INT
    /*
     * @param Article $article
     * @return int
     */
    public function insert(Client $client): int {
        $affected = 0;

        try {
            //Compilation (prepare)
            $cmd = $this->pdo->prepare("INSERT INTO client(id_client,nom_client,prenom_client,adresse_client,visiteur,id_ville, email_client, pwd_client, telephone_client) VALUES(?,?,?,?,?,?,?,?,?)");
            //Valorisation des attributs
            $cmd->bindValue(1, $client->getIdClient());
            $cmd->bindValue(2, $client->getNomClient());
            $cmd->bindValue(3, $client->getPrenomClient());
            $cmd->bindValue(4, $client->getAdresseClient());
            $cmd->bindValue(5, $client->getVisiteur());
            $cmd->bindValue(6, $client->getIdVille());
            $cmd->bindValue(7, $client->getEmailClient());
            $cmd->bindValue(8, $client->getPwdClient());
            $cmd->bindValue(9, $client->getTelephoneClient());
            //Execution de la requête
            $cmd->execute();
            
            //<nombre de lignes affectées
            $affected = $cmd->rowCount();
            //Si erreur on passe dans le catch
        } catch (Exception $e) {
            $affected = -1;
        }

        //Retour de la méthode (outpout)
        return $affected;
    }
    
    /**
     * 
     * @param Produit $client
     * @return int
     */
//    public function delete(Client $client): int {
//        $affected = 0;
//
//        try {
//            $cmd = $this->pdo->prepare("DELETE FROM client WHERE id_client = ?");
//            $cmd->bindValue(1, $client->getIdClient());
//            $cmd->execute();
//
//            $affected = $cmd->rowCount();
//        } catch (Exception $e) {
//            $affected = -1;
//        }
//
//
//        return $affected;
//    }
//    
    public function update(Client $client): int {
        $affected = 0;
        try{
            $cmd=$this->pdo->prepare("UPDATE client SET id_client = ?,  nom_client = ?, prenom_client = ?, adresse_client=?; visiteur=?, id_ville=?, email_client=?, pwd_client=?, telephone_client=? WHERE id_client = ?");
            $cmd->bindValue(1, $client->getIdClient());
            $cmd->bindValue(2, $client->getNomClient());
            $cmd->bindValue(3, $client->getPrenomClient());
            $cmd->bindValue(4, $client->getAdresseClient());
            $cmd->bindValue(5, $client->getVisiteur());
            $cmd->bindValue(6, $client->getIdVille());
            $cmd->bindValue(7, $client->getEmailClient());
            $cmd->bindValue(8, $client->getPwdClient());
            $cmd->bindValue(9, $client->getTelephoneClient());
            $cmd->bindValue(10, $client->getIdClient());
            
            $cmd->execute();
            $affected = $cmd->rowCount();
            
        } catch (Exception $ex) {
            $affected = -1;
        }
        return $affected;
    }
}