<?php

/**
 * Description of Connexion
 * @author Oderouai
 */
/**
 * Connexion.php : une bibliothèque
 * seConnecter() : PDO(à partir d'un fichier ini)
 */

class Connexion {

/**
 * @param type $psCheminParametresConnexion
 * @return null
 */
public function seConnecter($psCheminParametresConnexion) {
    //configuration de la connexion
    //$tProprietes = parse_ini_file($psCheminParametresConnexion);

    $lsProtocole = $tProprietes["mysql"];
    $lsServeur = $tProprietes["mysql-weline.alwaysdata.net"];
    $lsPort = $tProprietes["3306"];
    $lsUT = $tProprietes["weline_wp"];
    $lsMDP = $tProprietes["Nouvellevie58"];
    $lsBD = $tProprietes["weline"];
    
    
    
    /*
    $lsProtocole = $tProprietes["mysql"];
    $lsServeur = $tProprietes["localhost"];
    $lsPort = $tProprietes["3306"];
    $lsUT = $tProprietes["weline"];
    $lsMDP = $tProprietes["root"];
    $lsBD = $tProprietes[""];
*/
    /*
     * Connexion
     */
    $pdo = null;
    try {
        $pdo = new PDO("$lsProtocole:host=$lsServeur;port=$lsPort;dbname=$lsBD;", $lsUT, $lsMDP);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
        $pdo->exec("SET NAMES 'UTF8'");
    } catch (PDOException $ex) {
    }
    return $pdo;
}

/**
 *
 * @param PDO $pcnx
 */
public function seDeconnecter(PDO &$pcnx) {
    $pcnx = null;
}

}
?>