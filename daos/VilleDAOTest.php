<?php

//VilleDAOTest.php
//declare(strict_type =1);
/*
 * @param PDO $pdo
 * @param array 
 * @return int
 */
//chargement en mémoire du fichier Ville.php
require_once '../entities/Ville.php';
require_once '../daos/VilleDAO.php';

try {
    /*
     * Connexion
     */
    $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=weline;", "root", "");
    //$pdo = new PDO("mysql:host=mysql-weline.alwaysdata.net;port=3306;dbname=weline_wp;", "weline", "Nouvellevie58");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'UTF8'");

    /*
     * INSERT ok local
     */
   echo "<hr>INSERT<br>";
   $o = new Ville("33140", "Villenave", 1,201);
   $dao = new VilleDAO($pdo);
   $affected = $dao->insert($o);
    echo $affected;
    
    /*
     * DELETE
     
    echo "<hr>DELETE<br>";
    $ville = new Ville(56600,"Lanester", 1,200);
    $dao = new VilleDAO($pdo);
    $affected = $dao->delete($ville);
    echo $affected;
*/
    /*
     * UPDATE
     */
    echo "<hr>UPDATE<br>";
    $dao = new VilleDAO($pdo);
    $ville = new Ville("33140","Villenave d'Ornon", 1, 201);
    $affected = $dao->update($ville);
    echo "Update ? $affected<br>";

/* SELECT ALL

$ville = "";
echo "<hr>SELECT ALL<br>";
$dao = new VilleDAO($pdo);
$tVille = $dao->selectAll();
foreach ($tVille as $ville) {
    echo $ville->getCpVille() . ":" . $ville->getNomVille() . ":" . $ville->getIdPays() . $ville->getIdVille() . "<br>";
}
 */
/*
 * SELECT ONE
 */
echo "<hr>SELECT ONE<br>";
$dao = new VilleDAO($pdo);
$ville = $dao->selectOne(200);
//echo $ville->getCpVille() . ":" . $ville->getNomVille();
echo $ville->getCpVille() . ":" . $ville->getNomVille() . ":" . $ville->getIdPays() . $ville->getIdVille();

} catch (PDOException $e) {
    echo $e->getMessage();
}

?>