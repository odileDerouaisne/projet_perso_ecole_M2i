<?php

//articleTest.php
//chargement en mémoire du fichier article.php
//require_once '../entities/Article.php';
require_once '../daos/ArticleDAOProcedural.php';

/*
 * @param PDO $pdo
 * @param array 
 * @return int
 */
try {
    /*
     * Tentative de Connexion
     */
    $pdo = new PDO("mysql:host=localhost;dbname=weline;", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Pour éviter la validation automatique des ordre insert et delete (sécurité)
    $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
    $pdo->exec("SET NAMES 'UTF8'");

    /*
    * SELECT ALL
    */
echo "<hr>SELECTALL<br>";
$lsContenu = "";
$tLines = selectAll($lcnx);

foreach ($tLines as $line) {
    foreach($line as $field => $value){
        $lsContenu .= $value . ";";
    }
    $lsContenu .= "\n";
}
  echo n12br($lsContenu) . "<br>";
  var_dump($tLines)."<br>";
          

    /*
     * INSERT
     */
//    echo "<hr>INSERT<br>";
//$o = new Articles("", "testECF", 40, "test.png", "38", "1");
//$dao = new articlesDAO($pdo);
//$affected = $dao->insert($o);
//echo $affected;

    /*
     * SELECT ONE
     */
//echo "<hr>SELECT ONE<br>";
//$dao = new ArticleDAO($pdo);
//$art = $dao->selectOne(1);
//echo $art->getId_article() . ":" . $art->getdesignation_article() . ":" . $art->getprix_article() . ":" . $art->getphoto_article() . ":" . $art->get_taille() . ":" . $art->get_id_categorie_article();
//
//
//} catch (PDOException $e) {
//    echo $e->getMessage();
//}
//echo $tableau;
} catch (PDOException $e) {
    $lsMessage = $e->getMessage();
}
?>