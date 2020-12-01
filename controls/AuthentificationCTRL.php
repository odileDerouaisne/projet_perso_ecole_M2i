<?php

/* 
 *AuthentificationCTRL.php
 * 
 */
require_once '../daos/Connexion.php';

$message ="";
$email = "";
$pwd = "";

try{
    //---CONNEXION
    $connexion = new PDO('mysql:host=localhost; dbname=weline', 'root', '');
    $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->exec("SET NAMES 'UTF8'");
    
    // Récup email du formulaire et donc des paramètres de requêtes
    $emailClient = filter_input(INPUT_GET, "emailClient");
    $pwdClient = filter_input(INPUT_GET, "pwdClient");
    // Déclaration d'une variable et affectation d'un ordre SQL
    $sql = 'SELECT * FROM client WHERE email_client = ? AND pwd_client = ?';
    // Compile ...
    $lrs = $pdo->prepare($sql);
    // Liaison (donc affectation) entre le param 1 et la variable, passage ByRef
    $lrs->bindParam(1, $emailClient);
    // Liaison (donc affectation) entre le param 2 et la variable, passage ByVal
     $lrs->bindValue(2, $pwdClient);
    // On exécute la requête et le résultat est dans 1ResultSet donc1tableau 1D
    $lrs->execute();
    // Récup un enr ou aucun
    $record = $lrs->fetch();
    // Si pas d'enr
    if ($record === false) {
        // Suppression de la variable message
        unset($message);
        $errorMessage = "-1";
        // Création ou modification d'une variable de session
        $_SESSION['authentifieOK'] = "0";
        $_SESSION['idClient'] = "0";
    } else {
        $message = "1";
        unset($errorMessage);
        $_SESSION['authentifieOK'] = "1";
        $_SESSION['idClient'] = $record["id_client"];
    }   
}catch (Exception $ex) {
$errorMessage = "Echec de l'exécution de l'authentification : " . $e->getMessage();
}