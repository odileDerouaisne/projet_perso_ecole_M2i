<?php

//PaysDAOTestPOO.php
//declare(strict_type =1);
/*
 * @param PDO $pdo
 * @param array 
 * @return int
 */
//chargement en mémoire du fichier Pays.php
require_once '../entities/Pays.php';
require_once '../daos/PaysDAOPOO.php';

try {
    /*
     * Connexion
     */
    //$pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=weline;", "root", "");
    $pdo = new PDO("mysql:host=mysql-weline.alwaysdata.net;port=3306;dbname=weline_wp;", "weline", "Nouvellevie58");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'UTF8'");

    /*
     * INSERT
     */
//    echo "<hr>INSERT<br>";
//    $o = new Pays("", "TES", "testInsertPays");
//    $dao = new PaysDAO($pdo);
//    $affected = $dao->insert($o);
//    echo $affected;
    /*
     * DELETE
     */
//    echo "<hr>DELETE<br>";
//    $pays = new Pays(243,"TES", "testInsertPays");
//    $dao = new PaysDAO($pdo);
//    $affected = $dao->delete($pays);
//    echo $affected;

    /*
     * UPDATE
     */
    echo "<hr>UPDATE<br>";
    $dao = new PaysDAO($pdo);
    $pays = new Pays(244,"TES", "testPays");
    $affected = $dao->update($pays);
    echo "Update ? $affected<br>";

/* SELECT ALL
 */
//$pays = "";
//echo "<hr>SELECT ALL<br>";
//$dao = new PaysDAO($pdo);
//$tPays = $dao->selectAll();
//foreach ($tPays as $pays) {
//    echo $pays->getIdPays() . ":" . $pays->getAlpha3() . ":" . $pays->getNomPays();
//}

/*
 * SELECT ONE
 */
echo "<hr>SELECT ONE<br>";
$dao = new PaysDAO($pdo);
$pays = $dao->selectOne(1);
//echo $pays->getIdPays() . ":" . $pays->getArticle();
echo $pays->getIdPays() . ":" . $pays->getAlpha3() . ":" . $pays->getNomPays();

} catch (PDOException $e) {
    echo $e->getMessage();
}

?>