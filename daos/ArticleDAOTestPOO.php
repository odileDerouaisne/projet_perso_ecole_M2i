<?php

//ArticleDAOTestPOO.php
//declare(strict_type =1);
/*
 * @param PDO $pdo
 * @param array 
 * @return int
 */
//chargement en mémoire du fichier article.php
require_once '../entities/Article.php';
require_once '../daos/ArticleDAOPOO.php';

try {
    /*
     * Connexion
     */
    //$pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=weline;", "root", "");
    $pdo = new PDO("mysql:host=mysql-weline.alwaysdata.net;port=3306;dbname=weline_wp;", "weline", "Nouvellevie58");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'UTF8'");





    /*
     * INSERT ok local & AD
     
    echo "<hr>INSERT<br>";
    $o = new Article("33", "testECF", 20, "testInsert.png", "38", "1");
    $dao = new ArticleDAO($pdo);
    $affected = $dao->insert($o);
    echo $affected;
*/
    /*
     * DELETE - ok local & AD
     
    echo "<hr>DELETE<br>";
    $article = new Article(31, "testDelete", 20, "testDelete.png", 38, "1");
    $dao = new ArticleDAO($pdo);
    $affected = $dao->delete($article);
    echo $affected;
*/

    /*
     * UPDATE
     */
    echo "<hr>UPDATE<br>";
    $dao = new ArticleDAO($pdo);
    $article = new Article(30, "testECF corrige", 20, "testInsert.png", "38", "1");
    $affected = $dao->update($article);
    echo "Update ? $affected<br>";

    /* 
     * SELECT ALL - ok local & AD
     */
    $art = "";
    echo "<hr><br>SELECT ALL<br>";
    $dao = new ArticleDAO($pdo);
    $tArticle = $dao->selectAll();
    foreach ($tArticle as $art) {
        echo $art->getIdArticle() . "<br>" . ":" . $art->getDesignationArticle() . ":" . $art->getPrixArticle() . ":" . $art->getPhotoArticle() . ":" . $art->getTaille() . ":" . $art->getIdCategorieArticle();
    }

    /*
     * SELECT ONE ok local & AD
     */
    echo "<hr>SELECT ONE<br>";
    $dao = new ArticleDAO($pdo);
    $art = $dao->selectOne(4);
    //echo $art->getIdArticle() . ":" . $art->getArticle();
    echo $art->getIdArticle() . ":" . $art->getDesignationArticle() . ":" . $art->getPrixArticle() . ":" . $art->getPhotoArticle() . ":" . $art->getTaille() . ":" . $art->getIdCategorieArticle();
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>