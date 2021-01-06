<?php

//ArticleDAOTestPOO.php
//declare(strict_type =1);
/*
 * @param PDO $pdo
 * @param array 
 * @return int
 */
//chargement en mémoire du fichier article.php
require_once '../entities/Client.php';
require_once '../daos/ClientDAOPOO.php';

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
     
    echo "<hr>INSERT<br>";
    $o = new Client("", "client2"," client2", "adresse test2", "visiteur", "2", "test@gmail.com", "pwd123", "05 40 00 18 12");
    $dao = new ClientDAO($pdo);
    $affected = $dao->insert($o);
    echo $affected;
*/
    /*
     * DELETE
     
    echo "<hr>DELETE<br>";
    $client = new Client("10", "client2", "client2", "adresse test2", "0", "2", "test@gmail.com", "pwd123", "05 40 00 18 12");
    $dao = new ClientDAO($pdo);
   $affected = $dao->delete($client);
    echo $affected;
*/

    /*
     * UPDATE
     
    echo "<hr>UPDATE<br>";
    $dao = new ClientDAO($pdo);
    $client = new Client(11, "client2", "client2", "adresse modif", 0, 2, "test@gmail.com", "pwd123", "05 40 00 18 12");
    $affected = $dao->update($client);
    echo "Update ? $affected<br>";
*/
/* SELECT ALL
 */
    $client = "";
    echo "<hr>SELECT ALL<br>";
    $dao = new ClientDAO($pdo);
    $tClient = $dao->selectAll();
    foreach ($tClient as $client) {
        echo $client->getIdClient() . ":" . $client->getNomClient() . ":" . $client->getPrenomClient() . ":" . $client->getAdresseClient() . ":" . $client->getVisiteur() . ":" . $client->getIdVille() . ":" . $client->getEmailClient() . ":" . $client->getPwdClient() . ":" . $client->getTelephoneClient();
    }

    /*
 * SELECT ONE
 */
echo "<hr>SELECT ONE<br>";
$dao = new ClientDAO($pdo);
$client = $dao->selectOne(1);
//echo $art->getIdArticle() . ":" . $art->getArticle();
echo $client->getIdClient() . ":" . $client->getNomClient() . ":" . $client->getPrenomClient() . ":" . $client->getAdresseClient() . ":" . $client->getVisiteur() . ":" . $client->getIdVille() . ":" . $client->getEmailClient() . ":" . $client->getPwdClient() . ":" . $client->getTelephoneClient();
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>