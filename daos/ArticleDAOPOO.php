<?php
/*
 * ArticleDAOPOO.php
 */
//php 7
//declare (strict_type = 1);

//Chargement du fichier article.php
require_once '../entities/Article.php';

/**
 * Description of articleDAO
 * @author Oderouai
 */
//Déclaration de la classe
class ArticleDAO {
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
    
   public function selectOne($article): Article {

       try {
           //Compilation (prepare)
            $lrs = $this->pdo->prepare("SELECT * FROM article WHERE id_article = ?");
            //Valorisation 
            $lrs->bindParam(1, $article);
            //Execution de la requete
            $lrs->execute();
            
            $record = $lrs->fetch();
            if ($record != null) {
                $article = new Article($record[0], $record[1], $record[2], $record[3], $record[4], $record[5]);
            } else {
                $article = new Article("0", "Introuvable");
            }
            $lrs->closeCursor();
        } catch (Exception $e) {
            $article = new Article("-1", $e->getMessage());
        }
        return $article;
    }

    /**
     *
     * @return array
     */
    public function selectAll(): array {

      $tArticle = array();
       
        try {
            // Les noms des colonnes doivent être identiques aux noms des attributs
           
            $lrs = $this->pdo->query("SELECT id_article AS idArticle, designation_article AS designationArticle, prix_article AS prixArticle, photo_article AS photoArticle FROM article");
             //retourne une instance de la classe désirée        
            $tArticle = $lrs->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "article");
            // Fermeture du curseur
            $lrs->closeCursor();
        } catch (Exception $e) {
            $tArticle = array();
            $tArticle[] = new Article("-1", $e->getMessage());
        }
        return $tArticle;
    }
    
    
    
    //Déclaration de la méthode INSERT : input : un objet article, output : un INT
    /*
     * @param Article $article
     * @return int
     */
    public function insert(Article $article): int {
        $affected = 0;

        try {
            //Compilation (prepare)
            $cmd = $this->pdo->prepare("INSERT INTO article(id_article,designation_article,prix_article,photo_article,taille,id_categorie_article) VALUES(?,?,?,?,?,?)");
            //Valorisation des attributs
            $cmd->bindValue(1, $article->getIdArticle());
            $cmd->bindValue(2, $article->getDesignationArticle());
            $cmd->bindValue(3, $article->getPrixArticle());
            $cmd->bindValue(4, $article->getPhotoArticle());
            $cmd->bindValue(5, $article->getTaille());
            $cmd->bindValue(6, $article->getIdCategorieArticle());
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
     * @param Produit $article
     * @return int
     */
    public function delete(Article $article): int {
        $affected = 0;

        try {
            $cmd = $this->pdo->prepare("DELETE FROM article WHERE id_article = ?");
            $cmd->bindValue(1, $article->getIdArticle());
            $cmd->execute();

            $affected = $cmd->rowCount();
        } catch (Exception $e) {
            $affected = -1;
        }


        return $affected;
    }
    
    public function update(Article $article): int {
        $affected = 0;
        try{
            $cmd=$this->pdo->prepare("UPDATE article SET id_article = ?,  designation_article = ?, prix_article = ?, photo_produit=?; taille=?, id_categorie_article=? WHERE id_article = ?");
            $cmd->bindValue(1, $article->getIdArticle());
            $cmd->bindValue(2, $article->getDesignationArticle());
            $cmd->bindValue(3, $article->getPrixArticle());
            $cmd->bindValue(4, $article->getPhotoArticle());
            $cmd->bindValue(5, $article->getTaille());
            $cmd->bindValue(6, $article->getIdCategorieArticle());
            $cmd->bindValue(7, $article->getIdArticle());
            
            $cmd->execute();
            $affected = $cmd->rowCount();
            
        } catch (Exception $ex) {
            $affected = -1;
        }
        return $affected;
    }
}