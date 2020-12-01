<?php
//ArticleDAOProcedural.php 

/* Le DAO de la table article de la BD weline_wp
 * @param PDO $pdo
 */
//Déclaration de la fonction SelectAll avec argument $pdo de type PDO pour la connexion

function selectAll(PDO $pdo): array{
    //renvoie un tableau ordinal de tableaux associatifs
    $list = array();
    try {
        $curseur = $pdo->query("SELECT * from article");
        $list = $curseur->fetchAll(PDO::FETCH_ASSOC);
     
    } catch (PDOException $ex) {
        $message = array("message" => $e->getMessage());
        $list[] = $Message();
        
    }
    return $list;
}
